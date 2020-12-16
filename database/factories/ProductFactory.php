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
        $cat_id = rand(7, 12);
        return [
            'title' => $this->faker->name,
            'brand' => $this->faker->company,
            'vendor' => 'АРТ. ' . $this->faker->isbn10,
            'image_path' => $this->faker->imageUrl($width = 240, $height = 160, 'abstract'),
            'price' => $this->faker->biasedNumberBetween($min = 1000, $max = 10000),
            'category' => Category::where('id', $cat_id)->get()->first()->name,
            'category_id' => Category::where('id', $cat_id)->get()->first()
        ];
    }
}

