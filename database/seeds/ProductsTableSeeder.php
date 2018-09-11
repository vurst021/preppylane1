<?php

use App\Product;
use Illuminate\Database\Seeder;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
        	'name' => 'Amanda',
        	'slug' => 'Dress-Amanda',
        	'details' => 'Available Sizes S, M, L',
        	'price' => '1999',
        	'description' => 'Available in any color',


        ]);

        Product::create([
        	'name' => 'Andrea',
        	'slug' => 'Dress-Andrea',
        	'details' => 'Available Sizes S, M, L',
        	'price' => '1999',
        	'description' => 'Available in any color',


        ]);

        Product::create([
        	'name' => 'Brooklyn',
        	'slug' => 'Dress-Brooklyn',
        	'details' => 'Available Sizes S, M, L',
        	'price' => '1999',
        	'description' => 'Available in any color',


        ]);

        Product::create([
        	'name' => 'Caroline',
        	'slug' => 'Dress-Caroline',
        	'details' => 'Available Sizes S, M, L',
        	'price' => '1999',
        	'description' => 'Available in any color',


        ]);


    }
}
