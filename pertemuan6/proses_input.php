<?php
//menangkap value/data dari form
include "class_mhs.php";
$cmhs = new mahasiswa();

$file_name = basename($_FILES['foto']);
$data = array(
    'nim'           => $_POST['nim'],
    'nama_mhs'      => $_POST['nama_mhs'],
    'kode_jurusan'  => $_POST['jurusan'],
    'jenis_kelamin' => $_POST['gender'],
    'alamat'        => $_POST['alamat'],
    'no_hp'         => $_POST['no_hp'],
    'foto'          => $file_name,
    'email'         => $_POST['email']
);

$exec = $cmhs->tambah_data($data);
//cek query insert
if ($exec) {
    echo "<script>alert('Data berhasil disimpan');
        window.location='mahasiswa.php'</script>";
}else{
    echo "<script>alert('Data Gagal disimpan');
        window.location='mahasiswa.php'</script>";
}
