<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Article;

class ArticleFactory extends Factory
{
    protected  $model = Article::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' => $this->faker->words(5,true),
            'titre' => $this->faker->words(5,true),
            'prix' => $this->faker->numberBetween(10,20),
            'subtitle' => $this->faker->words(5,true),
        ];
    }
}
