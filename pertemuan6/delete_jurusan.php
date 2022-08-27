<?php
//menangkap value dari form
$kode_jurusan = $_GET['kode_jurusan'];


//membuat koneksi ke db
include "koneksi.php";

//membuat querry insert
$qry = "DELETE FROM jurusan WHERE kode_jurusan = '$kode_jurusan'";
$exec = mysqli_query($con,$qry);

//cek proses simpan data
if($exec){
    echo "<script>alert('Data berhasil dihapus');
    window.location=jurusan.php</script>";
}else{
    echo "<script>alert('Data gagal dihapus');
    window.location=jurusan.php</script>";
}