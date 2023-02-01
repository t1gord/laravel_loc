<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
//        $this->call(CategorySeeder::class);
//        \App\Models\Category::factory(10)->create();
//        \App\Models\Art::factory(13)->create();
        for ($i = 1; $i <= 10; $i++ ) {
            DB::table('art_category')->insert([
                'art_id' => rand(1, 13),
                'category_id' => rand(1, 10),
            ]);
        }

    }
}
