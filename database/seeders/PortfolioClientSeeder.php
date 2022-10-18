<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PortfolioClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clients = [];

        for ($i=1; $i <= 5; $i++) {
            $name = Str::random(rand(3, 8));
            $logoImg = Str::slug($name);
            
            $clients[] = [
                'name' => $name,
                'description' => Str::random(100),
                'logo' => "/images/clients/".$logoImg."_logo.png",
                'is_published' => true,
            ];

        }
        
        DB::table('portfolio_clients')->insert($clients);
    }
}
