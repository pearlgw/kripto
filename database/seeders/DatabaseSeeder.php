<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Candidate;
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

        // mahasiswa
        User::create([
            'nim' => '222.1111.admin',
            'name' => 'admin',
            'password' => bcrypt('password'),
            'email' => '-',
            'phone_number' => '-',
            'alamat' => '-',
            'role' => 'admin'
        ]);

        // User::create([
        //     'nim' => 'A11.2022.14636',
        //     'name' => 'Gayuh Widyanata',
        //     'password' => bcrypt('password'),
        //     'email' => 'gayuhnata1@gmail.com',
        //     'phone_number' => '089765433456',
        //     'alamat' => 'Ungaran'
        // ]);

        // User::create([
        //     'nim' => 'A11.2022.14637',
        //     'name' => 'Asep Kurniawan',
        //     'password' => bcrypt('password'),
        //     'email' => 'certaolfydau@gmail.com',
        //     'phone_number' => '089765433456',
        //     'alamat' => 'Ambarawa'
        // ]);

        // User::create([
        //     'nim' => 'A11.2022.14638',
        //     'name' => 'Ahmad Ramdani',
        //     'password' => bcrypt('password'),
        //     'email' => '111202214636@mhs.dinus.ac.id',
        //     'phone_number' => '089765433456',
        //     'alamat' => 'Bawen'
        // ]);

        // User::create([
        //     'nim' => 'A11.2022.14639',
        //     'name' => 'Subagio',
        //     'password' => bcrypt('password'),
        //     'email' => 'subagio@gmail.com',
        //     'phone_number' => '089765433456',
        //     'alamat' => 'Weleri'
        // ]);

        // User::create([
        //     'nim' => 'A11.2022.14640',
        //     'name' => 'Rizky',
        //     'password' => bcrypt('password'),
        //     'email' => 'rizky@gmail.com',
        //     'phone_number' => '089765433456',
        //     'alamat' => 'Semarang'
        // ]);

        // User::create([
        //     'nim' => 'A11.2022.14641',
        //     'name' => 'Yasin',
        //     'password' => bcrypt('password'),
        //     'email' => 'yasin@gmail.com',
        //     'phone_number' => '089765433456',
        //     'alamat' => 'Rembang'
        // ]);

        // candidate
        // Candidate::create([
        //     'status' => 'Pasangan Calon 1',
        //     'user_id_ketua' => 7,
        //     'user_id_wakil' => 2,
        //     'visi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ducimus sunt, vel est non ipsam, nemo quod animi itaque ullam quaerat sint. Quasi dolorem eaque temporibus autem, soluta nemo sit?
        //     ',
        //     'misi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, aspernatur quos architecto nesciunt deleniti expedita libero provident repudiandae sed blanditiis natus saepe ipsum sequi odit dolore illo fugiat sapiente necessitatibus repellendus corrupti iusto, unde laboriosam veniam. Alias quibusdam aperiam, dolorem dignissimos omnis optio repellat odio commodi est nihil voluptates quam neque, quasi earum nesciunt labore ab. Tenetur voluptatibus atque ipsam porro necessitatibus, odit eos, libero accusamus similique accusantium, eum vitae?',
        //     'program_kerja' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla laudantium odit, praesentium tenetur dicta perferendis sequi. Impedit officia quaerat reiciendis libero tempore magni incidunt labore a voluptatem eligendi necessitatibus soluta eaque sapiente possimus, rem accusantium molestiae doloremque provident placeat voluptate error ad, consequuntur reprehenderit? Assumenda quo voluptate explicabo cumque sit quia libero nisi expedita placeat, aut ipsum illum qui ducimus quibusdam id natus sunt mollitia eos voluptatibus dolore aliquid! Sed atque soluta facilis ex nisi? Accusamus at nisi dignissimos! Sint.',
        //     'experience' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, optio. Tempore, qui dolor illum eos est excepturi nobis. Molestiae velit illum ab iusto tempore suscipit rerum, neque voluptates atque nulla perferendis possimus omnis odio ex incidunt debitis, tempora asperiores culpa cumque sed dolores totam! Dolorem quisquam, quod vero harum provident perspiciatis cumque dignissimos quo impedit molestias, aut, illum aliquam temporibus laudantium aperiam ipsum at odit error officia assumenda tempora animi voluptas. Nesciunt, beatae magnam iusto eaque excepturi voluptate ex. Esse sequi maxime voluptas consequuntur animi ad inventore consectetur nobis natus.
        //     ',
        // ]);

        // Candidate::create([
        //     'status' => 'Pasangan Calon 2',
        //     'user_id_ketua' => 3,
        //     'user_id_wakil' => 4,
        //     'visi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ducimus sunt, vel est non ipsam, nemo quod animi itaque ullam quaerat sint. Quasi dolorem eaque temporibus autem, soluta nemo sit?
        //     ',
        //     'misi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, aspernatur quos architecto nesciunt deleniti expedita libero provident repudiandae sed blanditiis natus saepe ipsum sequi odit dolore illo fugiat sapiente necessitatibus repellendus corrupti iusto, unde laboriosam veniam. Alias quibusdam aperiam, dolorem dignissimos omnis optio repellat odio commodi est nihil voluptates quam neque, quasi earum nesciunt labore ab. Tenetur voluptatibus atque ipsam porro necessitatibus, odit eos, libero accusamus similique accusantium, eum vitae?',
        //     'program_kerja' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla laudantium odit, praesentium tenetur dicta perferendis sequi. Impedit officia quaerat reiciendis libero tempore magni incidunt labore a voluptatem eligendi necessitatibus soluta eaque sapiente possimus, rem accusantium molestiae doloremque provident placeat voluptate error ad, consequuntur reprehenderit? Assumenda quo voluptate explicabo cumque sit quia libero nisi expedita placeat, aut ipsum illum qui ducimus quibusdam id natus sunt mollitia eos voluptatibus dolore aliquid! Sed atque soluta facilis ex nisi? Accusamus at nisi dignissimos! Sint.',
        //     'experience' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, optio. Tempore, qui dolor illum eos est excepturi nobis. Molestiae velit illum ab iusto tempore suscipit rerum, neque voluptates atque nulla perferendis possimus omnis odio ex incidunt debitis, tempora asperiores culpa cumque sed dolores totam! Dolorem quisquam, quod vero harum provident perspiciatis cumque dignissimos quo impedit molestias, aut, illum aliquam temporibus laudantium aperiam ipsum at odit error officia assumenda tempora animi voluptas. Nesciunt, beatae magnam iusto eaque excepturi voluptate ex. Esse sequi maxime voluptas consequuntur animi ad inventore consectetur nobis natus.
        //     ',
        // ]);

        // Candidate::create([
        //     'status' => 'Pasangan Calon 3',
        //     'user_id_ketua' => 5,
        //     'user_id_wakil' => 6,
        //     'visi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ducimus sunt, vel est non ipsam, nemo quod animi itaque ullam quaerat sint. Quasi dolorem eaque temporibus autem, soluta nemo sit?
        //     ',
        //     'misi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, aspernatur quos architecto nesciunt deleniti expedita libero provident repudiandae sed blanditiis natus saepe ipsum sequi odit dolore illo fugiat sapiente necessitatibus repellendus corrupti iusto, unde laboriosam veniam. Alias quibusdam aperiam, dolorem dignissimos omnis optio repellat odio commodi est nihil voluptates quam neque, quasi earum nesciunt labore ab. Tenetur voluptatibus atque ipsam porro necessitatibus, odit eos, libero accusamus similique accusantium, eum vitae?',
        //     'program_kerja' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla laudantium odit, praesentium tenetur dicta perferendis sequi. Impedit officia quaerat reiciendis libero tempore magni incidunt labore a voluptatem eligendi necessitatibus soluta eaque sapiente possimus, rem accusantium molestiae doloremque provident placeat voluptate error ad, consequuntur reprehenderit? Assumenda quo voluptate explicabo cumque sit quia libero nisi expedita placeat, aut ipsum illum qui ducimus quibusdam id natus sunt mollitia eos voluptatibus dolore aliquid! Sed atque soluta facilis ex nisi? Accusamus at nisi dignissimos! Sint.',
        //     'experience' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, optio. Tempore, qui dolor illum eos est excepturi nobis. Molestiae velit illum ab iusto tempore suscipit rerum, neque voluptates atque nulla perferendis possimus omnis odio ex incidunt debitis, tempora asperiores culpa cumque sed dolores totam! Dolorem quisquam, quod vero harum provident perspiciatis cumque dignissimos quo impedit molestias, aut, illum aliquam temporibus laudantium aperiam ipsum at odit error officia assumenda tempora animi voluptas. Nesciunt, beatae magnam iusto eaque excepturi voluptate ex. Esse sequi maxime voluptas consequuntur animi ad inventore consectetur nobis natus.
        //     ',
        // ]);
    }
}


