@extends('dashboard.layouts.main')

@section('thisContent')
    <div class="card shadow mb-4">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="card-header py-3 text-center">
            <h3 class="m-0 font-weight-bold text-primary">Detail Mahasiswa {{ $users->name }}</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="card bg-primary border-0 mx-auto text-white p-3">
                        <div class="container">
                            @if ($users->image)
                                <img src="{{ asset('public/storage/' . $users->image) }}" width="50%" class="rounded-circle mx-auto d-block pb-4">
                            @else
                                <img src="{{ asset('img/default.jpg') }}" width="50%" class="rounded-circle mx-auto d-block pb-4">
                            @endif
                            NIM <div class="font-weight-bold mb-1">{{ $users->nim }}</div>
                            Nama <div class="font-weight-bold mb-1">{{ $users->name }}</div>
                            Email <div class="font-weight-bold mb-1">{{ $users->email }}</div>
                            No Telpon <div class="font-weight-bold mb-1">{{ $users->phone_number }}</div>
                            Alamat <div class="font-weight-bold mb-1">{{ $users->alamat }}</div>
                            <div class="card-body d-flex justify-content-center">
                                <a href="/mahasiswa" class="btn btn-success mx-1"><i class="fas fa-arrow-left"></i> Kembali</a>
                                <a href="/mahasiswa/{{ $users->slug }}/edit" class="btn btn-warning mx-1"><i class="fas fa-edit"></i> Edit</a>
                                <form action="/mahasiswa/{{ $users->slug }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger text-white mx-1" onclick="return confirm('Yakin hapus data?')"><i class="fas fa-trash-alt"></i> Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
