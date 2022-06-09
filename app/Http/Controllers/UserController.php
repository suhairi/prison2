<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   



        if($request->ajax()) {

            $users = User::where('role', 'USER')->get();

            return DataTables::of($users)
                    ->addColumn('name', function($user) {
                        $name = ucWords(strtolower($user->name));
                        return "<a href='#' title='Edit User'>" . $name . "</a>";
                    })
                    ->addColumn('section', function($user) {
                        $section = ucWords(strtolower($user->section));
                        return $section;
                    })
                    ->addColumn('role', function($user) {
                        $role = ucWords(strtolower($user->role));
                        return $role;
                    })
                    ->addColumn('status', function($user) {
                        $btn = "btn-success";
                        if($user->status == 'INACTIVE')
                            $btn = "btn-warning";
                        return "<a href='#' class='btn btn-sm " . $btn . "' title='Deactivate Status'>" . $user->status . "</a>";
                    })
                    ->rawColumns(['name', 'section', 'role', 'status'])
                    ->make(true);

        }
        

        return view('users.index');
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
