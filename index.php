<?php
include "koneksi.php";
?>


<!-- 'Link Vidio Presentasi'
'https://drive.google.com/file/d/1DJ9hNKj-ea578PCh_cB5q7xV_x6Ifd5n/view?usp=drive_link' -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Investasi</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous" />
    <style>
    
      #carouselExampleIndicators .carousel-item {
        height: 400px;
      }

      #carouselExampleIndicators .carousel-item img {
        height: 100%;
        width: 100%;
        object-fit: cover;
      }

      .card-img-top-custom {
        height: 200px;
        object-fit: cover;
        width: 100%;
      }

      .navbar-nav .nav-link {
        border-radius: 0.25rem;
      }
     
      .navbar-nav .nav-link.active {
        background-color: #0d6efd;
        color: white !important;
      }
      .icon {
        width: 15px;
        height: 15px;
      }

      #kiri {
        text-align: justify;
    
      }
      #kanan {
        text-align: justify;
      
      }

      #tombol {
  border: 2px solid #0d6efd; 
  border-radius: 0.5rem; 
}
    </style>
  </head>
  <body
    data-bs-spy="scroll"
    data-bs-target="#navbarSupportedContent"
    data-bs-smooth-scroll="true"
    tabindex="0">
    <nav
      class="navbar navbar-expand-lg bg-body-tertiary sticky-top"
      id="navbar">
      <div class="container">
        <a class="navbar-brand" href="#">
          <span class="fs-5 fw-bold d-block lh-1">KEPIN UHUY</span>
          <small class="d-block text-secondary" style="font-size: 0.7em"
            >- Investor Saham Multibager</small
          >
        </a>
        
         <div class="">
          <button id="tombol" class="btn bg-dark">
            <img src="moon.png" alt="Bulan" class="icon" />
          </button>
        </div>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 nav nav-pills">
            <li class="nav-item">
              <a class="nav-link active" href="#home-section"> Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#article-section"> Articel </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#galery-section"> Galery </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#schedule-section"> Schedule </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#profile-section"> Profile </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact-section"> Contact </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="login.php"> Login </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main class="container mt-4">
      <div id="home-section">
        <section id="hero" class="text-center p-5 bg-dark">
          <div class="container">
            <div class="align-items-center">
              <div id="judul">
                <h1 class="fw-bold display-4 text-white">Investasi Saham Multibager</h1>
                <h4 class="lead display-6 text-white">"No Pain No Gain"</h4>
              </div>
            </div>
          </div>
          <div
            id="carouselExampleIndicators"
            class="carousel slide"
            data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"></button>
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="1"
                aria-label="Slide 2"></button>
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="jas2.jpg" class="d-block w-100" alt="jas" />
              </div>
              <div class="carousel-item">
                <img src="ferrarii.jpg" class="d-block w-100" alt="ferrari" />
              </div>
              <div class="carousel-item">
                <img src="chart.jpg" class="d-block w-100" alt="chart" />
              </div>
            </div>

            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide="prev">
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide="next">
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

          <div id="waktu" class="text-white mt-5">
            <span id="tanggal"></span>
            <span id="jam"></span>
          </div>
        </section>

        <section class="mt-5">
          <div id="paragraf" class="text-center">
            <h2 class="fw-bold text-success">
              Selamat Datang di Dunia Investasi
            </h2>
            <p class="mt-6">
              Halo, saya <strong>Kepin Uhuy</strong> — seorang investor muda
              yang fokus pada saham multibagger dan value investing jangka
              panjang.Di situs ini kamu bisa melihat portofolio, galeri
              perjalanan investasi, serta cara menghubungi saya untuk kolaborasi
              dan diskusi.
            </p>
          </div>

          <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
            <div class="col">
              <div class="card card-custom h-100">
                <img src="cbre.png" class="card-img-top-custom" alt="CBRE" />
                <div class="card-body">
                  <h5 class="card-title fw-bold">CBRE</h5>
                  <p class="card-text text-muted">
                    CBRE (PT Cakra Buana Resources Energi Tbk) bergerak dalam
                    sektor energi dan logistik maritim, menyediakan jasa
                    angkutan laut, terutama menggunakan kapal tunda dan
                    tongkang, untuk mengangkut berbagai jenis barang, mulai dari
                    hasil tambang hingga konstruksi.
                  </p>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card card-custom h-100">
                <img src="CDIA.png" class="card-img-top-custom" alt="CDIA" />
                <div class="card-body">
                  <h5 class="card-title fw-bold">CDIA</h5>
                  <p class="card-text text-muted">
                    CDIA (PT Chandra Daya Investasi Tbk) merupakan perusahaan
                    investasi infrastruktur yang menyediakan dukungan logistik,
                    termasuk transportasi maritim (pengadaan kapal) dan
                    pengelolaan fasilitas penunjang industri, seperti pelabuhan
                    dan tangki penyimpanan.
                  </p>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card card-custom h-100">
                <img src="CUAN.png" class="card-img-top-custom" alt="CUAN" />
                <div class="card-body">
                  <h5 class="card-title fw-bold">CUAN</h5>
                  <p class="card-text text-muted">
                    CUAN (PT Petrindo Jaya Kreasi Tbk) fokus pada sektor
                    pertambangan batu bara, mencakup eksplorasi, penambangan,
                    dan penjualan komoditas tersebut.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

      <div id="article-section" class="mt-5 pt-5">
       <!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-5 pb-3">Article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->
      </div>

      <div id="galery-section" class="mt-5 pt-5">
        <section class="text-center p-3">
          <div class="container bg-white">
          <h1 id="galeri">Galeri Investor Sukses diSaham</h1>
          <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
            <div class="col">
              <div class="card card-custom h-100">
                <img
                  src="andry.jpg"
                  class="card-img-top-custom"
                  alt="pitcture" />
                <div class="card-body">
                  <h5 class="card-title fw-bold">Andry Hakim</h5>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card card-custom h-100">
                <img
                  src="Lokenghong.jpg"
                  class="card-img-top-custom"
                  alt="pitcture" />
                <div class="card-body">
                  <h5 class="card-title fw-bold">Lo keng Hong</h5>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card card-custom h-100">
                <img
                  src="hartonogroup.jpg"
                  class="card-img-top-custom"
                  alt="pitcture" />
                <div class="card-body">
                  <h5 class="card-title fw-bold">Hartono Bersaudara</h5>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card card-custom h-100">
                <img
                  src="sandiaga.jpg"
                  class="card-img-top-custom"
                  alt="pitcture" />
                <div class="card-body">
                  <h5 class="card-title fw-bold">Sandiaga Uno</h5>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card card-custom h-100">
                <img
                  src="timoty.jpg"
                  class="card-img-top-custom"
                  alt="pitcture" />
                <div class="card-body">
                  <h5 class="card-title fw-bold">Timoty Ronald</h5>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card card-custom h-100">
                <img
                  src="chairul.jpg"
                  class="card-img-top-custom"
                  alt="pitcture" />
                <div class="card-body">
                  <h5 class="card-title fw-bold">Chairul Tanjung</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
     </div>

