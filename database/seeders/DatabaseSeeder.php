<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(PortfolioCategorySeeder::class);
        $this->call(PortfolioClientSeeder::class);
        $this->call(SiteSettingsSeeder::class);
        $this->call(SiteSocialSeeder::class);
        \App\Models\PortfolioPost::factory(30)->create();
    }
}
