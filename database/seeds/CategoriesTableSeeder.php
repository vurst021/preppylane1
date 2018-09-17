<?php

use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       		$now = Carbon::now()->toDateTimeString();

       		Category::insert([
        	['name' => 'Dresses', 'slug' => 'Dress', 'created_at' => $now, 'updated_at' => $now],
        	['name' => 'Pants', 'slug' => 'Pants', 'created_at' => $now, 'updated_at' => $now],
        	['name' => 'Shorts', 'slug' => 'Shorts', 'created_at' => $now, 'updated_at' => $now],
        	['name' => 'Tops', 'slug' => 'Tops', 'created_at' => $now, 'updated_at' => $now],
 
        ]);
    }
}
