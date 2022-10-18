<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteSocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $socials = [];
        $sites = [
            'Вконтакте'=>'vk.com',
            'Twitter' => 'twitter.com',
            'Instagram' => 'instagram.com',
            'Behance' => 'behance.com',
            'Telegram' => 't.me'
        ];

        foreach ($sites as $key => $value) {
            $socials[] = [
                'name' => $key,
                'link' => 'https://'.$value,
                'icon' => "/images/social/".$value.".png",
                'is_published' => true,
            ];
        }

        DB::table('site_socials')->insert($socials);
    }
}
