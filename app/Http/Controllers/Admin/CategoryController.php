<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function create(): View
    {
        $categories = Category::select('id', 'name', 'is_active')->get();

        $nameCount = Category::count();
        return  view('admin.categories.create', [
            'categories' => $categories,
            'nameCount' => $nameCount,
        ]);
    }



    public function store() {}
}
