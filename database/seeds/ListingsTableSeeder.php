<?php

use App\Listing;
use Illuminate\Database\Seeder;

class ListingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Listing::create([
            'name' => 'Jake & Co',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'email' => 'jakes@jakesandco.com',
            'phone' => '09012345678',
            'website' => 'jakeandco.com',
            'address' => 'Somewhere',
            'category_id' => '1'
        ]);
    }
}
