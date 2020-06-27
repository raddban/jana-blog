<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $cat = new Category();
        $categories = $cat->getAllCategories();
        return view('user.partials.main', compact('categories'));
    }
}
