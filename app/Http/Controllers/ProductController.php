<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


use DataTables;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()) {

            $products = Product::all();

            return DataTables::of($products)
                    ->addColumn('price', function($product) {

                        return "<a href='#' title='Edit Price'>" . $product->price . "</a>";
                    })
                    ->addColumn('status', function($product) {

                        $btn = "btn-success";
                        $title = "Deactivate Status";
                        if($product->status == "INACTIVE") {
                            $btn    = "btn-warning";
                            $title  = "Activate Status";
                        }

                        return "<a href='#' class='btn btn-sm ". $btn ."' title='". $title ."'>" . $product->status . "</a>";
                    })
                    ->rawColumns(['price', 'status'])
                    ->make(true);
        }

        return view('products.index');
    }

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
