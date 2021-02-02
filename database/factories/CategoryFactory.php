<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => $this->faker->text(20),
            'name' => $this->faker->firstName(),
            'image' => $this->faker->imageUrl($width = 240, $height = 160, 'technics'),
            'description' => $this->faker->text(100)
        ];
    }
}
