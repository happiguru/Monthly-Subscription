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
        $title =$faker->realText(20);
        $slug = str_slug($title, '-');

        return [
            'user_id' => function(){return factory(App\Models\User::class)->create()->id; },
            'title' => $title,
            'slug' => $slug,
            'image' => $faker->imageUrl(1200, 600,'animals'),
            'content' => $faker->paragraphs(10, true),
            'premium' => rand(0, 1)
        ];
    }
}
