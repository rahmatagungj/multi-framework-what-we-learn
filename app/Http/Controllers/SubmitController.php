<?php

namespace App\Http\Controllers;

use App\Models\Submits;
use Illuminate\Http\Request;
use Response;

class SubmitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('submit',[
            'title'=>'Submit'
        ]);
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
        return response()->json([$request->all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Submits  $submits
     * @return \Illuminate\Http\Response
     */
    public function show(Submits $submits)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Submits  $submits
     * @return \Illuminate\Http\Response
     */
    public function edit(Submits $submits)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Submits  $submits
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Submits $submits)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Submits  $submits
     * @return \Illuminate\Http\Response
     */
    public function destroy(Submits $submits)
    {
        //
    }
}
