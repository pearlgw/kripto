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

            $integrationCode = hash('sha224', json_encode([
                'user_id' => $user->id,
                'candidate_id' => $kandidatId,
                'status' => 'Sukses',
            ]));

            Mail::to($user->email)->send(
                new IntegrationMail($integrationCode, $user)
            );

            Vote::create([
                'user_id' => $user->id,
                'candidate_id' => $kandidatId,
                'status' => 'Sukses',
                'integration' => $integrationCode
            ]);

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

        $inputToken = $request->integrasi;
        $isValid = Vote::where('integration', $inputToken)->exists();

        if ($isValid) {
            $downloadUrl = route('download-certificate', ['token' => $inputToken]);

            return redirect('/cek-integrasi')
                ->with('success', 'Tervalidasi')
                ->with('downloadUrl', $downloadUrl);
        } else {
            return redirect('/cek-integrasi')->with('error', 'Tidak Tervalidasi');
        }
    }
}
