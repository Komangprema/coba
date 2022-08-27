<?php

class manusia{

	var $nama;
	var $warna;

	
	function isiWarna($warna){
		$this->warna = $warna;
	}


	function tampil_warna(){
		$tampil = $warna;

		return $tampil;
	}
}

$manusia = new manusia();

echo $manusia->isiWarna('merah');

echo $manusia->tampil_warna();

?>