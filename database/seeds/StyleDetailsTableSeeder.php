<?php

use Illuminate\Database\Seeder;
use App\StyleDetails;

class StyleDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $style_details=[
            [
                'style_details_type'=>'Length',
                'style_details_value'=>'Waist Length'
            ],
            [
                'style_details_type'=>'Length',
                'style_details_value'=>'Midi Length'
            ],
            [
                'style_details_type'=>'Length',
                'style_details_value'=>'Short'
            ],
            [
                'style_details_type'=>'Length',
                'style_details_value'=>'Maxi'
            ],
            [
                'style_details_type'=>'Length',
                'style_details_value'=>'Top'
            ],
            [
                'style_details_type'=>'Length',
                'style_details_value'=>'Knee Length '
            ],
            [
                'style_details_type'=>'Length',
                'style_details_value'=>' Mid Calf '
            ],
            [
                'style_details_type'=>'Neck Style',
                'style_details_value'=>'Round Neck'
            ],
            [
                'style_details_type'=>'Neck Style',
                'style_details_value'=>' Asymmetrical Neck'
            ],
            [
                'style_details_type'=>'Neck Style',
                'style_details_value'=>'Off Shoulder '
            ],
            [
                'style_details_type'=>'Neck Style',
                'style_details_value'=>'V Neck'
            ],
            [
                'style_details_type'=>'Neck Style',
                'style_details_value'=>'Sweetheart Neck'
            ],
            [
                'style_details_type'=>'Neck Style',
                'style_details_value'=>'Straight Neck'
            ],
            [
                'style_details_type'=>'Neck Style',
                'style_details_value'=>'Halter Neck'
            ],
            [
                'style_details_type'=>'Neck Style',
                'style_details_value'=>'Square Neck'
            ],
            [
                'style_details_type'=>'Neck Style',
                'style_details_value'=>' Cowl Neck '
            ],
            [
                'style_details_type'=>'Neck Style',
                'style_details_value'=>'  Shirt Neck '
            ],
            [
                'style_details_type'=>'Neck Style',
                'style_details_value'=>' High Neck '
            ],
            [
                'style_details_type'=>'Neck Style',
                'style_details_value'=>'  Mixed Neck '
            ],
            [
                'style_details_type'=>'Neck Style',
                'style_details_value'=>'  Round Split Neck '
            ],
            [
                'style_details_type'=>'Sleeve Length',
                'style_details_value'=>'  Full Sleeve '
            ],
            [
                'style_details_type'=>'Sleeve Length',
                'style_details_value'=>'  Short Sleeve '
            ],
            [
                'style_details_type'=>'Sleeve Length',
                'style_details_value'=>'  Three Quarter Sleeve '
            ],
            [
                'style_details_type'=>'Sleeve Length',
                'style_details_value'=>'  Single Sleeve '
            ],
            [
                'style_details_type'=>'Sleeve Length',
                'style_details_value'=>'  Sleeveless '
            ],
            [
                'style_details_type'=>'Occassion',
                'style_details_value'=>'  Casual '
            ],
            [
                'style_details_type'=>'Occassion',
                'style_details_value'=>'  Special Occasion '
            ],
            [
                'style_details_type'=>'Occassion',
                'style_details_value'=>'  Workwear '
            ],




        ];
        foreach($style_details as $key=>$style_details_value)
        {
            StyleDetails::create($style_details_value);
        }
    }
}
