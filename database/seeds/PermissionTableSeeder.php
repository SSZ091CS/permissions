<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Route;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$permissions = [
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'products.index',
            'product-create',
            'product-edit',
            'product-delete'
        ];*/

        $routeCollection = Route::getRoutes();
        foreach ($routeCollection as $value) {
            if ($value->getName()!=NULL){
                Permission::create(['name' => $value->getName()]);
            }

        }
        /*foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }*/
    }
}
