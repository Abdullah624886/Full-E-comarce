<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class CategoryController extends Controller
{
    public function category(){
        return view('admin.category.category');
    }

    public function store(Request $request){
        $category = new category();
        $category->name = $request->name;
        $category->save();
        return Redirect()->back();
        // return response()->json($category);
        
    }
    public function allcategory(){
        $category= category::all();
        return view('admin.category.all_category', compact('category'));
    }

    public function destroy($id){
        $category = category::findorfail($id);
        $category->delete();
        return Redirect()->back();
    }

    public function edit($id){
        $category = category::findorfail($id);
        return view('admin.category.edit', compact('category'));
    }

    public function Updat(Request $request, $id){
        $category= category::findorfail($id);
        $category->name=$request->name;
        $category->save();
        return Redirect()->route('all.category');
    }

}
