# KursusKu — Milestone 7 (Laravel Route → Controller → Blade)

Project praktikum **Pemrograman Web III** pertemuan 7.

## Target
- Aplikasi Laravel bernama `kursusku` dapat dijalankan
- Named route `home`
- `HomeController@index` mengirim data kursus
- `home.blade.php` menampilkan data via Blade
- Aset CSS + gambar di `public/`

## Requirement
- PHP 8.3+
- Composer
- Laragon / web server lokal (opsional)

## Cara Menjalankan
1. Buka terminal di folder project
2. `composer install`
3. Salin `.env.example` → `.env` (jika belum ada)
4. `php artisan key:generate`
5. `php artisan serve`
6. Buka http://127.0.0.1:8000

## Struktur penting
```
app/Http/Controllers/HomeController.php
public/css/style.css
public/images/hero-kursus.jpg
resources/views/home.blade.php
routes/web.php
```

## Fitur Milestone 7
- Named route `home`
- HomeController@index
- Blade landing page modern
- Data kursus dari controller (`$featured`)
- Asset CSS & image

## Belum dikerjakan
- Database
- CRUD
- Authentication
- Layout Blade / Bootstrap / Ajax (pertemuan 9)

## Alur Request
Browser → `routes/web.php` (route home) → `HomeController@index` → `home.blade.php` → HTML response

## Git (contoh commit)
```bash
git add .
git commit -m "chore: initialize Laravel course project"
git commit -m "feat: add home route controller and Blade landing page"
```
