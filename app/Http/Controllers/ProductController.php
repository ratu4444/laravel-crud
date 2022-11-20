<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        //
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

        Product::create([
            'product_name' => $request->pname,
            'product_description' => $request -> description,
            'product_price' => $request -> pprice

        ]);
        return redirect(route('products-create'));
    }


    public function show()
    {
        $product = Product::get();
        return view('product_view',compact('product'));

    }

    public function edit(Product $product)
    {
        return view('update', compact('product'));
//      $product = $product->where('id',$id)->first();


    }


    public function update(Request $request, Product $product)
    {
        $request->validate([
            'pname' => 'required',
            'description' => 'required',
            'pprice' => 'required'
        ]);


        $product->update([
            'product_name' => $request->pname,
            'product_description' => $request->description,
            'product_price' => $request->pprice

        ]);
        return redirect(route('products-show'));
    }


    public function destroy(Product $product)
    {
        dd($product);
        $product-> delete();
        return redirect(route('products-show'));
    }
}
