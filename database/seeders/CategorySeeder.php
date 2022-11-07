<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Bracciali',
            'slug'=> 'bracciali',
        ]);
        Category::create([
            'name' => 'Anelli',
            'slug'=> 'anelli',
        ]);
        Category::create([
            'name' => 'Collane',
            'slug'=> 'collane',
        ]);
        Category::create([
            'name' => 'Set',
            'slug'=> 'set',
        ]);

    }
}
