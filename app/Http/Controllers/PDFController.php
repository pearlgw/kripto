<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Support\Str;

class PDFController extends Controller
{
    public function generateCertificate()
    {
        $user = auth()->user();
        $userName = $user->name;

        // Mengambil informasi kandidat terpilih oleh pengguna
        $selectedCandidate = $user->vote ? $user->vote->candidate : null;
        $voteTime = $user->vote->created_at;
        $carbonObject = Carbon::parse($voteTime)->locale('id_ID');

        // Format manual hari, tanggal, bulan, tahun, jam, dan menit
        $formattedDate = $carbonObject->isoFormat('dddd, D MMMM YYYY [pukul] H:mm [WIB]');

        // Load view sertifikat dengan data pengguna dan kandidat terpilih
        $pdf = PDF::loadView('student.sertifikat', [
            'user' => $userName,
            'selectedCandidate' => $selectedCandidate,
            'voteTime' => $formattedDate,
        ]);


        // Menggunakan slug atau menghapus karakter non-alfanumerik untuk membuat nama file yang aman
        $fileName = Str::slug($userName) . '_certificate_PEMILU.pdf';

        return $pdf->download($fileName);
    }
}
