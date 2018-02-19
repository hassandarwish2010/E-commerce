<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories=
        [
            [
                'categ_name'=>'Tops'
            ],
            [
                'categ_name'=>'Underwear'
            ],
            [
                'categ_name'=>'Pants'
            ],
            [
                'categ_name'=>'Dresses'
            ],
            [
                'categ_name'=>'Skirts'
            ],
            [
                'categ_name'=>'Jackets & Coats'
            ],
            [
                'categ_name'=>'Shorts'
            ],
            [
                'categ_name'=>'Sleepwear'
            ],
            [
                'categ_name'=>' Jumpsuits, Rompers & Overalls'
            ],
            [
                'categ_name'=>'Costumes'
            ],
            [
                'categ_name'=>'Swimwear'
            ],
            [
                'categ_name'=>'Leggings'
            ],
            [
                'categ_name'=>'Jeans & Pants'
            ],
            [
                'categ_name'=>'Lingerie'
            ],
            [
                'categ_name'=>'Cardigans & Kimonos'
            ],
            [
                'categ_name'=>'Jackets & Coats'
            ],
            [
                'categ_name'=>'Shirts'
            ],
            [
                'categ_name'=>'Polos'
            ],
            [
                'categ_name'=>'T-shirts'
            ],
            [
                'categ_name'=>'Jackets, Coats & Hoodies'
            ]
        ];
        foreach ($categories as $key => $value) {
        	Category::create($value);
		}
    }
}
