<?php

namespace App\Http\Controllers;

use App\Mail\IntegrationMail;
use App\Models\Candidate;
use App\Models\Vote;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class StudentController extends Controller
{
    public function index() {
        $voteCounts = Vote::select('candidate_id', DB::raw('COUNT(*) as total_votes'))
        ->groupBy('candidate_id')
        ->get();
        $voteCounts = $voteCounts->pluck('total_votes', 'candidate_id')->toArray();

        $voteLastUpdated = Vote::select('candidate_id', DB::raw('MAX(created_at) as last_updated'))
        ->groupBy('candidate_id')
        ->get();

        $voteLastUpdated = $voteLastUpdated->map(function ($item) {
            $item->last_updated = Carbon::parse($item->last_updated);
            return $item;
        })->pluck('last_updated', 'candidate_id');

        $user = auth()->user();
        $selectedCandidate = $user->vote ? $user->vote->first()->candidate : null;

        $paslonVotes = Candidate::select(DB::raw('COUNT(votes.id) as votes'), 'candidates.id as paslon_id')
            ->leftJoin('votes', 'candidates.id', '=', 'votes.candidate_id')
            ->groupBy('paslon_id')
            ->get();

        $totalVotes = Vote::count();
        return view('student.index', compact('paslonVotes', 'totalVotes'), [
            'candidates' => Candidate::all(),
            'user' => auth()->user()->name,
            'image' => auth()->user()->image,
            'userr' => auth()->user(),
            'selectedCandidate' => $selectedCandidate,
            'voteCounts' => $voteCounts,
            'voteLastUpdated' => $voteLastUpdated
        ]);
    }

    public function show($id)
    {
        return view('student.show', [
            'candidate' => Candidate::find($id),
            'user' => auth()->user()->name,
            'userr' => auth()->user(),
            'image' => auth()->user()->image,
        ]);
    }

    public function vote(Request $request, $kandidatId)
    {
        if ($request->user()) {
            $user = $request->user();

            Vote::create([
                'user_id' => $user->id,
                'candidate_id' => $kandidatId,
                'status' => 'Sukses'
            ]);

            $integrationData = [
                'user_id' => $user->vote->user_id,
                'candidate_id' => $user->vote->candidate_id,
                'created_at' => $user->vote->created_at,
                'updated_at' => $user->vote->updated_at,
            ];
            $integrationCode = hash('sha224', json_encode($integrationData));

            Mail::to($user->email)->send(
                new IntegrationMail($integrationCode, $user)
            );

            return redirect('/home')->with('success', 'Successfuly');
        }
    }

    public function pageIntegrasi()
    {
        return view('student.cekIntegrasi', [
            'user' => auth()->user()->name,
            'image' => auth()->user()->image,
        ]);
    }

    public function cekIntegrasi(Request $request)
    {
        $request->validate([
            'integrasi' => 'required',
        ]);

        $user = auth()->user();

        $voteData = Vote::where('user_id', $user->id)->first();
        $integrationData = [
            'user_id' => $voteData->user_id,
            'candidate_id' => $voteData->candidate_id,
            'created_at' => $voteData->created_at,
            'updated_at' => $voteData->updated_at
        ];
        $integrationCode = hash('sha224', json_encode($integrationData));

        $inputToken = $request->integrasi;

        if ($inputToken === $integrationCode) {
            $downloadUrl = route('download-certificate', ['token' => $inputToken]);

            return redirect('/cek-integrasi')
                ->with('success', 'Tervalidasi')
                ->with('downloadUrl', $downloadUrl);
        } else {
            return redirect('/cek-integrasi')->with('error', 'Tidak Tervalidasi');
        }
    }
}
