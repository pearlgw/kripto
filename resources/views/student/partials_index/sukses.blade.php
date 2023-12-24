@if ($userr->vote)
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Terima Kasih Sudah Berpartisipasi, Pilihan Anda Adalah</h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card bg-info shadow border-0 text-white mb-4">
                <div class="row p-3">
                    <div class="col-md-6">
                        <h5 class="text-center mb-3">Calon Ketua</h5>
                        @if ($selectedCandidate->ketua->image)
                            <img src="{{ asset('storage/' . $selectedCandidate->ketua->image) }}" class="card-img-top rounded-circle" alt="{{ $selectedCandidate->ketua->name }}">
                        @else
                            <img src="{{ asset('storage/default.jpg') }}" class="card-img-top rounded-circle" alt="Default Image">
                        @endif
                        <div class="text-center mt-3">
                            <p>{{ $selectedCandidate->ketua->name }}<br>{{ $selectedCandidate->ketua->nim }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h5 class="text-center mb-3">Calon Wakil</h5>
                        @if ($selectedCandidate->wakil->image)
                            <img src="{{ asset('storage/' . $selectedCandidate->wakil->image) }}" class="card-img-top rounded-circle" alt="{{ $selectedCandidate->wakil->name }}">
                        @else
                            <img src="{{ asset('storage/default.jpg') }}" class="card-img-top rounded-circle" alt="Default Image">
                        @endif
                        <div class="text-center mt-3">
                            <p>{{ $selectedCandidate->wakil->name }}<br>{{ $selectedCandidate->wakil->nim }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow p-3">
                <div class="card bg-success p-3 text-light">
                    Selamat kak {{ $userr->name }} Berhasil memilih kandidat !!! Silahkan ikuti panduan di bawah ini.
                </div>
                <p class="mt-3">Setelah mendapatkan email maka masukan "token" anda di menu web "CEK INTEGRASI", untuk mengetahui keamanan pemilihan kak {{ $userr->name }}.</p>
                <p>Kemudian cetak sertifikat sebagai penanda kak {{ $userr->name }} telah berpartisipasi</p>
                <p>Terima Kasih kak {{ $userr->name }}</p>
                <a href="/cek-integrasi" class="btn btn-primary" style="width: 30%">Cek Integrasi</a>
            </div>
        </div>
    </div>
@endif
