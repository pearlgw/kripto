@if ($userr->vote)
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h4 class="h4 mb-0 text-primary font-weight-bold">Terima Kasih Sudah Berpartisipasi!</h4>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card bg-primary shadow border-0 text-white mb-4">
                <a class="btn btn-secondary" data-toggle="collapse" href="#my-candidate" role="button" aria-expanded="false" aria-controls="my-candidate">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrows-expand" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 8M7.646.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 1.707V5.5a.5.5 0 0 1-1 0V1.707L6.354 2.854a.5.5 0 1 1-.708-.708zM8 10a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 14.293V10.5A.5.5 0 0 1 8 10"/>
                        </svg>
                    Kandidat pilihan anda:
                </a>
                <div class="collapse row p-3" id="my-candidate" style="transition: 0.3s;">
                    <div class="col-md-6">
                        <h5 class="text-center mb-3">Calon Ketua</h5>
                        @if ($selectedCandidate->ketua->image)
                            <img src="{{ asset('storage/' . $selectedCandidate->ketua->image) }}" class="card-img-top rounded-circle" alt="{{ $selectedCandidate->ketua->name }}">
                        @else
                            <img src="{{ asset('img/default.jpg') }}" class="card-img-top rounded-circle" alt="Default Image">
                        @endif
                        <div class="text-center mt-3">
                            <p class="font-weight-bold">{{ $selectedCandidate->ketua->name }}</p>
                            <p>{{ $selectedCandidate->ketua->nim }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h5 class="text-center mb-3">Calon Wakil</h5>
                        @if ($selectedCandidate->wakil->image)
                            <img src="{{ asset('storage/' . $selectedCandidate->wakil->image) }}" class="card-img-top rounded-circle" alt="{{ $selectedCandidate->wakil->name }}">
                        @else
                            <img src="{{ asset('img/default.jpg') }}" class="card-img-top rounded-circle" alt="Default Image">
                        @endif
                        <div class="text-center mt-3">
                            <p class="font-weight-bold">{{ $selectedCandidate->wakil->name }}</p>
                            <p>{{ $selectedCandidate->wakil->nim }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card shadow p-3">
                <div class="card bg-success p-3 text-light">
                    Anda telah berhasil mengikuti voting. Silahkan ikuti panduan di bawah ini.
                </div>
                <p class="mt-3">Setelah mendapatkan email maka masukan <b>token</b> anda di menu web <i class="bi bi-shield-fill-check"></i> <b> Cek integrasi</b>, untuk mengetahui keamanan data pemilihan anda.</p>
                <p>Kemudian cetak sertifikat sebagai tanda partisipasi anda dalam pemilihan ini.</p>
                <p>Terima kasih</p>
                <a href="/cek-integrasi" class="btn btn-primary" style="width: 25%;">
                    <i class="bi bi-shield-fill-check"></i>
                    Cek Integrasi
                </a>
            </div>
        </div>
    </div>
@endif
