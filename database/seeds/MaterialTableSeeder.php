<?php

use Illuminate\Database\Seeder;
use App\Material;
class MaterialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $materials=[
        [
            'mater_name'=>'Cotton'
        ],
        [
            'mater_name'=>'Wool'
        ],
        [
            'mater_name'=>'Flax'
        ],
        [
            'mater_name'=>'Silk'
        ],
        [
            'mater_name'=>'Leather'
        ],
        [
            'mater_name'=>'Fur'
        ],
        [
            'mater_name'=>'Polysters'
        ],
         
        [
            'mater_name'=>'Rayon'
        ],
        [
            'mater_name'=>'Linen'
        ],
        [
            'mater_name'=>'Lycra'
        ],
        
        [
            'mater_name'=>'Jersey'
        ],
        [
            'mater_name'=>'Mixed Materials'
        ],
        [
            'mater_name'=>'Synthetic'
        ],
    ];

    foreach ($materials as $key => $value) {
        Material::create($value);
    }


    }
}
