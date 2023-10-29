<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionController extends Controller
{
    public function createRole(){

        $superAdmin = User::find(1);
        $admin = User::find(2);
        $sales = User::find(3);
        $inventory = User::find(4);

        
        // $permission = Permission::create(['name' => 'update deposit']);
        
        // $sales->givePermissionTo($permission);
        // $admin->givePermissionTo($permission);
        
        // $permission = Permission::create(['name' => 'view customer']);

        // $sales->givePermissionTo($permission);
        // $admin->givePermissionTo($permission);

        $rolesOfUser1 = $superAdmin->getRoleNames();
        $rolesOfUser2 = $admin->getRoleNames();
        $rolesOfUser3 = $sales->getRoleNames();
        $rolesOfUser4 = $inventory->getRoleNames();

        $permissionsOfUser1 = $superAdmin->getAllPermissions();
        $permissionsOfUser2 = $admin->getAllPermissions();
        $permissionsOfUser3 = $sales->getAllPermissions();
        $permissionsOfUser4 = $inventory->getAllPermissions();

        dd([
            'user1' => [
                'roles' => $rolesOfUser1,
                'permissions' => $permissionsOfUser1->pluck('name')
            ],
            'user2' => [
                'roles' => $rolesOfUser2,
                'permissions' => $permissionsOfUser2->pluck('name')
            ],
            'sales'=> [
                'roles' => $rolesOfUser3,
                'permissions' => $permissionsOfUser3->pluck('name')
            ],
            'inventory'=> [
                'roles' => $rolesOfUser4,
                'permissions' => $permissionsOfUser4->pluck('name')
            ],
        ]);
    }
}
