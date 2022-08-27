<?php
	include "xclass.php";
	$cbiodata = new biodata();
?>
<html>
	<head>
		<title>Tampil Data Biodata</title>
	</head>
	<body>
	<a href="logout.php">Logout</a>
	<form name="input" action="proses.php?q=input" method="post">
		<table>
			<tr>
				<td>ID</td>
				<td>:</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Kota</td>
				<td>:</td>
				<td><input type="text" name="kota"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="simpan" value="simpan"></td>
			</tr>
		</table>
	</form>	
		<table border="1">
			<tr>
				<td>ID</td>
				<td>Nama</td>
				<td>Email</td>
				<td>Alamat</td>
				<td>Kota</td>
				<td>Action</td>
			</tr>
			<?php 
			//$d = $cbiodata->tampil_data();
				foreach($cbiodata->tampil_data() as $x) {
			 ?>
			<tr>
				<td><?php echo $x['ID'] ?></td>
				<td><?php echo $x['nama'] ?></td>
				<td><?php echo $x['email'] ?></td>
				<td><?php echo $x['alamat'] ?></td>
				<td><?php echo $x['kota'] ?></td>
				<td>
					<a href="proses.php?q=delete&id=<?php echo $x['ID'] ?>"> Delete</a> |
					<a href="updatebiodata.php?id=<?php echo $x['ID'] ?>"> Update</a>
				</td>
			</tr>
		<?php } ?>
		</table>
	</body>
</html>