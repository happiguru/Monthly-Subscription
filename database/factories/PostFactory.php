<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title =$this->faker->realText(20);
        $slug = Str::slug($title, '-');

        return [
            'user_id' => \App\Models\User::factory()->create()->id,
            'title' => $title,
            'slug' => $slug,
            'image' => $this->faker->imageUrl(1200, 600,'animals'),
            'content' => $this->faker->paragraphs(10, true),
            'premium' => rand(0, 1)
        ];
    }
}
