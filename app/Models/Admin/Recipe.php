<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Recipe extends Model
{
    protected $fillable = ['title', 'ingredients', 'category_id', 'description', 'picture_path'];

    public function getAllRecipes()
    {
        return Recipe::paginate(2);
    }

    public function getRecipesByCategorySlug($id)
    {
        return Recipe::where('category_id', $id)->get();
    }

    public function getSingleDishById($id)
    {
        return Recipe::where('id', $id)->first();
    }

    public function getDishFromCommentTable()
    {
        return DB::table('recipes')
                ->join('comments', 'recipes.id', '=', 'comments.recipe_id')->get();
    }
}
