<?php
	include "xclass.php";
	$cbiodata = new biodata();
	if(isset($_GET['id'])){

		$id = $_GET['id'];
		$data = $cbiodata->edit($id);

	}
?>
<html>
	<head>
		<title>Tampil Data Biodata</title>
	</head>
	<body>
	<form name="input" action="proses.php?q=update" method="post">
		<table>
			<tr>
				<td>ID</td>
				<td>:</td>
				<td><input type="text" name="id" value="<?php echo $data['ID'] ?>" readonly></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?php echo $data['nama'] ?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="email" name="email" value="<?php echo $data['email'] ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>
			</tr>
			<tr>
				<td>Kota</td>
				<td>:</td>
				<td><input type="text" name="kota" value="<?php echo $data['kota'] ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="update" value="simpan"></td>
			</tr>
		</table>
	</form>	

		
	</body>
</html>