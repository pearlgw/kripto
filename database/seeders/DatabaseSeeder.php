<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'nim' => '222.1111.admin',
            'name' => '-',
            'password' => bcrypt('password'),
            'email' => '-',
            'phone_number' => '-',
            'alamat' => '-',
            'role' => 'admin'
        ]);

        User::create([
            'nim' => 'A11.2022.14636',
            'name' => 'Gayuh Widyanata',
            'password' => bcrypt('password'),
            'email' => 'gayuhnata1@gmail.com',
            'phone_number' => '089765433456',
            'alamat' => 'Ungaran'
        ]);

        User::create([
            'nim' => 'A11.2022.14637',
            'name' => 'Asep Kurniawan',
            'password' => bcrypt('password'),
            'email' => 'certaolfydau@gmail.com',
            'phone_number' => '089765433456',
            'alamat' => 'Ambarawa'
        ]);

        User::create([
            'nim' => 'A11.2022.14638',
            'name' => 'Ahmad Ramdani',
            'password' => bcrypt('password'),
            'email' => 'ahmad@gmail.com',
            'phone_number' => '089765433456',
            'alamat' => 'Bawen'
        ]);

        User::create([
            'nim' => 'A11.2022.14639',
            'name' => 'Subagio',
            'password' => bcrypt('password'),
            'email' => 'subagio@gmail.com',
            'phone_number' => '089765433456',
            'alamat' => 'Weleri'
        ]);

        User::create([
            'nim' => 'A11.2022.14640',
            'name' => 'Rizky',
            'password' => bcrypt('password'),
            'email' => 'rizky@gmail.com',
            'phone_number' => '089765433456',
            'alamat' => 'Semarang'
        ]);

        User::create([
            'nim' => 'A11.2022.14641',
            'name' => 'Yasin',
            'password' => bcrypt('password'),
            'email' => 'yasin@gmail.com',
            'phone_number' => '089765433456',
            'alamat' => 'Rembang'
        ]);
    }
}
