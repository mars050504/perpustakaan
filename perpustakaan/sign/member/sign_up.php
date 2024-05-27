<?php 
if(isset($_POST["signUp"]) ) {
  if(signUp($_POST) > 0) {
    echo "<script>
    alert('Sign Up berhasil!')
    </script>";
  } else {
    echo "<script>
    alert('Sign Up gagal!')
    </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
  <title>Sign Up || Member</title>
  <style>
    body {
      background: linear-gradient(135deg, #00B4DB, #8B00B4);
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0;
      font-family: Arial, sans-serif;
    }
    .card {
      border-radius: 15px;
      padding: 2rem;
      padding-top: 0.25rem;
      background: rgba(255, 255, 255, 0.9);
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
      margin-top: 5%; /* Tambahkan jarak 50px di atas kartu */
      margin-bottom: 5%;
    }
    .input-group-text {
      background-color: transparent;
      border: none;
    }
    .form-control {
      border: none;
      border-bottom: 1px solid #ccc;
      border-radius: 0;
    }
    .form-control:focus {
      box-shadow: none;
      border-color: #8B00B4;
    }
    .btn-primary {
      background: linear-gradient(135deg, #00B4DB, #8B00B4);
      border: none;
    }
    .btn-primary:hover {
      background: linear-gradient(135deg, #8B00B4, #00B4DB);
    }
    .form-label {
      font-weight: bold;
    }
    .position-absolute {
      transform: translateY(-50%);
    }
  </style>
</head>
<body>
  <div class="card p-8 mt-10">
    <h1 class="pt-5 text-center fw-bold">Sign Up</h1>
    <hr>
    <form action="" method="post" class="needs-validation" novalidate>
      <div class="mb-3">
        <label for="validationCustom01" class="form-label">npm</label>
        <div class="input-group">
          <span class="input-group-text"><i class="fa-solid fa-hashtag"></i></span>
          <input type="number" class="form-control" name="npm" id="validationCustom01" required>
          <div class="invalid-feedback">
            npm wajib diisi!
          </div>
        </div>
      </div>
      <div class="mb-3">
        <label for="validationCustom01" class="form-label">Kode Member</label>
        <div class="input-group">
          <input type="text" class="form-control" name="kode_member" id="validationCustom01" required>
          <div class="invalid-feedback">
            Kode member wajib diisi!
          </div>
        </div>
      </div>
      <div class="mb-3">
        <label for="validationCustom02" class="form-label">Nama Lengkap</label>
        <div class="input-group">
          <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
          <input type="text" class="form-control" id="validationCustom02" name="nama" required>
          <div class="invalid-feedback">
            Nama wajib diisi!
          </div>
        </div>
      </div>
      <div class="mb-3">
        <label for="validationCustom02" class="form-label">Password</label>
        <div class="input-group">
          <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
          <input type="password" class="form-control" id="validationCustom02" name="password" required>
          <div class="invalid-feedback">
            Password wajib diisi!
          </div>
        </div>
      </div>
      <div class="mb-3">
        <label for="validationCustom02" class="form-label">Confirm Password</label>
        <div class="input-group">
          <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
          <input type="password" class="form-control" id="validationCustom02" name="confirmPw" required>
          <div class="invalid-feedback">
            Konfirmasi password wajib diisi!
          </div>
        </div>
      </div>
      <div class="mb-3">
        <label for="inputGroupSelect01" class="form-label">Gender</label>
        <div class="input-group">
          <label class="input-group-text" for="inputGroupSelect01">Gender</label>
          <select class="form-select" id="inputGroupSelect01" name="jenis_kelamin">
            <option selected>Choose</option>
            <option value="Laki laki">Laki laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
      </div>
      <div class="mb-3">
        <label for="inputGroupSelect01" class="form-label">semester</label>
        <div class="input-group">
          <label class="input-group-text" for="inputGroupSelect01">semester</label>
          <select class="form-select" id="inputGroupSelect01" name="semester">
            <option selected>Choose</option>
            <option value="X">X</option>
            <option value="XI">XI</option>
            <option value="XII">XII</option>
            <option value="XIII">XIII</option>
          </select>
        </div>
      </div>
      <div class="mb-3">
        <label for="inputGroupSelect01" class="form-label">Jurusan</label>
        <div class="input-group">
          <label class="input-group-text" for="inputGroupSelect01">Jurusan</label>
          <select class="form-select" id="inputGroupSelect01" name="jurusan">
            <option selected>Choose</option>
            <option value="Desain Gambar Mesin">Desain Gambar Mesin</option>
            <option value="Teknik Pemesinan">Teknik Pemesinan</option>
            <option value="Teknik Otomotif">Teknik Otomotif</option>
            <option value="Desain Pemodelan Informasi Bangunan">Desain Pemodelan Informasi Bangunan</option>
            <option value="Teknik Konstruksi Perumahan">Teknik Konstruksi Perumahan</option>
            <option value="Teknik Tenaga Listrik">Teknik Tenaga Listrik</option>
            <option value="Teknik Instalasi Tenaga Listrik">Teknik Instalasi Tenaga Listrik</option>
            <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
            <option value="Sistem Informatika Jaringan dan Aplikasi">Sistem Informatika Jaringan dan Aplikasi</option>
            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
            <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
          </select>
        </div>
      </div>
      <div class="mb-3">
        <label for="validationCustom01" class="form-label">No Telepon</label>
        <div class="input-group">
          <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
          <input type="number" class="form-control" name="no_tlp" id="validationCustom01" required>
          <div class="invalid-feedback">
            No telepon wajib diisi!
          </div>
        </div>
      </div>
      <div class="mb-3">
        <label for="validationCustom01" class="form-label">Tanggal Pendaftaran</label>
        <div class="input-group">
          <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
          <input type="date" class="form-control" name="tgl_pendaftaran" id="validationCustom01" required>
          <div class="invalid-feedback">
            Tanggal pendaftaran wajib diisi!
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-between mb-3">
        <button class="btn btn-primary" type="submit" name="signUp">Sign Up</button>
        <input type="reset" class="btn btn-warning text-light" value="Reset">
      </div>
      <p>Already have an account? <a href="sign_in.php" class="text-decoration-none text-primary">Sign In</a></p>
    </form>
  </div>
<script>
  (() => {
    'use strict'
    const forms = document.querySelectorAll('.needs-validation')
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
        form.classList.add('was-validated')
      }, false)
    })
  })()
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>