<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary">Vote Kandidat Ketua dan Wakil Ketua DPM-KM Udinus</h4>
    </div>
    <div class="card-body">
        <div class="row">
            @foreach ($candidates as $candidate)
                <div class="col-md-4 my-3 text-white">
                    <div class="card bg-primary border-0 pt-4" style="width: 100%;">
                        <h4 class="text-center font-weight-bold py-2">Paslon {{ $loop->iteration }}</h4>
                        <div class="row p-3">
                            <div class="col-md-6">
                                <h5 class="text-center mb-3">Calon Ketua</h5>
                                @if ($candidate->ketua->image)
                                    <img src="{{ asset('storage/' . $candidate->ketua->image) }}" class="card-img-top rounded-circle" alt="{{ $candidate->ketua->name }}">
                                @else
                                    <img src="{{ asset('img/default.jpg') }}" class="card-img-top rounded-circle" alt="Default Image">
                                @endif
                                <div class="text-center mt-3">
                                    <p class="font-weight-bold">{{ $candidate->ketua->name }}<br>{{ $candidate->ketua->nim }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5 class="text-center mb-3">Calon Wakil</h5>
                                @if ($candidate->wakil->image)
                                    <img src="{{ asset('storage/' . $candidate->wakil->image) }}" class="card-img-top rounded-circle" alt="{{ $candidate->wakil->name }}">
                                @else
                                    <img src="{{ asset('img/default.jpg') }}" class="card-img-top rounded-circle" alt="Default Image">
                                @endif
                                <div class="text-center mt-3">
                                    <p class="font-weight-bold">{{ $candidate->wakil->name }}<br>{{ $candidate->wakil->nim }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row d-flex justify-content-center">
                                <a href="/student/{{ $candidate->id }}" class="btn btn-info mx-2"><i class="fas fa-list-alt"></i> Detail</a>
                                @if ($userr->vote)
                                    <button type="submit" class="btn btn-danger text-white"disabled>
                                        <i class="fas fa-times"></i> Ditutup
                                    </button>
                                @else
                                    <form action="/home/vote/{{ $candidate->id }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-success text-white" onclick="return confirm('Apakah Anda yakin untuk memilih pasangan ini?')">
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
