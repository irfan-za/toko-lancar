# Admin Dashboard - Toko Lancar
![Toko Lancar Website](https://ajicfyapwuyotrfthhvu.supabase.co/storage/v1/object/public/project/Screenshot%202023-10-19%20203049.png)
Admin Dashboard - Toko Lancar adalah proyek web yang dibuat menggunakan Laravel untuk mengelola produk, kategori, dan profil pengguna. Proyek ini menyediakan berbagai fitur seperti melihat grafik produk terbaru, melihat kategori dengan stok terbanyak, mengelola produk, mengelola kategori, dan melihat serta mengedit profil pengguna.

## Fitur Utama

- **Dashboard**: Halaman utama yang memungkinkan Anda memantau grafik produk terbaru dan kategori dengan stok terbanyak.

- **Tabel Produk**: Halaman ini memungkinkan Anda untuk menambah, mengedit, menghapus, dan melihat detail produk. Anda dapat mengelola daftar produk dengan mudah.

- **Tabel Kategori**: Halaman ini memungkinkan Anda untuk menambah, mengedit, menghapus, dan melihat detail kategori. Anda dapat mengelola daftar kategori dengan efisien.

- **Profil Pengguna**: Halaman ini berisi data profil pengguna saat ini. Anda dapat melihat dan mengedit informasi profil Anda.

- **Login**: Halaman login yang memungkinkan pengguna masuk ke akun mereka.

## Cara Menggunakan Proyek Ini

1. **Prasyarat**:
   - Pastikan Anda memiliki PHP dan Composer terinstal di komputer Anda.
   - Pastikan juga Anda telah menginstal Laravel.

2. **Clone Repository**:
   - Clone repositori ini ke komputer Anda menggunakan perintah Git: `git clone https://github.com/irfan-za/toko-lancar.git`.

3. **Instal Dependensi**:
   - Masuk ke direktori proyek dan jalankan `composer install` untuk menginstal semua dependensi yang diperlukan.

4. **Konfigurasi Lingkungan**:
   - Salin file `.env.example` menjadi `.env` dan sesuaikan pengaturan database dan lingkungan lainnya sesuai dengan kebutuhan Anda.

5. **Migrasi Database**:
   - Jalankan perintah `php artisan migrate` untuk membuat tabel-tabel database yang diperlukan.
6. **Seed Database (Opsional)**:
  - Jika Anda ingin mengisi database dengan data dummy, jalankan perintah `php artisan db:seed --class=ProductsTableSeeder` kemudian jalankan perintah `php artisan db:seed --class=CategoriesTableSeeder`.

7. **Mulai Server**:
   - Jalankan server Laravel menggunakan perintah `php artisan serve`. Aplikasi Anda akan berjalan di alamat `http://localhost:8000`.

8. **Akses Aplikasi**:
   - Buka browser dan akses aplikasi di alamat `http://localhost:8000`. Anda akan diarahkan ke halaman login.

9. **Masuk**:
   - Gunakan akun yang sudah Anda miliki atau buat akun baru untuk masuk.

10. **Mulai Menggunakan**:
   - Setelah masuk, Anda akan dapat mengakses berbagai fitur aplikasi, termasuk dashboard, tabel produk, tabel kategori, dan profil pengguna.
