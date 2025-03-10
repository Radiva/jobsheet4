<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
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
    </div>
</body>
</html>