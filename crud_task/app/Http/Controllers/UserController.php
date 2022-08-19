<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $data = Product::all();
        return view('products',['products'=>$data]);
        // return view('home', compact('data', 'products'));
    }

}
