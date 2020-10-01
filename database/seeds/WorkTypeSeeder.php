<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('work_types')->insert([
            'name'          => 'Логитипы',
            'description'   => 'Далеко-далеко за словесными горами в стране.',
            'main_work'     => 1,
            'is_enabled'    => 1
        ]);

        DB::table('work_types')->insert([
            'name'          => 'Баннеры',
            'description'   => 'Далеко-далеко за словесными горами в стране гласных и согласных.',
            'main_work'     => 1,
            'is_enabled'    => 1
        ]);

        DB::table('work_types')->insert([
            'name'          => 'Дизайн интерфейсов',
            'description'   => 'Далеко-далеко за словесными горами в стране.',
            'main_work'     => 1,
            'is_enabled'    => 1
        ]);

        DB::table('work_types')->insert([
            'name'          => 'Флаеры',
            'description'   => 'Далеко-далеко, за словесными.',
            'main_work'     => 0,
            'is_enabled'    => 1
        ]);

        DB::table('work_types')->insert([
            'name'          => 'Ребрендинг',
            'description'   => 'Далеко-далеко, за словесными.',
            'main_work'     => 0,
            'is_enabled'    => 1
        ]);
    }
}
