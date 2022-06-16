<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamsController extends Controller
{
    //
    public function teams()
    {
        $scores = collect([
            ['score' => 76, 'team' => 'A'],
            ['score' => 62, 'team' => 'B'],
            ['score' => 82, 'team' => 'C'],
            ['score' => 86, 'team' => 'D'],
            ['score' => 91, 'team' => 'E'],
            ['score' => 67, 'team' => 'F'],
            ['score' => 67, 'team' => 'G'],
            ['score' => 82, 'team' => 'H'],
        ]);
        $scores = $scores->sortByDesc('score');
        $sgb = $scores->groupBy("score");
        $rank = 1;
        $sgb->each(function ($item, $key) use (&$rank) {
            $count = $item->count();
            $item->put('rank', $rank);

            if ($count > 1) {
                $rank += $count;
            } else {
                $rank++;
            }
        });
        return $sgb;
    }
}
