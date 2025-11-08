<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Halaman Utama</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    html,body{margin:0;padding:0}
    header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1000;
      padding: 20px 50px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: rgba(255,255,255,0.95);
      backdrop-filter: blur(15px);
      box-shadow: 0 2px 20px rgba(255,165,0,0.1);
      height: 70px;
    }
    .logo {
      font-size: 3rem;
      font-weight: 700;
      letter-spacing: 2px;
      color: #ff6b35;
    }

    nav { flex:1; display:flex; justify-content:center; align-items:center; }
    nav ul { display:flex; gap:70px; list-style:none; margin:0; padding:0; align-items:center; }
    nav ul li a { text-decoration:none; color:#333; font-weight:500; position:relative; }
    nav ul li a:hover{ color:#ff6b35; transform:translateY(-1px); }
    .btn-home { background:none; border:none; font-size:1.2rem; color:#333; cursor:pointer; padding:8px; text-decoration:none; display:flex; align-items:center; justify-content:center; }
    .btn-home:hover { color:#ff6b35; }

    .banner {
      width:100%;
      margin-top: 70px; 
      position: relative;
      overflow: hidden;
      background:#000;
    }

   
    .slides-wrapper {
      width:100%;
      overflow: hidden;
    }

    .slides {
      display:flex;
      flex-wrap:nowrap;
    }

    .slide {
      flex: 0 0 100%;
      min-width: 100%;
      box-sizing: border-box;
    }

    .slide img {
      display:block;
      width:100%;
      height:500px; 
      object-fit:cover;
    }

    .arrow {
      position:absolute;
      top:50%;
      transform:translateY(-50%);
      background: rgba(255,255,255,0.8);
      border: none;
      padding:10px;
      cursor:pointer;
      border-radius:50%;
      z-index: 20;
      font-size:18px;
    }
    .arrow.left { left: 16px; }
    .arrow.right { right: 16px; }
    .arrow:hover { background: rgba(255,255,255,1); }

    .banner-texts {
      padding: 30px 50px;
      background:#000;
      color:#fff;
    }
    .banner-texts .banner-text { display:none; max-width:1000px; }
    .banner-texts .banner-text.active { display:block; }
    .banner-texts h3 { color:#ffa726; margin:0 0 10px 0; }
    .banner-texts h2 { margin:0 0 10px 0; }
    .banner-texts p { margin:0; line-height:1.6; }

    /* responsif sederhana */
    @media (max-width:800px){
      .logo{font-size:2rem}
      .slide img{height:320px}
      nav ul{gap:20px}
      header{padding:8px 20px}
      .banner-texts{padding:20px}
    }

      .upacara-section {
    padding: 60px 100px;
    background-color: #fff;
    color: #333;
    font-family: 'Poppins', sans-serif;
  }

  .upacara-container {
    display: flex;
    flex-direction: column;
    gap: 60px;
  }

  .upacara-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 40px;
  }

  .upacara-item.reverse {
    flex-direction: row-reverse;
  }

  .upacara-text {
    flex: 1;
  }

  .upacara-text h2 {
    font-size: 2rem;
    color: #000;
    margin-bottom: 15px;
  }

  .upacara-text p {
    font-size: 1rem;
    line-height: 1.7;
    color: #555;
  }

  .upacara-media {
    flex: 1;
    position: relative;
  }

  .upacara-media img {
    width: 100%;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
  }

  .btn-more {
    display: inline-block;
    margin-top: 15px;
    color: #ff6b35;
    font-weight: 500;
    text-decoration: none;
    border: 1px solid #ff6b35;
    border-radius: 25px;
    padding: 8px 20px;
    transition: all 0.3s ease;
  }

  .btn-more:hover {
    background-color: #ff6b35;
    color: #fff;
  }

  @media (max-width: 900px) {
    .upacara-item, .upacara-item.reverse {
      flex-direction: column;
      text-align: center;
    }
    .upacara-section {
      padding: 40px 20px;
    }
  }

  </style>
</head>
<body>

  <header id="navbar">
    <a href="index.php" class="btn-home"><i class="fa fa-home"></i></a>

    <nav>
      <ul>
        <li><a href="Sejarah.php">Sejarah</a></li>
        <li><a href="Budaya.php">Budaya</a></li>
        <h1 class="logo">BHINNEKA</h1>
        <li><a href="bahasa.php">Bahasa</a></li>
        <li><a href="tradisi.php">Tradisi</a></li>
      </ul>
    </nav>

    <button type="button" class="btn-search"><i class="fa fa-search"></i></button>
  </header>

  <!-- ====== Banner slider ====== -->
  <div class="banner">
    <button class="arrow left"><i class="fa fa-chevron-left"></i></button>

    <!-- viewport -->
    <div class="slides-wrapper">
      <!-- track -->
      <div class="slides">
        <div class="slide">
          <img src="images/budaya indo.jpg" alt="Budaya Indonesia">
        </div>
        <div class="slide">
          <img src="images/bindo.jpg" alt="Tari Tradisional">
        </div>
        <div class="slide">
          <img src="images/ngaben.jpg" alt="Upacara / Pakaian Adat">
        </div>
        <div class="slide">
          <img src="images/bahasaindo.jpeg" alt="bahasa Indonesia">
        </div>
      </div>
    </div>

    <button class="arrow right"><i class="fa fa-chevron-right"></i></button>
  </div>

  <!-- teks per slide -->
  <div class="banner-texts">
    <div class="banner-text active" data-index="0">
      <h3>Budaya Indonesia</h3>
      <h2>Keberagaman Budaya Indonesia Merupakan Warisan Luhur</h2>
      <p>Indonesia adalah negara dengan kekayaan budaya yang luar biasa, dengan lebih dari 300 suku bangsa yang tersebar di seluruh kepulauan.</p>
    </div>

    <div class="banner-text" data-index="1">
      <h3>Warisan Tari</h3>
      <h2>Keindahan Tari Tradisional</h2>
      <p>Tari tradisional menyimpan cerita dan nilai-nilai lokal yang diwariskan turun-temurun.</p>
    </div>

    <div class="banner-text" data-index="2">
      <h3>Upacara & Pakaian Adat</h3>
      <h2>Simbol Identitas Daerah</h2>
      <p>Pakaian adat dan upacara tradisional memperlihatkan keunikan budaya setiap daerah di Indonesia.</p>
    </div>

    <div class="banner-text" data-index="3">
      <h3>Bahasa Indonesia</h3>
      <h2>Bahasa Indonesia Menjadi Bahasa Persatuan</h2>
      <p>Sejarah bagaimana bahasa Indonesia menjadi bahasa keseharian kita  merentang panjang. Dari kisah perdagangan di Nusantara, deklarasi Sumpah Pemuda pada 1928, sampai proklamasi kemerdekaan pada 1945.</p>
    </div>
  </div>

  <section class="upacara-section">
  <div class="upacara-container">
    <!-- Baris pertama -->
    <div class="upacara-item">
      <div class="upacara-text">
        <h2>Upacara Adat Sumatra<br>Budaya Indonesia</h2>
        <p>
          Upacara adat di Sumatera Utara adalah Tradisi Mangokkal Holi. Tradisi ini dikenal sebagai ritual untuk mengambil tulang belulang leluhur masyarakat dari dalam pemakaman, kemudian disimpan dalam peti dan diletakkan di salah satu bangunan tugu yang memang disediakan secara khusus.
        </p>
      </div>
      <div class="upacara-media">
        <img src="images/infobudaya.jpg" alt="Upacara Adat Sumatra">
      </div>
    </div>

    <!-- Baris kedua -->
    <div class="upacara-item reverse">
      <div class="upacara-media">
        <img src="images/tari.jpg" alt="Upacara Adat di Kepulauan Riau">
      </div>
      <div class="upacara-text">
        <h2>Upacara Adat di Kepulauan Riau</h2>
        <p>
          Upacara adat di Kepulauan Riau dikenal sebagai Tepuk Tepung Tawar. Adapun maksud dan tujuan digelarnya upacara ini guna memberikan berkah demi keselamatan dan kesejahteraan, serta menghapus kesialan orang yang melakukan upacara adat ini.
        </p>
        <button class="btn-class">Lihat Selengkapnya>>></button>
      </div>
    
  <script>
    (function(){
      const wrapper = document.querySelector('.slides-wrapper');
      const slides = document.querySelectorAll('.slide');
      const prevBtn = document.querySelector('.arrow.left');
      const nextBtn = document.querySelector('.arrow.right');
      const textBlocks = document.querySelectorAll('.banner-texts .banner-text');

      let index = 0;
      const total = slides.length;
      let autoSlideTimer = null;
      const INTERVAL = 3000; // 3 detik

      // tampilkan slide ke-n (dengan scroll ke posisi wrapper.clientWidth * index)
      function showSlide(n){
        index = (n + total) % total;
        const leftPos = index * wrapper.clientWidth;
        wrapper.scrollTo({ left: leftPos, behavior: 'smooth' });
        updateTexts();
      }

      // update teks yang aktif sesuai index
      function updateTexts(){
        textBlocks.forEach((t,i) => {
          if(i === index) t.classList.add('active'); else t.classList.remove('active');
        });
      }

      // tombol next/prev
      nextBtn.addEventListener('click', ()=> {
        showSlide(index + 1);
        resetAutoSlide();
      });
      prevBtn.addEventListener('click', ()=> {
        showSlide(index - 1);
        resetAutoSlide();
      });

      // auto slide
      function startAutoSlide(){
        stopAutoSlide();
        autoSlideTimer = setInterval(()=> showSlide(index + 1), INTERVAL);
      }
      function stopAutoSlide(){
        if(autoSlideTimer) { clearInterval(autoSlideTimer); autoSlideTimer = null; }
      }
      function resetAutoSlide(){
        stopAutoSlide();
        startAutoSlide();
      }

      // pause on hover (opsional tetapi nyaman)
      wrapper.addEventListener('mouseenter', stopAutoSlide);
      wrapper.addEventListener('mouseleave', startAutoSlide);
      // juga pada panah agar user bisa baca tanpa geser
      document.querySelectorAll('.arrow').forEach(a => {
        a.addEventListener('mouseenter', stopAutoSlide);
        a.addEventListener('mouseleave', startAutoSlide);
      });

      // ketika resize, jaga posisi scroll agar tetap di slide yg aktif
      window.addEventListener('resize', ()=> {
        // sedikit delay agar clientWidth terupdate
        setTimeout(()=> wrapper.scrollTo({ left: index * wrapper.clientWidth, behavior: 'instant' }), 50);
      });

      // inisialisasi
      showSlide(0);
      startAutoSlide();

    })();
  </script>
</body>
</html>

<?php include("footer.php"); ?>