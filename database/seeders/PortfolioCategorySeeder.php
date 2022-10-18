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
        $categories = [];

        for($i = 1; $i < 10; $i++) {
            $catName = "Категория $i";
            $parentId = ($i < 3) ? rand(1, 4) : 1;
            $alias = Str::slug($catName);

            $categories[] = [
                'name' => $catName,
                'description' => Str::random(100),
                'preview_img' => "/images/category/$i.png",
                'alias' => $alias,
                'parent_id' => $parentId,
                'is_published' => true,
            ];
        }

        DB::table('portfolio_categories')->insert($categories);
    }
}
