# Aplikasi Sistem Manajemen Keuangan

[![Build Status](https://travis-ci.org/bannipebriansyah/manajemen-keuangan.svg?branch=master)](https://travis-ci.org/bannipebriansyah/manajemen-keuangan)

ASMK adalah perangkat lunak untuk manejemen keuangan dari user berupa transaksi yang dilakukan dalam sehari-hari

## Objektif
1. Laporan Kas Harian, Dan Tahunan Tersedia Lengkap. Terdapat Fitur Grafik
2. Seluruh Pemasukan Dan Pengeluaran Dapat Dicatat Secara Mudah, Cepat, Dan Praktis Hanya Dalam Beberapa Klik.
3. Pengguna Tambahan Bisa Anda Buat Dengan Hak Aksesnya Masing-Masing.

## Cara Penginstalan
1. $ cd manajemen-keuangan
2. $ composer install
3. $ cp .env.example .env
4. $ php artisan key:generate
5. Buat baru MySQL database untuk menjalankan aplikasi
    atur database pada file .env
6. $ php artisan migrate
7. $ php artisan serve
8. Register akun baru

#### Server Requirements
1. PHP 7.2 (and meet [Laravel 5.7 server requirements](https://laravel.com/docs/5.7#server-requirements)),
2. MariaDB atau PostgreSQL database,
3. SQlite (untuk automatis testing).



## License

Aplikasi Sistem Manajemen Keuangan project bersifat gratis dan open-sourced software under [MIT License](LICENSE).