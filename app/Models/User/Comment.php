<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['name', 'email', 'message', 'recipe_id'];

    public function getAllCommentsByDishId($id)
    {
        return Comment::where('recipe_id', $id)->get();
    }

    public function getAllComments()
    {
        return Comment::all();
    }
}
