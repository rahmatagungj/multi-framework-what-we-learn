<?php

namespace App\Http\Controllers;

use App\Models\HomePages;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('index',[
            'title'=>'Homepage'
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
     * @param  \App\Models\HomePages  $homePages
     * @return \Illuminate\Http\Response
     */
    public function show(HomePages $homePages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomePages  $homePages
     * @return \Illuminate\Http\Response
     */
    public function edit(HomePages $homePages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomePages  $homePages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomePages $homePages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomePages  $homePages
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomePages $homePages)
    {
        //
    }
}
