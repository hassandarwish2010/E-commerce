<?php

use Illuminate\Database\Seeder;
use App\Group;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $groups=[
            [
                'group_name'=>'Men'
            ],
            [
                'group_name'=>'Woman'
            ],
            [
                'group_name'=>'Girls 6-12 Years'
            ],
            [
                'group_name'=>'Boys 6-12 Years'
            ],
            [
                'group_name'=>'Girls 0-3 Years'
            ],
            [
                'group_name'=>'Girls 3-6 Years'
            ],
            [
                'group_name'=>'Boys 0-3 Years'
            ],
            [
                'group_name'=>'Boys 3-6 Years'
            ]

        ];
       
        foreach ($groups as $key => $value) {
        	Group::create($value);
		}
    }
}
