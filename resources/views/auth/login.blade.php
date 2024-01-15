@extends('layouts.main')

@section('content')
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card" style="width: 25rem;">
            <div class="text-center mt-5">
                <img src="{{ asset('img/udinus.png') }}" alt="udinus" width="20%" class="ulogo">
                <img src="{{ asset('img/evoku.png') }}" alt="evoku" width="30%" class="ulogo ml-3">
                {{-- <img src="{{ asset('img/evoku.png') }}" alt="Udinus" width="30%" class="ulogo mt-3"> --}}
                <h4 class="mt-3 font-weight-bold text-primary">E-Voting Kampus Udinus</h4>
                <style>
                    /* .ulogo:hover{width: 32%;} */
                    /* .ulogo{transition: 0.3s;} */
                    .sbmlog:hover{transform: scale(1.03,1.03)}
                    .sbmlog{transition: 0.2s}
                </style>
            </div>

            @if (session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                    {{ session('error') }}
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
                </div>
            @endif

            <div class="card-body">
                <form method="post" action="/">
                    @csrf
                    <div class="mb-3">
                        <label for="nim" class="form-label"><b>NIM</b></label>
                        <input type="text" name="nim" class="form-control @error('nim') is-invalid @enderror"
                            placeholder="NIM" id="nim" required>
                        @error('nim')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label"><b>Password</b></label>
                        <input type="password" name="password" placeholder="Password"
                            class="form-control @error('password') is-invalid @enderror" id="password" required>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <center>
                        <button type="submit" class="sbmlog btn btn-primary btn-block rounded-pill font-weight-bold">Masuk</button>
                    </center>
                </form>
            </div>
        </div>
    </div>
@endsection
