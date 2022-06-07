<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name'      => 'Suhairi Abdul Hamid',
            'email'     => 'suhairi81@gmail.com',
            'username'  => 'suhairi',
            'password'  => bcrypt('password'),
            'role'      => 'ROOT',
            'section'   => 'HQ',
            'nosmpp'    => '5367',
            'status'    => 'ACTIVE'
        ]);
    }
}
