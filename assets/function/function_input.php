<?php
// GET Connection From Dircetory conf -> config.php
include '../conf/config.php';

// INPUT Post To Database MYSQL
$input_id = $_POST['input_id'];
$user_id  = $_POST['user_id'];
$email    = $_POST['email'];
$file     = $_POST['file1'];
$status_1 = $_POST['status_1'];
$status_2 = $_POST['status_2'];
$status_3 = $_POST['status_3'];
$status_4 = $_POST['status_4'];
$status_5 = $_POST['status_5'];
$status_6 = $_POST['status_6'];
$status_7 = $_POST['status_7'];
$date     = $_POST['date'];

$query = mysqli_query($koneksi, "INSERT INTO tb_input VALUE ('$input_id','$user_id','$email','$file','$status_1','$status_2','$status_3','$status_4','$status_5','$status_6','$status_7','$date')");

if ($query) {
    header("location: ../../id/table_native.php?status=succes");
} else {
    header("location: ../../id/table_native.php?status=failed");
}