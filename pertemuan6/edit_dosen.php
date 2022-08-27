<?php
$nidn= $_GET['nidn'];
include "koneksi.php";
$qry = "SELECT * FROM dosen WHERE nidn ='$nidn'";
$exec = mysqli_query($con,$qry);
$data = mysqli_fetch_array($exec);
?>

<html>
    <head>
        <title>Update Dosen</title>
    </head>

    <body>
        <form action="proses_update_dosen.php" method="POST">
            <fieldset>
                <legend>Form update biodata Dosen</legend>
                <b>Lengkapi biodata dengan benar</b>
                <table>
                    <tr>
                        <td>NIDN </td>
                        <td>:</td>
                        <td><input type="text" name="nidn" value=<?php echo $data['nidn'] ?>></td>
                    </tr>
                    <tr>
                        <td>Nama </td>
                        <td>:</td>
                        <td><input type="text" name="nama" value=<?php echo $data['nama'] ?>></td>
                    </tr>
                    <tr>
                    <td>Pendidikan </td>
                        <td>:</td>
                        <td><input type="text" name="pendidikan" value=<?php echo $data['pendidikan'] ?>></td>
                    </tr>
                    <tr>
                    <td>TGL_Lahir </td>
                        <td>:</td>
                        <td><input type="text" name="tgl_lahir" value=<?php echo $data['tgl_lahir'] ?>></td>
                        </tr>
                        
                    <tr>
                        <td>Gender</td>
                        <td>:</td>
                        <td>
                            <?php if($data['gender']==1) { ?>
                                <input type="radio" name="gender" value="1" checked>Laki - laki
                                <input type="radio" name="gender" value="0">Perempuan
                            <?php } else { ?>
                                <input type="radio" name="gender" value="1">Laki - laki
                            <input type="radio" name="gender" value="0" checked>Perempuan
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><input type="text" name="alamat" value=<?php echo $data['alamat'] ?>></td>
                    </tr>
                    <tr>
                        <td>No. HP</td>
                        <td>:</td>
                        <td><input type="number" name="no_hp" value=<?php echo $data['no_hp'] ?>></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><input type="email" name="email" value=<?php echo $data['email'] ?>></td>
                    </tr>
                    <tr>
                        <td>Dosen Wali</td>
                        <td>:</td>
                        <td><input type="text" name="dosen_wali" value=<?php echo $data['dosen_wali'] ?>></td>
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
</html>