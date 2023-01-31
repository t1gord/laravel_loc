<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArtFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->sentence(rand(3, 8), true);
        $slug = Str::slug($name);
        $img_id = rand(1, 13);
        $text = $this->faker->realText(rand(200, 400));
        $is_published = rand(1, 4) > 1;
        $created_at = $this->faker->dateTimeBetween('-3 months', '-1 months');

        $data = [
            'name'=> $name,
            'category_id' => rand(1, 9),
            'image' => "/images/arts/".$img_id.".jpg",
            'description' => $text,
            'slug' => $slug,
            'is_published' => $is_published,
            'published_at' => $is_published ? $this->faker->dateTimeBetween('-3 months', '-2 days') : null,
            'created_at' => $created_at,
            'updated_at' => $created_at,
        ];

        return $data;
    }
}
