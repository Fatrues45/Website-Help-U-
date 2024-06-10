<?php

$title = 'Register';

require '../../public/app.php';

require '../layouts/header.php';

// Logic Backend

if (isset($_POST['submit'])) {
  if (regisUser($_POST) > 0) {
    header("Location: sukses.php");
    exit();
  }
}

?>

<style>
  body {
    background-color: #fff;
    display: flex;
    justify-content: center;
    align-items: flex-start; /* Menempatkan konten di bagian atas */
    height: 100%;
    min-height: 100vh;
    margin: 0;
    padding: 20px 0; /* Menambahkan padding atas dan bawah */
    box-sizing: border-box;
  }
  .register-container {
    background-color: #fff;
    padding: 30px;
    width: 90vw;
    max-width: 600px; /* Lebar maksimal opsional */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  .register-container h5 {
    margin-bottom: 20px;
    text-align: center;
    font-weight: bold;
    color: #222;
  }
  .register-container h6 {
    margin-bottom: 20px;
    text-align: center;
    font-weight: bold;
  }
  .register-container a {
    color: #007bff; /* Warna biru untuk tautan */
  }
  .register-container .btn-primary {
    background-color: #007bff;
    border: none;
  }
  .register-container .btn-primary:hover {
    background-color: #0056b3;
  }
  .register-container .form-control {
    background-color: #f8f9fa;
    border: none;
    border-radius: 25px;
    margin-bottom: 15px; /* Jarak antar elemen form */
    padding-left: 15px; /* Padding dalam form control */
  }
  .register-container .form-control::placeholder {
    color: #6c757d;
  }
  .register-container .form-group {
    width: 100%; /* Memastikan grup form mengambil lebar penuh */
  }
  .login-btn {
    margin-bottom: 10px;
    border-radius: 25px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    width: 100%;
    padding: 10px;
  }
  .login-btn img {
    margin-right: 10px;
  }
  .divider {
    display: flex;
    align-items: center;
    text-align: center;
    width: 100%;
    margin: 20px 0;
  }
  .divider::before,
  .divider::after {
    content: '';
    flex: 1;
    border-bottom: 1px solid #ddd;
  }
  .divider:not(:empty)::before {
    margin-right: .25em;
  }
  .divider:not(:empty)::after {
    margin-left: .25em;
  }
  .text-small {
    font-size: 0.8rem;
  }
  .text-center {
    text-align: center;
  }
</style>

<div class="register-container">
  <h5 class="text-center text-uppercase">Daftar Atau Login Dengan</h5>
  <div class="d-flex flex-column mb-4" style="width: 100%;">
    <button class="btn btn-light login-btn">
      <img src="https://img.icons8.com/color/16/000000/facebook.png"/> Masuk Dengan Facebook
    </button>
    <button class="btn btn-light login-btn">
      <img src="https://img.icons8.com/color/16/000000/google-logo.png"/> Masuk Dengan Google
    </button>
    <button class="btn btn-light login-btn">
      <img src="https://img.icons8.com/ios-filled/16/000000/mac-os.png"/> Masuk Dengan Apple
    </button>
  </div>
  <div class="divider text-bold">Atau</div>
  <h6 class="text-center">Daftar Dengan Email Anda</h6>
  <form action="" method="post" style="width: 100%;">
    <div class="form-group">
      <label for="nik">NIK (Nomor Induk Kependudukan)</label>
      <input type="number" class="form-control py-4" placeholder="Masukkan NIK kamu" name="nik" id="nik">
    </div>
    <div class="form-group">
      <label for="nama">Nama</label>
      <input type="text" class="form-control py-4" placeholder="Masukkan Nama Lengkap kamu" name="nama" id="nama">
    </div>
    <div class="form-group">
      <label for="username">Username / Nama pengguna</label>
      <input type="text" class="form-control py-4" placeholder="Masukkan Username Kamu" name="username" id="username">
      <small class="text-small">Masukkan Minimal 8 Karakter Dan Angka</small>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control py-4" placeholder="Masukkan Password Kamu" name="password" id="password">
      <small class="text-small">Masukkan Minimal 8 Karakter Dan Angka</small>
    </div>
    <div class="form-group">
      <label for="telp">No-Telpon</label>
      <input type="number" class="form-control py-4" placeholder="Masukkan No Telpon kamu" name="telp" id="telp">
    </div>
    <div class="form-group form-check custom-checkbox mb-3">
      <input type="checkbox" class="form-check-input" id="terms">
      <label class="form-check-label" for="terms">Saya bersedia mendaftar dengan ketentuan oleh aplikasi HELP-U</label>
    </div>
    <p class="text-small mb-3">Dengan membuat akun, Anda menyetujui Ketentuan Penggunaan dan Kebijakan Privasi</p>
    <button type="submit" name="submit" class="btn btn-primary py-2 col-12">Daftar</button>
    <div class="text-center mt-2">
      <a href="login.php" class="text-primary">Sudah Punya Akun? Masuk</a>
    </div>
  </form>
</div>

<?php require '../layouts/footer.php'; ?>
