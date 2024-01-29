<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role as ModelsRole;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\Product::factory(10)->create();
        //\App\Models\User::factory(10)->create();
        $user_tech = User::create([
            'name' => 'Technician',
            'email' => 'technician@gmail.com',
            'phone' => '9822653243',
            'address' => 'Salakpur',
            'password' => bcrypt('gaslink')
        ]);
        User::create([
            'name' => 'Technician1',
            'email' => 'technician1@gmail.com',
            'phone' => '9822653244',
            'address' => 'Birtachowk',
            'password' => bcrypt('gaslink')
        ]);
        User::create([
            'name' => 'Technician2',
            'email' => 'technician2@gmail.com',
            'phone' => '9822653253',
            'address' => 'Biratnagar',
            'password' => bcrypt('gaslink')
        ]);
        User::create([
            'name' => 'Technician3',
            'email' => 'technician3@gmail.com',
            'phone' => '9822653223',
            'address' => 'Itahari',
            'password' => bcrypt('gaslink')
        ]);
        $tech = ModelsRole::create(['name' => 'Technician']);

        $per = Permission::create(
            ['name'=> 'technician-list']
        );

        $tech->syncPermissions($per);

        $user_tech->assignRole($tech);

    }
}
