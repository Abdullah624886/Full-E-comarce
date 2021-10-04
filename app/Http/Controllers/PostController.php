<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\sub_category;
use App\Models\size;
use App\Models\color;
use App\Models\product;

class PostController extends Controller
{
    public function post(){
        $category = category::with('sub_category')->get();
        $product = product::all();
        return view('user.layouts.post', compact('category', 'product'));
    }

    public function categorypost($id){
        $category = category::with('sub_category')->get();
        $product = product::where('sub_category_id',$id)->get();
        return view('user.layouts.categorypost', compact('category', 'product'));
    }

    public function show($id){
        $category = category::with('sub_category')->get();
        $size = size::get();
        $color = color::get();
        $product = product::findorfail($id);
        $produc = product::get();
        return view('user.layouts.show-post', compact('category', 'product', 'size', 'color', 'produc'));
    }

   
    
}
