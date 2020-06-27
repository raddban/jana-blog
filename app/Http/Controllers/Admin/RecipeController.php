<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function getRecipes()
    {
        return view('admin.partials.recipes');
    }

    public function addNewRecipe()
    {
        return view('admin.partials.add-new-recipe');
    }
}
