<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Category::create([
            'category_id' => 1,
            'name' => 'Wrapper'
        ]);

        \App\Category::create([
            'category_id' => 1,
            'name' => 'Main'
        ]);

        \App\Category::create([
            'category_id' => 2,
            'name' => 'Sport'
        ]);

        \App\Category::create([
            'category_id' => 2,
            'name' => 'Taniec'
        ]);

        \App\Category::create([
            'category_id' => 2,
            'name' => 'Rekreacja'
        ]);

        \App\Category::create([
            'category_id' => 2,
            'name' => 'Fitness'
        ]);

        \App\Category::create([
            'category_id' => 2,
            'name' => 'Uroda'
        ]);

        \App\Category::create([
            'category_id' => 2,
            'name' => 'Edukacja'
        ]);

        \App\Category::create([
            'category_id' => 2,
            'name' => 'Muzyka'
        ]);
    }
}
