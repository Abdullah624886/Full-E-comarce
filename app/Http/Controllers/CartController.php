<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;
use App\Models\Cart;
use App\Models\order;
use DB;
use Session;

class CartController extends Controller
{
    public function addToCart(Request $req){
        if($req->session()->has('user')){
            $cart = new Cart();
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        }else{
            return redirect('user/login');
        }
    }

    static function cartItem(){
        $userId = Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }

    public function viewcart(){
        $category = category::with('sub_category')->get();
        if(session()->has('user')){
            $userId = Session::get('user')->id;
            $data = DB::table('carts')
            ->join('products', 'carts.product_id', 'products.id')
            ->select('products.*', 'carts.id as cart_id')
            ->where('carts.user_id', $userId)
            ->get();
    
            $totale = DB::table('carts')
            ->join('products', 'carts.product_id', 'products.id')
            ->where('carts.user_id', $userId)
            ->sum('products.price');
            
            return view('cart.cartview', compact('category', 'data', 'totale'));
        }else{
            return redirect('user/login');
        }
       
    }

    public function destroy($id){
        $data = Cart::findorfail($id);
        $data->delete();
        return Redirect()->back();
    }

    public function address(){
        $category = category::with('sub_category')->get();
        return view('cart.address', compact('category'));
    }

    public function Store(Request $req){
        $userId = Session::get('user')->id;
        $allCart = Cart::where('user_id', $userId)->get();
        foreach($allCart as $cart){
            $order = new order;
            $order->name=$req->name;
            $order->phone_number=$req->phone_number;
            $order->address=$req->address;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status="pending";
            $order->payment_method=$req->payement;
            $order->payment_status="pending";
            $order->save();
        }
        Cart::where('user_id', $userId)->delete();
        return Redirect('/');

    }
    
}
