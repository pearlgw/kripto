<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h3 class="m-0 font-weight-bold text-primary">Vote Kandidat Ketua Dan Wakil DPM-KM Udinus</h3>
    </div>
    <div class="card-body">
        <div class="row">
            @foreach ($candidates as $candidate)
                <div class="col-md-4 my-3 text-white">
                    <div class="card bg-primary border-0" style="width: 100%;">
                        <h4 class="text-center py-2">Paslon {{ $loop->iteration }}</h4>
                        <div class="row p-3">
                            <div class="col-md-6">
                                <h5 class="text-center mb-3">Calon Ketua</h5>
                                @if ($candidate->ketua->image)
                                    <img src="{{ asset('storage/' . $candidate->ketua->image) }}" class="card-img-top rounded-circle" alt="{{ $candidate->ketua->name }}">
                                @else
                                    <img src="{{ asset('storage/default.jpg') }}" class="card-img-top rounded-circle" alt="Default Image">
                                @endif
                                <div class="text-center mt-3">
                                    <p>{{ $candidate->ketua->name }}<br>{{ $candidate->ketua->nim }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5 class="text-center mb-3">Calon Wakil</h5>
                                @if ($candidate->wakil->image)
                                    <img src="{{ asset('storage/' . $candidate->wakil->image) }}" class="card-img-top rounded-circle" alt="{{ $candidate->wakil->name }}">
                                @else
                                    <img src="{{ asset('storage/default.jpg') }}" class="card-img-top rounded-circle" alt="Default Image">
                                @endif
                                <div class="text-center mt-3">
                                    <p>{{ $candidate->wakil->name }}<br>{{ $candidate->wakil->nim }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row d-flex justify-content-center">
                                <a href="/student/{{ $candidate->id }}" class="btn btn-info mx-2"><i class="fas fa-list-alt"></i> Detail</a>
                                @if ($userr->vote)
                                    <button type="submit" class="btn btn-danger text-white"disabled>
                                        <i class="fas fa-times"></i> Closed
                                    </button>
                                @else
                                    <form action="/home/vote/{{ $candidate->id }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-warning text-white" onclick="return confirm('Apakah Yakin Untuk Memilih Pasangan Ini?')">
                                            <i class="fas fa-user-check"></i> Pilih
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
