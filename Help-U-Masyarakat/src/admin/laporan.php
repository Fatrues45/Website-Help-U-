<?php

$title = 'Laporan Masyarakat';

require '../../public/app.php';

require '../layouts/header.php';

require '../layouts/navAdmin.php';


// Logic backend

$result = mysqli_query($conn, "SELECT * FROM pengaduan WHERE status = 'proses' ORDER BY id_pengaduan DESC");

?>

<div class="row" data-aos="fade-up">
  <div class="col-6">
    <h3 class="text-gray-800">Daftar Laporan Masyarakat</h3>
  </div>
  <div class="col-6 d-flex justify-content-end">
    <form class="form-inline">
      <input class="form-control mr-1 col-8" type="search" placeholder="Cari NIK" aria-label="Search">
      <button class="btn btn-success my-2 my-sm-0" type="submit">
        <i class="fas fa-search"></i>
      </button>
    </form>
  </div>
</div>

<hr>

<table class="table table-bordered shadow-sm text-center" data-aos="fade-up" data-aos-duration="700">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tanggal</th>
      <th scope="col">NIK</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">No. Telp</th>
      <th scope="col">Isi Laporan</th>
      <th scope="col">Foto</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
      <tr>
        <th scope="row"><?= $i; ?>.</th>
        <td><?= $row["tgl_pengaduan"]; ?></td>
        <td><?= $row["nik"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["no_telp"]; ?></td>
        <td><?= $row["isi_laporan"]; ?></td>
        <td><img src="../../assets/img/<?= $row["foto"]; ?>" width="50"></td>
        <td>
          <a href="verify.php?id_pengaduan=<?= $row["id_pengaduan"]; ?>" class="btn btn-success">Verify</a>
        </td>
      </tr>
      <?php $i++; ?>
    <?php endwhile; ?>
  </tbody>
</table>

<?php require '../layouts/footer.php'; ?>
