@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4">Hubungi Kami</h1>
    <form action="#" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Input Text: Nama Lengkap -->
        <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama lengkap Anda" required>
        </div>

        <!-- Input Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email Anda" required>
        </div>

        <!-- Input Telepon -->
        <div class="mb-3">
            <label for="phone" class="form-label">Telepon</label>
            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Masukkan nomor telepon Anda">
        </div>

        <!-- Select: Subjek Pesan -->
        <div class="mb-3">
            <label for="subject" class="form-label">Subjek</label>
            <select class="form-select" id="subject" name="subject" required>
                <option value="">Pilih subjek pesan</option>
                <option value="pertanyaan">Pertanyaan</option>
                <option value="masukan">Masukan</option>
                <option value="kerjasama">Kerjasama</option>
            </select>
        </div>

        <!-- Textarea: Pesan -->
        <div class="mb-3">
            <label for="message" class="form-label">Pesan</label>
            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Tulis pesan Anda di sini..." required></textarea>
        </div>

        <!-- File Upload: Lampiran -->
        <div class="mb-3">
            <label for="attachment" class="form-label">Lampiran</label>
            <input type="file" class="form-control" id="attachment" name="attachment">
        </div>

        <!-- Radio Button: Jenis Kelamin -->
        <div class="mb-3">
            <label class="form-label">Jenis Kelamin</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
                <label class="form-check-label" for="male">Pria</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                <label class="form-check-label" for="female">Wanita</label>
            </div>
        </div>

        <!-- Checkbox: Persetujuan Syarat dan Ketentuan -->
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="terms" name="terms" required>
            <label class="form-check-label" for="terms">Saya menyetujui syarat dan ketentuan</label>
        </div>

        <!-- Tombol Submit -->
        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
    </form>
</div>
@endsection
