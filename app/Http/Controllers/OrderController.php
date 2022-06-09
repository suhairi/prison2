<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

use App\Models\Setting;
use App\Models\User;

use DataTables;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {

        // $orders = Order::take(5)->get();

        // foreach($orders as $order) {

        //     $grandTotal = 0;
        //     foreach($order->products as $product) {
        //         echo 'Price : RM'. $product->price .'<br />';
        //         echo 'Quantity : '. $product->pivot->quantity .'<br />';
        //         $subTotal = $product->price * $product->pivot->quantity;
        //         echo 'Total : RM'. $subTotal .'<br />';
        //         echo '<br />';

        //         $grandTotal += $subTotal;
        //     }

        //     echo '<br />';
        //     echo 'Grand Total : RM'. $grandTotal .'<br />';
        //     echo '<br /><br />';
        // }

        // return;

        if($request->ajax()) {

            $setting    = Setting::where('lock', 'NO')->first();
            $orders     = Order::where('setting_id', $setting->id)->get();

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


}
