<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('product');
    }

    public function create(){
        return view('create');
    }

    public function edit(){
        return view('edit');
    }
}
