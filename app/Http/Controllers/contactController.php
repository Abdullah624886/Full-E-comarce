<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class contactController extends Controller
{
    public function contact(){
        $category = category::with('sub_category')->get();
        return view('user.contact.contact', compact('category'));
    }
}
