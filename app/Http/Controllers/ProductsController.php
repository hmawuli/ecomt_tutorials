<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ProductsController extends Controller

{
    public function index(){
        $title =" Welcome to laravel8 course";
        $description ="my name is mawuli";
        
        
        return view('products.index');
        
    }

        public function about(){
            return 'About our pages';
        }
    
}
