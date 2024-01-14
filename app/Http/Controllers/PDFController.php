<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Str;

class PDFController extends Controller
{
    public function generateCertificate()
    {
        $user = auth()->user();
        $userName = $user->name;

        // Mengambil informasi kandidat terpilih oleh pengguna
        $selectedCandidate = $user->vote ? $user->vote->candidate : null;

        // Load view sertifikat dengan data pengguna dan kandidat terpilih
        $pdf = PDF::loadView('student.sertifikat', [
            'user' => $userName,
            'selectedCandidate' => $selectedCandidate,
        ]);


        // Menggunakan slug atau menghapus karakter non-alfanumerik untuk membuat nama file yang aman
        $fileName = Str::slug($userName) . '_certificate_PEMILU.pdf';

        return $pdf->download($fileName);
    }
}
