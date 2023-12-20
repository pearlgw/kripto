@extends('layouts.main')

@section('contents')
    @include('layouts.partials.navbar')

    <div class="container">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" style="width: 50%" role="alert">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" style="width: 50%" role="alert">
                {{ session('error') }}
            </div>
        @endif

        <h2>Cek Integrasi</h2>
        <form action="/cek-integrasi" method="POST">
            @csrf
            <div class="mb-3">
                <label for="integrasi" class="form-label">Masukan Token</label>
                <input type="text" class="form-control" name="integrasi" id="integrasi">
            </div>
            <button type="submit">cek validasi</button>
        </form>
        {{-- <a href="/download-certificate" class="btn btn-primary">Unduh Sertifikat PDF</a> --}}
        @if(session('downloadUrl'))
            <a href="{{ session('downloadUrl') }}" class="btn btn-primary">Unduh Sertifikat</a>
        @endif
    </div>
@endsection
