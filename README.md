# Website Program Studi Farmasi

Website ini merupakan portal profil akademik untuk **Program Studi Farmasi**, yang menyajikan berbagai informasi terkait program studi, spesialisasi kurikulum, serta sertifikasi kompetensi yang tersedia bagi mahasiswa.

## Fitur Utama

- **Halaman Beranda (`index.php`)**: Informasi umum dan pengenalan singkat tentang Program Studi Farmasi.
- **Halaman Tentang Kami (`about.php`)**: Menampilkan profil lengkap, visi, misi, dan staf pengajar di Program Studi Farmasi.
- **Halaman Kurikulum & Sertifikasi (`kurikulum.php`)**: 
  - Struktur mata kuliah lengkap per semester (Total 120 SKS, terdiri dari 48 SKS Teori dan 72 SKS Praktikum).
  - Informasi penjurusan/spesialisasi seperti Teknologi Farmasi, Farmasi Klinis & Komunitas, Kimia Farmasi, Farmakologi, QC/QA, dan Bahan Alam.
  - Daftar perolehan sertifikasi pendukung (Sertifikat Kompetensi, CPOB, Manajemen Apotek, hingga K3 Laboratorium).

## Teknologi yang Digunakan

- **Backend**: PHP (Native)
- **Frontend**: HTML5, CSS3, JavaScript, dan framework Bootstrap
- **Server Environment**: Laragon / XAMPP (Apache)

## Cara Menjalankan Proyek Secara Lokal

1. Pastikan Anda telah menginstal web server lokal, seperti **Laragon** atau **XAMPP**.
2. _Clone_ repositori ini atau salin folder proyek ke dalam direktori *document root* web server Anda:
   - Jika menggunakan **Laragon**: letakkan di dalam folder `C:\laragon\www\`
   - Jika menggunakan **XAMPP**: letakkan di dalam folder `C:\xampp\htdocs\`
3. Buka direktori web server dan pastikan folder bernama `Website Farmasi`.
4. Jalankan service **Apache** dari control panel Laragon atau XAMPP.
5. Jalankan aplikasi melalui browser dengan mengakses salah satu URL berikut (sesuaikan dengan nama folder di server Anda):
   - `http://localhost/Website Farmasi/`
   - atau jika Anda menggunakan auto-virtual host di Laragon: `http://website-farmasi.test/`

## Kontribusi

Apabila Anda ingin mengembangkan website ini, silakan lakukan modifikasi pada file `.php` dan *assets* yang tersedia. Desain website ini menggunakan sistem *template partials* untuk `header.php` dan `footer.php` guna mempermudah pemeliharaan (_maintenance_).
