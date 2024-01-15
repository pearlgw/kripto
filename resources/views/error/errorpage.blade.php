@extends('dashboard.layouts.main')

@section('thisContent')
    <div style="text-align: center;">
        <h1>Error {{ $statusCode }}</h1>
        <p>{{ $message }}</p>
    </div>
@endsection
