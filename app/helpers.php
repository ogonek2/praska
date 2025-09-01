<?php

use Illuminate\Support\Str;
use App\Models\Category;

if (!function_exists('generate_random_code')) {
    function generate_random_code($length = 10)
    {
        return strtoupper(Str::random($length));
    }
    function get_categories() {
        return Category::all();
    }
}