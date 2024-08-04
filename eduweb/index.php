<?php 
    include('koneksi.php');//agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tag
  -->
  <title>EduWeb - Program Terbaik untuk Mendaftar Pertukaran Pelajar</title>
  <meta name="title" content="EduWeb - Program Terbaik untuk Mendaftar Pertukaran Pelajar">
  <meta name="description" content="This is an education html template made by codewithsadee">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700;800&family=Poppins:wght@400;500&display=swap"
    rel="stylesheet">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-bg.svg">
  <link rel="preload" as="image" href="./assets/images/hero-banner-1.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-banner-2.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-shape-1.svg">
  <link rel="preload" as="image" href="./assets/images/hero-shape-2.png">

</head>

<body id="top">

    <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM artikel ORDER BY id_artikel ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }
      $no = 1;

      $query2 = "SELECT * FROM testimonial ORDER BY id ASC";
      $result2 = mysqli_query($koneksi, $query2);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result2){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }
      $no = 1;
    ?>
  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="./assets/images/logo.svg" width="162" height="50" alt="EduWeb logo">
      </a>

      <nav class="navbar" data-navbar>

        <div class="wrapper">
          <a href="#" class="logo">
            <img src="./assets/images/logo.svg" width="162" height="50" alt="EduWeb logo">
          </a>

          <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#home" class="navbar-link" data-nav-link>Beranda</a>
          </li>

          <li class="navbar-item">
            <a href="#about" class="navbar-link" data-nav-link>Tentang kami</a>
          </li>

          <li class="navbar-item">
            <a href="#courses" class="navbar-link" data-nav-link>Kursus</a>
          </li>

          <li class="navbar-item">
            <a href="#blog" class="navbar-link" data-nav-link>Blog</a>
          </li>

          <li class="navbar-item">
            <a href="#Kontak" class="navbar-link" data-nav-link>Kontak</a>
          </li>

        </ul>

      </nav>

      <div class="header-actions">

        <button class="header-action-btn" aria-label="toggle search" title="Search">
          <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
        </button>

        <button class="header-action-btn" aria-label="cart" title="Cart">
          <ion-icon name="cart-outline" aria-hidden="true"></ion-icon>

          <span class="btn-badge">0</span>
        </button>

        <a href="#" class="btn has-before">
          <span class="span">Login</span>

          <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
        </a>

        <button class="header-action-btn" aria-label="open menu" data-nav-toggler>
          <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
        </button>

      </div>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero has-bg-image" id="home" aria-label="home"
        style="background-image: url('./assets/images/hero-bg.svg')">
        <div class="container">

          <div class="hero-content">

            <h1 class="h1 section-title">
              Program Terbaik untuk <span class="span">Mendaftar</span> Pertukaran pelajar
            </h1>

            <p class="hero-text">
              Bergabunglah dengan program pertukaran pelajar terbaik yang akan membuka kesempatan baru dan pengalaman berharga di luar negeri.
            </p>

            <a href="#courses" class="btn has-before">
              <span class="span">Temukan kursus</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>

          </div>

          <figure class="hero-banner">

            <div class="img-holder one" style="--width: 270; --height: 300;">
              <img src="./assets/images/hero-banner-1.jpg" width="270" height="300" alt="hero banner" class="img-cover">
            </div>

            <div class="img-holder two" style="--width: 240; --height: 370;">
              <img src="./assets/images/hero-banner-2.jpg" width="240" height="370" alt="hero banner" class="img-cover">
            </div>

            <img src="./assets/images/hero-shape-1.svg" width="380" height="190" alt="" class="shape hero-shape-1">

            <img src="./assets/images/hero-shape-2.png" width="622" height="551" alt="" class="shape hero-shape-2">

          </figure>

        </div>
      </section>





      <!-- 
        - #CATEGORY
      -->

      <section class="section category" aria-label="category">
        <div class="container">

          <p class="section-subtitle">Kategori</p>

          <h2 class="h2 section-title">
            Kelas <span class="span">Online</span> Untuk Pembelajaran Jarak Jauh.
          </h2>

          <p class="section-text">
            Temukan berbagai kelas online yang cocok untuk pembelajaran jarak jauh, menghadirkan pengalaman belajar yang interaktif dan berkualitas.
          </p>

          <ul class="grid-list">

            <li>
              <div class="category-card" style="--color: 170, 75%, 41%">

                <div class="card-icon">
                  <img src="./assets/images/category-1.svg" width="40" height="40" loading="lazy"
                    alt="Online Degree Programs" class="img">
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Program Gelar Online</a>
                </h3>

                <p class="card-text">
                  Temukan berbagai materi berkualitas untuk meningkatkan pengetahuan Anda dalam kursus-kursus kami yang terkait.
                </p>

                <span class="card-badge">7 Kursus</span>

              </div>
            </li>

            <li>
              <div class="category-card" style="--color: 351, 83%, 61%">

                <div class="card-icon">
                  <img src="./assets/images/category-2.svg" width="40" height="40" loading="lazy"
                    alt="Non-Degree Programs" class="img">
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Program Non-Gelar</a>
                </h3>

                <p class="card-text">
                  Temukan berbagai program pendidikan yang sesuai dengan minat dan kebutuhan Anda.
                </p>

                <span class="card-badge">4 Kursus</span>

              </div>
            </li>

            <li>
              <div class="category-card" style="--color: 229, 75%, 58%">

                <div class="card-icon">
                  <img src="./assets/images/category-3.svg" width="40" height="40" loading="lazy"
                    alt="Off-Campus Programs" class="img">
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Program Off-Campus</a>
                </h3>

                <p class="card-text">
                  Temukan berbagai program pembelajaran yang tersedia di luar kampus untuk pengalaman belajar yang beragam.
                </p>

                <span class="card-badge">8 Kursus</span>

              </div>
            </li>

            <li>
              <div class="category-card" style="--color: 42, 94%, 55%">

                <div class="card-icon">
                  <img src="./assets/images/category-4.svg" width="40" height="40" loading="lazy"
                    alt="Hybrid Distance Programs" class="img">
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Program Hibrida Jarak Jauh</a>
                </h3>

                <p class="card-text">
                  Temukan informasi lengkap tentang program-program hibrida yang bisa disesuaikan dengan jadwal dan kebutuhan Anda.
                </p>

                <span class="card-badge">8 Kursus</span>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="about" aria-label="about">
        <div class="container">

          <figure class="about-banner">

            <div class="img-holder" style="--width: 520; --height: 370;">
              <img src="./assets/images/about-banner.jpg" width="520" height="370" loading="lazy" alt="about banner"
                class="img-cover">
            </div>

            <img src="./assets/images/about-shape-1.svg" width="360" height="420" loading="lazy" alt=""
              class="shape about-shape-1">

            <img src="./assets/images/about-shape-2.svg" width="371" height="220" loading="lazy" alt=""
              class="shape about-shape-2">

            <img src="./assets/images/about-shape-3.png" width="722" height="528" loading="lazy" alt=""
              class="shape about-shape-3">

          </figure>

          <div class="about-content">

            <p class="section-subtitle">Tentang Kami</p>

            <h2 class="h2 section-title">
              Lebih dari 10 Tahun di <span class="span">Pembelajaran Jarak Jauh</span> untuk Pengembangan Keterampilan
            </h2>

            <p class="section-text">
              Selama lebih dari sepuluh tahun, kami telah berdedikasi dalam pengembangan keterampilan melalui pembelajaran jarak jauh, memberikan pengalaman belajar yang bermutu tinggi dan bermanfaat bagi Anda.
            </p>

            <ul class="about-list">

              <li class="about-item">
                <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                <span class="span">Pelatih Ahli</span>
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                <span class="span">Pembelajaran Jarak Jauh Online</span>
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                <span class="span">Akses Seumur Hidup</span>
              </li>

            </ul>

            <img src="./assets/images/about-shape-4.svg" width="100" height="100" loading="lazy" alt=""
              class="shape about-shape-4">

          </div>

        </div>
      </section>





      <!-- 
        - #COURSE
      -->

      <section class="section course" id="courses" aria-label="course">
        <div class="container">

          <p class="section-subtitle">Kursus Populer</p>

          <h2 class="h2 section-title">Pilih Kursus Untuk Memulai</h2>

          <ul class="grid-list">

            <li>
              <div class="course-card">

                <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                  <img src="./assets/images/course-1.jpg" width="370" height="220" loading="lazy"
                    alt="Build Responsive Real- World Websites with HTML and CSS" class="img-cover">
                </figure>

                <div class="abs-badge">
                  <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                  <span class="span">3 Minggu</span>
                </div>

                <div class="card-content">

                  <span class="badge">Pemula</span>

                  <h3 class="h3">
                    <a href="#" class="card-title">Membangun Situs Web Dunia Nyata yang Responsif dengan HTML dan CSS</a>
                  </h3>

                  <div class="wrapper">

                    <div class="rating-wrapper">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <p class="rating-text">(5.0/350 Rating)</p>

                  </div>

                  <data class="price" value="29">Rp.406.000</data>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="library-outline" aria-hidden="true"></ion-icon>

                      <span class="span">8 Pelajaran</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                      <span class="span">350 Siswa</span>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="course-card">

                <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                  <img src="./assets/images/course-2.jpg" width="370" height="220" loading="lazy"
                    alt="Java Programming Masterclass for Software Developers" class="img-cover">
                </figure>

                <div class="abs-badge">
                  <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                  <span class="span">8 Minggu</span>
                </div>

                <div class="card-content">

                  <span class="badge">Lanjutan</span>

                  <h3 class="h3">
                    <a href="#" class="card-title">Kelas Master Pemrograman Java untuk Pengembang Perangkat Lunak</a>
                  </h3>

                  <div class="wrapper">

                    <div class="rating-wrapper">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <p class="rating-text">(4.5 /374 Rating)</p>

                  </div>

                  <data class="price" value="49">Rp.686.000</data>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="library-outline" aria-hidden="true"></ion-icon>

                      <span class="span">15 Pelajaran</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                      <span class="span">400 Siswa</span>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="course-card">

                <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                  <img src="./assets/images/course-3.jpg" width="370" height="220" loading="lazy"
                    alt="The Complete Camtasia Course for Content Creators" class="img-cover">
                </figure>

                <div class="abs-badge">
                  <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                  <span class="span">3 Minggu</span>
                </div>

                <div class="card-content">

                  <span class="badge">Menengah</span>

                  <h3 class="h3">
                    <a href="#" class="card-title">Kursus Lengkap Camtasia untuk Para Pembuat Konten</a>
                  </h3>

                  <div class="wrapper">

                    <div class="rating-wrapper">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <p class="rating-text">(4.9 /243 Rating)</p>

                  </div>

                  <data class="price" value="35">Rp. 490.000</data>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="library-outline" aria-hidden="true"></ion-icon>

                      <span class="span">13 Pelajaran</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                      <span class="span">240 Mahasiswa</span>
                    </li>

                  </ul>

                </div>

              </div>
            </li>
          </ul>

          <a href="#" class="btn has-before">
            <span class="span">Jelajahi lebih banyak kursus</span>

            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
          </a>

        </div>
      </section>





      <!-- 
        - #VIDEO
      -->

      <section class="video has-bg-image" aria-label="video"
        style="background-image: url('./assets/images/video-bg.png')">
        <div class="container">

          <div class="video-card">

            <div class="video-banner img-holder has-after" style="--width: ; --height: ;">
              <img src="./assets/images/video-banner.jpg" width="970" height="550" loading="lazy" alt="video banner"
                class="img-cover">

              <button class="play-btn" aria-label="play video">
                <ion-icon name="play" aria-hidden="true"></ion-icon>
              </button>
            </div>

            <img src="./assets/images/video-shape-1.png" width="1089" height="605" loading="lazy" alt=""
              class="shape video-shape-1">

            <img src="./assets/images/video-shape-2.png" width="158" height="174" loading="lazy" alt=""
              class="shape video-shape-2">

          </div>

        </div>
      </section>





      <!-- 
        - #STATE
      -->

      <section class="section stats" aria-label="stats">
        <div class="container">

          <ul class="grid-list">

            <li>
              <div class="stats-card" style="--color: 170, 75%, 41%">
                <h3 class="card-title">29.3k</h3>

                <p class="card-text">Siswa Terdaftar</p>
              </div>
            </li>

            <li>
              <div class="stats-card" style="--color: 351, 83%, 61%">
                <h3 class="card-title">32.4K</h3>

                <p class="card-text">Kelas Selesai</p>
              </div>
            </li>

            <li>
              <div class="stats-card" style="--color: 260, 100%, 67%">
                <h3 class="card-title">100%</h3>

                <p class="card-text">Tingkat Kepuasan</p>
              </div>
            </li>

            <li>
              <div class="stats-card" style="--color: 42, 94%, 55%">
                <h3 class="card-title">354+</h3>

                <p class="card-text">Instruktur Terbaik</p>
              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      <section class="section blog has-bg-image" id="blog" aria-label="blog"
        style="background-image: url('./assets/images/blog-bg.svg')">
        <div class="container">

          <p class="section-subtitle">Artikel Terbaru</p>

          <h2 class="h2 section-title">Lihat berita terbaru bersama EduWeb</h2>

          <ul class="grid-list">

          <?php
                // Query untuk mengambil data kursus
                $query = "SELECT * FROM artikel ORDER BY id_artikel ASC";
                $result = mysqli_query($koneksi, $query);

                // Mengecek apakah ada error ketika menjalankan query
                if (!$result) {
                    die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                }

                // Loop melalui hasil query dan buat course card untuk setiap kursus
                // Query untuk mengambil data kursus
                $query = "SELECT * FROM artikel ORDER BY id_artikel ASC";
                $result = mysqli_query($koneksi, $query);

                // Mengecek apakah ada error ketika menjalankan query
                if (!$result) {
                  die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                }
                
                // Loop melalui hasil query dan buat course card untuk setiap kursus
                while ($row = mysqli_fetch_assoc($result)) {
                  echo '<li>';
                  echo '<div class="blog-card">';
                  echo '<figure class="card-banner img-holder" style="--width: 370; --height: 370;">';
                  echo '<img src="gambar/' . $row["gambar_artikel"] . '" width="370" height="370" loading="lazy" alt="' . $row["jenis_kelas"] . '" class="img-cover">';
                  echo '</figure>';
                  echo '<div class="card-content">';
                  echo '<h3 class="h3"><a href="#" class="card-title">' . $row["judul"] . '</a></h3>';
                  
                  // Menggunakan flexbox untuk tanggal dan komentar
                  echo '<div class="post-meta-container" style="display: flex; align-items: center; justify-content: space-between;">';
                  echo '<div class="post-meta" style="display: flex; align-items: center; color:hsl(170, 75%, 41%);">';
                  echo '<ion-icon name="calendar-outline" aria-hidden="true" style="margin-right: 5px;"></ion-icon>';
                  echo '<span> ' . $row["tanggal"] . '</span>';
                  
                  echo '</div>';
                  
                  echo '<div class="post-comments" style="display: flex; align-items: center; color:hsl(170, 75%, 41%);">';
                  echo '<ion-icon name="chatbubbles-outline" aria-hidden="true" style="margin-right: 5px;"></ion-icon>';
                  echo '<p class="post-text">' . $row["isi_teks"] . '</p>';
                  echo '</div>';
                  echo '</div>'; // End of post-meta-container
                  
                  echo '<p>' . $row["komentar"] . '</p>';
                  echo '</div>';
                  echo '</div>';
                  echo '</li>';
                }

                // Tutup koneksi ke database
                mysqli_close($koneksi);
                ?>
            </ul>
            
            <div class="button-container">
              <button class="btn2 has-before" id="load-more">
                <span class="span">
                  Lihat Artikel Lainnya
                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </span>
              </button>
              <button class="btn2 has-before" id="load-less" style="display: none;">
                <span class="span">
                  Tutup Artikel Lainya
                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </span>
              </button>
            </div>

      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer" style="background-image: url('./assets/images/footer-bg.png')">

    <div class="footer-top section" id="Kontak">
      <div class="container grid-list">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="./assets/images/logo-light.svg" width="162" height="50" alt="EduWeb logo">
          </a>

          <p class="footer-brand-text">
            Bersama Web edu kita bisa menjadi programmer dan merubah masa depan.
          </p>

          <div class="wrapper">
            <span class="span">Alamat:</span>

            <address class="address">Universitas Nasional</address>
          </div>

          <div class="wrapper">
            <span class="span">Hubungi:</span>

            <a href="tel:+011234567890" class="footer-link">+62 5780965109</a>
          </div>

          <div class="wrapper">
            <span class="span">Email:</span>

            <a href="mailto:info@eduweb.com" class="footer-link">info@eduweb.com</a>
          </div>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Platform Online</p>
          </li>

          <li>
            <a href="#" class="footer-link">About</a>
          </li>

          <li>
            <a href="#" class="footer-link">Kursus</a>
          </li>

          <li>
            <a href="#" class="footer-link">Instruktur</a>
          </li>

          <li>
            <a href="#" class="footer-link">Acara</a>
          </li>

          <li>
            <a href="#" class="footer-link">Profil Instruktur</a>
          </li>

          <li>
            <a href="#" class="footer-link">Panduan Pembelian</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Links</p>
          </li>

          <li>
            <a href="#" class="footer-link">Hubungi Kami</a>
          </li>

          <li>
            <a href="#" class="footer-link">Galeri</a>
          </li>

          <li>
            <a href="#" class="footer-link">Berita & Artikel</a>
          </li>

          <li>
            <a href="#" class="footer-link">Pertanyaan Umum</a>
          </li>

          <li>
            <a href="#" class="footer-link">Masuk/Pendaftaran</a>
          </li>

          <li>
            <a href="#" class="footer-link">Segera hadir</a>
          </li>

        </ul>

        <div class="footer-list">

          <p class="footer-list-title">Kontak</p>

          <p class="footer-list-text">
            Masukkan alamat email Anda untuk mendaftar berlangganan buletin kami
          </p>

          <form action="" class="newsletter-form">
            <input type="email" name="email_address" placeholder="Email Anda" required class="input-field">

            <button type="submit" class="btn has-before">
              <span class="span">Berlangganan</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </button>
          </form>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          TUGAS UTS PEMROGRAMAN WEB <a href="#" class="copyright-link">Syamsul Arifin Syarifudin Dan Alexius GHS</a>
        </p>

      </div>
    </div>

  </footer>



  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back top top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>