<div id="schedule-section" class="mt-5 pt-5">
    <section class="p-5 text-center"> 
      <div class="container bg-white">
        <h1>JADWAL</h1>
        <p class="lead">List Jadwal Saham Listing.</p>
        
      <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-header bg-primary text-white text-center fw-bold fs-5">
                        Senin
                    </div>
                    
                    <div class="card-body text-center">
                        
                        <h5 class="fw-bold mt-2">09:00 - 16.00</h5>
                        <p class="mb-0">Sesi Analisis Fundamental Saham Baru</p>
                        <p class="text-muted">(Ruang Zoom 1)</p>
                        
                    </div>
                </div>
            </div>

             <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-header bg-success text-white text-center fw-bold fs-5">
                        Selasa
                    </div>
                    
                    <div class="card-body text-center">
                        
                        <h5 class="fw-bold mt-2">19:00 - 21:00</h5>
                        <p class="mb-0">Webinar Strategi Value Investing</p>
                        <p class="text-muted">(Live YouTube)</p>
                        
                      
                    </div>
                </div>
            </div>

             <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-header bg-danger text-white text-center fw-bold fs-5">
                        Rabu
                    </div>
                    
                    <div class="card-body text-center">
                        
                        <h5 class="fw-bold mt-2">13:00 - 15:00</h5>
                        <p class="mb-0">Review Portofolio dan Risk Management</p>
                        <p class="text-muted">(Ruang Diskusi Alpha)</p>
                        
                        
                        
                    </div>
                </div>
            </div>


             <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-header bg-warning text-white text-center fw-bold fs-5">
                        Kamis
                    </div>
                    
                    <div class="card-body text-center">
                        
                        <h5 class="fw-bold mt-2">09:00 - 11:30</h5>
                        <p class="mb-0">Sesi Analisis Teknikal Lanjutan</p>
                        <p class="text-muted">(Chart Workshop)</p>
                        
                        
                        
                    </div>
                </div>
            </div>


             <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-header bg-info text-white text-center fw-bold fs-5">
                        Jumat
                    </div>
                    
                    <div class="card-body text-center">
                        
                        <h5 class="fw-bold mt-2">14:00 - 15:30</h5>
                        <p class="mb-0">Q&A Saham Multibagger</p>
                        <p class="text-muted">(Live Youtube)</p>
                        
                 
                        
                    </div>
                </div>
            </div>

             <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-header bg-secondary text-white text-center fw-bold fs-5">
                        Sabtu
                    </div>
                    
                    <div class="card-body text-center">
                        
                        <h5 class="fw-bold mt-2">10:00 - 12:00</h5>
                        <p class="mb-0">Live Trading dan Market Recap Mingguan</p>
                        <p class="text-muted">(Ruang Zoom 2)</p>
                        
                        
                    </div>
                </div>
            </div>

             <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-header bg-dark text-white text-center fw-bold fs-5">
                        Minggu
                    </div>
                    
                    <div class="card-body text-center">
                        
                   
                        <p class="mb-0">Istirahat/Persiapan</p>
                        <p class="text-muted">Market Screening untuk Minggu Depan</p>
                        
                        
                    </div>
                </div>
            </div>
          </div>
      </section>
