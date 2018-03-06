<?php

use Illuminate\Database\Seeder;
use App\Size;
class SizeTableSeeder extends Seeder
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
                'size_name'=>'S'
            ],
            [
                'size_name'=>'M'
            ],
            [
                'size_name'=>'L'
            ],
            [
                'size_name'=>'XL'
            ],
            [
                'size_name'=>'XXL'
            ],
            [
                'size_name'=>'3XL'
            ],
            [
                'size_name'=>'4XL'
            ],
            [
                'size_name'=>'5XL'
            ],
        ];
    }
}
