<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\sub_category;
use DB;

class SubCategoryController extends Controller
{
    public function subcate(){
        $category=category::get();
        // $category=DB::table('categories')->get();
        return view('admin.subcategory.sub_category', compact('category'));
    }

    public function store(Request $request){
        $sub = new sub_category();
        $sub->category_id = $request->category_id;
        $sub->name = $request->name;
        $sub->save();
        return Redirect()->back();
        // return response()->json($sub);
    }

    public function allsub(){
        $sub=sub_category::all();
        return view('admin.subcategory.all_sub_category', compact('sub'));
    }
    public function destroy($id){
        $sub = sub_category::findorfail($id);
        $sub->delete();
        return Redirect()->back();
    }
}
