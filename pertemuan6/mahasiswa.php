<html>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<head>
    <title>Input Mahasiswa</title>
</head>

<body>
    <form action="proses_input.php" method="POST">
        <fieldset>
            <legend>Form input biodata Mahasiswa</legend>
            <b>Lengkapi biodata dengan benar</b>
            <table>
                <tr>
                    <td>NIM (Nomor Induk Mahasiswa)</td>
                    <td>:</td>
                    <td><input type="text" name="nim"></td>
                </tr>
                <tr>
                    <td>Nama Mahasiswa</td>
                    <td>:</td>
                    <td><input type="text" name="nama_mhs"></td>
                </tr>
                <tr>
                    <td>Kode Jurusan</td>
                    <td>:</td>
                    <td>
                        <select name="jurusan">
                            <?php
                            include "class_jurusan.php";
                            $cjrs = new jurusan();
                            $datas = $cjrs->tampil_data();

                            foreach($datas as $data){
                                echo "<option value=$data[kode_jurusan]> $data[nama_jurusan]</option>";
                            }
                            ?>  
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jenis kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="gender" value="1">Laki - laki
                        <input type="radio" name="gender" value="0">Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td>No. HP</td>
                    <td>:</td>
                    <td><input type="number" name="no_hp"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="Simpan"> <input type="button" value="cancel"></td>
                </tr>
            </table>
        </fieldset>
    </form>
    
</body>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>