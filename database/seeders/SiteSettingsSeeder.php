<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('site_settings')->insert([
            'title' => 'Lyla Neko - художник',
            'phone' => '+70000000000',
            'slogan' => 'Рисую в цифре, карандашом и красками'
        ]);
    }
}
