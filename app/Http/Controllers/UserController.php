<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    

    public function index(){ 
        $products = DB::table('products')->paginate(24);
        return view('pages.home', ['products' => $products]);
    }
}
