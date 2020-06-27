<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function getRecipes()
    {
        $rec = new Recipe();
        $recipes = $rec->getAllRecipes();
        return view('admin.partials.recipes', compact('recipes'));
    }

    public function addNewRecipe()
    {
        $cat = new Category();
        $categories = $cat->getAllCategories();
        return view('admin.partials.add-new-recipe', compact('categories'));
    }

    public function saveNewRecipe(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|min:5',
            'ingredients' => 'required|min:3',
            'category' => 'required',
            'recipe' => 'required|min:20'
        ]);

        Recipe::create([
            'title' => $request->input('title'),
            'ingredients' => $request->input('ingredients'),
            'category_id' => $request->input('category'),
            'description' => $request->input('recipe')
        ]);

        return redirect()->route('admin.recipes')->with('info', 'Recepte saglabāta');
    }


}
