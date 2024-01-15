@extends('dashboard.layouts.main')

@section('thisContent')
    <div class="card shadow mb-4">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="card-header py-3 text-center">
            <h3 class="m-0 font-weight-bold text-primary">{{ $candidate->status }}</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="my-3 text-white">
                    <div class="card bg-primary border-0 mx-auto" style="width: 95%;">
                        <div class="row p-3">
                            <div class="col-md-6">
                                <h4 class="text-center mb-3">Calon Ketua</h4>
                                @if ($candidate->ketua->image)
                                    <img src="{{ asset('storage/' . $candidate->ketua->image) }}" class="card-img-top mx-auto d-block" style="width: 50%; border-radius: 20px;" alt="{{ $candidate->ketua->name }}">
                                @else
                                    <img src="{{ asset('img/default.jpg') }}" class="card-img-top mx-auto d-block" alt="Default Image" style="width: 50%; border-radius: 20px;">
                                @endif
                                <div class="text-center mt-3">
                                    <h5>{{ $candidate->ketua->name }}<br>{{ $candidate->ketua->nim }}</h5>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4 class="text-center mb-3">Calon Wakil</h4>
                                @if ($candidate->wakil->image)
                                    <img src="{{ asset('storage/' . $candidate->wakil->image) }}" class="card-img-top mx-auto d-block" style="width: 50%; border-radius: 20px;" alt="{{ $candidate->wakil->name }}">
                                @else
                                    <img src="{{ asset('img/default.jpg') }}" class="card-img-top mx-auto d-block" alt="Default Image" style="width: 50%; border-radius: 20px;">
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
                            <h4 class="text-weight-bold text-center mt-4">Pengalaman</h4>
                            <p class="text-justify">{!! $candidate->experience!!}</p>
                        </div>
                        <div class="card-body d-flex justify-content-center">
                            <a href="/kandidat" class="btn btn-success mx-1"><i class="fas fa-arrow-left"></i> Kembali</a>
                            <a href="/kandidat/{{ $candidate->slug }}/edit" class="btn btn-warning mx-1"><i class="fas fa-edit"></i> Edit</a>
                            <form action="/kandidat/{{ $candidate->id }}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger text-white mx-1" onclick="return confirm('Apakah Yakin Untuk Dihapus?')"><i class="fas fa-trash-alt"></i> Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
