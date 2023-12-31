<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
     /**
     * The name of the factory correspon  model
     *
     * @var string
     */
     protected $model = Article::class;
    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nom" => $this->faker->lastName,
            "noSerie" => $this->faker->swiftBicNumber,
            "imageUrl" => $this->faker->imageUrl(),
            "type_article_id" => rand(1,4),
            "esDisponible" => rand(0,1),
            
            
            
        ];
    }
}
