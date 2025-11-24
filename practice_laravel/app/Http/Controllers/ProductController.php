<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        // use for store all data from products (select all data)
        $products = Product:: orderBy('id','DESC')->paginate(20);
        return view('product',[
            'products'=>$products
        ]);
    }

    public function create(){
        return view('create');
    }

    public function edit(){
        return view('edit');
    }
}
