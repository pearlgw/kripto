@extends('dashboard.layouts.main')

@section('thisContent')
<div class="card shadow mb-4">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h3 class="m-0 font-weight-bold text-primary">Data Kandidat</h3>
        <a href="/kandidat/create" class="btn btn-primary d-block">Tambah Kandidat Baru</a>
    </div>
    <div class="card-body">
        <div class="row">
            @foreach ($candidates as $candidate)
                <div class="col-md-4 my-3 text-white">
                    <div class="card bg-primary border-0" style="width: 100%;">
                        <h4 class="text-center py-4">{{ $candidate->status }}</h4>
                        <div class="row px-3">
                            <div class="col-md-6">
                                <h5 class="text-center mb-3">Calon Ketua</h5>
                                @if ($candidate->ketua->image)
                                    <img src="{{ asset('storage/' . $candidate->ketua->image) }}" class="card-img-top" alt="{{ $candidate->ketua->name }}" style="border-radius: 20px;">
                                @else
                                    <img src="{{ asset('img/default.jpg') }}" class="card-img-top" alt="Default Image" style="border-radius: 20px;">
                                @endif
                                <div class="text-center mt-3">
                                    <p>{{ $candidate->ketua->name }}<br>{{ $candidate->ketua->nim }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5 class="text-center mb-3">Calon Wakil</h5>
                                @if ($candidate->wakil->image)
                                    <img src="{{ asset('storage/' . $candidate->wakil->image) }}" class="card-img-top" style="border-radius: 20px;" alt="{{ $candidate->wakil->name }}">
                                @else
                                    <img src="{{ asset('img/default.jpg') }}" class="card-img-top" style="border-radius: 20px;" alt="Default Image">
                                @endif
                                <div class="text-center mt-3">
                                    <p>{{ $candidate->wakil->name }}<br>{{ $candidate->wakil->nim }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body d-flex justify-content-center">
                            <a href="/kandidat/{{ $candidate->slug }}" class="btn btn-info mx-1"><i class="fas fa-eye"></i> Lihat</a>
                            <a href="/kandidat/{{ $candidate->slug }}/edit" class="btn btn-warning mx-1"><i class="fas fa-edit"></i> Edit</a>
                            <form action="/kandidat/{{ $candidate->id }}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                {{-- <button type="submit" class="btn btn-danger text-white mx-1" onclick="return confirm('Yakin hapus kandidat?')"><i class="fas fa-trash-alt"></i> Hapus</button> --}}

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger text-white mx-1" data-toggle="modal" data-target="#exampleModalCenter{{ $candidate->id }}">
                                    Hapus
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter{{ $candidate->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-dark" id="exampleModalLabel">Konfirmasi</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-dark">
                                            Anda yakin akan menghapus kandidat ini?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
