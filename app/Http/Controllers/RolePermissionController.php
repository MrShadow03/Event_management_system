<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionController extends Controller
{
    public function createRole(){

        // $role = Role::create(['name' => 'inventory manager']);
        // $permissions = ['dispatch rentals', 'receive returns', 'view customers', 'update customers', 'update vat', 'view company profile', 'update company profile', 'update products'];
        $user = User::find(4);
        $role = Role::findByName("inventory_manager");

        $user->assignRole($role);
        // $permission = Permission::create(['name' => 'create rentals']);
        // give permissions to view customers, update customers, view company profile, update company profile, update products
        // revoke permission to update customers
        // $role->givePermissionTo(['dispatch rentals', 'accept returns']);
    }
}
