<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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

        Product::create([
            'product_name' => $request->pname,
            'product_description' => $request -> description,
            'product_price' => $request -> pprice

        ]);
        return redirect(route('products.create'));
    }


    public function show()
    {
        $product = Product::get();
        return view('product_view',compact('product'));
    }

    public function edit($id,Product $product)
    {
        $product = $product->find($id);
//      $product = $product->where('id',$id)->first();




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
