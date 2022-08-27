<?php

class manusia{


	function __construct(){
		echo "ini adalah construct </br>";
	}

	function tampil_nama(){
		return "Nama saya adalah Herdian </br>";
	}

	function __destruct(){
		echo "ini adalah destruct </br>";
	}

	function tampil_warna(){
		return "Warna kulit saya adalah sawo matang </br>";
	}
}

$manusia = new manusia();

echo $manusia->tampil_nama();

echo $manusia->tampil_warna();

?>