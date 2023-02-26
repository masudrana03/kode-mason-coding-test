<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class TopTopUpUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $topUpUsers = User::withCount(['topUps' => function ($query) {
            $query->whereBetween('created_at', [now()->subDays(1)->startOfDay(), now()->subDays(1)->endOfDay()]);
        }])
            ->orderByDesc('id')
            ->take(10)
            ->get();

            // Top 10 top up user of yesterday
        foreach ($topUpUsers as $topUpUser) {
            $user = User::find($topUpUser->id);
            $user->topTopUpUsers()->create([
                'count' => $topUpUser->top_ups_count,
            ]);
        }
    }
}