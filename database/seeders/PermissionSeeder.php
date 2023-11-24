<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class PermissionSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Permission::create([
            'name' => 'index-EtatCivil',
        ]);

        Permission::create([
            'name' => 'index-Permission',
        ]);

        Permission::create([
            'name' => 'addPermissionsAutomatically-Permission',
        ]);


        




        
    }
}
