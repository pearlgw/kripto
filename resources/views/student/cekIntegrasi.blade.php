@extends('dashboard.layouts.main')

@section('thisContent')
    <div class="card shadow mb-4">
        <div class="card-body" style="border-radius: 100px">
            <div class="container">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" style="width: 50%" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" style="width: 50%" role="alert">
                        {{ session('error') }}
                    </div>
                @endif

                <h2>Cek Integrasi</h2>
                <p>Masukan token yang sudah dikirim melalui email pada form inputan ini, dan klik Cek Validasi. <br>
                    Kemudian unduh sertifikat tersebut pada tombol unduh sertifikat berikut.</p>

                <form action="/cek-integrasi" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="integrasi" class="form-label">Masukan Token</label>
                        <input type="text" class="form-control" name="integrasi" id="integrasi">
                    </div>
                    <button type="submit" class="btn btn-primary">Cek Validasi</button>
                    <a href="/student" class="btn btn-secondary">Kembali</a>
                    @if (session('downloadUrl'))
                        <a href="{{ session('downloadUrl') }}" class="btn btn-warning">Unduh Sertifikat</a>
                    @endif
                </form>
            </div>
        </div>
    </div>
@endsection
