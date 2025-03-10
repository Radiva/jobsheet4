@extends('layouts.app')

@section('title', 'Profil Pengguna')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Profil Pengguna</h3>
        </div>
        <div class="card-body">
            {{-- Menampilkan Gambar Profil --}}
            <img src="{{ asset('images/' . $profile['profile_picture']) }}" alt="Profile Picture" width="150">

            {{-- Menampilkan Informasi Dasar --}}
            <h4>{{ $profile['name'] }}</h4>
            <p>Email: {{ $profile['email'] }}</p>
            <p>Bio: {{ $profile['bio'] }}</p>

            {{-- Blade Directive: @if --}}
            @if(count($profile['skills']) > 0)
                <h5>Skills:</h5>
                <ul>
                    {{-- Blade Directive: @foreach --}}
                    @foreach($profile['skills'] as $skill)
                        <li>{{ $skill }}</li>
                    @endforeach
                </ul>
            @else
                <p>Tidak ada skill yang ditampilkan.</p>
            @endif
        </div>
    </div>
@endsection
