<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\User;

class loginController extends Controller
{
    public function login(Request $request){
        $category = category::with('sub_category')->get();
        return view('user.login.login', compact('category'));
    }

    public function store(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return Redirect()->back();
        // return response()->json($user);
    }

    public function loginn(Request $req){
        $user = User::where(['email'=>$req->email])->first();
        $user = User::where(['name'=>$req->email])->first();
        if($user->password == $req->password){
            session()->put('user', $user);
            return redirect('/');
        }else{
            return "User or password is not matched";
        }
        
    }

    public function logout(){
        session()->flush();
        return redirect('/');
    }

}
