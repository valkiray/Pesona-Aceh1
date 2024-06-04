@extends('layouts.main')

@section('container')
    <h1>Halaman Gallery</h1>
    <div class="row">
        @foreach ($images as $image)
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ asset('storage/' . str_replace('public/', '', $image->path)) }}" class="card-img-top" alt="Image">
                </div>
            </div>
        @endforeach
    </div>
@endsection
