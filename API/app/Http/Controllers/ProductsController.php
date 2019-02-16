<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $products = Products::all();

    //     return response()->json($products);
                
    // }
    // public function ShowProducts()
    // {
    //     $products = json_decode($this->index(), true);

    //     return view('pages.home')->with([
    //         'products',$products
    //     ]);        
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product' => 'required',
            'cost_price' => 'required',
            'sale_price' => 'required',
        ]);

        $products = Products::create($request->all());

        return response()->json([
            'message' => 'Great success! New task created',
            'products' => $products,
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        return $products;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $products)
    {
        $request->validate([
            'product' => 'nullable',
            'cost_price' => 'nullable',
            'sale_price' => 'nullable',
        ]);

        $products->update($request->all());

        return response()->json([
            'message' => 'Great success! Task updated',
            'products' => $products,
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products)
    {
        $products->delete();

        return response()->json([
            'message' => 'Successfully deleted task!',
        ]);

    }
}
