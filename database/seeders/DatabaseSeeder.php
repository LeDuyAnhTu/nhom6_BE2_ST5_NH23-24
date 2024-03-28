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
        DB::table('food_category')->insert([
            ['category_id'=>"1", 'category_name'=>"Burger"],
            ['category_id'=>"2", 'category_name'=>"Pizza"],
            ['category_id'=>"3", 'category_name'=>"Drink"],
            ['category_id'=>"4", 'category_name'=>"Fries"]
        ]);  
        DB::table('food')->insert([
            ['food_id'=>"1", 'food_name'=>"Delicious Burger", 
            'category_id'=>"1", 'price'=>50000.0, 
            'description'=>"Tasty, delicious, and has me craving more on the first bite.” to “Juicy, mouthwatering, 
            tasty, and everything you’d ever want to savor.", 'image_url'=>"f2.png"],
            ['food_id'=>"2", 'food_name'=>"Tasty Burger", 
            'category_id'=>"1", 'price'=>69000.0, 
            'description'=>"Tasty Burger is a modern fast food burger restaurant with old school sensibilities.", 'image_url'=>"f7.png"],
            ['food_id'=>"3", 'food_name'=>"Burger whopper jr", 
            'category_id'=>"1", 'price'=>60000.0, 
            'description'=>"It's just like the legendary Whopper®, only smaller. Same great flame-grilled Aussie beef with ripe tomato, fresh lettuce, onion, pickles, mayo and 
            tomato sauce on a toasted sesame seed bun", 'image_url'=>"f8.png"],
            ['food_id'=>"4", 'food_name'=>"Charcoal crispy salmon burger", 
            'category_id'=>"1", 'price'=>50000.0, 
            'description'=>"Burger cá hồi giòn vỏ than tre", 'image_url'=>"b01.png"],
            ['food_id'=>"5", 'food_name'=>"Spicy tendercrisp burger", 
            'category_id'=>"1", 'price'=>70000.0, 
            'description'=>"Burger gà giòn cay", 'image_url'=>"b02.jpg"]
        ]);  
        DB::table('customer')->insert([
            ['customer_name'=>"Dinh Hong Thai",
            'phonenumber'=>"0937656152",
            'address'=>"Ba Ria Vung Tau"],
            ['customer_name'=>"Ha Quoc Tinh",
            'phonenumber'=>"0912345661",
            'address'=>"Binh Dinh"],
            ['customer_name'=>"Le Duy Anh Tu",
            'phonenumber'=>"0945666673",
            'address'=>"Thanh Pho HCM"],
            ['customer_name'=>"Le Van Phuoc",
            'phonenumber'=>"0945464463",
            'address'=>"Ba Ria Vung Tau"],
            ['customer_name'=>"Tran Thi Hien",
            'phonenumber'=>"0937656233",
            'address'=>"Thanh Hoa"],
            ['customer_name'=>"Kinh Van Do",
            'phonenumber'=>"0934664789",
            'address'=>"Hue"],
            ['customer_name'=>"Nguyen Van Noi Bai",
            'phonenumber'=>"0456678878",
            'address'=>"Ha Noi"],
            ['customer_name'=>"Cao Ba Thang",
            'phonenumber'=>"0456678378",
            'address'=>"Ha Noi"],
            ['customer_name'=>"Nham Van Dung",
            'phonenumber'=>"0356678878",
            'address'=>"Dong Thap"],
            ['customer_name'=>"Ngoc Van Doi",
            'phonenumber'=>"0456797878",
            'address'=>"Dong Nai"],
            ['customer_name'=>"Ngo Xuan Thong",
            'phonenumber'=>"0797788891",
            'address'=>"Hai Phong"],
            ['customer_name'=>"Le Thi Xuan Nghi",
            'phonenumber'=>"0488999412",
            'address'=>"Ben Tre"],
            ['customer_name'=>"Le Thi Yen Linh",
            'phonenumber'=>"0456797873",
            'address'=>"Ca Mau"],
            ['customer_name'=>"Nhu Van Chien",
            'phonenumber'=>"0456797878",
            'address'=>"Khanh Hoa"]
        ]);
        DB::table('table')->insert([
            ['table_number'=>"01",
            'capacity'=>"5"],
            ['table_number'=>"02",
            'capacity'=>"7"],
            ['table_number'=>"03",
            'capacity'=>"4"],
            ['table_number'=>"04",
            'capacity'=>"12"],
            ['table_number'=>"05",
            'capacity'=>"9"],
            ['table_number'=>"06",
            'capacity'=>"5"],
            ['table_number'=>"07",
            'capacity'=>"6"],
            ['table_number'=>"08",
            'capacity'=>"12"],
            ['table_number'=>"09",
            'capacity'=>"5"],
            ['table_number'=>"10",
            'capacity'=>"5"],
            ['table_number'=>"11",
            'capacity'=>"6"],
            ['table_number'=>"12",
            'capacity'=>"7"],
            ['table_number'=>"13",
            'capacity'=>"1"],
            ['table_number'=>"14",
            'capacity'=>"10"],
            ['table_number'=>"15",
            'capacity'=>"1"],
        ]);
        DB::table('reservation')->insert([
            ['table_id'=>"1",
            'customer_id'=>"4",
            'reservation_date'=>now()],
            ['table_id'=>"3",
            'customer_id'=>"5",
            'reservation_date'=>now()],
            ['table_id'=>"2",
            'customer_id'=>"6",
            'reservation_date'=>now()],
            ['table_id'=>"6",
            'customer_id'=>"1",
            'reservation_date'=>now()],
            ['table_id'=>"5",
            'customer_id'=>"3",
            'reservation_date'=>now()],
            ['table_id'=>"9",
            'customer_id'=>"10",
            'reservation_date'=>now()],
            ['table_id'=>"7",
            'customer_id'=>"2",
            'reservation_date'=>now()],
            ['table_id'=>"4",
            'customer_id'=>"7",
            'reservation_date'=>now()],
            ['table_id'=>"10",
            'customer_id'=>"8",
            'reservation_date'=>now()],
            ['table_id'=>"8",
            'customer_id'=>"9",
            'reservation_date'=>now()],
            ['table_id'=>"11",
            'customer_id'=>"11",
            'reservation_date'=>now()],
            ['table_id'=>"12",
            'customer_id'=>"12",
            'reservation_date'=>now()],
            ['table_id'=>"13",
            'customer_id'=>"13",
            'reservation_date'=>now()],
            ['table_id'=>"14",
            'customer_id'=>"14",
            'reservation_date'=>now()],
            ['table_id'=>"15",
            'customer_id'=>"15",
            'reservation_date'=>now()],
        ]);
>>>>>>> 4a13005b9f3e9f30a55df1d55b793f54387f0045
    }
}
