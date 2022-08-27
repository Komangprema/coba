<?php
//menangkap value dari form
$nidn = $_POST['nidn'];
$nama = $_POST['nama'];
$pendidikan = $_POST['pendidikan'];
$tgl_lahir = $_POST['tgl_lahir'];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];

echo $nidn. "<br>";
echo $nama. "<br>";
echo $pendidikan. "<br>";
echo $tgl_lahir. "<br>";
echo $gender. "<br>";
echo $alamat. "<br>";
echo $no_hp. "<br>";
echo $email. "<br>";

//membuat koneksi ke db
include "koneksi.php";

//membuat querry insert
$qry = "INSERT INTO dosen VALUES ('$nidn','$nama','$pendidikan','$tgl_lahir','$gender','$alamat','$no_hp','$email')";
$exec = mysqli_query($con,$qry);

//cek proses simpan data
if($exec){
    echo "<script>alert('Data berhasil disimpan');
    window.location=mahasiswa.php</script>";
}else{
    echo "<script>alert('Data gagal disimpan');
    window.location=mahasiswa.php</script>";
}