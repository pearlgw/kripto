<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Str;

class PDFController extends Controller
{
    public function generateCertificate()
    {
        $userName = auth()->user()->name;

        $pdf = pdf::loadView('student.sertifikat', [
            'user' => $userName
        ]);

        // Menggunakan slug atau menghapus karakter non-alfanumerik untuk membuat nama file yang aman
        $fileName = Str::slug($userName) . '_certificate_PEMILU.pdf';

        return $pdf->download($fileName);
    }
}
