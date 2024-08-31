<?php

namespace App\Http\Controllers;

use App\Expire;
use Illuminate\Http\Request;

class ExpireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expire = Expire::all()->first();
        return view('admin.admin_content.expire.expire-update',compact('expire'));
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
     * @param  \App\Expire  $expire
     * @return \Illuminate\Http\Response
     */
    public function show(Expire $expire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Expire  $expire
     * @return \Illuminate\Http\Response
     */
    public function edit(Expire $expire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Expire  $expire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expire $expire)
    {
        $inputs = \request()->validate([
            'expire_date' => 'required'
        ]);
        $expire->update($inputs);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Expire  $expire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expire $expire)
    {
        //
    }
}
