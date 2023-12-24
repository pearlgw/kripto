@extends('dashboard.layouts.main')

@section('thisContent')
    <div class="card shadow mb-4">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="card-header py-3 text-center">
            <h3 class="m-0 font-weight-bold text-primary">Detail Paslon</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="my-3 text-white">
                    <div class="card bg-primary border-0 mx-auto" style="width: 95%;">
                        <div class="row p-3">
                            <div class="col-md-6">
                                <h4 class="text-center mb-3">Calon Ketua</h4>
                                @if ($candidate->ketua->image)
                                    <img src="{{ asset('storage/' . $candidate->ketua->image) }}" class="card-img-top mx-auto d-block rounded-circle" style="width: 50%" alt="{{ $candidate->ketua->name }}">
                                @else
                                    <img src="{{ asset('storage/default.jpg') }}" class="card-img-top mx-auto d-block rounded-circle" alt="Default Image" style="width: 50%">
                                @endif
                                <div class="text-center mt-3">
                                    <h5>{{ $candidate->ketua->name }}<br>{{ $candidate->ketua->nim }}</h5>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4 class="text-center mb-3">Calon Wakil</h4>
                                @if ($candidate->wakil->image)
                                    <img src="{{ asset('storage/' . $candidate->wakil->image) }}" class="card-img-top mx-auto d-block rounded-circle" style="width: 50%" alt="{{ $candidate->wakil->name }}">
                                @else
                                    <img src="{{ asset('storage/default.jpg') }}" class="card-img-top mx-auto d-block rounded-circle" alt="Default Image" style="width: 50%">
                                @endif
                                <div class="text-center mt-3">
                                    <h5>{{ $candidate->wakil->name }}<br>{{ $candidate->wakil->nim }}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <h4 class="text-weight-bold text-center">Visi</h4>
                            <p class="text-justify">{!! $candidate->visi !!}</p>
                            <h4 class="text-weight-bold text-center mt-4">Misi</h4>
                            <p class="text-justify">{!! $candidate->misi !!}</p>
                            <h4 class="text-weight-bold text-center mt-4">Program Kerja</h4>
                            <p class="text-justify">{!! $candidate->program_kerja !!}</p>
                            <h4 class="text-weight-bold text-center mt-4">Experience</h4>
                            <p class="text-justify">{!! $candidate->experience !!}</p>
                        </div>
                        <div class="card-body">
                            <div class="row d-flex justify-content-center">
                                <a href="/student" class="btn btn-info mx-2"><i class="fas fa-arrow-left"></i> Kembali</a>
                                @if ($userr->vote)
                                    <button type="submit" class="btn btn-danger text-white"disabled>
                                        <i class="fas fa-times"></i> Closed
                                    </button>
                                @else
                                    <form action="/home/vote/{{ $candidate->id }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-warning text-white" onclick="return confirm('Apakah Yakin Untuk Memilih Pasangan Ini?')">
                                            <i class="fas fa-user-check"></i> Pilih
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
