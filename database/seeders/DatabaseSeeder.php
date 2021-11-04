<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Role_User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Role::create([
            'name' => 'Anna',
        ]);

        Role::create([
            'name' => 'Reiner',
        ]);

        Role::create([
            'name' => 'Eren',
        ]);

        User::create([
            'name' => 'Action',
        ]);

        User::create([
            'name' => 'Romance',
        ]);

        User::create([
            'name' => 'Fantasy',
        ]);

        Role_User::create([
            'user_id' => 1,
            'role_id' => 2,
        ]);

        Role_User::create([
            'user_id' => 1,
            'role_id' => 3,
        ]);

        Role_User::create([
            'user_id' => 3,
            'role_id' => 3,
        ]);
    }
}
