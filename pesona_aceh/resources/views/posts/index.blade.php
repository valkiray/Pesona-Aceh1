@extends('layouts.main')

@section('container')
@csrf
<h1>Post your favorite vacation spot in Aceh here !</h1>
<a href="{{ route('posts.create') }}">Create New Post</a>
<section class="flex flex-col justify-center max-w-6xl min-h-screen px-4 py-10 mx-auto sm:px-6">
    @foreach ($posts as $post)
    <div class="flex flex-wrap items-center justify-between mb-8">
    </div>

    <div class="flex flex-wrap -mx-4">
        <div class="w-full max-w-full mb-8 sm:w-1/2 px-4 lg:w-1/3 flex flex-col">
            @if ($post->images->isNotEmpty())
            <img src="{{ asset('storage/' . str_replace('public/', '', $post->images->first()->path)) }}" alt="{{ $post->nama }}" class="object-cover object-center w-full h-48" />
            @endif
            <div class="flex flex-grow">
                <div class="triangle"></div>
                <div class="flex flex-col justify-between px-4 py-6 bg-white border border-gray-400 text">
                    <div>
                        <a href="{{ route('posts.show', $post->id) }}"
                            class="inline-block mb-4 text-xs font-bold capitalize border-b-2 border-blue-600 hover:text-blue-600">{{ $post->nama }}</a>
                        <a href="{{ $post->googlemaps }}" target="_blank"
                            class="block mb-4 text-2xl font-black leading-tight hover:underline hover:text-blue-600">
                            Lihat di Google Maps
                        </a>
                        <p class="mb-4">{{ $post->content }}</p>
                    </div>
                    <div>
                        <a href="{{ route('posts.show', $post->id) }}"
                            class="inline-block pb-1 mt-2 text-base font-black text-blue-600 uppercase border-b border-transparent hover:border-blue-600">Read
                            More -></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</section>
@endsection
