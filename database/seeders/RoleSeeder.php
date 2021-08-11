<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'ADMIN'
        ]);

        Role::create([
            'name' => 'MANAGER'
        ]);

        Role::create([
            'name' => 'VENDOR'
        ]);

        Role::create([
            'name' => 'CLIENT'
        ]);

        Role::create([
            'name' => 'STAFF'
        ]);
    }
}
