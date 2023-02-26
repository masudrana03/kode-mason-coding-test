<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\TopTopupUsers;

class TopTopupUsersController extends Controller
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
     * @param  \App\Models\TopTopupUsers  $topTopupUsers
     * @return \Illuminate\Http\Response
     */
    public function show(TopTopupUsers $topTopupUsers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TopTopupUsers  $topTopupUsers
     * @return \Illuminate\Http\Response
     */
    public function edit(TopTopupUsers $topTopupUsers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TopTopupUsers  $topTopupUsers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TopTopupUsers $topTopupUsers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TopTopupUsers  $topTopupUsers
     * @return \Illuminate\Http\Response
     */
    public function destroy(TopTopupUsers $topTopupUsers)
    {
        //
    }

    /**
     * Yesterday Top 10 Top Up Users.
     */
    public function yesterdayTopTopUpUsers()
    {
        $topUpUsers = User::withCount(['topUps' => function ($query) {
            $query->whereBetween('created_at', [now()->subDays(1)->startOfDay(), now()->subDays(1)->endOfDay()]);
        }])
            ->orderByDesc('id')
            ->take(10)
            ->get();

        // Erasing previous records
        TopTopupUsers::truncate();
        // Top 10 top up user of yesterday
        foreach ($topUpUsers as $topUpUser) {

            $topTopupUser['user_id'] = $topUpUser['id'];
            $topTopupUser['count'] = $topUpUser['top_ups_count'];
            TopTopupUsers::updateOrCreate($topTopupUser);
        }
    }
}