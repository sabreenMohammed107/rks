<?php

namespace Database\Seeders;

use App\Models\Product_type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = [
            'زراعية',
            'خضروات ومنتجات مصنعة',
            'أسمدة ومبيدات',



        ];
   // for update data commit olde and open new and udate admin user
            foreach ($status as $index=>$type) {


                Product_type::create(['id'=>$index+1,'product_type_ar' => $type]);


             }


    }
}
