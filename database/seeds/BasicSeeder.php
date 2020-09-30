<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BasicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('basics')->insert([
            'name'          => 'Unborn',
            'address_main'  => 'Ynusabad, 23',
            'city'          => 'Tashkent',
            'country'       => 'Uzbekistan',
            'phone_main'    => '987 (98) 454-64-63',
            'email'         => 'unborn@gmail.com',
            'image'         => '/storage/2020/09/11/78432c73c307436169d3a3657f561a6a97caf1f1.png',
            'is_active'     => 1
        ]);
    }
}
