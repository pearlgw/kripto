<div class="card shadow mb-4 mt-4">
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
                                    <img src="{{ asset('storage/' . $candidate->ketua->image) }}" class="card-img-top" style="border-radius: 20px;" alt="{{ $candidate->ketua->name }}">
                                @else
                                    <img src="{{ asset('img/default.jpg') }}" class="card-img-top" style="border-radius: 20px;" alt="Default Image">
                                @endif
                                <div class="text-center mt-3">
                                    <p class="font-weight-bold">{{ $candidate->ketua->name }}</p>
                                    <p>{{ $candidate->ketua->nim }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5 class="text-center mb-3">Calon Wakil</h5>
                                @if ($candidate->wakil->image)
                                    <img src="{{ asset('storage/' . $candidate->wakil->image) }}" class="card-img-top" style="border-radius: 20px;" alt="{{ $candidate->wakil->name }}">
                                @else
                                    <img src="{{ asset('img/default.jpg') }}" class="card-img-top" style="border-radius: 20px;" alt="Default Image">
                                @endif
                                <div class="text-center mt-3">
                                    <p class="font-weight-bold">{{ $candidate->wakil->name }}</p>
                                    <p>{{ $candidate->wakil->nim }}</p>
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
                                        {{-- <button type="submit" class="btn btn-success text-white" onclick="return confirm('Apakah Anda yakin untuk memilih pasangan ini?')">
                                            <i class="fas fa-user-check"></i> Pilih
                                        </button> --}}

                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-success text-white" data-toggle="modal" data-target="#exampleModalCenter{{ $candidate->id }}">
                                            <i class="fas fa-user-check"></i> Pilih
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalCenter{{ $candidate->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle" style="color:black;"><b>Konfirmasi</b></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body" style="color:black;">
                                                        Anda yakin untuk memilih paslon ini?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                                        <button type="submit" class="btn btn-success"><i class="fas fa-user-check"></i> Kirim</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
