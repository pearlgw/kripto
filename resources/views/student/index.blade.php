@extends('dashboard.layouts.main')

@section('thisContent')
    @if (session()->has('success'))
        <div class="overlay" id="overlay"></div>
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert" id="alert">
            <strong class="text-lg"><i class="fas fa-check-circle"></i> {{ session('success') }}</strong>
            <button type="button" class="close" onclick="closeAlert()">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                showAlert();
            });

            function showAlert() {
                var overlay = document.getElementById('overlay');
                var alertBox = document.getElementById('alert');

                overlay.style.display = 'block';

                alertBox.style.display = 'block';
            }

            function closeAlert() {
                var overlay = document.getElementById('overlay');
                var alertBox = document.getElementById('alert');

                overlay.style.display = 'none';
                alertBox.style.display = 'none';
            }
        </script>
    @endif


    <div class="card shadow mb-4">
        <div class="card-body" style="border-radius: 100px">
            <h3 class="my-4 font-weight-bold text-primary text-center">Selamat Datang di Evoku, {{ $user }}!</h3>
        </div>
    </div>

    @include('student.partials_index.tataCaraVote')

    @include('student.partials_index.sukses')

    @include('student.partials_index.daftarKandidat')

    @include('student.partials_index.totalSuara')

    @include('student.partials_index.grafik')
@endsection
