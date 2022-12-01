<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert(
            [
            'name'=>'Google Pixel',
            'price'=>"85000",
            "categories"=>"flagship",
            "gallery"=>"https://www.androidauthority.com/wp-content/uploads/2021/10/Google-Pixel-6-Pro-angled-camera-closeup-on-gray-floor.jpg",
            "description"=>"best camera phone",
            
            
            

        ]);
    }
}
