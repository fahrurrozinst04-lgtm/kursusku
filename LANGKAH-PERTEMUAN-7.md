# Langkah-langkah Pertemuan 7 — KursusKu Laravel

## 1. Persiapan
- Pastikan PHP 8.3+, Composer, Git tersedia
- `php -v` dan `composer -V`

## 2. Buat project (sudah dilakukan di zip ini)
```bash
composer create-project laravel/laravel kursusku
cd kursusku
```

## 3. Route pertama
Edit `routes/web.php` → named route `home` ke `HomeController@index`

## 4. HomeController
```bash
php artisan make:controller HomeController
```
Isi method `index()` dengan `$siteName` dan array `$featured`, return `view('home', compact(...))`

## 5. Blade View
Buat `resources/views/home.blade.php` dengan:
- `{{ $siteName }}`
- `@foreach ($featured as $course)`

## 6. Aset
- `public/css/style.css`
- `public/images/hero-kursus.jpg` (dari prototype)

## 7. Uji
```bash
php artisan serve
php artisan route:list
```
Buka browser → landing page tampil 3 card dari controller.

## 8. Git & README
Commit bertahap + README sesuai panduan.

## Checkpoint pemahaman
Request masuk dari browser → `web.php` → `HomeController@index` → data ke Blade → HTML.
