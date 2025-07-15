# 📚 Aplikasi Manajemen Data Buku

Aplikasi manajemen data buku berbasis web yang dibangun menggunakan **Laravel 12** dan **MySQL**. Aplikasi ini memungkinkan pengguna untuk **menambah**, **mengedit**, dan **menghapus** data buku dengan antarmuka yang rapi dan mudah digunakan.

> 👨‍💻 Dibuat oleh: **Rafli Tio Wardana** ||
> NIM : 1101221146

---

## ✨ Fitur Utama

- ✅ Tambah data buku  
- ✅ Edit data buku  
- ✅ Hapus data buku  
- ✅ Tabel data buku yang rapi dan responsif  
- ✅ Validasi input  
- ✅ Desain sederhana dan bersih (dengan Bootstrap)

---

## 🛠️ Teknologi yang Digunakan

- Laravel 12
- MySQL
- Bootstrap 5
- Blade Template Engine
- HTML, CSS, JavaScript

---

# 📸 Cuplikan Tampilan

## 🏠 Halaman Utama
![Halaman Utama](https://github.com/user-attachments/assets/9e1b53cb-ed47-4ef5-a30c-ae4e3234bee1)

Menampilkan seluruh koleksi buku dalam bentuk tabel. Dilengkapi fitur paginasi serta tombol Edit dan Hapus di setiap entri.

## ➕ Halaman Tambah
![Halaman Tambah](https://github.com/user-attachments/assets/204cad9a-8e29-480e-861a-2db52198f439)

Formulir sederhana dan intuitif dengan validasi input untuk menambah buku ke koleksi Anda.

## ✏️ Halaman Edit
![Halaman Edit](https://github.com/user-attachments/assets/bd691c4a-585b-456c-b7cf-4058922b00b1)

Formulir edit otomatis terisi data lama, sehingga mudah untuk diperbarui dan disimpan kembali.

### 📋 Prasyarat

Sebelum memulai, pastikan Anda sudah menginstal:

-   PHP >= 8.2
-   [Composer](https://getcomposer.org/)
-   MySQL atau database sejenis

## 🚀 Cara Instalasi

### 1. Clone Repository
```bash
git clone https://github.com/username/laravel-books.git
cd laravel-books

```


### 2. Install Dependency
```bash
composer install
```
### 3. Duplikat File Environment
```bash
cp .env.example .env
```
> `.env` adalah file konfigurasi utama Laravel. Pastikan file ini ada sebelum menjalankan aplikasi.

### 4. Atur Konfigurasi Database di .env

Edit file `.env` dan ubah bagian berikut sesuai konfigurasi database lokal Anda:

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_books
DB_USERNAME=root
DB_PASSWORD=
```
> **Catatan:** Pastikan database `Laravel_books` sudah dibuat di MySQL sebelum melanjutkan.

### 5. Generate Key dan Jalankan Migrasi
```bash

php artisan key:generate
php artisan migrate
```
### 6. Jalankan Server Laravel
```bash

php artisan serve
Buka di browser: http://localhost:8000
```

### 🗂️ Struktur Folder Utama
```pgsql
Copy
Edit
├── app/
├── database/
│   └── migrations/
├── public/
├── resources/
│   └── views/
│       └── books/
├── routes/
│   └── web.php
├── .env
├── composer.json
└── README.md
```

### ⚠️ Catatan Tambahan
Pastikan Anda sudah menginstall PHP ≥ 8.1, Composer, dan MySQL

Jalankan php artisan migrate:fresh jika ingin reset tabel

---

## 👨‍💻 Pengembang

-   **Nama**: Rafli Tio Wardana
-   **GitHub**: [@KangIpli](https://https://github.com/KangIpli)

---

