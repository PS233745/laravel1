<?php

namespace App\Http\Controllers;

use App\Models\album;
use App\Http\Requests\StorealbumRequest;
use App\Http\Requests\UpdatealbumRequest;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('albumm.index', ['Albums' => Band::all()]);

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
     * @param  \App\Http\Requests\StorealbumRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorealbumRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\album  $album
     * @return \Illuminate\Http\Response
     */
    public function show(album $album)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit(album $album)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatealbumRequest  $request
     * @param  \App\Models\album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatealbumRequest $request, album $album)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\album  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy(album $album)
    {
        //
    }
}
