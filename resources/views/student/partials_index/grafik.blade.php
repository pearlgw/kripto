@if ($totalVotes > 0)
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Rekapitulasi Suara Terbanyak</h1>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div style="width: 90%;">
                    <canvas id="myPieChart"></canvas>
                </div>
            </div>
            <div class="col-md-7 mt-2">
                @php
                    $sortedCandidates = $candidates->sortByDesc(function ($candidate) {
                        return $candidate->getTotalVotes();
                    });
                    $topCandidate = $sortedCandidates->first();
                @endphp

                @if ($topCandidate && $topCandidate->getTotalVotes() > 0)
                    @foreach ($sortedCandidates as $candidate)
                        <div class="mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <p class="text-center">{{ $candidate->status }}</p>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col">
                                            Calon Ketua: <div class="font-weight-bold text-primary text-uppercase mb-1">{{ $candidate->ketua->name }}</div>
                                            @if ($candidate->ketua->image)
                                                <img src="{{ asset('storage/' . $candidate->ketua->image) }}" class="card-img-top rounded-circle" alt="{{ $candidate->ketua->name }}" style="width: 30%">
                                            @else
                                                <img src="{{ asset('img/default.jpg') }}" class="card-img-top rounded-circle" alt="Default Image" style="width: 30%">
                                            @endif
                                        </div>
                                        <div class="col">
                                            Calon Wakil: <div class="font-weight-bold text-primary text-uppercase mb-1">{{ $candidate->wakil->name }}</div>
                                            @if ($candidate->wakil->image)
                                                <img src="{{ asset('storage/' . $candidate->wakil->image) }}" class="card-img-top rounded-circle" alt="{{ $candidate->wakil->name }}" style="width: 30%">
                                            @else
                                                <img src="{{ asset('img/default.jpg') }}" class="card-img-top rounded-circle" alt="Default Image" style="width: 30%">
                                            @endif
                                        </div>
                                        <div class="col-auto">
                                            @php
                                                $totalVotes = $totalVotes != 0 ? $totalVotes : 1; // Menetapkan $totalVotes ke 1 jika $totalVotes adalah 0
                                                $percentage = ($totalVotes != 0) ? ($candidate->getTotalVotes() / $totalVotes) * 100 : 0;
                                            @endphp

                                            <div class="h3 mt-2 font-weight-bold text-gray-800 text-center d-block">
                                                <i class="fas fa-users fa-2x text-gray-300"></i>
                                                <p>{{ number_format($percentage, 2) }}%</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <small class="text-body-secondary">Last updated {{ $candidate->getLastVoteTime() }}</small>
                                </div>
                            </div>
                        </div>

                        @if ($candidate->id === $topCandidate->id)
                            @break
                        @endif
                    @endforeach
                @endif
            </div>
        </div>
    @endif


    <script>
        var ctx = document.getElementById('myPieChart').getContext('2d');

        // Mendapatkan data dari PHP Blade
        var paslonVotes = @json($paslonVotes);
        var totalVotes = @json($totalVotes);

        var labels = [];
        var data = [];

        paslonVotes.forEach(function(paslon) {
            var percentage = totalVotes !== 0 ? (paslon.votes / totalVotes) * 100 : 0;
            labels.push('Paslon ' + paslon.paslon_id + ' (' + percentage.toFixed(2) + '%)'); // Menambahkan persentase di label
            data.push(percentage.toFixed(2)); // Pembulatan dua desimal
        });

        var backgroundColors = [
            'rgba(142,183,195, 0.7)',
            'rgba(171,16,6, 0.7)',
            'rgba(226,93,19, 0.7)',
            'rgba(236,184,0, 0.7)',
            'rgba(239,232,219, 0.7)',
        ];

        // Jika belum ada yang memilih, atur warna latar belakang menjadi abu-abu
        if (totalVotes === 0) {
            backgroundColors = ['rgba(169, 169, 169, 0.7)']; // Warna abu-abu
        }

        var myPieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    data: data,
                    backgroundColor: backgroundColors,
                }],
            },
            options: {
                cutoutPercentage: 0, // Set cutoutPercentage ke 0 agar bundaran tidak dipotong
            },
        });
    </script>
