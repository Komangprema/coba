<?php
include "koneksi.php";

class jurusan extends database{
    function __construct(){
        parent::__construct();
        // session__start();
        // if ($_SESSION['user']==""{
        // echo "<script>alert('Anda belum login,silakan login terlebih dahulu');window.location ='login.php'</script>";    
        //}       
    }

    //method get data 
    function tampil_data(){
        $qry = mysqli_query($this->conn,"SELECT * FROM jurusan");
        while($x = mysqli_fetch_assoc($qry)){
            $data[] =$x;           
        }
        return $data; 
    }
}
