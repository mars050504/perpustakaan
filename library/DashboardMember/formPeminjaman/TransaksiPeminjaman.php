<?php 
session_start();

if (!isset($_SESSION["signIn"])) {
    header("Location: ../../sign/member/sign_in.php");
    exit;
}

if (!isset($_SESSION["member"]["nisn"])) {
  die("NISN tidak ditemukan di sesi.");
}

require "../../config/config.php";

$akunMember = $_SESSION["member"]["nisn"];

// Gunakan prepared statements untuk menghindari SQL injection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("SELECT peminjaman.id_peminjaman, peminjaman.id_buku, buku.judul, peminjaman.nisn, member.nama, admin.nama_admin, peminjaman.tgl_peminjaman, peminjaman.tgl_pengembalian FROM peminjaman INNER JOIN buku ON peminjaman.id_buku = buku.id_buku INNER JOIN member ON peminjaman.nisn = member.nisn INNER JOIN admin ON peminjaman.id_admin = admin.id WHERE peminjaman.nisn = ?");
$stmt->bind_param("s", $akunMember);
$stmt->execute();
$result = $stmt->get_result();
$dataPinjam = $result->fetch_all(MYSQLI_ASSOC);

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
    <title>Transaksi Peminjaman Buku || Member</title>
  </head>
  <body>
    <nav class="navbar fixed-top bg-body-tertiary shadow-sm">
      <div class="container-fluid p-3">
        <a class="navbar-brand" href="#">
          <img src="../../assets/logoNav.png" alt="logo" width="120px">
        </a>
        
        <a class="btn btn-tertiary" href="../dashboardMember.php">Dashboard</a>
      </div>
    </nav>
    
    <div class="p-4 mt-5">
      <div class="mt-5 alert alert-primary" role="alert">Riwayat transaksi Peminjaman Buku Anda - <span class="fw-bold text-capitalize"><?php echo htmlentities($_SESSION["member"]["nama"]); ?></span></div>
      
      <div class="table-responsive mt-3">
        <table class="table table-striped table-hover">
          <thead class="text-center">
            <tr>
              <th class="bg-primary text-light">Id Peminjaman</th>
              <th class="bg-primary text-light">Id Buku</th>
              <th class="bg-primary text-light">Judul Buku</th>
              <th class="bg-primary text-light">Nisn</th>
              <th class="bg-primary text-light">Nama</th>
              <th class="bg-primary text-light">Nama Admin</th>
              <th class="bg-primary text-light">Tanggal Peminjaman</th>
              <th class="bg-primary text-light">Tanggal Pengembalian</th>
              <th class="bg-primary text-light">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($dataPinjam as $item) : ?>
              <tr>
                <td><?= htmlentities($item["id_peminjaman"]); ?></td>
                <td><?= htmlentities($item["id_buku"]); ?></td>
                <td><?= htmlentities($item["judul"]); ?></td>
                <td><?= htmlentities($item["nisn"]); ?></td>
                <td><?= htmlentities($item["nama"]); ?></td>
                <td><?= htmlentities($item["nama_admin"]); ?></td>
                <td><?= htmlentities($item["tgl_peminjaman"]); ?></td>
                <td><?= htmlentities($item["tgl_pengembalian"]); ?></td>
                <td>
                  <a class="btn btn-success" href="pengembalianBuku.php?id=<?= htmlentities($item["id_peminjaman"]); ?>"> Kembalikan</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
    
    <footer class="fixed-bottom shadow-lg bg-subtle p-3">
      <div class="container-fluid d-flex justify-content-between">
        <p class="mt-2">Created by <span class="text-primary"> Mangandaralam Sakti</span> © 2023</p>
        <p class="mt-2">versi 1.0</p>
      </div>
    </footer>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
