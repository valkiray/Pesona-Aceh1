S@extends('layouts.main')

@section('container')
    <!-- Hero Section -->
    <div class="jumbotron text-center" style="background-image: url('{{ asset('img/hero-bg.jpg') }}'); background-size: cover; color: white;">
        <h1 class="display-4">Welcome to Pesona Aceh</h1>
        <p class="lead">Discover the hidden gems and breathtaking vacation spots in Aceh.</p>
        <a class="btn btn-primary btn-lg" href="#explore" role="button">Explore Now</a>
    </div>

    <!-- Popular Vacation Spots -->
    <section id="explore" class="mt-5">
        <div class="container">
            <h2 class="text-center">Popular Vacation Spots</h2>
            <div class="row mt-4">
                <!-- Spot 1 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('img/danaulauttawar.png') }}" class="card-img-top" alt="Spot 1">
                        <div class="card-body">
                            <h5 class="card-title">Danau Laut Tawar</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <!-- Spot 2 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('img/danauanaklaot.png') }}" class="card-img-top" alt="Spot 2">
                        <div class="card-body">
                            <h5 class="card-title">Danau Anak Laot</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniams.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <!-- Spot 3 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('img/goasarang.png') }}" class="card-img-top" alt="Spot 3">
                        <div class="card-body">
                            <h5 class="card-title">Goa Sarang</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Blog Posts -->
    <section class="mt-5">
        <div class="container">
            <h2 class="text-center">Latest Blog Posts</h2>
            <div class="row mt-4">
                <!-- Blog Post 1 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('img/pantailhokmee.png') }}" class="card-img-top" alt="Blog 1">
                        <div class="card-body">
                            <h5 class="card-title">Pantai Lhok Mee</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Blog Post 2 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('img/airterjunprialaot.png') }}" class="card-img-top" alt="Blog 2">
                        <div class="card-body">
                            <h5 class="card-title">Air Terjun Pria Laot</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Blog Post 3 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('img/buntulrintis.png') }}" class="card-img-top" alt="Blog 3">
                        <div class="card-body">
                            <h5 class="card-title">Buntul Rintis</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
