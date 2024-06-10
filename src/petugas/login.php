<?php

$title = 'Login | Petugas';

require '../../public/app.php';

require '../layouts/header.php';


// logic backend


if (isset($_POST['submit'])) {


  $username = $_POST['username'];
  $password = $_POST['password'];

  $result = mysqli_query($conn, "SELECT * FROM petugas WHERE username = '$username' AND password = '$password'");

  if (mysqli_num_rows($result) === 1) {

    $row = mysqli_fetch_assoc($result);
    if ($_SESSION['level'] = $row['level'] == 'admin') {
      header("location:../admin/dashboard.php");
    } else if ($_SESSION['level'] = $row['level'] == 'petugas') {
      header("location:dashboard.php");
    }
  } else {
    $error = true;
  }
}

?>


<style>
  body {
    background-color: #fff; /* Ubah warna background di sini */
    /* background-image: url('path/to/your/background-image.jpg'); Ganti URL gambar di sini */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  .login-container {
    background-color: #fff; /* Background untuk container */
    padding: 30px;
    border-radius: 10px;
    width: 784px;
    height: 580px;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }
  .form-control {
    background-color: #fff;
    border: none;
    color: #fff;
  }
  .form-control::placeholder {
    color: #bbb;
  }
  .form-group label {
    color: #bbb;
  }
  .login-btn {
    margin-bottom: 10px;
  }
  .login-container h3{
    font-size: 30px;
    color: #000;
    font-weight: bold;
  }
  .login-container p {
    color: #000; /* Mengubah warna h3 dan p menjadi hitam */
  }
  .login-container a {
    color: #007bff; /* Mengubah warna link menjadi biru */
  }
  .login-container button {
    color: #000; /* Mengubah warna link menjadi biru */
    font-weight: semi-bold;
  }
</style>

<div class="login-container">
  <?php if (isset($error)) : ?>
    <div class="alert alert-dismissible fade show" style="background-color: #b52d2d;" role="alert">
      <h6 class="text-gray-100 mt-2">Maaf username atau password anda salah</h6>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true" class="text-light">&times;</span>
      </button>
    </div>
  <?php endif; ?>

  <h3 class="text-center text-uppercase text-bold">Selamat Datang Sebagai Petugas</h3>
  <p class="text-center">Jika Mempunyai Masalah Silahkan Hubungi  <a href="register.php" class="text-primary">Admin</a></p>
  <div class="d-flex flex-column">
    <button class="btn btn-light login-btn">
      <img src="https://img.icons8.com/color/16/000000/google-logo.png"/> Lanjutkan Dengan Google
    </button>
    <button class="btn btn-light login-btn">
      <img src="https://img.icons8.com/color/16/000000/facebook.png"/> Lanjutkan Dengan Facebook
    </button>
    <button class="btn btn-light login-btn">
      <img src="https://img.icons8.com/ios-filled/16/000000/mac-os.png"/> Lanjutkan Dengan Apple
    </button>
  </div>
  <hr class="my-4">
  <form action="" method="post">
    <div class="form-group">
      <label for="username">Alamat Email Atau Nama Pengguna</label>
      <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan email atau nama pengguna">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password">
    </div>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="remember">
      <label class="form-check-label" for="remember">Ingat Saya</label>
    </div>
    <button type="submit" name="submit" class="btn btn-primary btn-block">Masuk</button>
    <a href="../user/login.php" class="btn btn-outline-primary btn-block mt-2">Masuk sebagai masyarakat</a>
    <div class="text-center mt-2">
      <a href="#" class="text-primary">Lupa Password Kamu?</a>
    </div>
  </form>
</div>




<?php require '../layouts/footer.php'; ?>