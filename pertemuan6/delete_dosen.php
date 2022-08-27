<?php
//menangkap value dari form
$nidn = $_GET['nidn'];


//membuat koneksi ke db
include "koneksi.php";

//membuat querry insert
$qry = "DELETE FROM dosen WHERE nidn = '$nidn'";
$exec = mysqli_query($con,$qry);

//cek proses simpan data
if($exec){
    echo "<script>alert('Data berhasil dihapus');
    window.location=dosen.php</script>";
}else{
    echo "<script>alert('Data gagal dihapus');
    window.location=dosen.php</script>";
}