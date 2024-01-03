@extends('dashboard.layouts.main')

@section('thisContent')
    <div class="card shadow mb-4">
        <div class="card-body" style="border-radius: 100px">
            <h2 class="my-4 font-weight-bold text-primary text-center">Selamat Datang {{ $user }}, E-Vote UDINUS</h2>
        </div>
    </div>


    @include('student.partials_index.tataCaraVote')

    @include('student.partials_index.sukses')

    @include('student.partials_index.daftarKandidat')

    @include('student.partials_index.totalSuara')

    @include('student.partials_index.grafik')
@endsection
