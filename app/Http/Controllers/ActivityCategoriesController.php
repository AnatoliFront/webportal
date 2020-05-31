<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class ActivityCategoriesController extends Controller
{
    public function index() {
        $categories = App\ActivityCategories::all();
        return view('index', compact('categories'));
    }
}
