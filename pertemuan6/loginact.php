<?php
//menangkap value dari form
$username = $_POST['username'];
$password = $_POST['password'];

//koneksi database
include "koneksi.php";

//query cek data pada tabel user
$qry = "SELECT * from users WHERE username = '$username' 
        AND password = '$password'";
$exec = mysqli_query($con, $qry);
$data = mysqli_fetch_assoc($exec);

//menentukan kondisi akses login
if(isset($data)){
    //berikan akses login dan buat session
    session_start();
    $_SESSION['nim'] = $data['nim'];
    echo "<script>alert('Login berhasil');
            window.location = 'home.php';</script>";
}else{
    echo "<script>alert('Login gagal, cek kembali username dan password anda');
            window.location = 'login.php';</script>";
}