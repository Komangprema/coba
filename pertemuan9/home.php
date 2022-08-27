<?php

session_start();
if(isset($_SESSION['nim'])){
    $nim = $_SESSION['nim'];
    echo " selamat datang : $nim <A href='logout.php'php'>Logout</a>";

}else{
    echo "<script>arlet('Akses ditolak,Silakan login terlebih dahulu');
    window.location= 'login.php';</srcipt>";
}

