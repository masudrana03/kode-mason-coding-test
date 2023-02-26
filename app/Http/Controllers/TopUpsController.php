<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\TopUps;
use Illuminate\Http\Request;

class TopUpsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $topUpUsers = User::withCount(['topUps' => function ($query) {
        //     $query->whereBetween('created_at', [now()->subDays(1)->startOfDay(), now()->subDays(1)->endOfDay()]);
        // }])
        //     ->orderByDesc('id')
        //     ->take(10)
        //     ->get();

        // // Top 10 top up user of yesterday
        // foreach ($topUpUsers as $topUpUser) {
        //     $user = User::find($topUpUser->id);
        //     $user->topTopUpUsers()->create([
        //         'count' => $topUpUser->top_ups_count,
        //     ]);
        // }

        // return $topUpUsers;
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