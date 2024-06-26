<?php
session_start();

if (!isset($_SESSION["signIn"])) {
    header("Location: ../sign/member/sign_in.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #f1ebe3;
            min-height: 10vh;
            margin: 0;
            padding-bottom: 50px;
        }

        .navbar {
            transition: top 0.3s; 
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000; 
            padding: 0.5rem 1rem; 
        }

        .content {
            padding-top: 100px; 
        }

        .img-hover:hover {
            transform: scale(1.1); 
        }

        .cardImg img {
            width: 100%;
            max-width: 400px; 
        }

        .margin-top-large {
            margin-top: 150px; 
        }

    </style>
    <title>Member Dashboard</title>
</head>
<body>
    <nav id="navbar" class="navbar bg-body-tertiary shadow-sm">
        <div class="container-fluid p-3">
            <a class="navbar-brand" href="#">
                <img src="../assets/logoNav2.png" alt="logo" width="100px"> <!-- Mengurangi ukuran logo -->
            </a>

            <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../assets/memberLogo.png" alt="memberLogo" width="30px"> <!-- Mengurangi ukuran logo member -->
                </button>
                <ul style="margin-left: -7rem;" class="dropdown-menu position-absolute mt-2 p-2">
                    <li>
                        <a class="dropdown-item text-center" href="#">
                            <img src="../assets/memberLogo.png" alt="memberLogo" width="25px"> <!-- Mengurangi ukuran gambar dalam dropdown -->
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item text-center text-secondary" href="#">
                            <span class="text-capitalize"><?php echo $_SESSION['member']['nama']; ?></span>
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a class="dropdown-item text-center mb-2" href="#">Akun Member <span class="text-primary"><i class="fa-solid fa-circle-check"></i></span></a>
                    </li>
                    <li>
                        <a class="dropdown-item text-center p-2 bg-danger text-light rounded" href="signOut.php">Sign Out <i class="fa-solid fa-right-to-bracket"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="content margin-top-large p-4">
        <?php
        // Mendapatkan tanggal dan waktu saat ini
        $date = date('Y-m-d H:i:s'); // Format tanggal dan waktu default (tahun-bulan-tanggal jam:menit:detik)
        // Mendapatkan hari dalam format teks (e.g., Senin, Selasa, ...)
        $day = date('l');
        // Mendapatkan tanggal dalam format 1 hingga 31
        $dayOfMonth = date('d');
        // Mendapatkan bulan dalam format teks (e.g., Januari, Februari, ...)
        $month = date('F');
        // Mendapatkan tahun dalam format 4 digit (e.g., 2023)
        $year = date('Y');
        ?>

        <h1 class="mt-5 fw-bold">Dashboard - <span class="fs-4 text-secondary"> <?php echo $day . " " . $dayOfMonth . " " . " " . $month . " " . $year; ?> </span></h1>

        <div class="alert alert-success" role="alert">Selamat datang member - <span class="fw-bold text-capitalize"><?php echo $_SESSION['member']['nama']; ?></span> di Dashboard PerpusRek!!</div>

        <div class="mt-4 p-3">
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-2">
                        <div class="cardImg">
                            <a href="buku/daftarBuku.php">
                                <img class="img-hover" src="../assets/new/buku.png" alt="daftar buku">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="cardImg">
                            <a href="formPeminjaman/TransaksiPeminjaman.php">
                                <img class="img-hover" src="../assets/new/peminjaman.png" alt="peminjaman buku">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="cardImg">
                            <a href="formPeminjaman/TransaksiPengembalian.php">
                                <img class="img-hover" src="../assets/new/pengembalian.png" alt="pengembalian buku">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="cardImg">
                            <a href="formPeminjaman/TransaksiDenda.php">
                                <img class="img-hover" src="../assets/new/denda.png" alt="denda">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <footer class="shadow-lg bg-subtle p-3">
        <div class="container-fluid d-flex justify-content-between">
            <p class="mt-2">Created by <span class="text-primary"> Kelompok 4 </span> © 2024</p>
            <p class="mt-2">versi 1.0</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
