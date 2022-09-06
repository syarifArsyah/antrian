<?php

namespace App\Http\Controllers;

use App\Models\expedisi;
use Illuminate\Http\Request;

class ExpedisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expedisis = Expedisi::all();
        return view('pages.expedisi.index',compact('expedisis'));
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
        return "Oke";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\expedisi  $expedisi
     * @return \Illuminate\Http\Response
     */
    public function show(expedisi $expedisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\expedisi  $expedisi
     * @return \Illuminate\Http\Response
     */
    public function edit(expedisi $expedisi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\expedisi  $expedisi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, expedisi $expedisi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\expedisi  $expedisi
     * @return \Illuminate\Http\Response
     */
    public function destroy(expedisi $expedisi)
    {
        //
    }
}
