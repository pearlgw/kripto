<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Vote;
use Illuminate\Http\Request;

class TotalSuaraController extends Controller
{
    public function index()
    {
        return view('admin.totalSuara.index', [
            'user' => auth()->user()->name,
            'candidates' => Candidate::all()
        ]);
    }
}
