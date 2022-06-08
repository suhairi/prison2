<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Setting;
use App\Models\Product;

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

        Setting::create([
            'bulan_tahun'   => date('mY'),
            'lock'          => 'NO',
        ]);

        User::create([
            'name'      => strtoupper('Suhairi Abdul Hamid'),
            'email'     => 'suhairi81@gmail.com',
            'username'  => 'suhairi',
            'password'  => bcrypt('password'),
            'role'      => 'ROOT',
            'section'   => 'HQ',
            'nosmpp'    => '5367',
            'status'    => 'ACTIVE'
        ]);

        User::create([
            'name'      => strtoupper('Mohd Najib bin Ruslah'),
            'username'  => 'najib',
            'nosmpp'    => '5369',
            'password'  => bcrypt('password1'),
            'role'      => 'ADMIN',
            'section'   => ' ',
            'status'    => 'ACTIVE',
        ]);

        User::create([
            'name'      => strtoupper('Mohd Rohman bin Mohd Nor'),
            'username'  => 'rohman',
            'nosmpp'    => '850924075661',
            'password'  => bcrypt('password1'),
            'role'      => 'ADMIN',
            'section'   => ' ',
            'status'    => 'ACTIVE',
        ]);

        User::create([
            'name'      => strtoupper('Shirley a/k Jungot'),
            'username'  => '740224135582',
            'nosmpp'    => '5582',
            'password'  => bcrypt('password1'),
            'role'      => 'HQ',
            'section'   => ' ',
            'status'    => 'ACTIVE',
        ]);

        User::create([
            'name'      => strtoupper('Noor Sazlawati Bt Zakaria'),
            'username'  => '731015055450',
            'nosmpp'    => '5450',
            'password'  => bcrypt('password1'),
            'role'      => 'HQ',
            'section'   => ' ',
            'status'    => 'ACTIVE',
        ]);

        $this->call([
            UserSeeder::class,
            ProductSeeder::class,
        ]);
    }
}
