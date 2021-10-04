<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\User;
use App\Models\product;
use App\Models\category;
use App\Models\sub_category;
use DB;
use Session;

class orderController extends Controller
{
    public function OrderList(){
        $order = order::paginate(2);
        return view('admin.customer.order_list', compact('order'));
    }

    public function UserList(){
        $user = User::all();
        return view('admin.customer.use_list', compact('user'));
    }

    public function destroy($id){
        $order = order::findorfail($id);
        $order->delete();
        return Redirect()->back();
    }

    // user order list

    public function userOrder(){
        $category = category::with('sub_category')->get();
        if(session()->has('user')){
            $userId = Session::get('user')->id;
            $order = DB::table('orders')
            ->join('products', 'orders.product_id', 'products.id')
            ->where('orders.user_id', $userId)
            ->get();
            return view('cart.user_order_list', compact('category', 'order'));
        }else{
            return redirect('user/login');
        }
        
    }
}
