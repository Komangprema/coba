<?php
include "koneksi.php";
class biodata extends database{

	function __construct(){
		parent::__construct();

		session_start();
		if ($_SESSION['user']==""){
			echo "<script>alert('Anda belum login, silahkan login terlebih dahulu');window.location = 'login.php'</script>";
		}
	}

	function tampil_data(){
		$qry = mysqli_query($this->conn,"select * from biodata");
		while($x = mysqli_fetch_assoc($qry)){
			$data[] = $x;
		}
		return $data;
	}

	function tambah_data($data){
		$qry = mysqli_query($this->conn, "insert into biodata values 
		('".$data['id']."','".$data['nama']."','".$data['email']."'
		,'".$data['alamat']."','".$data['kota']."')") 
		or die(mysqli_error($this->conn));
		return $qry;
	}

	function hapus_data($id){
		$qry = mysqli_query($this->conn,"delete from biodata where ID = '$id'") or die(mysqli_error($this->conn));
		return $qry;
	}

	function edit($id){
		$qry = mysqli_query($this->conn,"select * from biodata where ID = '$id'");
		$data= mysqli_fetch_assoc($qry);
		return $data;
	}

	function update_data($data){
		$qry = mysqli_query($this->conn, "update biodata set nama = '".$data['nama']."', email = '".$data['email']."', alamat = '".$data['alamat']."', kota = '".$data['kota']."' where ID = '".$data['id']."'") or die(mysqli_error($this->conn));
		return $qry;
	}
}


?>