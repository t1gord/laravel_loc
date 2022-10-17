<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PortfolioCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = Str::random(10);
        DB::table('portfolio_categories')->insert([
            'name' => $name,
            'description' => Str::random(300),
            'preview_img' => "/images/works/" . rand(1, 9) . ".png",
            'alias' => Str::slug($name),
            'parent_id' => '0',
            'is_published' => true,
        ]);
    }
}
