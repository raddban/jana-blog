<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $cat = new Category();
        $categories = $cat->getAllCategories();
        return view('admin.partials.categories', compact('categories'));
    }

    public function addNewCategory()
    {
        return view('admin.partials.new-category');
    }

    public function saveNewCategory(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:2'
        ]);
        Category::create([
            'title' => $request->input('title')
        ]);

        return redirect()->back()->with('info', 'Jauna kategorija izveidota');
    }
}
