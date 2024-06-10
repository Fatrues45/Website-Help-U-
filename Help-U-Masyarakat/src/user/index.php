<?php

$title = 'Aduan Masyarakat';

require '../../public/app.php';

require '../layouts/header.php';


// logic backend


// mengambil angka pengaduan dari database
$pengaduan = mysqli_query($conn, "SELECT * FROM pengaduan ORDER BY id_pengaduan  DESC LIMIT 1");

// mengambil angka tanggapan dari database
$tanggapan = mysqli_query($conn, "SELECT * FROM tanggapan ORDER BY id_tanggapan DESC LIMIT 1");

// mengambil angka akun masyarakat dari database
$masyarakat = mysqli_query($conn, "SELECT * FROM masyarakat ORDER BY nik  DESC LIMIT 1");

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-light py-3 shadow">
  <div class="container" data-aos="fade-down">
    <a class="navbar-brand" href="#">
      <img src="../../assets/img/helpu.png" alt="Logo" width="130" height="50" class="d-inline-block align-text-top">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link text-dark" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="mainpage.php">Mainpage</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="chat.php">Chat Kami</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <a href="login.php" class="btn btn-success mr-3">Login</a>
        <a href="register.php" class="btn btn-outline-success">Registrasi</a>
      </ul>
    </div>
  </div>
</nav>


