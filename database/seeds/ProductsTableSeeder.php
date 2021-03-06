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
            'price' => '1',
            'description' => 'This Dress is amazing and suits your simple but yet trendy fashion taste',


        ])->categories()->attach(1);

        Product::create([
            'name' => 'Andrea',
            'slug' => 'Dress-Andrea',
            'details' => 'Available Sizes S, M, L',
            'price' => '1',
            'description' => 'This Dress is amazing and suits your simple but yet trendy fashion taste',


        ])->categories()->attach(1);

        Product::create([
            'name' => 'Brooklyn',
            'slug' => 'Dress-Brooklyn',
            'details' => 'Available Sizes S, M, L',
            'price' => '1',
            'description' => 'This Dress is amazing and suits your simple but yet trendy fashion taste',


        ])->categories()->attach(1);

        Product::create([
            'name' => 'Caroline',
            'slug' => 'Dress-Caroline',
            'details' => 'Available Sizes S, M, L',
            'price' => '1',
            'description' => 'This Dress is amazing and suits your simple but yet trendy fashion taste',


        ])->categories()->attach(1);

        Product::create([
            'name' => 'Claire',
            'slug' => 'Dress-Claire',
            'details' => 'Available Sizes S, M, L',
            'price' => '1',
            'description' => 'This Dress is amazing and suits your simple but yet trendy fashion taste',


        ])->categories()->attach(1);

        Product::create([
            'name' => 'Erin',
            'slug' => 'Dress-Erin',
            'details' => 'Available Sizes S, M, L',
            'price' => '1',
            'description' => 'This Dress is amazing and suits your simple but yet trendy fashion taste',


        ])->categories()->attach(1);

        Product::create([
            'name' => 'Katelyn',
            'slug' => 'Dress-Katelyn',
            'details' => 'Available Sizes S, M, L',
            'price' => '1',
            'description' => 'This Dress is amazing and suits your simple but yet trendy fashion taste',


        ])->categories()->attach(1);

        Product::create([
            'name' => 'Bella',
            'slug' => 'Pants-Bella',
            'details' => 'Available Sizes S, M, L',
            'price' => '1',
            'description' => 'This Pants is amazing and suits your simple but yet trendy fashion taste',


        ])->categories()->attach(2);

        Product::create([
            'name' => 'Daisy',
            'slug' => 'Pants-Daisy',
            'details' => 'Available Sizes S, M, L',
            'price' => '1',
            'description' => 'This Pants is amazing and suits your simple but yet trendy fashion taste',


        ])->categories()->attach(2);

        Product::create([
            'name' => 'Eva',
            'slug' => 'Pants-Lucy',
            'details' => 'Available Sizes S, M, L',
            'price' => '1',
            'description' => 'This Pants is amazing and suits your simple but yet trendy fashion taste',


        ])->categories()->attach(2);

        Product::create([
            'name' => 'Scarlett',
            'slug' => 'Pants-Scarlett',
            'details' => 'Available Sizes S, M, L',
            'price' => '1',
            'description' => 'This Pants is amazing and suits your simple but yet trendy fashion taste',


        ])->categories()->attach(2);

        Product::create([
            'name' => 'Stephanie',
            'slug' => 'Dress-Stephanie',
            'details' => 'Available Sizes S, M, L',
            'price' => '1',
            'description' => 'This Dress is amazing and suits your simple but yet trendy fashion taste',


        ])->categories()->attach(1);

        Product::create([
            'name' => 'Abby',
            'slug' => 'Shorts-Abby',
            'details' => 'Available Sizes S, M, L',
            'price' => '1',
            'description' => 'This Dress is amazing and suits your simple but yet trendy fashion taste',


        ])->categories()->attach(3);

        Product::create([
            'name' => 'Britney',
            'slug' => 'Shorts-Britney',
            'details' => 'Available Sizes S, M, L',
            'price' => '1',
            'description' => 'This Dress is amazing and suits your simple but yet trendy fashion taste',


        ])->categories()->attach(3);

        Product::create([
            'name' => 'Chelsie',
            'slug' => 'Shorts-Chelsie',
            'details' => 'Available Sizes S, M, L',
            'price' => '1',
            'description' => 'This Dress is amazing and suits your simple but yet trendy fashion taste',


        ])->categories()->attach(3);

        Product::create([
            'name' => 'Jade',
            'slug' => 'Shorts-Jade',
            'details' => 'Available Sizes S, M, L',
            'price' => '1',
            'description' => 'This Dress is amazing and suits your simple but yet trendy fashion taste',


        ])->categories()->attach(3);

        Product::create([
            'name' => 'Abigail',
            'slug' => 'Tops-Abigail',
            'details' => 'Available Sizes S, M, L',
            'price' => '1',
            'description' => 'This Dress is amazing and suits your simple but yet trendy fashion taste',


        ])->categories()->attach(4);

        Product::create([
            'name' => 'Alexis',
            'slug' => 'Tops-Alexis',
            'details' => 'Available Sizes S, M, L',
            'price' => '1',
            'description' => 'This Dress is amazing and suits your simple but yet trendy fashion taste',


        ])->categories()->attach(4);

        Product::create([
            'name' => 'Brianna',
            'slug' => 'Tops-Brianna',
            'details' => 'Available Sizes S, M, L',
            'price' => '1',
            'description' => 'This Dress is amazing and suits your simple but yet trendy fashion taste',


        ])->categories()->attach(4);

        Product::create([
            'name' => 'Emily',
            'slug' => 'Tops-Emily',
            'details' => 'Available Sizes S, M, L',
            'price' => '1',
            'description' => 'This Dress is amazing and suits your simple but yet trendy fashion taste',


        ])->categories()->attach(4);
    }
}
