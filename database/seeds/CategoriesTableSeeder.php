<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Accounting'
        ]);

        Category::create([
            'name' => 'Oil and Gas'
        ]);

        Category::create([
            'name' => 'Software Development'
        ]);

        Category::create([
            'name' => 'Agriculture'
        ]);
    }
}
