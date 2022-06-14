<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

use App\Models\Order;
use App\Models\Setting;

use DataTables;

class UserOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $setting = Setting::where('lock', 'NO')->first();

        if($setting == null) {

            Session::flash('fail', 'Gagal. Order has been locked by the admin.');
            return redirect()->back();
        }

        $orders = Order::where('user_id', Auth::user()->id)->where('setting_id', $setting->id)->get();

        // foreach($orders as $order) {
        //     $bulan = substr($order->settings->bulan_tahun, 0, 2);
        //     $tahun = substr($order->settings->bulan_tahun, 2, 4);
        //     return $bulan . '/' . $tahun;
        // }
        // dd($orders);

        if($request->ajax()) {

            return DataTables::of($orders)
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
                    ->rawColumns(['bulan_tahun', 'details'])
                    ->make(true);
        }

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
