<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $cat_id = rand(1, Category::all()->count());
        return [
            'title' => $this->faker->name,
            'code' => $this->faker->numberBetween(0, 1000000),
            'description' => $this->faker->text(),
            'image' => $this->faker->imageUrl($width = 240, $height = 160, 'technics'),
            'price' => $this->faker->biasedNumberBetween($min = 1000, $max = 10000),
            'category_id' => $cat_id
        ];
    }
}

