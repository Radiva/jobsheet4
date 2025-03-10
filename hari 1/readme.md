# Materi hari 1

Hari pertama fokus pada pengenalan laravel dan membuat sebuah halaman view yang dapat diakses

## Langkah 1
Buat project laravel dengan langkah:
- Buat **blank** project pada laragon
- Buka terminal pada laragon dan masuk pada folder project yang telah dibuat sebelumnya
- Jalankan perintah berikut untuk menginstall **Laravel 10.0**
```bash
composer create-project "laravel/laravel:^10.0" .
```
- Lakukan penjelasan mengenai laravel dan hal-hal lain yang diperlukan

## Langkah 2
Malakukan pembuatan *Controller* untuk profil
- Jalankan perintah berikut untuk membuat file *ProfileController*
```bash
php artisan make:controller ProfileController
```
- Tambahkan kode sesuai dengan contoh yang tersedia

## Langkah 3
Malakukan pembuatan *View* untuk profil
- Buat file baru pada folder *resource/views* dengan cara
```bash
php artisan make:view profile
```
atau dengan cara manual yaitu klik kanan create new file
- Tambahkan kode sesuai dengan contoh yang tersedia

## Langkah 4
Malakukan penambahan *Route* untuk mengakses profil
- Buka file *routes/web.php*
- Ubah routes */* menjadi sesuai pada contoh
- Jangan lupa menambahakn 
```bash
use App\Http\Controllers\ProfileController;
```
pada awal file tersebut


## Kesimpulan
Langkah diatas bukan merupakan langkah paten, namun dapat disesuaikan dengan alur penjelasan agar siswa lebih paham. Guru dapat menambahkan atau mengurangi materi sesuai dengan kebutuhan namun tetap sesuai dengan koridor hasil akhir dari project yang ingin dicapai.
