<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionController extends Controller
{
    public function createRole(){

        // $rolePermission = [
        //     'super admin' => [],
        //     'admin' => [
        //         'create customer',
        //         'update customer',
        //         'delete customer',
        //     ],
        //     'sales manager' => [
        //         'create product',
        //         'update product',
        //         'delete product',
        //         'create category',
        //         'update category',
        //         'delete category',
        //         'create order',
        //         'update order',
        //         'delete order',
        //     ],
        // ];

        // $roles = array_keys($rolePermission);
        // foreach($roles as $role){
        //     Role::create(['name' => $role]);
        // }
        // $permissions = array_values($rolePermission);
        // foreach($permissions as $permission){
        //     foreach($permission as $p){
        //         Permission::create(['name' => $p]);
        //     }
        // }

        // foreach ($rolePermission as $role => $permission) {
        //     $role = Role::findByName($role);
        //     $role->givePermissionTo($permission);
        // }

        // return 'success';
    }
}
