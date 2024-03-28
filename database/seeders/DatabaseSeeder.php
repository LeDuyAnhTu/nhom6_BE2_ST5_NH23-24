<?php
namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // DB::table('food_category')->insert([
        //     ['category_id'=>"1", 'category_name'=>"Burger"],
        //     ['category_id'=>"2", 'category_name'=>"Pizza"],
        //     ['category_id'=>"3", 'category_name'=>"Drink"],
        //     ['category_id'=>"4", 'category_name'=>"Fries"]
        // ]);  
        // DB::table('food')->insert([
        //     ['food_id'=>"1", 'food_name'=>"Delicious Burger", 
        //     'category_id'=>"1", 'price'=>50000.0, 
        //     'description'=>"Tasty, delicious, and has me craving more on the first bite.” to “Juicy, mouthwatering, 
        //     tasty, and everything you’d ever want to savor.", 'image_url'=>"f2.png"],
        //     ['food_id'=>"2", 'food_name'=>"Tasty Burger", 
        //     'category_id'=>"1", 'price'=>69000.0, 
        //     'description'=>"Tasty Burger is a modern fast food burger restaurant with old school sensibilities.", 'image_url'=>"f7.png"],
        //     ['food_id'=>"3", 'food_name'=>"Burger whopper jr", 
        //     'category_id'=>"1", 'price'=>60000.0, 
        //     'description'=>"It's just like the legendary Whopper®, only smaller. Same great flame-grilled Aussie beef with ripe tomato, fresh lettuce, onion, pickles, mayo and 
        //     tomato sauce on a toasted sesame seed bun", 'image_url'=>"f8.png"],
        //     ['food_id'=>"4", 'food_name'=>"Charcoal crispy salmon burger", 
        //     'category_id'=>"1", 'price'=>50000.0, 
        //     'description'=>"Burger cá hồi giòn vỏ than tre", 'image_url'=>"b01.png"],
        //     ['food_id'=>"5", 'food_name'=>"Spicy tendercrisp burger", 
        //     'category_id'=>"1", 'price'=>70000.0, 
        //     'description'=>"Burger gà giòn cay", 'image_url'=>"b02.jpg"]
        // ]);  
    }
}
