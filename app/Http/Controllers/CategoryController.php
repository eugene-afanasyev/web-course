<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showAll() {
        $categories = Category::all();
        echo "<div class=\"row\">";
        foreach ($categories as $category) {
            $category_card = $this->getCategoryCard($category);
            echo $category_card;
        }
        echo "</div>";
    }

    public function getAll() {
        $categories = Category::all();
        $cat_container = Array();
        foreach ($categories as $category) {
            $cat_container[] = $category;
        }
        return $cat_container;
    }

    public function getCategoryCard($category) {
        echo "
        <div class=\"col-sm-3\">
            <div class=\"card\">
                <img class=\"card-img-top\" src=\"$category->image_src\">
                <div class=\"card-body\">
                <h5 class=\"card-title\">$category->name</h5>
                <p class=\"card-text\"></p>
                <a href=\"#\" class=\"btn btn-primary\">View</a>
                </div>
            </div>
        </div>
        ";
    }
}
