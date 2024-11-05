<?php

namespace App\Http\Controllers;

use App\Models\Campus;
use App\Http\Requests\StoreCampusRequest;
use App\Http\Requests\UpdateCampusRequest;
use App\Models\Major;

class CampusController extends Controller
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
     * @param  \App\Http\Requests\StoreCampusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCampusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Campus  $campus
     * @return \Illuminate\Http\Response
     */

    public function showFour()
    {
        $majors = Major::take(4)->get();
        $campuses = Campus::take(4)->get();

        return view('home', compact('majors', 'campuses'));
    }

    public function listCampus(Campus $campus)
    {
        $campuses = Campus::paginate(8);
        return view('campus.campus')->with('campuses', $campuses);
    }

    public function detailCampus($id)
    {
        $campus = Campus::with('faculties')->find($id);
        return view('campus.detailcampus', compact('campus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Campus  $campus
     * @return \Illuminate\Http\Response
     */
    public function edit(Campus $campus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCampusRequest  $request
     * @param  \App\Models\Campus  $campus
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCampusRequest $request, Campus $campus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Campus  $campus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campus $campus)
    {
        //
    }
}
