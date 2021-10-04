<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;
use App\Models\sub_category;
use App\Models\size;
use App\Models\color;
use DB;

class ProductController extends Controller
{
    public function product(){
        $category = category::get();
        $sub_categorys = sub_category::get();
        $size = size::get();
        $color = color::get();
        return view('admin.product.product', compact('category' ,'sub_categorys', 'size', 'color'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'image' => 'required | mimes:jpeg,jpg,png | max:1000',
        ]);

        $product = new product();
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->sub_category_id;
        $product->size_id = $request->size_id;
        $product->color_id = $request->color_id;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->sale_price = $request->sale_price;

        $image=$request->file('image');
        if ($image){
            $ext=$image->getClientOriginalName();
            $upload_path='upload/image/';
            $image_url=$upload_path.$ext;
            $success=$image->move($upload_path,$ext);
            $product['image']=$image_url;  
        } 

        $product->save();
        return Redirect()->back();
        // return response()->json($product);
    }

    public function allproduct(){
        // Eloquent use 
        $product = product::paginate(4);
        // $product=DB::table('products')->join('categories', 'products.category_id','categories.id')
        //   ->select('products.*','categories.name')->get();
        return view('admin.product.all_product', compact('product'));
    }

    public function show($id){
        $product = product::findorfail($id);
        return view('admin.product.view', compact('product'));
    }

    public function destroy($id){
        $product=product::findorfail($id);
        $image=$product->image;
        $product->delete();
        unlink($image);
        return Redirect()->back();
    }

    public function edit($id){
        $product = product::findorfail($id);
        $category = category::get();
        $sub_categorys = sub_category::get();
        $size = size::get();
        $color = color::get();
        return view('admin.product.edit', compact('product', 'category', 'sub_categorys', 'size', 'color'));
    }

    // category select then subcategory uthanor show
    public function getSubcategory() {
        echo "<option value='0'>Please Select Subcategory</option>";
        $sub_categorys = sub_category::where('category_id', request('category_id'))->get();
        if(!blank($sub_categorys)) {
            foreach($sub_categorys as $category) {
                echo "<option value='".$category->id."'>".$category->name."</option>";
            }
        }        
    }
}