</div>

<div id="profile-section" class="mt-5 pt-5">
   
  <section id="profile" class=" my-5">
    <div class="bg-white p-4 rounded">
        
      <div class=" my-5">
          <!-- Judul Halaman -->
          <h3 class="fw-bold mb-4 text-center">Profil Investor</h3>

          <!-- Card Profil -->
          <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
            <div class="card-body">

              <div class="row align-items-center">
                <!-- Foto -->
                <div class="col-md-3 text-center mb-3 mb-md-0">
                  <img src="jas2.jpg" 
                      alt="Foto Mahasiswa" 
                      class="rounded-circle border border-3 img-fluid" 
                      style="width: 150px; height: 150px; object-fit: cover;">
                </div>

                <!-- Data -->
                <div class="col-md-9">
                  <h5 class="fw-semibold mb-1 d-flex justify-content-center justify-content-xl-start">Mokhamad Irsyadul Ishdaq</h5>
                  <table class="table-borderless mb-0" >
                    <tbody class="">
                      <tr>
                        <th class="text-start" style="width: 150px;">NIM</th>
                        <td>: A11.2024.15684</td>
                      </tr>
                      <tr>
                        <th class="text-start">Program Studi</th>
                        <td>: Teknik Informatika</td>
                      </tr>
                      <tr>
                        <th class="text-start">Email</th>
                        <td>: 111202415684@mhs.dinus.ac.id</td>
                      </tr>
                      <tr>
                        <th class="text-start">Telepon</th>
                        <td>: +62 896 3042 7670</td>
                      </tr>
                      <tr>
                        <th class="text-start align-top" >Alamat</th>
                        <td class="align-top">: Jl. Nakula 1 , Pendrikan Kidul, Pendrikan, Semarang, Jawa Tengah</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>
      
  


      <div id="contact-section" class="mt-5 pt-5">
        <section class="p-5">
          <div id="container" class="container">
            <h1 class="text-center mb-4">Hubungi </h1>
            <div class="row justify-content-center">
              <div class="col-md-8">
                <form>
                  <div class="mb-3">
                    <label for="inputName" class="form-label"
                      >Nama Lengkap</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="inputName"
                      required />
                  </div>
                  <div class="mb-3">
                    <label for="inputEmail" class="form-label"
                      >Alamat Email</label
                    >
                    <input
                      type="email"
                      class="form-control"
                      id="inputEmail"
                      required />
                  </div>
                  <div class="mb-3">
                    <label for="inputSubject" class="form-label">Subjek</label>
                    <input
                      type="text"
                      class="form-control"
                      id="inputSubject"
                      required />
                  </div>
                  <div class="mb-3">
                    <label for="inputMessage" class="form-label">Pesan</label>
                    <textarea
                      class="form-control"
                      id="inputMessage"
                      rows="4"
                      required></textarea>
                  </div>
                  <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg">
                      Kirim Pesan
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
      </div>
    </main>

    <div id="login-section" class="mt-5 pt-5">

    </div>

    <footer class="py-3 mt-5 border-top bg-light text-black">
      <div class="container text-center">
        <span class="small">&copy; 2025 kepin investor</span>
      </div>
    </footer>

    <script type="text/javascript">
      function tampilWaktu() {
        var waktu = new Date();
        var bulan = waktu.getMonth() + 1;
        document.getElementById("tanggal").innerHTML =
          waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();
        document.getElementById("jam").innerHTML =
          waktu.getHours() +
          ":" +
          waktu.getMinutes() +
          ":" +
          waktu.getSeconds();
        setTimeout("tampilWaktu()", 1000);
      }
      window.setTimeout("tampilWaktu()", 1000);
    </script>

   <script type="text/javascript">
   document.getElementById("tombol").onclick = function () {
    const tombol = document.getElementById("tombol");
    const gambar = tombol.querySelector("img");

    // Dapatkan elemen yang akan diubah warnanya
    const navbar = document.querySelector(".navbar");
    const footer = document.querySelector("footer");
    const navbarSmall = document.querySelector(".navbar-brand small");

    if (tombol.classList.contains("bg-dark")) {
      // ------------------------------------
      // MODE LIGHT AKTIF (Switch dari Dark ke Light)
      // ------------------------------------
      
      // 1. Ganti Tombol
      tombol.classList.remove("bg-dark");
      tombol.classList.add("bg-white");
      if (gambar) {
        gambar.remove();
      }
      const gambarMatahari = document.createElement("img");
      gambarMatahari.src = "sun.png";
      gambarMatahari.alt = "Matahari";
      gambarMatahari.classList.add("icon");
      tombol.appendChild(gambarMatahari);

      // 2. Ganti Warna Body & Hero (Bagian Utama)
      document.body.classList.add("bg-dark");
      document.body.classList.remove("bg-white");
      document.getElementById("hero").classList.add("bg-white");
      document.getElementById("hero").classList.remove("bg-dark"); 
      // 3. Ganti Warna Teks
      document.querySelector("#judul h1").classList.add("text-dark");
      document.querySelector("#judul h4").classList.add("text-dark");
      document.querySelector("#judul h1").classList.remove("text-white");
      document.querySelector("#judul h4").classList.remove("text-white");
      document.getElementById("waktu").classList.remove("text-white");
      document.getElementById("waktu").classList.add("text-black");
      document.getElementById("paragraf").classList.remove("text-black");
      document.getElementById("paragraf").classList.add("text-white");
      document.getElementById("container").classList.add("text-white");
      document.getElementById("container").classList.remove("text-black");

      // 4. Jaga Navbar & Footer TETAP LIGHT MODE
      navbar.classList.remove("bg-dark", "text-white"); 
      navbar.classList.add("bg-body-tertiary", "text-black"); 
      footer.classList.remove("bg-dark", "text-white"); 
      footer.classList.add("bg-light", "text-black"); 
      navbarSmall.classList.remove("text-white");
      navbarSmall.classList.add("text-black");

    } else {
      // ------------------------------------
      // MODE DARK AKTIF (Switch dari Light ke Dark)
      // ------------------------------------
      
      // 1. Ganti Tombol
      tombol.classList.remove("bg-white");
      tombol.classList.add("bg-dark");
      const gambarMatahariAktif = tombol.querySelector("img");
      if (gambarMatahariAktif) {
        gambarMatahariAktif.remove();
      }
      const gambarBulan = document.createElement("img");
      gambarBulan.src = "moon.png";
      gambarBulan.alt = "Bulan";
      gambarBulan.classList.add("icon");
      tombol.appendChild(gambarBulan);

      // 2. Ganti Warna Body & Hero (Bagian Utama)
      document.body.classList.add("bg-white");
      document.body.classList.remove("bg-dark");
      document.getElementById("hero").classList.remove("bg-white");
      document.getElementById("hero").classList.add("bg-dark");
      
      // 3. Ganti Warna Teks
      document.querySelector("#judul h1").classList.remove("text-dark");
      document.querySelector("#judul h4").classList.remove("text-dark");
      document.querySelector("#judul h1").classList.add("text-white");
      document.querySelector("#judul h4").classList.add("text-white");
      document.getElementById("waktu").classList.add("text-white");
      document.getElementById("waktu").classList.remove("text-black");
      document.getElementById("paragraf").classList.add("text-black");
      document.getElementById("paragraf").classList.remove("text-white");
      document.getElementById("container").classList.add("text-black");
      document.getElementById("container").classList.remove("text-white");

      // 4. Jaga Navbar & Footer TETAP LIGHT MODE
      navbar.classList.remove("bg-dark", "text-white"); 
      navbar.classList.add("bg-body-tertiary", "text-black"); 
      footer.classList.remove("bg-dark", "text-white"); 
      footer.classList.add("bg-light", "text-black"); 
      navbarSmall.classList.remove("text-white");
      navbarSmall.classList.add("text-black");

    }
  };
</script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
  </body>
</html>
