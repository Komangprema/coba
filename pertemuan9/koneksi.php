<?php

$con = mysqli_connect("localhost","root","","bd203_db");

if($con){
    //echo "Berhasil konek database";
}else{
    echo "Gagal konek database" . mysqli_connect_error();
}

?>