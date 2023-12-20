@extends('dashboard.layouts.main')

@section('thisContent')
<div class="card shadow mb-4">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h3 class="m-0 font-weight-bold text-primary">Data Student</h3>
        <a href="/mahasiswa/create" class="btn btn-primary d-block">Create New Student</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Alamat</th>
                        <th>Image</th>
                        <th>Action</th>
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
                            <td style="vertical-align: middle;"><img src="{{ asset('storage/' . $usr->image) }}" style="width: 50px"></td>
                            <td style="vertical-align: middle;">
                                <a href="/mahasiswa/{{ $usr->slug }}/edit" class="badge bg-warning"><i class="fas fa-edit"></i></a>
                                <form action="/mahasiswa/{{ $usr->slug}}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Apakah Yakin Untuk Dihapus?')">
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
