<?php

namespace Tests\Unit;

use App\Models\TypeHandicap;
use Tests\TestCase;
use Mockery;

use App\Http\Controllers\TypeHandicapController;
use App\Http\Requests\CreateTypeHandicapRequest;
use App\Http\Requests\UpdateTypeHandicapRequest;
use App\Models\User;
use App\Repositories\TypeHandicapRepository;
use Illuminate\Foundation\Testing\DatabaseTruncation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Foundation\Testing\RefreshDatabase;

// use PHPUnit\Framework\TestCase;

class TypeHandicapTest extends TestCase
{
    use RefreshDatabase;

    private function insert_admin_roles_permission()
    {
        // Call the RoleSeeder
        Artisan::call('db:seed', ['--class' => 'RoleSeeder']);
        // Call the PermissionSeeder
        Artisan::call('db:seed', ['--class' => 'PermissionSeeder']);
        
        Artisan::call('db:seed', ['--class' => 'UserSeeder']);
    }

    public function test_login_as_admin(): void
    {
        $this->insert_admin_roles_permission();

        $user = [
            'email' => 'admin@gmail.com',
            'password' => 'admin', 
        ];

        // Assuming User model has an admin user with email 'admin@gmail.com'

        $response = $this->post(route('login'), $user);

        $response->assertStatus(302);
        // Check if the login redirects (status 302) or returns a success response (status 200)

        // Access the route you want to test after the user is logged in
        // $responseAfterLogin = $this->get('/typeHandicaps');

        // // Assert the status code or check specific content in the response
        // $responseAfterLogin->assertStatus(200);
        // dd($responseAfterLogin->content());
        // $responseAfterLogin->assertSee("Bienvenue dans l'application CNMH.");
    }

    public function test_index_TypeHandicap(): void
    {

        $this->test_login_as_admin();


        // Access the route you want to test after the user is logged in
        $responseAfterLogin = $this->get('/typeHandicaps');

        // Assert the status code or check specific content in the response
        $responseAfterLogin->assertStatus(200);
        dd($responseAfterLogin->content());

    }

    // public function test_create_typeHqnducqp_view(): void
    // {
    //     // Create a project for testing
    //     $TypeHandicap = TypeHandicap::factory()->create();

    //     // Simulate a request to the create method
    //     $response = $this->get(route('TypeHandicap.create'));

    //     // Assert that the response is successful
    //     $response->assertSuccessful();

    //     // Assert that the response view is 'task.create'
    //     $response->assertViewIs('TypeHandicap.create');

    //     // Assert that the view has the project variable
    //     $response->assertViewHas('TypeHandicap', $TypeHandicap);
    // }

    // public function test_store_task(): void
    // {
    //     // Create a project for testing
    //     $project = Project::factory()->create();

    //     // dd($project);

    //     // Simulate a request with necessary data
    //     $response = $this->post(route('task.store', ['project' => $project]), [
    //         'name' => 'Test Task',
    //         'description' => 'This is a test task.',
    //     ]);

    //     // Assert that the task was created in the database
    //     $this->assertDatabaseHas('tasks', [
    //         'name' => 'Test Task',
    //         'description' => 'This is a test task.',
    //         'project_id' => $project->id,
    //     ]);

    //      // Assert that the response redirects to the task index route with success message
    //     $response->assertRedirect(route('task.index', ['project' => $project]))
    //                 ->assertSessionHas('success', 'Tache créé avec succès');
    //     // $this->assertTrue(true);

    // }

    // public function test_edit_task_view(): void
    // {
    //     // Create a project and task for testing
    //     $project = Project::factory()->create();
    //     $task = Task::factory()->create(['project_id' => $project->id]);

    //     // Simulate a request to the edit method
    //     $response = $this->get(route('task.edit', ['project' => $project, 'task' => $task]));

    //     // Assert that the response is successful
    //     $response->assertSuccessful();

    //     // Assert that the response view is 'task.edit'
    //     $response->assertViewIs('task.edit');

    //     // Assert that the view has the task and project variables
    //     $response->assertViewHas('task', $task);
    //     $response->assertViewHas('project', $project);
    // }

    // public function test_update_task(): void
    // {
    //     // Create a project and task for testing
    //     $project = Project::factory()->create();
    //     $task = Task::factory()->create(['project_id' => $project->id]);

    //     // Simulate a request to the update method with necessary data
    //     $response = $this->put(route('task.update', ['project' => $project, 'task' => $task]), [
    //         'name' => 'Updated Task',
    //         'description' => 'This task has been updated.',
    //     ]);

    //     // Assert that the task was updated in the database with the expected data
    //     $this->assertDatabaseHas('tasks', [
    //         'id' => $task->id,
    //         'name' => 'Updated Task',
    //         'description' => 'This task has been updated.',
    //         'project_id' => $project->id,
    //     ]);

    //     // Assert that the response redirects to the task index route with success message
    //     $response->assertRedirect(route('task.index', ['project' => $project]))
    //                 ->assertSessionHas('success', 'Tache updated avec succès');
    // }

    // public function test_destroy_task(): void
    // {
    //     // Create a project and task for testing
    //     $project = Project::factory()->create();
    //     $task = Task::factory()->create(['project_id' => $project->id]);

    //     // Simulate a request to the destroy method
    //     $response = $this->delete(route('task.destroy', ['project' => $project, 'task' => $task]));

    //     // Assert that the task was deleted from the database
    //     $this->assertDatabaseMissing('tasks', ['id' => $task->id]);

    //     // Assert that the response redirects to the task index route with success message
    //     $response->assertRedirect(route('task.index', ['project' => $project]))
    //                 ->assertSessionHas('success', 'tache supprimé avec succès');
    // }

    // public function test_search_task(): void
    // {
    //     // Create a project and tasks for testing
    //     $project = Project::factory()->create();
    //     $tasks = Task::factory(5)->create(['project_id' => $project->id]);

    //     // Simulate an AJAX request to the searchTask method with a search query
    //     $response = $this->json('GET', route('search.task', ['project' => $project]), ['search' => 'Test Task']);

    //     // Assert that the response is successful
    //     $response->assertSuccessful();

    // }
}
