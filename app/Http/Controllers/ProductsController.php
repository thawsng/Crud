<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function listProducts()
    {
        return view('product', ['list' => Products::paginate(3)]);
    }
}
