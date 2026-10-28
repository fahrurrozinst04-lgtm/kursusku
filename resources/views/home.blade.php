<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $siteName }} - Belajar Web Bertahap</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <header class="site-header">
    <div class="container nav-wrap">
      <a class="brand" href="{{ route('home') }}">{{ $siteName }}</a>
      <nav aria-label="Navigasi utama">
        <a href="{{ route('home') }}">Beranda</a>
        <a href="#katalog">Katalog</a>
      </nav>
    </div>
  </header>

  <main class="container">
    <section class="hero">
      <div class="hero-text">
        <p class="eyebrow">Belajar Web Secara Bertahap</p>
        <h1>Bangun kemampuan web dari PHP sampai Laravel.</h1>
        <p class="lead">KursusKu menyediakan latihan terarah untuk pemula. Mulai dari fondasi hingga framework modern.</p>
        <div class="hero-actions">
          <a class="btn-primary" href="#katalog">Lihat Kursus</a>
        </div>
      </div>
      <div class="hero-image">
        <img src="{{ asset('images/hero-kursus.jpg') }}" alt="Ilustrasi kelas KursusKu">
      </div>
    </section>

    <section class="section" id="katalog">
      <h2>Kursus Pilihan</h2>
      <p class="section-desc">Tiga fondasi penting yang disiapkan untuk mahasiswa.</p>

      <div class="course-grid">
        @foreach ($featured as $course)
          <article class="card">
            <small class="code">{{ $course['code'] }}</small>
            <h3>{{ $course['name'] }}</h3>
            <p>{{ $course['description'] }}</p>
          </article>
        @endforeach
      </div>
    </section>
  </main>

  <footer class="site-footer">
    <div class="container">
      <p>&copy; {{ date('Y') }} {{ $siteName }} &mdash; Praktikum Pemrograman Web III</p>
    </div>
  </footer>
</body>
</html>
