<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
  <title>PerpusRek.com</title>
  <link rel="icon" href="assets/logoUrl.png" type="image/png">
  <style>
    .custom-text-primary {
      font-size: 3rem;
      /* Adjust font size as needed */
    }

    .custom-subtext {
      text-align: center;
      font-size: 2.5rem;
    }

    .custom-btn {
      display: block;
      margin: 0 auto;
    }

    body {
      background-color: #1a1a1a;
      /* Warna hitam yang tidak terlalu pekat */
      color: white;
      /* agar bisa di-scroll */
    }

    .container-fluid {
      background-color: #fff;
      
      /* Warna putih */
    }

    .container-fluid {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      background-color: #fff;
      padding: 5px;
      transition: transform 0.3s ease;
    }

    .scroll-down {
      transform: translateY(-100%);
    }

    .book-img {
  width: 300px;
  height: 450px;
  object-fit: cover;
}

.carousel-control-prev,
.carousel-control-next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 40px; /* ukuran lingkaran */
  height: 40px; /* ukuran lingkaran */
  border-radius: 50%; /* membuatnya menjadi lingkaran */
  background-color: rgba(255, 255, 255, 0.5); /* warna latar belakang dengan opacity */
  border: none;
  color: black;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
  margin-top: 3px; /* penyesuaian posisi ikon di tengah lingkaran */
}


  </style>
</head>

<body>
  <h1> PerpusRek </h1>
  <!--Navbar-->
  <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary shadow-sm justify-space-between">
    <div class="container-fluid">
      <img src="assets/logoNav2.png" alt="logo" width="120px">
      <a href="sign/link_login.html" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#homeSection">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#aboutSection">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#footer">Contact</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="btn btn-primary custom-btn" href="sign/link_login.html">Get started</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section id="homeSection" class="p-5">
    <div class="d-flex flex-wrap justify-content-center">
      <div class="col mt-5 text-center">
        <h2 class="fw-bold text-success custom-text-primary"><span class="text-primary">Perpus</span>Rek</h2>
        <p class="mb-4 custom-subtext">"Temukan Dunia Pengetahuan di Ujung Jari Anda: <br> Perpustakaan Online <span class="fw-bold">PerpusRek!!</span> Membawa Anda ke Dunia Buku Digital."</p>
        <!-- Image slider -->
        <div id="spotlightCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row justify-content-center">
                <div class="col-3">
                  <img src="imgDB/654e4417e323e.jpeg" class="d-block w-100 book-img" alt="Book 1">
                </div>
                <div class="col-3">
                  <img src="imgDB/654e402a8ad79.jpg" class="d-block w-100 book-img" alt="Book 2">
                </div>
                <div class="col-3">
                  <img src="imgDB/654e46a08484e.jpg" class="d-block w-100 book-img" alt="Book 3">
                </div>
                <div class="col-3">
                  <img src="imgDB/654e4f5e85f75.jpg" class="d-block w-100 book-img" alt="Book 4">
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row justify-content-center">
                <div class="col-3">
                  <img src="imgDB/654e456c2e275.jpg" class="d-block w-100 book-img" alt="Book 5">
                </div>
                <div class="col-3">
                  <img src="imgDB/654e505d7eda4.jpg" class="d-block w-100 book-img" alt="Book 6">
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#spotlightCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#spotlightCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-#1a1a1a p-5" id="aboutSection" style="background-color: #1a1a1a;">
    <div class="row">
      <div class="d-flex">
        <h2 class="text-primary">About</h2>
      </div>
      <p>Kami percaya bahwa pengetahuan adalah kekuatan, dan setiap individu berhak mendapatkan akses ke sumber daya pendidikan yang berkualitas.
        Inilah sebabnya kami menciptakan aplikasi perpustakaan online kami, yang dirancang untuk menjadi pintu gerbang ke ribuan buku, artikel,
        dan sumber daya belajar lainnya, semuanya hanya dalam genggaman Anda. Kami berdedikasi untuk memajukan literasi dan pembelajaran seumur hidup,
        dan kami ingin menjadi mitra Anda dalam perjalanan pembelajaran Anda. Aplikasi perpustakaan kami telah dirancang dengan antarmuka yang ramah
        pengguna, fitur pencarian canggih, dan koleksi konten yang terus berkembang untuk menginspirasi dan memberdayakan semua anggota komunitas kami</p>
        </div>
    <div class="d-flex justify-content-center">
      <h3 class="text-secondary">Dikembangkan Oleh :</h3>
    </div>

    <div class="d-flex justify-content-center flex-wrap gap-4 mt-4">
      <div class="card border-info mb-3" style="max-width: 18rem;">
        <div class="card-header">Kelompok </div>
        <div class="card-body">
          <h5 class="card-title">Mahasiswa Informatika UPN Jatim</h5>
        </div>
      </div>
    </div>
  </section>

  <footer id="footer" class="p-3 bg-dark">
    <div class="row">
      <div class="col">
        <img src="assets/logoFooter2.png" width="200px">
      </div>
    </div>
    <div class="row p-3">
      <div class="col mt-3">
        <h3 class="text-light fs-5">Alamat</h3>
        <p class="text-secondary fs-6">Jl. Rungkut Madya No.1, Gn. Anyar, Kec. Gn. Anyar, Surabaya, Jawa Timur 60294</p>
      </div>
      <hr class="text-light mt-3">
      <div class="d-flex justify-content-center gap-4">
        <a href="" class="fs-3"><i class="fa-brands fa-github"></i></a>
        <a href="" class="fs-3"><i class="fa-brands fa-telegram"></i></a>
        <a href="" class="fs-3"><i class="fa-brands fa-instagram"></i></a>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qZZoWY1cKTRlbDdDWmsMY1y5WOb3myjLBlRZpyc8xKfMBoHk6bCAc1lXjJm1Aw7d" crossorigin="anonymous"></script>
  <script>
    let lastScrollTop = 0;

    window.addEventListener('scroll', function() {
      let currentScroll = window.pageYOffset || document.documentElement.scrollTop;
      if (currentScroll > lastScrollTop) {
        // Scroll down
        document.querySelector('.container-fluid').classList.add('scroll-down');
      } else {
        // Scroll up
        document.querySelector('.container-fluid').classList.remove('scroll-down');
      }
      lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // For Mobile or negative scrolling
    });

    let currentSlide = 0;
    let totalSlides = document.querySelectorAll("#spotlightCarousel .carousel-item").length;

    document.querySelector(".carousel-control-prev").addEventListener("click", function() {
      currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
      showSlide(currentSlide);
    });

    document.querySelector(".carousel-control-next").addEventListener("click", function() {
      currentSlide = (currentSlide + 1) % totalSlides;
      showSlide(currentSlide);
    });

    function showSlide(slideIndex) {
      document.querySelectorAll("#spotlightCarousel .carousel-item").forEach((item, index) => {
        if (index === slideIndex) {
          item.classList.add("active");
          item.classList.add("carousel-item-slide");
        } else {
          item.classList.remove("active");
          item.classList.remove("carousel-item-slide");
        }
      });
    }
  </script>
</body>

</html>
