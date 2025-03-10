# Materi hari 2

Hari kedua fokus pada penambahan page dan pembagian view menjadi beberapa komponen layout

## Langkah 1
Malakukan pembuatan *Controller* untuk halaman lain
- Jalankan perintah berikut untuk membuat file *PageController*
```bash
php artisan make:controller PageController
```
- Tambahkan kode sesuai dengan contoh yang tersedia

## Langkah 2
Pemisahan layout untuk header
- Buat folder baru bernama *layouts* di dalam folder *views*
- Buat file baru bernama *app.blade.php*
- Sesuaikan kode pada *app.blade.php* dan *profile.blade.php* seperti pada contoh. Pada intinya, kita memecah header menjadi komponen layout lain

## Langkah 3
Pembuatan view untuk home
- Buat file baru pada folder *resource/views* bernama *home.blade.php*
- Tambahkan kode sesuai dengan contoh yang tersedia

## Langkah 4
Malakukan penambahan *Route* untuk mengakses profil
- Buka file *routes/web.php*
- Sesuaikan route seperti pada contoh
- Jangan lupa menambahkan
```bash
use App\Http\Controllers\PageController;
```
pada awal file tersebut


## Kesimpulan
Pada hari kedua, siswa diajarkan cara membuat layout menjadi beberapa komponen untuk mempercepat pengembangan web sehingga tidak perlu mengulang menuliskan kode yang sama pada halaman yang berbeda.