<style>
    .custom-h1 {
      font-size: 60px;
      font-weight: bold;
    }

    .custom-p {
      font-size: 24px;
      font-weight: 500; /* Medium weight */
    }

    .custom-img {
      width: 786px;
      height: 328px;
      max-width: 100%; /* Ensure it doesn't overflow */
    }
    .highlight {
            padding: 20px;
            border-radius: 10px;
        }
        .news-title {
            font-size: 2rem;
            font-weight: bold;
        }
        .btn-custom {
            border: 1px solid #fff;
            color: #fff;
            background-color: transparent;
            padding: 10px 20px;
            text-transform: uppercase;
        }
        .image-container {
            background-color: #E0F8F8;
            border-radius: 10px;
            padding: 20px;
        }
        .image-container img {
            border-radius: 10px;
        }
        .badge-custom {
            background-color: #008080;
            color: #fff;
        }
    body {
      background-color: #f8f9fa;
      font-family: Arial, sans-serif;
    }

    .hero-section {
      background-color: #f8f9fa;
      padding: 150px 0;
      text-align: center;
    }

    .hero-section h1 {
      font-size: 86px;
      font-weight: bold;
    }

    .hero-section p {
      font-size: 24px;
      font-weight: 500;
    }

    .btn-outline-dark {
      font-size: 20px;
      padding: 10px 20px;
    }

    .btn {
      display: inline-block;
      padding: 10px 20px;
      font-size: 1rem;
      text-align: center;
      text-decoration: none;
      border: 0px solid #000;
      border-radius: 5px;
      transition: background-color 0.3s, color 0.3s;
    }

    .btn:hover {
      background-color: #20C997;
      color: #fff;
    }

    .report-section {
      padding: 50px 0;
    }

    .report-section h2 {
      font-size: 43px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .report-section p {
      font-size: 18px;
      margin-bottom: 30px;
    }

    .report-section .btn {
      font-size: 20px;
      padding: 10px 20px;
      background-color: #20c997;
      color: #fff;
      border: none;
    }

    .report-card {
      background-color: #fff;
      border: 2px solid #20c997;
      border-radius: 10px;
      padding: 20px;
      margin: 10px;
      text-align: left;
      width: 350px;
      height: 303px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .report-card .card-header {
      display: flex;
      align-items: center;
      margin-bottom: 0px;
      background: none;
    }

    .report-card img {
      border-radius: 50%;
      width: 80px;
      height: 80px;
      margin-right: 15px;
    }

    .report-card h5 {
      font-size: 24px;
      margin: 0;
      font-weight: bold;
      background: none;
    }

    .report-card .pelapor {
      font-size: 18px;
      color: #777;
    }

    .report-card p {
      font-size: 16px;
      color: #333;
    }

    .report-card blockquote {
      font-size: 30px;
      font-weight: bold;
      color: #333;
      margin-top: 10px;
      text-align: right;
    }

    .report-card-blue {
      background-color: #20c997;
      color: #fff;
    }

    .middle-card {
      color: #fff;
      background-color: #20c997;
    }
    /* Styling untuk judul dan deskripsi bagian */
    .section-titlep {
            text-align: left;
            margin-bottom: 16px; /* Sesuaikan nilai ini untuk jarak */
            font-size: 14px;
            font-weight: semi-bold;
        }
    .section-title {
            text-align: left;
            margin-bottom: 8px; /* Sesuaikan nilai ini untuk jarak */
            font-size: 40px;
            font-weight: bold;
        }
        .section-description {
            text-align: left;
            margin-bottom: 30px; /* Sesuaikan nilai ini untuk jarak */
            font-size: 16px;
        }
        /* Styling untuk kartu dokter */
        .doctor-card {
            border: 2px solid #20CFC6;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            text-align: center;
        }
        /* Warna latar belakang khusus untuk kartu tengah */
        .doctor-card.middle-card {
            background-color: #008080; /* Sesuaikan nilai ini untuk warna latar belakang */
        }
        /* Styling untuk gambar dokter */
        .doctor-card img {
            border-radius: 50%;
            width: 80px;
            height: 80px;
            object-fit: cover;
        }
        /* Styling untuk tombol chat */
        .chat-btn {
          display: inline-block;
            background-color: #20CFC6;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            text-transform: uppercase;
        }
        .chat-btn:hover {
            background-color: #20C997;
        }

    .middle-card h5,
.middle-card .pelapor,
.middle-card .tulisan,
.middle-card .block {
  color: #fff; /* Mengubah warna teks menjadi putih */
}
.footer {
            background-color: #008080; /* Warna teal */
            color: white;
            padding: 40px 0;
        }
        .footer a {
            color: white;
        }
        .footer a:hover {
            color: #a7f5ff; /* Warna highlight */
        }
        .footer .social-icons a {
            margin-right: 15px;
        }
        .footer .footer-bottom {
            border-top: 1px solid #a7f5ff;
            padding-top: 20px;
            margin-top: 20px;
        }
  </style>
</head>
<body>
  <div style="background-color: #fff; border-bottom-right-radius: 100px; border-bottom-left-radius: 100px; padding:150px;">
    <div class="container" data-aos="zoom-in">
      <div class="row align-items-center">
        <div class="col-md-6 text-left">
          <h1 class="custom-h1">Selamat Datang Di layanan HELP-U</h1>
          <p class="custom-p">Laporkan kepada kami apa yang terjadi kepada kamu, kami siap membantu.</p>
          <a href="login.php" class="btn btn-outline-dark">Buat laporan sekarang!</a>
        </div>
        <div class="col-md-6 text-center">
          <img src="../../assets/img/hero.png" alt="Hero Image" class="img-fluid custom-img">
        </div>
      </div>
    </div>
  </div>
</body>



<div class="container" style="margin-top: -35px ;">
  <!-- Card -->
  <?php while ($row = mysqli_fetch_assoc($pengaduan)) : ?>
    <div class="row mb-3">
      <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-duration="500">
        <div class="card border-left-info border-bottom-info shadow-lg h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col ml-3">
                <div class="h5 mb-0 font-weight-bold text-info"><?= $row['id_pengaduan']; ?> Pengaduan</div>
              </div>
              <i class="fas fa-comment fa-2x text-gray-500"></i>
            </div>
          </div>
        </div>
      </div>
    <?php endwhile; ?>

    <?php while ($row = mysqli_fetch_assoc($tanggapan)) : ?>
      <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-duration="700">
        <div class="card border-left-success border-bottom-success shadow-lg h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col ml-3">
                <div class="h5 mb-0 font-weight-bold text-success"><?= $row['id_tanggapan']; ?> Tanggapan</div>
              </div>
              <i class="fas fa-comments fa-2x text-gray-500"></i>
            </div>
          </div>
        </div>
      </div>
    <?php endwhile; ?>

    <?php while ($row = mysqli_fetch_assoc($masyarakat)) : ?>
      <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-duration="900">
        <div class="card border-left-warning border-bottom-warning shadow-lg h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col ml-3">
                <div class="h5 mb-0 font-weight-bold text-warning">5 Akun masyarakat</div>
              </div>
              <i class="fas fa-users fa-2x text-gray-500"></i>
            </div>
          </div>
        </div>
      </div>
    <?php endwhile ?>
    </div>


    <div class="container mt-5" data-aos="zoom-in">
        <div class="highlight">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <span class="badge badge-success">Berita Terbaru</span>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h1 class="news-title">Judul Berita</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <a href="#" class="btn btn-outline-success">Jelajahi lebih lanjut</a>
                </div>
                <div class="col-md-6">
                <div class="image-container">
                    <img src="../../assets/img/hero.png" class="img-fluid" alt="News Image">
                    <small class="d-block text-muted">Credit: Daniel de la Hoz</small>
                </div>
            </div>
        </div>
    </div>

<div class="container report-section" data-aos="zoom-in">
    <h2>PENGADUAN ONLINE</h2>
    <p>Adukan kejadian kekerasan yang anda alami dengan cara klik tombol <a href="#" style="color: #20c997; text-decoration: underline;">Laporkan</a> maka anda di minta untuk melengkapi form dan pihak kami akan menindak lanjuti ke KOMNAS HAM atau pihak terkait.</p>
    <div class="row">
      <div class="col-md-6 col-lg-4">
        <div class="report-card">
          <div class="card-header">
            <img src="../../assets/img/silvi.png" alt="Naswa">
            <div>
              <h5>Naswa</h5>
              <span class="pelapor">Pelapor</span>
            </div>
          </div>
          <p>Saya telah mengalami KDRT selama 5 tahun dan tidak tahu ingin melapor kemana tapi semenjak ada HELP-U saya mudah untuk melaporkannya.</p>
          <blockquote>“</blockquote>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="report-card report-card-blue">
          <div class="card-header  middle-card">
            <img src="../../assets/img/silvi.png" alt="Silvia Setia N">
            <div>
              <h5>Silvia Setia N</h5>
              <span class="pelapor">Pelapor</span>
            </div>
          </div>
          <p class="tulisan">Saya mengalami kekerasan yang di lakukan majikan saya terkadang saya juga mengalami kekerasan seksual dan bingung melapor kemana.....</p>
          <blockquote class="block">“</blockquote>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="report-card">
          <div class="card-header">
            <img src="../../assets/img/silvi.png" alt="Reyhan">
            <div>
              <h5>Reyhan</h5>
              <span class="pelapor">Pelapor</span>
            </div>
          </div>
          <p>Saya mengalami kekerasan oleh ayah tiri saya dan selalu mendapatkan kekerasan setiap harinya sebagai pelampiasan ayah saya.....</p>
          <blockquote>“</blockquote>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-5">
        <h2 class="section-titlep badge badge-success" data-aos="zoom-in-up" >Sahabat Jiwa</h2>
        <h3 class="section-title" data-aos="zoom-in-up">Konsultasi dengan dokter kami</h3>
        <p class="section-description" data-aos="fade-up">Help-U menyediakan dokter-dokter untuk sekedar bercerita atau berkonsultasi dengan pengguna Help-U</p>
        <div class="row">
            <div class="col-md-4">
                <div class="doctor-card" data-aos="fade-up" data-aos-duration="500">
                    <img src="../../assets/img/silvi.png" alt="Dr. Najma Zahira">
                    <h5 class="mt-3">DR.Rokayah SPKJ</h5>
                    <p>dokter spesial jiwa</p>
                    <p>Financial expertise has made a significant impact on our nonprofit financial stability, allowing us to better serve our community.</p>
                    <a href="https://wa.me/085877536650" class="chat-btn" target="_blank">Chat</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="doctor-card middle-card" data-aos="fade-up" data-aos-duration="700">
                    <img src="../../assets/img/silvi.png" alt="Dr. Risa SpKJ">
                    <h5 class="mt-3">DR. Risa SpKJ</h5>
                    <p>dokter spesialis jiwa</p>
                    <p>Financial planning and investment advice I received from this team completely transformed my future. I couldn’t be happier with the results.</p>
                    <a href="https://wa.me/085877536650" class="chat-btn" target="_blank">Chat</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="doctor-card" data-aos="fade-up" data-aos-duration="900">
                    <img src="../../assets/img/silvi.png" alt="Dr. Nanang H">
                    <h5 class="mt-3">DR. Nanang H</h5>
                    <p>mantri sunat</p>
                    <p>Estate planning is crucial, and they made the process seamless and stress-free. I can rest assured knowing my family's future is secure.</p>
                    <a href="https://wa.me/085877536650" class="chat-btn" target="_blank">Chat</a>
                </div>
            </div>
        </div>
    </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php require '../layouts/footer1.php'; ?>