<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h4 class="h4 mb-0 text-primary font-weight-bold">Total Suara</h4>
</div>
<div class="row">
    @foreach ($candidates as $candidate)
        <div class="col-md-4 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            Calon Ketua: <div class="font-weight-bold text-primary mb-1">{{ $candidate->ketua->name }}</div>
                            Calon Wakil: <div class="font-weight-bold text-primary mb-1">{{ $candidate->wakil->name }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                            <div class="h3 mt-2 font-weight-bold text-gray-800 text-center d-block"><p>{{ $voteCounts[$candidate->id] ?? 0 }}</p></div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    @if(isset($voteLastUpdated[$candidate->id]))
                        <small class="text-body-secondary">Terakhir diperbarui {{ $voteLastUpdated[$candidate->id]->diffForHumans() }}</small>
                    @else
                        <small class="text-body-secondary">Belum ada suara</small>
                    @endif
                </div>
            </div>
        </div>
    @endforeach
</div>
