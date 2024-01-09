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
                <p>Masukan token yang sudah dikirim melalui email di dalam form inputan ini, dan klik Cek Validasi. <br>
                    Kemudian akan muncul tombol unduh sertifikat, lalu di unduh</p>


                <form action="/cek-integrasi" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="integrasi" class="form-label">Masukan Token</label>
                        <input type="text" class="form-control" name="integrasi" id="integrasi">
                    </div>
                    <button type="submit" class="btn btn-primary">Cek Validasi</button>
                    <a href="/home" class="btn btn-secondary">Kembali</a>
                </form>
                @if (session('downloadUrl'))
                    <a href="{{ session('downloadUrl') }}" class="btn btn-warning mt-2">Unduh Sertifikat</a>
                @endif
            </div>
        </div>
    </div>
@endsection
