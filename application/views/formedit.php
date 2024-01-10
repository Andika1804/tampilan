<html>
<head><title>Edit Halaman</title></head>
<body>
    <h3>Form Edit Data</h3>
    <form action="" method="post">
        <table>
            <?php foreach ($pegawai as $pgw):?>
                <tr>
                    <td>ID Pegawai</td>
                    <td>:</td>
                    <td><input type="hidden" name="IDPegawai" value="<?= $pgw["id_pegawai"] ?>"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="Nama" value="<?= $pgw["nama"] ?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="Alamat" value="<?= $pgw["alamat"] ?>"></td>
                </tr>
                <tr>
                    <td>Gol</td>
                    <td>:</td>
                    <td><input type="text" name="Gol" value="<?= $pgw["golongan"] ?>"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="SIMPAN" name="tombolEdit"></td>
            <?php endforeach;?>
        </table>
    </form>
            
    </body>
</html>