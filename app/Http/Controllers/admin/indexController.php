<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function showADM() {
        return view('admin.admin_pages.dashboard');
    }
}
