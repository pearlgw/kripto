@extends('dashboard.layouts.main')

@section('thisContent')
<div class="card shadow mb-4">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h3 class="m-0 font-weight-bold text-primary">Data Mahasiswa</h3>
        <a href="/mahasiswa/create" class="btn btn-primary d-block">Tambah Mahasiswa Baru</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No. HP</th>
                        <th>Alamat</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $usr)
                        <tr>
                            <td style="vertical-align: middle;">{{ $loop->iteration }}</td>
                            <td style="vertical-align: middle;">{{ $usr->nim }}</td>
                            <td style="vertical-align: middle;">{{ $usr->name }}</td>
                            <td style="vertical-align: middle;">{{ $usr->email }}</td>
                            <td style="vertical-align: middle;">{{ $usr->phone_number }}</td>
                            <td style="vertical-align: middle;">{{ $usr->alamat }}</td>
                            <td style="vertical-align: middle;">
                                @if ($usr->image)
                                    <img src="{{ asset('storage/' . $usr->image) }}" style="width: 50px" class="rounded-circle">
                                @else
                                    <img src="{{ asset('img/default.jpg') }}" style="width: 50px" class="rounded-circle">
                                @endif
                            </td>
                            <td style="vertical-align: middle;">
                                <a href="/mahasiswa/{{ $usr->slug }}" class="badge bg-primary text-light"><i class="fas fa-eye"></i></a>
                                <a href="/mahasiswa/{{ $usr->slug }}/edit" class="badge bg-warning text-dark"><i class="fas fa-edit"></i></a>
                                <form action="/mahasiswa/{{ $usr->slug}}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Yakin hapus data mahasiswa?')">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
