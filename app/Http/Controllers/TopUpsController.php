<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\TopUps;
use Illuminate\Http\Request;
use App\Jobs\FindTopUsersJob;

class TopUpsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        FindTopUsersJob::dispatch();
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
     * @param  \App\Models\TopUps  $topUps
     * @return \Illuminate\Http\Response
     */
    public function show(TopUps $topUps)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TopUps  $topUps
     * @return \Illuminate\Http\Response
     */
    public function edit(TopUps $topUps)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TopUps  $topUps
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TopUps $topUps)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TopUps  $topUps
     * @return \Illuminate\Http\Response
     */
    public function destroy(TopUps $topUps)
    {
        //
    }
}