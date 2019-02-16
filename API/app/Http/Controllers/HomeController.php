<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class HomeController extends Controller
{

    public function getProduct(){
        $products = Products::get();
        
        return response()->json($products);
    }
    public function index(){
        $products = json_decode($this->getProduct(), true);
        
        return view('pages.home')->with([
            'products', $products,
            ])->header('Content-Type', 'text/html');
            
        }
}
