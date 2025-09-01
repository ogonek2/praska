<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Service;
use App\Models\B2b;

class IndexServices extends Controller
{
    public function index()
    {
        $categories = Category::with('services')->get();

        return view('welcome', [
            'categories' => $categories,
        ]);
    }
    public function services()
    {
        $categories = Category::with('services')->get();

        return view('poslugi', [
            'categories' => $categories,
        ]);
    }
    public function b2b()
    {
        $getB2bItems = B2b::all();

        return view('for-business', [
            'b2b_data' => $getB2bItems
        ]);
    }
    public function b2bShow($page)
    {
        $b2b = B2b::where('href', $page)->firstOrFail();

        return view('b2b_show', compact('b2b'));
    }
    public function courier()
    {
        return view('courier');
    }
    public function delivery()
    {
        return view('delivery');
    }
    public function category_page($category)
    {
        $getCategory = Category::where('href', $category)->with('services')->get();

        if ($getCategory) {
            return view('category', [
                'categories' => $getCategory,
            ]);
        }

        return abort(404);
    }
}
