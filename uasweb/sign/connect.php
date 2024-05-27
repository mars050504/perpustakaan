<?php
// FILE LOGIN SYSTEM 
$host = "127.0.0.1";
$username = "root";
$password = "";
$database = "perpustakaan";
$connect = mysqli_connect($host, $username, $password, $database);


/* SIGN UP Member */
function signUp($data) {
  global $connect;
  
  $npm = htmlspecialchars($data["npm"]);
  $kodeMember = htmlspecialchars($data["kode_member"]);
  $nama = htmlspecialchars(strtolower($data["nama"]));
  $password = mysqli_real_escape_string($connect, $data["password"]);
  $confirmPw = mysqli_real_escape_string($connect, $data["confirmPw"]);
  $jk = htmlspecialchars($data["jenis_kelamin"]);
  $semester = htmlspecialchars($data["semester"]);
  $jurusan = htmlspecialchars($data["jurusan"]);
  $noTlp = htmlspecialchars($data["no_tlp"]);
  $tglDaftar = $data["tgl_pendaftaran"];
  
    // cek npm sudah ada / belum 
  $npmResult = mysqli_query($connect, "SELECT npm FROM member WHERE npm = $npm");
  if(mysqli_fetch_assoc($npmResult)) {
    echo "<script>
    alert('Npm sudah terdaftar, silahkan gunakan npm lain!');
    </script>";
    return 0;
  }
  
  //cek kodeMember sudah ada / belum
  $kodeMemberResult = mysqli_query($connect, "SELECT  kode_member FROM member WHERE kode_member = '$kodeMember'");
  if(mysqli_fetch_assoc($kodeMemberResult)){
    echo "<script>
    alert('Kode member telah terdaftar, silahkan gunakan kode member lain!');
    </script>";
    return 0;
  }
  
  // Pengecekan kesamaan confirm password dan password
  if($password !== $confirmPw) {
    echo "<script>
    alert('password / confirm password tidak sesuai');
    </script>";
    return 0;
  }
  
  $querySignUp = "INSERT INTO member VALUES($npm, '$kodeMember', '$nama', '$password', '$jk', '$semester', '$jurusan', '$noTlp', '$tglDaftar')";
  mysqli_query($connect, $querySignUp);
  return mysqli_affected_rows($connect);
  
}

// Fungsi Sign In
function signIn($data) {
  global $connect;

  $npm = htmlspecialchars($data["npm"]);
  $password = mysqli_real_escape_string($connect, $data["password"]);

  // cek apakah npm ada di database
  $result = mysqli_query($connect, "SELECT * FROM member WHERE npm = '$npm'");
  if (mysqli_num_rows($result) === 1) {
      // cek password
      $row = mysqli_fetch_assoc($result);
      if ($row["password"] === $password) {
          // set session
          session_start();
          $_SESSION["login"] = true;
          $_SESSION["npm"] = $row["npm"];
          return 1;
      } else {
          echo "<script>
          alert('Password salah!');
          </script>";
          return 0;
      }
  } else {
      echo "<script>
      alert('NPM tidak terdaftar!');
      </script>";
      return 0;
  }
}

?>
