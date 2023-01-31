<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->sentence(rand(1, 2), true);
        $text = $this->faker->realText(rand(100, 200));
        $slug = Str::slug($name);
        $parent_id = ($this->count > 3) ? rand(1, 3) : 1;
        $is_published = rand(1, 4) > 1;
        $created_at = $this->faker->dateTimeBetween('-3 months', '-1 months');

        $data = [
            'name' => $name,
            'description' => $text,
            'preview_img' => '',
            'slug' => $slug,
            'parent_id' => $parent_id,
            'is_published' => $is_published,
            'created_at' => $created_at,
            'updated_at' => $created_at,
        ];

        return $data;
    }
}
