<?php

use Illuminate\Database\Seeder;
use App\Color;

class ColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $colors=
        [
            [
                'color_name'=>'red'
            ],
            [
                'color_name'=>'blue'
            ],
            [
                'color_name'=>'black'
            ],
            [
                'color_name'=>'white'
            ],
            [
                'color_name'=>'orange'
            ],
            [
                'color_name'=>'yellow'
            ],
            [
                'color_name'=>'green'
            ],
            [
                'color_name'=>'purple'
            ],
            [
                'color_name'=>'grey'
            ],
            [
                'color_name'=>'violet'
            ],
            [
                'color_name'=>'indigo'
            ],
            [
                'color_name'=>'pink'
            ]
        ];
        foreach ($colors as $key => $value) {
        	Color::create($value);
		}
    }

}
