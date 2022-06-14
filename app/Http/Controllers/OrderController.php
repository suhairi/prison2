<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\Builder;

use Illuminate\Support\Facades\Session;

use App\Models\Order;
use Illuminate\Http\Request;

use App\Models\Setting;
use App\Models\User;
use App\Models\Product;

use DataTables;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {

        $setting    = Setting::where('lock', 'NO')->first();        

        if($setting == null) {

            Session::flash('fail', 'Error. Order has been lock. Cannot view the page.');
            return redirect()->back();
        }

        $orders     = Order::where('setting_id', $setting->id)->get();

        if($request->ajax()) {

            return DataTables::of($orders)
                    ->addColumn('name', function($order) {
                        return $order->users->name;
                    })
                    ->addColumn('bulan_tahun', function($order) {
                        $bulan = substr($order->settings->bulan_tahun, 0, 2);
                        $tahun = substr($order->settings->bulan_tahun, 2, 4);

                        return $bulan . '/' . $tahun;
                    })
                    ->addColumn('details', function($order) {

                        $grandTotal = 0;

                        $details = "<table class='table table-dark table-sm table-striped table-bordered table-hover'>";
                        $details .= "<thead class='thead-dark'>";
                        $details .= "<tr>";
                        $details .= "<th>Product Name</th>";
                        $details .= "<th>Price (RM)</th>";
                        $details .= "<th>Quantity (Unit)</th>";
                        $details .= "<th>Total (RM)</th>";
                        $details .= "</tr>";
                        $details .= "</thead>";
                        $details .= "<tbody>";

                        foreach($order->products as $product) {

                            $subTotal = number_format($product->price * $product->pivot->quantity, 2);
                            $details .= "<tr>";
                            $details .= "<td>". $product->name ."</td>";
                            $details .= "<td>". $product->price ."</td>";
                            $details .= "<td>". $product->pivot->quantity ."</td>";
                            $details .= "<td align='right'>". $subTotal ."</td>";
                            $details .= "</tr>";

                            $grandTotal += $subTotal;
                        }

                        $details .= "<tr>";
                        $details .= "<td colspan='3' align='right'><strong>Grand Total (RM)</strong></td>";
                        $details .= "<td align='right'><strong>". number_format($grandTotal, 2) ."</strong></td>";
                        $details .= "</tr>";

                        $details .= "</tbody>";
                        $details .= "</table>";

                        return $details;
                    })
                    ->rawColumns(['name', 'bulan_tahun', 'details'])
                    ->make(true);
        }

        return view('orders.index');
    }

    public function userIndex(Request $request) {


        return view('orders.userIndex');        
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
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function summary(Request $request) {

        $setting = Setting::where('lock', 'NO')->first();
        $orders = Order::where('setting_id', $setting->id)->get();
        $products = Product::all();

        $productsOrdered = collect([]);
        foreach($orders as $order) {

            foreach($order->products as $product) {

                $prod['id'] = $product->id;
                $prod['quantity'] = $product->pivot->quantity;
                $productsOrdered->push($prod);

            }
        }

        $prod = [];
        $count = $productsOrdered->countBy('id');

        $filteredProduct = collect([]);
        foreach($count as $key => $value) {
            
            $temp = $productsOrdered->where('id', $key);
            $prod['id']             = $key;
            $prod['quantity']       = $temp->sum('quantity');
            $prod['name']           = Product::where('id', $key)->first('name')->name;
            $prod['price']          = Product::where('id', $key)->first('price')->price;
            $prod['total']          = $prod['price'] * $prod['quantity'];
            $filteredProduct->push($prod);
        }

        $filteredProduct = $filteredProduct->sortBy('name');

        if($request->ajax()) {

            return DataTables::of($filteredProduct)
                    ->addColumn('name', function($product) {
                        return $product['name'];
                    })
                    ->addColumn('price', function($product) {
                        return $product['price'];
                    })
                    ->addColumn('quantity', function($product) {
                        return $product['quantity'];
                    })
                    ->addColumn('total', function($product) {
                        return number_format($product['total'], 2);
                    })
                    ->rawColumns(['name', 'price', 'quantity', 'total'])
                    ->make(true);
        }

        return view('summary.products');
    }


}
