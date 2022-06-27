<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CmsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        return view('pages.cms');
    }
    public function upload(Request $request){

        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'image'=>'required'
        ]);

        $query = DB::table('products')->insert([
            'name'=>$request->input('name'),
            'price'=>$request->input('price'),
            'image'=>$request->input('image'),
        ]);
        
        if($query){
            return back()->with('success','Uspjesno preneseno u bazu!'); 
        }
        else{
            return back()->with('fail','Neuspjesno!'); 

        }
    }
}
