<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include '../conf/config.php';

// menangkap data yang dikirim dari form login
$user_id  = $_POST['user_id'];
$email    = $_POST['email'];
$password = $_POST['password'];
// menyeleksi data user dengan email dan password yang sesuai
$login = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE email='$email' AND password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah email dan password di temukan pada database
if ($cek > 0) {

    $data = mysqli_fetch_assoc($login);

    // cek jika user login sebagai user
    if ($data['level'] == "user") {

        // buat session login dan email
        $_SESSION['user_id']    = $data['user_id'];
        $_SESSION['email']      = $email;
        $_SESSION['level']      = "user";
        $_SESSION['nama']       = $data['nama'];
        $_SESSION['department'] = $data['department'];
        // alihkan ke halaman dashboard user
        header("location:../../id/pages_user.php?status=succes");

        // cek jika user login sebagai engineering
    } else if ($data['level'] == "engineering") {
        // buat session login dan email
        $_SESSION['email']      = $email;
        $_SESSION['level']      = "engineering";
        $_SESSION['nama']       = $data['nama'];
        $_SESSION['department'] = $data['department'];
        // alihkan ke halaman dashboard engineering
        header("location:../../id/pages_engineering.php");

        // cek jika user login sebagai pcd
    } else if ($data['level'] == "pcd") {
        // buat session login dan email
        $_SESSION['email']      = $email;
        $_SESSION['level']      = "pcd";
        $_SESSION['nama']       = $data['nama'];
        $_SESSION['department'] = $data['department'];
        // alihkan ke halaman dashboard pcd
        header("location:halaman_pengurus.php");
    } else {

        // alihkan ke halaman login kembali
        header("location:../../login.php?status=failed");
    }
} else {
    header("location:../../login.php?status=failed");
}
