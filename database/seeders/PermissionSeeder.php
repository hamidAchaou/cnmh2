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
            'name' => 'create-PermissionController',
        ]);
        Permission::create([
            'name' => 'show-PermissionController',
        ]);
        Permission::create([
            'name' => 'edit-PermissionController',
        ]);
        Permission::create([
            'name' => 'update-PermissionController',
        ]);
        Permission::create([
            'name' => 'destroy-PermissionController',
        ]);

        // Admin adding Role permission

        Permission::create([
            'name' => 'index-RoleController',
        ]);
        Permission::create([
            'name' => 'create-RoleController',
        ]);
        Permission::create([
            'name' => 'store-RoleController',
        ]);
        Permission::create([
            'name' => 'show-RoleController',
        ]);
        Permission::create([
            'name' => 'edit-RoleController',
        ]);
        Permission::create([
            'name' => 'update-RoleController',
        ]);
        Permission::create([
            'name' => 'destroy-RoleController',
        ]);
        Permission::create([
            'name' => 'exporter-RoleController',
        ]);
        Permission::create([
            'name' => 'importer-RoleController',
        ]);

        // Admin , Adding Niveau Scolaire permission
        
        Permission::create([
            'name' => 'index-NiveauScolaireController'
        ]);
        Permission::create([
            'name' => 'show-NiveauScolaireController'
        ]);
        Permission::create([
            'name' => 'create-NiveauScolaireController'
        ]);
        Permission::create([
            'name' => 'edit-NiveauScolaireController'
        ]);
        Permission::create([
            'name' => 'update-NiveauScolaireController'
        ]);
        Permission::create([
            'name' => 'destroy-NiveauScolaireController'
        ]);
        Permission::create([
            'name' => 'exporter-NiveauScolaireController'
        ]);
        Permission::create([
            'name' => 'importer-NiveauScolaireController'
        ]);

        // Adding employes crud permission

        Permission::create([
            'name' => 'index-EmployeController',
        ]);
        Permission::create([
            'name' => 'create-EmployeController',
        ]);
        Permission::create([
            'name' => 'show-EmployeController',
        ]);
        Permission::create([
            'name' => 'edit-EmployeController',
        ]);
        Permission::create([
            'name' => 'update-EmployeController',
        ]);
        Permission::create([
            'name' => 'destroy-EmployeController',
        ]);
        Permission::create([
            'name' => 'export-EmployeController',
        ]);
        Permission::create([
            'name' => 'import-EmployeController',
        ]);

         // Adding Couverture Médicale crud permission

         Permission::create([
            'name' => 'index-CouvertureMedicalController',
        ]);
        Permission::create([
            'name' => 'create-CouvertureMedicalController',
        ]);
        Permission::create([
            'name' => 'show-CouvertureMedicalController',
        ]);
        Permission::create([
            'name' => 'edit-CouvertureMedicalController',
        ]);
        Permission::create([
            'name' => 'update-CouvertureMedicalController',
        ]);
        Permission::create([
            'name' => 'destroy-CouvertureMedicalController',
        ]);
        Permission::create([
            'name' => 'export-CouvertureMedicalController',
        ]);
        Permission::create([
            'name' => 'import-CouvertureMedicalController',
        ]);

         // Adding Type Handicap crud permission

         Permission::create([
            'name' => 'index-TypeHandicapController',
        ]);
        Permission::create([
            'name' => 'create-TypeHandicapController',
        ]);
        Permission::create([
            'name' => 'show-TypeHandicapController',
        ]);
        Permission::create([
            'name' => 'edit-TypeHandicapController',
        ]);
        Permission::create([
            'name' => 'update-TypeHandicapController',
        ]);
        Permission::create([
            'name' => 'destroy-TypeHandicapController',
        ]);
        Permission::create([
            'name' => 'export-TypeHandicapController',
        ]);
        Permission::create([
            'name' => 'import-TypeHandicapController',
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
