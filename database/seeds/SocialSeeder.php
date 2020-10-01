<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('socials')->insert([
            'name'          => 'ВКонтакте',
            'url'           => 'https://vk.com/ivnvov',
            'icon'          => '/storage/2020/09/17/31a081cd8e2f8a25d63b47dee08641a2e9423a0d.png',
            'is_enabled'    => 1
        ]);
        DB::table('socials')->insert([
            'name'          => 'Telegram',
            'url'           => 'https://t.me/ivnvov',
            'icon'          => '/storage/2020/09/17/36f4bd58d06488cc57ac6aad73418991093e12f2.png',
            'is_enabled'    => 1
        ]);
        DB::table('socials')->insert([
            'name'          => 'Instagram',
            'url'           => 'https://www.instagram.com/ivn.vo/',
            'icon'          => '/storage/2020/09/17/49237b3e496ecbdb42fb386ac57e96bc1fc06f44.png',
            'is_enabled'    => 1
        ]);
        DB::table('socials')->insert([
            'name'          => 'YouTube',
            'url'           => 'https://www.youtube.com/channel/UC3MiuoYROv1zLhYZPDv2EDA',
            'icon'          => '/storage/2020/09/17/bb24dec34586ed3a21681a9cebf4c6ca16230dc5.png',
            'is_enabled'    => 1
        ]);
    }
}
