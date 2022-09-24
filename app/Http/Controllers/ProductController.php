<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
}
