<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use \App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\Models\User();
        $admin->name = 'admin';
        $admin->password = 'admin';
        $admin->email = 'whoaeugene@gmail.com';
        $admin->remember_token = Str::random(10);
        $admin->email_verified_at = now();

        \App\Models\User::truncate();
        \App\Models\User::factory(10)->create();

        Category::truncate();
        Category::factory(6)->create();

        \App\Models\Product::truncate();
        \App\Models\Product::factory(50)->create();
    }

    private function createCategories()
    {
        for ($i = 1; $i <= 10; $i++) {
            $category = new Category;

            $faker = \Faker\Factory::create();
            $category->name = 'category' . $faker->firstNameMale;
            if ($i <= 2) {
                $category->parent_id = 0;
            } else if ($i <= 6) {
                $category->parent_id = rand(1, 2);
            } else {
                $category->parent_id = rand(7, 10);
            }
            $category->image = $faker->imageUrl($width = 240, $height = 160, 'technics');
            $category->description = $faker->text(50);
            $category->save();
        }
    }
}
