<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('admin.dashboard');
    }
    public function create(): View
    {
        // $
        // return view('admin.create', [ 
        //     '' => 
        // ]);
        return view('admin.products.create');
    }

    public function store(Request $request): View
    {

        return view('admin.products.store');
    }
}
