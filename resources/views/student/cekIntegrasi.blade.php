@extends('dashboard.layouts.main')

@section('thisContent')
    <div class="card shadow mb-4">
        <div class="card-body" style="border-radius: 100px">
            <div class="container">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" style="width: fit-content;" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" style="width: fit-content;" role="alert">
                        <span>{{ session('error') }}</span>
                        <a href="https://wa.me/6285870254510?" class="btn btn-outline-danger ml-2" target="_blank"><i class="bi bi-flag-fill"></i> Laporkan</a>
                    </div>
                @endif

                <h2>Cek Integrasi</h2>
                <p>Masukan token yang sudah dikirim melalui email di dalam form inputan ini, dan klik Cek Validasi. <br>
                    Kemudian anda dapat mengunduh sertifikat</p>

                <form action="/cek-integrasi" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="integrasi" class="form-label">Masukan Token</label>
                        <input type="text" class="form-control" name="integrasi" id="integrasi">
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="bi bi-patch-check-fill"></i> Cek Validasi</button>
                    @if (session('downloadUrl'))
                    <a href="{{ session('downloadUrl') }}" class="btn btn-primary ml-2">
                        <i class="bi bi-download"></i>
                            Unduh Sertifikat
                        </a>
                    @endif
                    <a href="/home" class="btn btn-outline-secondary ml-2"><i class="bi bi-arrow-left"></i> Kembali</a>
                </form>
            </div>
        </div>
    </div>
@endsection
