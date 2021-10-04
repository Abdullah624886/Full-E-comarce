<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\color;

class ColorController extends Controller
{
    public function color(){
        return view('admin.color.color');
    }

    public function store(Request $request){
        $color = new color();
        $color->name=$request->name;
        $color->save();
        return Redirect()->back();
    }

    public function allcolor(){
        $color = color::all();
        return view('admin.color.all_color', compact('color'));
    }
}
