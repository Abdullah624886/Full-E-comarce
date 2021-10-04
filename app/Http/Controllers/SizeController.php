<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\size;

class SizeController extends Controller
{
    public function size(){
        return view('admin.size.size');
    }

    public function store(Request $request){
        // $validatedData = $request->validate([
        //     'name' => ['required', 'unique:size', 'max:50'],
        //     'body' => ['required'],
        // ]);

        $size=new size();
        $size->name=$request->name;
        $size->save();
        return Redirect()->back();
        // return response()->json($size);
    }

    public function allsize(){
        $size=size::all();
        return view('admin.size.all_size', compact('size'));
    }

    public function edit($id){
        $size=size::findorfail($id);
        return view('admin.size.edit_size', compact('size'));
    }

    public function updat(Request $request, $id){
        $size=size::findorfail($id);
        $size->name=$request->name;
        $size->save();
        return Redirect()->route('all.size');

    }

    public function destroy($id){
        $size=size::findorfail($id);
        $size->delete();
        return Redirect()->back();

    }
}
