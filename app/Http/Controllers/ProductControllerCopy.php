<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductControllerCopy extends Controller
{

    public function index()
    {
        dd('abc');
    }


    public function create()
    {
       return view('pcreate');
    }


    public function store(Request $request)
    {

         $request->validate([
             'pname' => 'required',
             'description' => 'required',
             'pprice' => 'required'
         ]);

         Products::create([
             'product_name' => $request -> pname,
             'product_description' => $request -> description,
             'product_price' => $request -> pprice

         ]);


    }


    public function show(Product $product)
    {

    }


    public function edit(Product $product)
    {
        //
    }


    public function update(Request $request, Product $product)
    {
        //
    }


    public function destroy(Product $product)
    {
        //
    }
}
