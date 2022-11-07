<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    private $faker;

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //
        //     'email' => 'test@example.com',
        // ]);

        $this->call(AdminSeeder::class);
        $this->call(CategorySeeder::class);

        User::create([
            'first_name' => 'Agostino',
            'last_name'  => 'De Felice',
            'email'      => 'test@gmail.com',
            'password'   => 'asdasd',
        ]);
    }
}
