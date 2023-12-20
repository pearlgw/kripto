<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('admin.index', [
            'user' => auth()->user()->name,
            'countUser' => User::count(),
            'countCandidate' => Candidate::count(),
            'countVote' => Vote::count()
        ]);
    }
}
