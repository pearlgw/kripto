<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index() {
        $paslonVotes = Candidate::select(DB::raw('COUNT(votes.id) as votes'), 'candidates.id as paslon_id')
            ->leftJoin('votes', 'candidates.id', '=', 'votes.candidate_id')
            ->groupBy('paslon_id')
            ->get();

        $totalVotes = Vote::count();
        return view('admin.index', compact('paslonVotes', 'totalVotes'), [
            'title' => 'Dashboard',
            'user' => auth()->user()->name,
            'image' => auth()->user()->image,
            'countUser' => User::where('role', '<>', 'admin')->count(),
            'countCandidate' => Candidate::count(),
            'countVote' => Vote::count(),
            'candidates' => Candidate::all(),
        ]);
    }
}
