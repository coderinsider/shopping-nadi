<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class AdminController extends Controller
{
    //
    public function menu() {
        $data = [];
        $data['categories'] = Category::orderBy('display_order')->get();
        return view('admin.menu-editor', $data);
    }
}
