<?php

namespace App\Http\Controllers;

use App\Models\band;
use App\Http\Requests\StorebandRequest;
use App\Http\Requests\UpdatebandRequest;

class BandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bandd.index', ['Bands' => Band::all()]);
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
     * @param  \App\Http\Requests\StorebandRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebandRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\band  $band
     * @return \Illuminate\Http\Response
     */
    public function show(band $band)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\band  $band
     * @return \Illuminate\Http\Response
     */
    public function edit(band $band)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebandRequest  $request
     * @param  \App\Models\band  $band
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebandRequest $request, band $band)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\band  $band
     * @return \Illuminate\Http\Response
     */
    public function destroy(band $band)
    {
        //
    }
}
