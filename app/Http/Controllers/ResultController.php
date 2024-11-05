<?php

namespace App\Http\Controllers;

use App\Models\Result;
use App\Http\Requests\StoreResultRequest;
use App\Http\Requests\UpdateResultRequest;
use App\Models\User;
use Illuminate\Http\Request;

class ResultController extends Controller
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
     * @param  \App\Http\Requests\StoreResultRequest  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $highestCategory = $request->input('highestCategory');

        $date = now();
        $user_id = auth()->user()->id; 

        Result::create([
            'date' => $date,
            'category' => $highestCategory,
            'desc' => "banner-tes-hasil-$highestCategory.png",
            'user_id' => $user_id,
        ]);

        return response()->json(['message' => 'Success'], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */

    public function showHistory($id)
    {
        $user = User::findOrFail($id);
        $histories = $user->results()->get();

        return view('test.career-aptitude-list-history', compact('histories'));
    }

    public function showDetail($id)
    {
        $history = Result::findOrFail($id);

        return view('test.career-aptitude-history', compact('history'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function edit(Result $result)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateResultRequest  $request
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateResultRequest $request, Result $result)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function destroy(Result $result)
    {
        //
    }
}
