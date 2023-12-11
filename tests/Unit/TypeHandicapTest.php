<?php

namespace Tests\Unit;

use App\Models\TypeHandicap;
use Tests\TestCase;

use App\Http\Controllers\TypeHandicapController;
use App\Repositories\TypeHandicapRepository;
use App\Http\Requests\CreateTypeHandicapRequest;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Foundation\Testing\RefreshDatabase;

// use PHPUnit\Framework\TestCase;

class TypeHandicapTest extends TestCase
{
    use RefreshDatabase;

    // public function test_that_true_is_true(): void
    // {
    //     $typeHandicap = TypeHandicap::factory()->create();
    //     $this->assertTrue(true);

    // }


/**
 * Test to check if the Type Handicaps index can be displayed.
 */
public function test_can_display_type_handicaps_index()
{
    // Create a Type Handicap for testing
    $typeHandicap = TypeHandicap::factory()->create();

    // Mock the TypeHandicapRepository
    $typeHandicapRepository = $this->createMock(TypeHandicapRepository::class);
    
    // Create a new Request instance
    $request = Request::create('/your-endpoint', 'GET', ['query' => 'your-query']);

    // Instantiate the controller with the mocked repository
    $controller = new TypeHandicapController($typeHandicapRepository);
    
    // Call the index method and capture the response
    $response = $controller->index($request);

    // Assert that the response is an instance of View
    $this->assertInstanceOf(View::class, $response);
}


    public function test_create_task_view(): void
    {
        // Create a typeHandicaps for testing
        $typeHandicaps = TypeHandicap::factory()->create();

        // Simulate a request to the create method
        $response = $this->get(route('typeHandicaps.create'));

        // Assert that the response is successful
        $response->assertSuccessful();

        // Assert that the response view is 'typeHandicaps.create'
        $response->assertViewIs('typeHandicaps.create');

        // // Assert that the view has the type Handicaps variable
        $response->assertViewHas('typeHandicaps', $typeHandicaps);
    }


    public function test_store_method_creates_type_handicap_and_redirects()
    {
        $typeHandicaps = TypeHandicap::factory()->create();

        $typeHandicapRepositoryMock = $this->createMock(TypeHandicapRepository::class);
        $this->app->instance(TypeHandicapRepository::class, $typeHandicapRepositoryMock);

        $request = CreateTypeHandicapRequest::create('/typeHandicaps', 'POST', [
            'nom' => 'TSA V2',
            'description' => 'description type handicap 1',
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' =>  \Carbon\Carbon::now(),
        ]);

        // Assuming your repository's create method returns a TypeHandicap object
        $typeHandicapRepositoryMock->expects($this->once())
            ->method('create')
            ->willReturn(new TypeHandicap());

        $controller = new TypeHandicapController($typeHandicapRepositoryMock);
        $response = $controller->store($request);

        // Check if the response is a redirect
        $this->assertInstanceOf(Response::class, $response);
        $this->assertEquals(302, $response->getStatusCode());

        // Check if it redirects to the correct route
        $this->assertEquals(route('typeHandicaps.index'), $response->getTargetUrl());
    }



}
