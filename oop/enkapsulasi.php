<?php

class mahasiswa{
    public $nama = "Govinda"; // bisa di akses dari luar kelas dan kelas turunan
    protected $nim = "190030152"; // bisa diakses dari kelas turunan
    private $alamat = "Denpasar"; // hanya bisa di akses dr kelas sendiri

    public function tampil_mahasiswa(){
        //private 
        return $this->alamat;
    }
   
}

class mahasiswa_public{
    public function tampil_nama()
    { //hanya bisa diakses ketika property public
        $this->nm = new mahasiswa();
        return "nama public adalah :". $this->nm->nama;
    }
}

class mahasiswa_protected extends mahasiswa{
   public function tampil_nim()
    { //protected
        return $this->nim;
    }
}

$mahasiswa = new mahasiswa();

$mahasiswaP = new mahasiswa_public();

$mahasiswa_protected = new mahasiswa_protected();

echo $mahasiswa->tampil_mahasiswa(); // private
echo "<br>";
echo $mahasiswa_protected->tampil_nim(); //protected
echo "<br>";
echo $mahasiswaP->tampil_nama(); // public