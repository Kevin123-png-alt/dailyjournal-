<?php
//memulai session atau melanjutkan session yang sudah ada
session_start();

//menyertakan code dari file koneksi
include "koneksi.php";

//check jika sudah ada user yang login arahkan ke halaman admin
if (isset($_SESSION['username'])) { 
  header("location:admin.php"); 
  exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['user'];
  
  //menggunakan fungsi enkripsi md5 supaya sama dengan password yang tersimpan di database
  $password = md5($_POST['pass']);

  //prepared statement - pastikan query bersih tanpa kolom role jika sudah dihapus
  $stmt = $conn->prepare("SELECT username FROM user WHERE username=? AND password=?");

  //parameter binding 
  $stmt->bind_param("ss", $username, $password);
  
  //database executes the statement
  $stmt->execute();
  
  //menampung hasil eksekusi
  $hasil = $stmt->get_result();
  
  //mengambil baris dari hasil sebagai array asosiatif
  $row = $hasil->fetch_array(MYSQLI_ASSOC);

  //check apakah ada baris hasil data user yang cocok
  if (!empty($row)) {
    //jika ada, simpan variable username pada session
    $_SESSION['username'] = $row['username'];
 
    //mengalihkan ke halaman admin
    header("location:admin.php");
    exit;
  } else {
    //jika tidak ada (gagal), alihkan kembali ke halaman login dengan pesan error
    echo "<script>alert('Username atau Password Salah!'); window.location='login.php';</script>";
    exit;
  }

  //menutup koneksi database
  $stmt->close();
  $conn->close();
} else {
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login | My Daily Journal</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <link rel="icon" href="img/logo.png" />

    <style>
      body {
        background-color: #000000 !important; /* Latar belakang hitam */
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        margin: 0;
      }
      .card {
        background-color: #1a1a1a !important; /* Card abu-abu sangat tua */
        border: 1px solid #333 !important;
        color: #ffffff !important;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(220, 53, 69, 0.2); /* Shadow merah halus */
      }
      .form-control {
        background-color: #2c2c2c !important;
        border: 1px solid #444 !important;
        color: #ffffff !important;
        transition: 0.3s;
      }
      .form-control:focus {
        border-color: #dc3545 !important;
        box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
        color: #ffffff !important;
      }
      .form-control::placeholder {
        color: #888;
      }
      .btn-danger {
        background-color: #dc3545 !important;
        border: none !important;
        padding: 12px;
        font-weight: bold;
        transition: 0.3s;
      }
      .btn-danger:hover {
        background-color: #a31d1d !important;
        transform: scale(1.02);
      }
      hr {
        border-color: #444;
      }
    </style>
  </head>

  <body>
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-8 col-md-5 m-auto">
          <div class="card border-0 shadow-lg">
            <div class="card-body p-5">
              <div class="text-center mb-4">
                <i class="bi bi-person-circle display-1 text-danger"></i>
                <h3 class="mt-3">Welcome To</h3>
                <p class="text-secondary">My Daily Journal Admin</p>
                <hr />
              </div>
              <form action="" method="post">
                <div class="mb-4">
                  <label class="form-label text-secondary small">USERNAME</label>
                  <input
                    type="text"
                    name="user"
                    class="form-control py-2 rounded-3"
                    placeholder="Enter username"
                    required
                  />
                </div>
                <div class="mb-4">
                  <label class="form-label text-secondary small">PASSWORD</label>
                  <input
                    type="password"
                    name="pass"
                    class="form-control py-2 rounded-3"
                    placeholder="Enter password"
                    required
                  />
                </div>
                <div class="text-center my-3 d-grid">
                  <button class="btn btn-danger rounded-3">LOGIN</button>
                </div>
              </form>
            </div>
          </div>
          <div class="text-center mt-4 text-secondary small">
             &copy; 2023 My Daily Journal
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

<?php
}
?>