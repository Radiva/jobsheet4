@extends('layouts.app')

@section('title', 'Home - MyApp')

@section('content')
<!-- Hero Section -->
<div class="jumbotron text-center bg-light py-5">
    <h1 class="display-4">Selamat Datang di MyApp</h1>
    <p class="lead">Aplikasi Laravel sederhana yang menampilkan fitur-fitur modern dengan Laravel Blade.</p>
    <a href="{{ route('profile') }}" class="btn btn-primary btn-lg">Lihat Profil</a>
</div>

<!-- Features Section -->
<div class="container mt-5">
    <h2 class="text-center mb-4">Fitur Unggulan</h2>
    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card h-100">
                <img src="{{ asset('images/feature1.png') }}" class="card-img-top h-70" alt="Responsif">
                <div class="card-body">
                    <h5 class="card-title">Responsif</h5>
                    <p class="card-text">Desain yang responsif dan modern, didukung oleh Bootstrap 5.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100">
                <img src="{{ asset('images/feature2.png') }}" class="card-img-top" alt="Mudah Disesuaikan">
                <div class="card-body">
                    <h5 class="card-title">Mudah Disesuaikan</h5>
                    <p class="card-text">Tampilan dan komponen dapat dengan mudah disesuaikan sesuai kebutuhan.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100">
                <img src="{{ asset('images/feature3.png') }}" class="card-img-top" alt="Blade Templating">
                <div class="card-body">
                    <h5 class="card-title">Blade Templating</h5>
                    <p class="card-text">Menggunakan Laravel Blade untuk pembuatan tampilan yang dinamis dan reusable.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio/Proyek Terkini Section -->
<div class="container mt-5">
    <h2 class="text-center mb-4">Proyek Terkini</h2>
    @php
        $projects = [
            ['title' => 'Proyek A', 'description' => 'Deskripsi singkat proyek A.', 'image' => 'project1.jpg'],
            ['title' => 'Proyek B', 'description' => 'Deskripsi singkat proyek B.', 'image' => 'project2.jpg'],
            ['title' => 'Proyek C', 'description' => 'Deskripsi singkat proyek C.', 'image' => 'project3.jpg'],
        ];
    @endphp

    <div class="row">
        @foreach ($projects as $project)
            <div class="col-md-4 mb-3">
                <div class="card h-100">
                    <img src="{{ asset('images/' . $project['image']) }}" class="card-img-top" alt="{{ $project['title'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $project['title'] }}</h5>
                        <p class="card-text">{{ $project['description'] }}</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Selengkapnya</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Testimonials Section -->
<div class="container mt-5 mb-5">
    <h2 class="text-center mb-4">Testimoni</h2>
    @php
        $testimonials = [
            ['name' => 'Andi', 'feedback' => 'Aplikasi ini sangat membantu dan mudah digunakan!', 'image' => 'user1.png'],
            ['name' => 'Budi', 'feedback' => 'Fitur-fiturnya keren dan desainnya menarik.', 'image' => 'user1.png'],
            ['name' => 'Citra', 'feedback' => 'Sangat puas dengan performa dan keandalannya.', 'image' => 'user1.png'],
        ];
    @endphp

    <div id="carouselTestimonials" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($testimonials as $index => $testimonial)
                <div class="carousel-item @if($index == 0) active @endif">
                    <div class="d-flex flex-column align-items-center">
                        <img src="{{ asset('images/' . $testimonial['image']) }}" class="rounded-circle mb-3" alt="{{ $testimonial['name'] }}" width="100">
                        <blockquote class="blockquote text-center">
                            <p class="mb-0">"{{ $testimonial['feedback'] }}"</p>
                            <footer class="blockquote-footer">{{ $testimonial['name'] }}</footer>
                        </blockquote>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselTestimonials" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Sebelumnya</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselTestimonials" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Berikutnya</span>
        </button>
    </div>
</div>
@endsection
