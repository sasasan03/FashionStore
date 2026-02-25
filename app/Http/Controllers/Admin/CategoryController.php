<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\View\View;
use PHPUnit\Event\Test\FailedSubscriber;

class CategoryController extends Controller
{
    public function create(): View
    {
        $names = Category::pluck('name');
        $nameCount = Category::count();
        return  view('admin.categories.create', [
            'names' => $names,
            'nameCount' => $nameCount,
        ]);
    }



    public function store() {}
}
