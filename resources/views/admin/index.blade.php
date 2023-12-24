@extends('dashboard.layouts.main')

@section('thisContent')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Mahasiswa</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $countUser }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Kandidat</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $countCandidate }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Keseluruhan Suara</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $countVote }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Total Suara</h1>
    </div>
    <div class="row">
        @foreach ($candidates as $candidate)
            <div class="col-md-4 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <p class="text-center">Paslon {{ $loop->iteration }}</p>
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                Calon Ketua: <div class="font-weight-bold text-primary text-uppercase mb-1">{{ $candidate->ketua->name }}</div>
                                Calon Wakil: <div class="font-weight-bold text-primary text-uppercase mb-1">{{ $candidate->wakil->name }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                                <div class="h3 mt-2 font-weight-bold text-gray-800 text-center d-block"><p>{{ $candidate->getTotalVotes() }}</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Last updated {{ $candidate->getLastVoteTime() }}</small>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
