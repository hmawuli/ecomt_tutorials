<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ProductsController extends Controller

{
  public function index(){
    $title= "Welcome to my new laravel projects ";
    $description =' created by mawuli';
    //return view('/products.index', compact('title'));
  }


  public function about(){
    return 'about our page';
  }
   public function  show($name)
   {
       $data =[
           'iphone' => 'iphone',
           'samsung' => 'samsung'
       ];

   return view('products.index',[
       'products' => $data[$name  ] ?? 'products'. $name. 'does not exist'
   ]);
   }
}


