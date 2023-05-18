<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class VendorUserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Vendor', 
            'email' => 'vendor@gmail.com',
            'phone' => '9812345678',
            'address' => 'Urlabari',
            'password' => bcrypt('vendor123')
        ]);

        $role = Role::create(['name' => 'Vendor']);

        $role->givePermissionTo([
            'product-list','product-create',
            'product-edit','product-delete'],
            ['productcategory-list',
            'productcategory-create',
            'productcategory-edit',
            'productcategory-delete']);

        $user->assignRole($role);
        
    }
}
