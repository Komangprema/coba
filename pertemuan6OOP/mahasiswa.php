<html>

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
                            <option value="J01">Sistem Komputer</option>
                            <option value="J02">Menajemen Informatika</option>
                            <option value="J03">Sistem Informasi</option>
                            <option value="J04">Teknologi Informasi</option>
                            <option value="J05">Bisnis Digital</option>
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
    <h2>Data Mahasiswa</h2>
    <table border="1">
        <tr>
            <th>NIM</th>
            <th>Nama MHS</th>
            <th>Jurusan</th>
            <th>Gender</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Email</th>
            <th>action</th>
        </tr>
        <?php
        include "class_mhs.php";
        $cmhs = new mahasiswa();
        $datas = $cmhs->tampil_data();

        foreach ($datas as $data) {
        ?>
            <tr>
                <td><?php echo $data['nim'] ?></td>
                <td><?php echo $data['nama_mhs'] ?></td>
                <td><?php echo $data['kode_jurusan'] ?></td>
                <td><?php echo $data['jenis_kelamin'] ?></td>
                <td><?php echo $data['alamat'] ?></td>
                <td><?php echo $data['no_hp'] ?></td>
                <td><?php echo $data['email'] ?></td>
                <td>
                    <a href="edit.php?nim=<?php echo $data['nim'] ?>"><button>Edit</button></a>
                    <a href="delete.php?nim=<?php echo $data['nim'] ?>"><button>Delete</button></a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>