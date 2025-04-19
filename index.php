<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Register</title>
</head>

<body>

    <?php
    if (isset($_POST['btnSimpan'])) {
        $nama = $_POST['NamaLengkap'];
        echo 'Nama Lengkap : ' . $nama;
        echo "<br>";
        $nim = $_POST['NIM'];
        echo 'NIM : ' . $nim;
        echo "<br>";
        $tanggal_lahir = $_POST['ttl'];
        echo 'Tanggal Lahir : ' . $tanggal_lahir;
        echo "<br>";
        $prodi = $_POST['jurusan'];
        echo 'Jurusan : ' . $prodi;
        echo "<br>";
        $nohp = $_POST['nomor_hp'];
        echo 'Nomor HP : ' . $nohp;
        echo "<br>";
        $domisili = $_POST['alamat'];
        echo 'Alamat : ' . $domisili;
        echo "<br>";
    }
    ?>

    <hr style="height: 3px; background-color: black;">

        <form action="" method="POST">
        <table>
            <tr>
                <td><label>Nama Lengkap</label></td>
                <td><input type="text" name="NamaLengkap"></td>
            </tr>
            <tr>
                <td><label>NIM</label></td>
                <td><input type="text" name="NIM"></td>
            </tr>
            <tr>
                <td><label>Tanggal Lahir</label></td>
                <td><input type="date" name="ttl"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>
                    <select name="jurusan">
                        <option value="TI">Teknologi Informasi</option>
                        <option value="SDA">Sumber Daya Aquatik</option>
                        <option value="Agr">Agroteknologi</option>
                        <option value="TS">Teknik Sipil</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label>Nomor HP</label></td>
                <td><input type="text" name="nomor_hp"></td>
            </tr>
            <tr>
                <td><label>Alamat</label></td>
                <td>
                    <textarea rows="4" name="alamat"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="btnSimpan" value="Simpan">
                </td>
            </tr>
            </table>
        </form>

</body>

</html>