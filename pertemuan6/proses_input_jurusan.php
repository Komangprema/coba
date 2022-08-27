<?php
//menangkap value jurusan
$kode_jurusan = $_POST['kode_jurusan'];
$nama_jurusan = $_POST['nama_jurusan'];

echo $kode_jurusan. "<br>";
echo $nama_jurusan. "<br>";

//koneksi db
include "koneksi.php";

//membuat querry insert
$qry = "INSERT INTO jurusan VALUES ('$kode_jurusan','$nama_jurusan')";
$exec = mysqli_query($con,$qry);

//cek proses simpan data
if($exec){
    echo "<script>alert('Data berhasil disimpan');
    window.location=jurusan.php</script>";
}else{
    echo "<script>alert('Data gagal disimpan');
    window.location=jurusan.php</script>";
}

?>