<?php

namespace App\Http\Controllers;

use App\Models\TopCampus;
use App\Http\Requests\StoreTopCampusRequest;
use App\Http\Requests\UpdateTopCampusRequest;

class TopCampusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreTopCampusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTopCampusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TopCampus  $topCampus
     * @return \Illuminate\Http\Response
     */
    public function show(TopCampus $topCampus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TopCampus  $topCampus
     * @return \Illuminate\Http\Response
     */
    public function edit(TopCampus $topCampus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTopCampusRequest  $request
     * @param  \App\Models\TopCampus  $topCampus
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTopCampusRequest $request, TopCampus $topCampus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TopCampus  $topCampus
     * @return \Illuminate\Http\Response
     */
    public function destroy(TopCampus $topCampus)
    {
        //
    }
}
