<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\sub_category;
use App\Models\product;
use Session;

class searchController extends Controller
{
    public function search(Request $request){
        $category = category::with('sub_category')->get();
                
        if(product::where('name', 'like', '%'.$request->input('q').'%')->exists()){
            $product = product::where('name', 'like', '%'.$request->input('q').'%')->get();
            return view('user.search.search', compact('product', 'category'));
        }else{
            $product = product::where('name', 'like', '%'.$request->input('q').'%')->get();
            return view('user.search.search_message', compact('product', 'category'));
        }
    }
}
