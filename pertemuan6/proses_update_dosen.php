<?php
//menangkap value dari form
$nidn = $_POST['nidn'];
$nama = $_POST['nama'];
$pendidikan= $_POST['pendidikan'];
$tgl_lahir= $_POST['tgl_lahir'];
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
$qry = "UPDATE dosen SET nama = '$nama', pendidikan = '$pendidikan',tgl_lahir ='$tgl_lahir', gender = '$gender', alamat = '$alamat', no_hp = '$no_hp', email = '$email' WHERE nidn = '$nidn'";
$exec = mysqli_query($con,$qry);

//cek proses simpan data
if($exec){
    echo "<script>alert('Data berhasil di-update');
    window.location=dosen.php</script>";
}else{
    echo "<script>alert('Data gagal di-update');
    window.location=dosen.php</script>";
}