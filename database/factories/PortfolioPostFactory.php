<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PortfolioPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->sentence(rand(3, 8), true);
        $alias = Str::slug($name);
        $imgId = rand(1, 10);
        $text = $this->faker->realText(rand(200, 400));
        $isPublished = rand(1, 4) > 1;
        $createdAt = $this->faker->dateTimeBetween('-3 months', '-1 months');

        $data = [
            'name'=> $name,
            'category_id' => rand(1, 9),
            'image' => "/images/works/".$imgId.".png",
            'description' => $text,
            'client_id' => rand(1, 5),
            'alias' => $alias,
            'is_published' => $isPublished,
            'published_at' => $isPublished ? $this->faker->dateTimeBetween('-3 months', '-2 days') : null,
            'created_at' => $createdAt,
            'updated_at' => $createdAt,
        ];

        return $data;
    }
}
