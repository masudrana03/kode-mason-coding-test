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
        $topTopUpUsers = TopTopupUsers::orderByDesc('count')->paginate(2);

        return view('top-up.top-up-user-list', compact('topTopUpUsers'));
    }


    /**
     * Display the search User.
     */
    public function search()
    {
        $search           = request('search');
        $defaultPaginate = 2;

        $topTopUpUsers = TopTopupUsers::whereHas('user', function ($user) use ($search) {
            $user->where('name', 'like', '%' . $search . '%');
        })->paginate($defaultPaginate);

        return view('top-up.top-up-user-list', compact('topTopUpUsers', 'search'));
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

        return redirect()->back();
    }
}