<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function getAllCandidate()
    {
        return response()-> json([
            'message' => 'success',
            'data' => Candidate::all()
        ], 200);
    }
}
