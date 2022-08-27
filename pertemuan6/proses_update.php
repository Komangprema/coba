<?php
//menangkap value/data dari form
include "class_mhs.php";
$cmhs = new mahasiswa();
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


$exec = $cmhs->update_data($data);

//cek query update
if ($exec) {
    echo "<script>alert('Data berhasil di-update');
        window.location='mahasiswa.php'</script>";
}else{
    echo "<script>alert('Data Gagal di-update');
        window.location='mahasiswa.php'</script>";
}
