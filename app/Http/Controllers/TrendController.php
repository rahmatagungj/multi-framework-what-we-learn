<?php

namespace App\Http\Controllers;

use App\Models\Trends;
use Illuminate\Http\Request;
use Response;

class TrendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            [
                'name'=>'Typescript',
                'url'=>'typescript.com',
                'description'=>'the best language'
            ],
            [
                'name'=>'Example 2',
                'url'=>'typescript.com',
                'description'=>'the best example'
            ],
            [
                'name'=>'Example 3',
                'url'=>'typescript.com',
                'description'=>'the best example'
            ]
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trends  $trends
     * @return \Illuminate\Http\Response
     */
    public function show(Trends $trends)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trends  $trends
     * @return \Illuminate\Http\Response
     */
    public function edit(Trends $trends)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trends  $trends
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trends $trends)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trends  $trends
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trends $trends)
    {
        //
    }
}
