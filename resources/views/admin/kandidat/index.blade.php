@extends('dashboard.layouts.main')

@section('thisContent')
<div class="card shadow mb-4">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h3 class="m-0 font-weight-bold text-primary">Data Candidate</h3>
        <a href="/kandidat/create" class="btn btn-primary d-block">Create New Candidate</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <div class="row">
                @foreach ($candidates as $candidates)
                    <div class="col-md-6">
                        <div class="card mb-3" style="width: 100%; background-color: whitesmoke">
                            <h2 class="text-center py-2">Paslon {{ $loop->iteration }}</h2>
                            <div class="row p-3">
                                <div class="col-md-6">
                                    <h4 class="text-center mb-3">Calon Ketua</h4>
                                    <img src="{{ asset('storage/' . $candidates->ketua->image) }}" class="card-img-top" alt="...">
                                    <div class="text-center mt-3">
                                        <h5>{{ $candidates->ketua->name }}<br>{{ $candidates->ketua->nim }}</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="text-center mb-3">Calon Wakil</h4>
                                    <img src="{{ asset('storage/' . $candidates->wakil->image) }}" class="card-img-top" alt="...">
                                    <div class="text-center mt-3">
                                        <h5>{{ $candidates->wakil->name }}<br>{{ $candidates->wakil->nim }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                            <h4 class="card-title">Visi</h4>
                            <article>{!! $candidates->visi !!}</article>
                            <h4 class="card-title">Misi</h4>
                            <article>{!! $candidates->misi !!}</article>
                            <h4 class="card-title">Program Kerja</h4>
                            <article>{!! $candidates->program_kerja !!}</article>
                            <h4 class="card-title">Experience</h4>
                            <article>{!! $candidates->experience !!}</article>
                            <a href="/kandidat/{{ $candidates->id }}/edit" class="btn btn-primary">Edit</a>
                            <form action="/kandidat/{{ $candidates->id }}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger text-white" onclick="return confirm('Apakah Yakin Untuk Dihapus?')"><i class="fas fa-trash-alt"></i> Hapus</button>
                            </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
