<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sertifikat Pemilu UDINUS</title>
    <style>
        @page {
            size: landscape; /* Set orientasi landscape */
        }
        @font-face {
            font-family: 'Lemon';
            src: url('public/Lemon-Regular.ttf') format('truetype');
            /* Sesuaikan format font dan path sesuai kebutuhan */
        }
        body {
            font-family: 'Lemon', sans-serif;
            text-align: center;
            margin: 50px;
            transform: rotate(0deg);
            transform-origin: left top;
            background-size: contain; /* Adjust to cover the entire page */

        }

        .certificate {
            border: 4px solid #000000;
            padding: 40px;
            width: 800px;
            height: 500px;
            margin: 0 auto;
            background-color: #0c4c94;
        }

        .header {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #f4bc44;
        }

        .content {
            font-size: 20px;
            margin-bottom: 30px;
            color: #f4bc44;
            font-family: 'Lemon', sans-serif;
        }
        .content strong {
            text-transform: uppercase;
        }
        .signature {
            position: relative; /* Gunakan relative position untuk signature */
            float: right; /* Float ke kanan untuk membawa ke pojok kanan */
            margin-top: 30px; /* Sesuaikan dengan jarak dari atas */
            margin-right: 20px; /* Sesuaikan dengan jarak dari kanan */
            font-size: 18px;
            font-family:'Lemon', sans-serif;
            color: #f4bc44;
        }

    </style>
</head>
<body>
    <div class="certificate">
        <div class="header"><u>SERTIFIKAT PEMILU UDINUS</u></div><br><br>
        <div class="content">
            Diberikan kepada:<br>
            <strong style="font-size: 25px;">{{ $user }}</strong><br><br> Sebagai:<br>
            <strong>PESERTA</strong><br><br>
            Atas partisipasinya pada Pemilihan Umum DPM-KM<br>Universitas Dian Nuswantoro.<br><br>
            @if($selectedCandidate)
            Anda telah melakukan pemilihan pada kandidat nomor urut {{ $selectedCandidate->status }}<br>
            pada {{ $voteTime }}<br>
            @else
            Anda belum memilih kandidat.
            @endif
        </div>
        <div class="signature"> Semarang, {{ \Carbon\Carbon::now()->locale('id_ID')->isoFormat('D MMMM YYYY') }}<br><br><br> E-Voku Udinus</div>
    </div>
</body>
</html>
