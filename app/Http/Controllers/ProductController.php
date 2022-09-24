<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Stmt\Catch_;
use PhpParser\Node\Stmt\TryCatch;
use Throwable;

class ProductController extends Controller
{
    public function index(Request $req){

        $data=Product::all();

        return view('product',['products'=>$data]);
    }


public function detail($id){

        $data=Product::find($id);

        return view('detail',['products'=>$data]);
    }

    public function search(Request $req){

        $data=Product::where('name','like','%'.$req->input('query').'%')->get();
        
        return view('search',['products'=>$data]);
    }

    public function addToCart(Request $req){

        if($req->session()->has('user')){
            $data=new Cart();
            $data->user_id=Session::get('user')['id'];
            $data->prduct_id=$req->product_id;
            $data->save();
            return redirect('/');
        }
        else{
            return redirect('/login');
        }

    }
    public static function itemCount(){

            $userid=Session::get('user')['id'];
            return Cart::where('user_id',$userid)->count();
    
    
    }

    public  function cartList(){

        $userid=Session::get('user')['id'];
       $data=DB::table('carts')->join('products','carts.prduct_id','=','products.id')->where('carts.user_id',$userid)->select('products.*','carts.id as cart_id')->get();

        
         return view('cart',['products'=>$data]);

}
    public  function orderAmount(){

    $userid=Session::get('user')['id'];
   $total=DB::table('carts')->join('products','carts.prduct_id','=','products.id')->where('carts.user_id',$userid)->sum('products.price');

    
    return view('order',['total'=>$total]);

}


    public function placeOrder(Request $req){

        $userid=Session::get('user')['id'];
        $allcart=Cart::where('user_id',$userid)->get();
        foreach($allcart as $cart){
            $order=new Order();
            $order->product_id=$cart->prduct_id;
            $order->user_id=$userid;
            $order->status="pending";
            $order->payment_method=$req->payments;
            $order->payment_status="pending";
            $order->address=$req->address;
            $order->save();
            Cart::where('user_id',$userid)->delete();

        }

        return redirect('/');
        
    }
}
