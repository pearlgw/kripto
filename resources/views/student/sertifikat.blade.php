<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sertifikat Pemilu UDINUS</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            text-align: center;
            margin: 50px;
        }

        .certificate {
            border: 2px solid #3498db;
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
        }

        .header {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #3498db;
        }

        .content {
            font-size: 18px;
            margin-bottom: 30px;
            color: #333;
        }

    </style>
</head>
<body>
    <div class="certificate">
        <div class="header">SERTIFIKAT PEMILU UDINUS</div>
        <div class="content">
            Diberikan kepada<br>
            <strong>{{ $user }}</strong><br>
            Atas Partisipasi dan Kontribusinya dalam Pemilihan Umum
            DPM-KM Universitas Dian Nuswantoro.
        </div>
    </div>
</body>
</html>
