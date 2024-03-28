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
            ['category_name'=>"Burger"],
            ['category_name'=>"Pizza"],
            ['category_name'=>"Drink"],
            ['category_name'=>"Fries"]
        ]);  
        
        DB::table('food')->insert([
            // Bánh Burger {'category_id'=>"1"}
            ['food_name'=>"Delicious Burger", 
            'category_id'=>"1", 'price'=>50000.0, 
            'description'=>"Burger thịt nướng xà lách", 'image_url'=>"b03.png"],
            ['food_name'=>"Tasty Burger", 
            'category_id'=>"1", 'price'=>69000.0, 
            'description'=>"Burger gà chiên", 'image_url'=>"b04.png"],
            ['food_name'=>"Burger whopper jr", 
            'category_id'=>"1", 'price'=>60000.0, 
            'description'=>"Burger cá đuối áp chảo", 'image_url'=>"b05.png"],
            ['food_name'=>"Charcoal crispy salmon burger", 
            'category_id'=>"1", 'price'=>50000.0, 
            'description'=>"Burger cá hồi giòn vỏ than tre", 'image_url'=>"b01.png"],
            ['food_name'=>"Spicy tendercrisp burger", 
            'category_id'=>"1", 'price'=>70000.0, 
            'description'=>"Burger gà giòn cay", 'image_url'=>"b02.jpg"],
        
            // Bánh Pizza {'category_id'=>"2"}
            ['food_name'=>"Delicious Pizza", 
            'category_id'=>"2", 'price'=>215000.0, 
            'description'=>"PIZZA SINGAPORE CUA XỐT ỚT SINGAPORE - SINGAPORE CHILI CRAB", 'image_url'=>"p01.jpg"], 
            ['food_name'=>"Delicious Pizza Thanh Cua", 
            'category_id'=>"2", 'price'=>190000.0, 
            'description'=>"PIZZA SINGAPORE THANH CUA - SINGAPORE CRAB", 'image_url'=>"p02.png"],
            ['food_name'=>"Pizza Phô Mai Việt Quất", 
            'category_id'=>"2", 'price'=>200000.0, 
            'description'=>"PIZZA NỀM MẠI VỪA ĂN, PHÔ MAI BÉO NGẬY", 'image_url'=>"p03.png"],
        
            // Nước uống {'category_id'=>"3"}
            ['food_name'=>"Nước cam sành ép", 
            'category_id'=>"3", 'price'=>89000.0, 
            'description'=>"Cam tươi nguyên chất mát lạnh đến từng cú hút", 'image_url'=>"d01.png"],
            ['food_name'=>"Soda chanh bạc hà", 
            'category_id'=>"3", 'price'=>89000.0, 
            'description'=>"Sản phẩm là sự kết hợp giữa sự tươi mát của thịt quả thanh yên và vị ngọt thiên nhiên từ mật ong", 'image_url'=>"d02.jpg"],
        
            // Fries {'category_id'=>"4"}
            ['food_name'=>"Khoai tây chiên", 
            'category_id'=>"4", 'price'=>100000.0, 
            'description'=>" Vị ngon của khoai tây chiên đút lò không chỉ đến từ độ giòn và màu vàng sành điệu, mà còn từ hương vị đặc trưng của khoai tây cùng với một số gia vị và chất béo.", 'image_url'=>"k01.png"],
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
        DB::table('invoice')->insert([
            ['invoice_id'=>"1", 'table_id'=>"1", 'total_price'=>500000.0,
            'invoice_date'=>now()],
            ['invoice_id'=>"2", 'table_id'=>"2", 'total_price'=>400000.0,
            'invoice_date'=>now()],
            ['invoice_id'=>"3", 'table_id'=>"3", 'total_price'=>300000.0,
            'invoice_date'=>now()],
            ['invoice_id'=>"4", 'table_id'=>"4", 'total_price'=>700000.0,
            'invoice_date'=>now()],
            ['invoice_id'=>"5", 'table_id'=>"5", 'total_price'=>200000.0,
            'invoice_date'=>now()],
        ]);
        DB::table('invoice_detail')->insert([
            ['detail_id' => 1, 'invoice_id' => '1', 'food_id' => 1, 'quantity' => 2, 'price' => 100000],
            ['detail_id' => 2, 'invoice_id' => '2', 'food_id' => 2, 'quantity' => 1, 'price' => 69000],
            ['detail_id' => 3, 'invoice_id' => '3', 'food_id' => 3, 'quantity' => 2, 'price' => 120000],
            ['detail_id' => 4, 'invoice_id' => '4', 'food_id' => 4, 'quantity' => 2, 'price' => 100000],
            ['detail_id' => 5, 'invoice_id' => '5', 'food_id' => 2, 'quantity' => 1, 'price' => 69000],
        ]);
        
    }
}
