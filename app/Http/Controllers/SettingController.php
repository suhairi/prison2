<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

use DataTables;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()) {

            $settings = Setting::where('lock', 'NO')->get();

            return DataTables::of($settings)
                    ->addColumn('bulan_tahun', function($setting) {
                        $bulan = substr($setting->bulan_tahun, 0, 2);
                        $tahun = substr($setting->bulan_tahun, 2, 4);

                        $bulan_tahun = $bulan . '/' . $tahun;

                        return $bulan_tahun;
                    })
                    ->addColumn('lock', function($setting) {

                        $btn = "btn-success";

                        if($setting->lock == 'YES')
                            $btn = "btn-warning";

                        return "<a href='#' class='btn btn-sm " . $btn ."'>" . $setting->lock . "</a>";
                    })
                    ->rawColumns(['bulan_tahun', 'lock'])
                    ->make(true);
        }

        return view('settings.index');
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
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
