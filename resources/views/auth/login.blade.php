@extends('layouts.main')

@section('content')
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card" style="width: 25rem;">
            <div class="card-header text-center">
                <img src="{{ asset('img/udinus.png') }}" alt="Udinus" width="20%">
                <h3 class="mt-2">Form Login</h3>
            </div>

            @if (session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="card-body">
                <form method="post" action="/">
                    @csrf
                    <div class="mb-3">
                        <label for="nim" class="form-label"><b>NIM</b></label>
                        <input type="text" name="nim" class="form-control @error('nim') is-invalid @enderror" placeholder="A11.2022.12345"
                            id="nim">
                        @error('nim')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label"><b>Password</b></label>
                        <input type="password" name="password" placeholder="*****"
                            class="form-control @error('password') is-invalid @enderror" id="password">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <center>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </center>
                </form>
            </div>
        </div>
    </div>
@endsection
