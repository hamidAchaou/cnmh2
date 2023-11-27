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
        // Admin EtaCivil Permission 

        Permission::create([
            'name' => 'index-EtatCivilController',
        ]);
        Permission::create([
            'name' => 'create-EtatCivilController',
        ]);
        Permission::create([
            'name' => 'edit-EtatCivilController',
        ]);
        Permission::create([
            'name' => 'show-EtatCivilController',
        ]);
        Permission::create([
            'name' => 'update-EtatCivilController',
        ]);
        Permission::create([
            'name' => 'destroy-EtatCivilController',
        ]);

        // Admin adding Permissions permission

        Permission::create([
            'name' => 'index-PermissionController',
        ]);

        Permission::create([
            'name' => 'index-RoleController',
        ]);

        Permission::create([
            'name' => 'addPermissionsAuto-PermissionController',
        ]);

        Permission::create([
            'name' => 'index-UserController',
        ]);
        Permission::create([
            'name' => 'showRolePermission-PermissionController',
        ]);
        Permission::create([
            'name' => 'assignRolePermission-PermissionController',
        ]);

        

       


        




        
    }
}
