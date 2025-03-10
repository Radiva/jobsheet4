@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4">Tentang Kami</h1>
    
    <!-- Visi & Misi Section -->
    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <h2>Visi & Misi</h2>
            <h4>Visi</h4>
            <p>Mewujudkan aplikasi web yang sederhana, inovatif, dan bermanfaat bagi semua kalangan.</p>
            <h4>Misi</h4>
            <ul>
                <li>Menyediakan solusi teknologi yang mudah dipahami dan diakses.</li>
                <li>Mendorong kolaborasi dan kreativitas dalam pengembangan aplikasi.</li>
                <li>Mengoptimalkan performa dan tampilan dengan teknologi modern.</li>
            </ul>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('images/about-vision.jpg') }}" alt="Visi dan Misi" class="img-fluid rounded">
        </div>
    </div>

    <!-- Sejarah Section -->
    <div class="mb-5">
        <h2 class="text-center">Sejarah Kami</h2>
        <p>
            MyApp bermula dari ide sederhana untuk mengembangkan aplikasi web yang user-friendly dan dapat dimodifikasi dengan mudah. 
            Dengan menggunakan Laravel Blade, kami berhasil mengintegrasikan berbagai komponen dan fitur modern dalam satu platform yang dinamis.
            Proyek ini dibangun dengan semangat kolaborasi dan inovasi, serta didukung oleh tim yang berdedikasi tinggi.
        </p>
    </div>

    <!-- Tim Kami Section -->
    <div class="mb-5">
        <h2 class="text-center">Tim Kami</h2>
        @php
            $team = [
                ['name' => 'John Doe', 'role' => 'Founder & CEO', 'image' => 'team1.jpg'],
                ['name' => 'Jane Smith', 'role' => 'Lead Developer', 'image' => 'team2.jpg'],
                ['name' => 'Mike Johnson', 'role' => 'UI/UX Designer', 'image' => 'team3.jpg'],
            ];
        @endphp
        <div class="row">
            @foreach ($team as $member)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('images/' . $member['image']) }}" class="card-img-top" alt="{{ $member['name'] }}">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $member['name'] }}</h5>
                            <p class="card-text">{{ $member['role'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Hubungi Kami Section -->
    <div class="mb-5">
        <h2 class="text-center">Hubungi Kami</h2>
        <p class="text-center">
            Jika Anda memiliki pertanyaan atau masukan, silakan hubungi kami melalui:
        </p>
        <div class="text-center">
            <p>Email: <a href="mailto:info@myapp.com">info@myapp.com</a></p>
            <p>Telepon: <a href="tel:+62123456789">+62 123456789</a></p>
            <p>Alamat: Jl. Contoh Alamat No.123, Kota Contoh, Indonesia</p>
        </div>
    </div>
</div>
@endsection
