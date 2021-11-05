<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Jenis;
use App\Models\Funiture;
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
        Jenis::create([
            'nama' => 'Meja',
        ]);

        Jenis::create([
            'nama' => 'Kursi',
        ]);

        Jenis::create([
            'nama' => 'Lemari',
        ]);

        Jenis::create([
            'nama' => 'Akuarium',
        ]);


        Funiture::create([
            'jenis_id' => 2,
            'nama' => 'kursi Hitam',
            'foto' => 'kursi-2.png',
            'body' => ''
        ]);
    }
};
