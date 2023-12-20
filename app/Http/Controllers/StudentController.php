<?php

namespace App\Http\Controllers;

use App\Mail\IntegrationMail;
use App\Models\Candidate;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class StudentController extends Controller
{
    public function index() {
        return view('student.index', [
            'candidates' => Candidate::all(),
            'user' => auth()->user()->name,
            'userr' => auth()->user()
        ]);
    }

    public function about() {
        return view('student.about', [
            'user' => auth()->user()->name
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

            return redirect('/home')->with('success', 'Berhasil memilih kandidat. Silahkan Cek Integrasi Anda di Email');
        }
    }

    public function pageIntegrasi()
    {
        return view('student.cekIntegrasi', [
            'user' => auth()->user()->name
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
