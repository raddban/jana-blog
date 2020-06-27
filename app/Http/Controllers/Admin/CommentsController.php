<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Recipe;
use App\Models\User\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function index()
    {
        $com = new Comment();
        $comments = $com->getAllComments();
        $rec = new Recipe();
        $recipe_title = $rec->getDishFromCommentTable();
        var_dump($recipe_title);die;
        return view('admin.partials.comments', compact('comments', 'recipe_title'));
    }
}
