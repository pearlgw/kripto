@extends('dashboard.layouts.main')

@section('thisContent')
<div class="card shadow mb-4">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h3 class="m-0 font-weight-bold text-primary">Total Suara</h3>
    </div>
    <div class="card-body">
        <div class="row">
            @foreach ($candidates as $candidate)
                <div class="col-md-6">
                    <div class="card mb-3">
                        <h2 class="card-title text-center">Paslon {{ $loop->iteration }}</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="text-center">Calon Ketua</h3>
                                <img src="{{ asset('storage/' . $candidate->ketua->image) }}" class="card-img-top" alt="...">
                                <h5 class="text-center">{{ $candidate->ketua->name }}</h5>
                            </div>
                            <div class="col-md-6">
                                <h3 class="text-center">Calon Wakil</h3>
                                <img src="{{ asset('storage/' . $candidate->wakil->image) }}" class="card-img-top" alt="...">
                                <h5 class="text-center">{{ $candidate->wakil->name }}</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <h2 class="card-text text-weight-bold">Total Suara: {{ $candidate->getTotalVotes() }}</h2>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">Last updated {{ $candidate->getLastVoteTime() }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

{{-- <div class="card mb-3" style="max-width: 540px;">
    <h5 class="text-center">Paslon {{ $loop->iteration }}</h5>
    <hr>
    <div class="row">
        <div class="col-md-2">
            <img src="{{ asset('storage/' . $candidate->ketua->image) }}" width="100%" class="img-fluid" alt="...">
        </div>
        <div class="col-md-2">
            <img src="{{ asset('storage/' . $candidate->wakil->image) }}" class="img-fluid" alt="..." width="100%">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <p class="card-text">Total Suara: {{ $candidate->getTotalVotes() }}</p>
                <p>Calon Ketua {{ $candidate->ketua->name }} & Calon Wakil {{ $candidate->wakil->name }}</p>
                <p class="card-text"><small class="text-body-secondary">Last Updated {{ $candidate->getLastVoteTime() }}</small></p>
            </div>
        </div>
    </div>
</div> --}}
