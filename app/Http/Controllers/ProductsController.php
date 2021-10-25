<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ProductsController extends Controller

{
  public function index(){
    print_r(route('products'));
    
    return view('/products.index');
  }


  public function about(){
    return 'about our page';
  }
   public function  show($name)
   {
       $data = [
           'iphome' => 'iphone',
           'samsung' => 'samsung',
       ];
   return view('products.index',[
      'products' => $data[$name  ] ?? 'products'. $name. 'does not exist'
  ]);
 }
}


