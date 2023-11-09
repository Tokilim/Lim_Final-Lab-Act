<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category; // Import the Category model

class CategoryController extends Controller
{
    // Display a list of categories
    public function index()
    {
        $categories = Category::all();
        return view('category', compact('categories'));
    }
}
