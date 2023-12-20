@extends('dashboard.layouts.main')

@section('thisContent')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Candidate</h1>
    </div>
    <form action="/kandidat" method="POST">
        @csrf
        <div class="mb-3">
            <label for="kandidat" class="form-label">Kandidat Ketua</label>
            <select class="form-control" id="kandidat" name="user_id_ketua" required>
                @foreach ($students as $student)
                    @if (old('user_id_ketua') == $student->id)
                        <option value="{{ $student->id }}" selected>{{ $student->nim }} {{ $student->name }}</option>
                    @else
                        <option value="{{ $student->id }}">{{ $student->nim}} {{ $student->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="kandidat" class="form-label">Kandidat Wakil</label>
            <select class="form-control" id="kandidat" name="user_id_wakil" required>
                @foreach ($students as $student)
                    @if (old('user_id_wakil') == $student->id)
                        <option value="{{ $student->id }}" selected>{{ $student->nim }} {{ $student->name }}</option>
                    @else
                        <option value="{{ $student->id }}">{{ $student->nim}} {{ $student->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="visi" class="form-label">Visi</label>
                @error('visi')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            <input id="visi" type="hidden" name="visi" value="{{ old('visi') }}">
            <trix-editor input="visi"></trix-editor>
        </div>
        <div class="mb-3">
            <label for="misi" class="form-label">Misi</label>
                @error('misi')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            <input id="misi" type="hidden" name="misi" value="{{ old('misi') }}">
            <trix-editor input="misi"></trix-editor>
        </div>
        <div class="mb-3">
            <label for="program_kerja" class="form-label">Program Kerja</label>
                @error('program_kerja')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            <input id="program_kerja" type="hidden" name="program_kerja" value="{{ old('program_kerja') }}">
            <trix-editor input="program_kerja"></trix-editor>
        </div>
        <div class="mb-3">
            <label for="experience" class="form-label">Experience</label>
                @error('experience')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            <input id="experience" type="hidden" name="experience" value="{{ old('experience') }}">
            <trix-editor input="experience"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
