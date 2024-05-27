<?php
session_start();

if (!isset($_SESSION["signIn"])) {
    header("Location: ../sign/admin/sign_in.php");
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
    <title>Admin Dashboard</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #343a40 !important;
        }
        .navbar-brand img {
            width: 100px;
        }
        .dropdown-toggle::after {
            display: none;
        }
        .dropdown-menu {
            right: 0;
            left: auto;
        }
        .card {
            transition: transform 0.3s;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .footer {
            background-color: #343a40;
            color: white;
        }
        .footer p {
            margin: 0;
        }
    </style>
</head>
<body>

<nav class="navbar fixed-top shadow-sm">
    <div class="container-fluid p-3">
        <a class="navbar-brand" href="#">
            <img src="../assets/logoNav.png" alt="logo">
        </a>

        <div class="dropdown">
            <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../assets/adminLogo.png" alt="adminLogo" width="40px">
            </button>
            <ul class="dropdown-menu dropdown-menu-end mt-2 p-2">
                <li>
                    <a class="dropdown-item text-center" href="#">
                        <img src="../assets/adminLogo.png" alt="adminLogo" width="30px">
                    </a>
                </li>
                <li>
                    <a class="dropdown-item text-center text-secondary" href="#">
                        <span class="text-capitalize"><?php echo $_SESSION['admin']['nama_admin']; ?></span>
                    </a>
                </li>
                <hr>
                <li>
                    <a class="dropdown-item text-center mb-2" href="#">Akun Terverifikasi <span class="text-primary"><i class="fa-solid fa-circle-check"></i></span></a>
                </li>
                <li>
                    <a class="dropdown-item text-center p-2 bg-danger text-light rounded" href="signOut.php">Sign Out <i class="fa-solid fa-right-to-bracket"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5 pt-5">
    <?php
    $date = date('Y-m-d H:i:s');
    $day = date('l');
    $dayOfMonth = date('d');
    $month = date('F');
    $year = date('Y');
    ?>

    <h1 class="mt-5 fw-bold">Dashboard - <span class="fs-4 text-secondary"> <?php echo $day . " " . $dayOfMonth . " " . " " . $month . " " . $year; ?> </span></h1>

    <div class="alert alert-success" role="alert">Selamat datang admin - <span class="fw-bold text-capitalize"><?php echo $_SESSION['admin']['nama_admin']; ?></span> di Dashboard PerpusRek</div>
    
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100">
                <a href="member/member.php">
                    <img src="../assets/dashboardCardMember/1.jpg" class="card-img-top" alt="member">
                    <div class="card-body text-center">
                        <h5 class="card-title">Member</h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <a href="buku/daftarBuku.php">
                    <img src="../assets/dashboardCardMember/2.jpg" class="card-img-top" alt="bukuAdmin">
                    <div class="card-body text-center">
                        <h5 class="card-title">Buku</h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <a href="peminjaman/peminjamanBuku.php">
                    <img src="../assets/dashboardCardMember/3.jpg" class="card-img-top" alt="peminjaman">
                    <div class="card-body text-center">
                        <h5 class="card-title">Peminjaman</h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <a href="pengembalian/pengembalianBuku.php">
                    <img src="../assets/dashboardCardMember/4.jpg" class="card-img-top" alt="pengembalianAdmin">
                    <div class="card-body text-center">
                        <h5 class="card-title">Pengembalian</h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <a href="denda/daftarDenda.php">
                    <img src="../assets/dashboardCardMember/5.jpg" class="card-img-top" alt="denda">
                    <div class="card-body text-center">
                        <h5 class="card-title">Denda</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<footer class="footer p-3 mt-5">
    <div class="container d-flex justify-content-between">
        <p>Created by <span class="text-primary">Kelompok 4</span> © 2024</p>
        <p>versi 1.0</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
