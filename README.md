# Laravel API - Student Management

## 📌 Penjelasan
Ini adalah proyek REST API untuk mengelola data siswa (students). API ini menyediakan fitur CRUD (Create, Read, Update, Delete) dengan satu tabel utama, yaitu `students`.

## ⚡ Persyaratan
Sebelum menjalankan proyek ini, pastikan telah menginstal:
- PHP (>= 8.1)
- Composer
- MySQL 
- Laravel   
- Postman (untuk menguji API)

## 🚀 Instalasi
1. Clone repository ini:
   ```sh
   git clone https://github.com/username/repo-name.git
2. Masuk Ke Folder proyek
   ```sh
   cd nama-folder-proyek
3. Instal dependensi
   ```sh
   composer install
4. Buat file .env dari template:
   ```sh
   cp .env.example .env
5. Konfigurasi database di file .env:
   ```sh
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nama_database
   # DB_USERNAME=root
   # DB_PASSWORD=password
6. Generate application key:
   ```sh
   php artisan key:generate
7. Jalankan Migrasi database:
   ```sh
   php artisan migrate
8. Jalankan seeder untuk menambahkan data dummy (opsional):
   ```sh
   php artisan db:seed
   
## 🏃 Menjalankan Proyek
1. Jalankan server dengan perintah berikut:
   ```sh
   php artisan serve

2. Akses API melalui:
   ```sh 
   http://127.0.0.1:8000/api/students

## Hasil
untuk hasil ada [disini](https://docs.google.com/presentation/d/1oTaUlKiesk1BdTmjDfZZoXnTJLG4c6hOzd1WACkoXBI/edit?usp=sharing)
## Lisensi
Copyright (c) 2025 [Zaidan Pasya Rusmiadi](https://www.instagram.com/zai.p_/profilecard/)