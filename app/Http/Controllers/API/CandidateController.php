<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CandidateController extends Controller
{
    public function getAllCandidate()
    {
        $candidates = Candidate::with(['ketua', 'wakil'])->get();

        $candidateData = $candidates->map(function ($candidate) {
            $ketuaImageUrl = url('storage/' . $candidate->ketua->image);
            $wakilImageUrl = url('storage/' . $candidate->wakil->image);

            return [
                'visi' => $candidate->visi,
                'misi' => $candidate->misi,
                'program_kerja' => $candidate->program_kerja,
                'experience' => $candidate->experience,
                'ketua' => [
                    'name' => $candidate->ketua->name,
                    'image' => $ketuaImageUrl,
                ],
                'wakil' => [
                    'name' => $candidate->wakil->name,
                    'image' => $wakilImageUrl,
                ],
            ];
        });

        return response()->json([
            'message' => 'success',
            'data' => $candidateData
        ], 200);

        // $candidates = Candidate::with(['ketua', 'wakil'])->get();

        // return response()->json([
        //     'message' => 'success',
        //     'data' => $candidates
        // ], 200);

    }
}
