<?php
session_start();

require "../../sign/connect.php";

if (isset($_POST["signIn"])) {
  $nama = strtolower($_POST["nama"]);
  $nisn = $_POST["nisn"];
  $password = $_POST["password"];

  $result = mysqli_query($connect, "SELECT * FROM member WHERE nama = '$nama' AND nisn = $nisn");
  $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
  <title>Sign In || Member</title>
  <style>
    body {
      background: linear-gradient(135deg, #00B4DB, #8B00B4);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0;
      font-family: Arial, sans-serif;
    }
    .card {
      border-radius: 15px;
      padding: 2rem;
      background: rgba(255, 255, 255, 0.9);
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
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
    .forgot-password {
      text-align: right;
    }
    .social-buttons .btn {
      border-radius: 50%;
      margin: 0 5px;
    }
    .fa-eye, .fa-eye-slash {
      cursor: pointer;
      position: absolute;
      top: 50%;
      right: 10px;
      transform: translateY(-50%);
    }
  </style>
</head>
<body>
  <div class="card">
    <h1 class="text-center">Member</h1>
    <form action="" method="post" class="needs-validation" novalidate>
      <div class="mb-3">
        <div class="input-group">
          <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
          <input type="text" class="form-control" name="nama" placeholder="Type your name" required>
          <div class="invalid-feedback">
            Masukkan Nama anda!
          </div>
        </div>
      </div>
      <div class="mb-3">
        <div class="input-group">
          <span class="input-group-text"><i class="fa-solid fa-hashtag"></i></span>
          <input type="number" class="form-control" name="nisn" placeholder="Type your NISN" required>
          <div class="invalid-feedback">
            Masukkan NISN anda!
          </div>
        </div>
      </div>
      <div class="mb-3 position-relative">
        <div class="input-group">
          <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
          <input type="password" class="form-control" id="password" name="password" placeholder="Type your password" required>
          <i class="fa-solid fa-eye" id="togglePassword"></i>
          <div class="invalid-feedback">
            Masukkan Password anda!
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary w-100 mb-2" name="signIn">Login</button>
      <a href="../link_login.html" class="btn btn-secondary w-100">Kembali</a>
    </form>
    <?php if (isset($error)) : ?>
      <div class="alert alert-danger mt-2" role="alert">Nama atau Nisn atau Password tidak sesuai!</div>
    <?php endif; ?>
    <p class="text-center mt-3">Don't have an account yet? <a href="sign_up.php" class="text-decoration-none text-primary">Sign Up</a></p>
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

    document.getElementById('togglePassword').addEventListener('click', function () {
      const password = document.getElementById('password');
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);
      this.classList.toggle('fa-eye-slash');
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
