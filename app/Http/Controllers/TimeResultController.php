<?php

namespace App\Http\Controllers;

use App\Models\TimeResult;


class TimeResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TimeResult::latest()->take(5)->get();
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
     * @param  \App\Models\TimeResult  $timeResult
     * @return \Illuminate\Http\Response
     */
    public function show(TimeResult $timeResult)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TimeResult  $timeResult
     * @return \Illuminate\Http\Response
     */
    public function edit(TimeResult $timeResult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TimeResult  $timeResult
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TimeResult $timeResult)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TimeResult  $timeResult
     * @return \Illuminate\Http\Response
     */
    public function destroy(TimeResult $timeResult)
    {
        //
    }
}
