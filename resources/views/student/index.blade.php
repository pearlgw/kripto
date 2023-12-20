@extends('layouts.main')

@section('contents')
    @include('layouts.partials.navbar')

    <div class="container">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" style="width: 50%" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <h2 class="text-center my-4">Vote Kandidat Ketua Dan Wakil DPM-KM Udinus</h2>
        <div class="row">
            @foreach ($candidates as $candidate)
                <div class="col-md-6 my-3">
                    <div class="card bg-body-secondary border-0" style="width: 100%;">
                        <h2 class="text-center py-2">Paslon {{ $loop->iteration }}</h2>
                        <div class="row p-3">
                            <div class="col-md-6">
                                <h4 class="text-center mb-3">Calon Ketua</h4>
                                <img src="{{ asset('storage/' . $candidate->ketua->image) }}" class="card-img-top" alt="...">
                                <div class="text-center mt-3">
                                    <h5>{{ $candidate->ketua->name }}<br>{{ $candidate->ketua->nim }}</h5>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4 class="text-center mb-3">Calon Wakil</h4>
                                <img src="{{ asset('storage/' . $candidate->wakil->image) }}" class="card-img-top" alt="...">
                                <div class="text-center mt-3">
                                    <h5>{{ $candidate->wakil->name }}<br>{{ $candidate->wakil->nim }}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                        <h4 class="card-title text-center">Visi</h4>
                        <article class="text-center">{!! $candidate->visi !!}</article>
                        <h4 class="card-title text-center">Misi</h4>
                        <article class="text-center">{!! $candidate->misi !!}</article>
                        <h4 class="card-title text-center">Program Kerja</h4>
                        <article class="text-center">{!! $candidate->program_kerja !!}</article>
                        <h4 class="card-title text-center">Experience</h4>
                        <article class="text-center">{!! $candidate->experience !!}</article>
                        <a href="" class="btn btn-info mt-4">Detail</a>
                        @if ($userr->vote)
                            <button type="submit" class="btn btn-danger text-white" onclick="return confirm('Apakah Yakin Untuk Memilih Pasangan Ini?')" disabled>
                                <i class="fas fa-list"></i> Closed
                            </button>
                        @else
                            <form action="/home/vote/{{ $candidate->id }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-warning text-white" onclick="return confirm('Apakah Yakin Untuk Memilih Pasangan Ini?')">
                                    <i class="fas fa-list"></i> Pilih
                                </button>
                            </form>
                        @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
