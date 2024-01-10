<html>
<head>
    <title>Halamahan Utama Website</title>
</head>

<body>
    <h1> Data Pegawai </h1>

    <?php
    $url = base_url('Welcome/input');
    ?>

        <a href="<?php echo $url;  ?>"><button>Tambah Data Kepegawaian</button></a>


    <table>
        <tr>
            <td><b>No</b></td>
            <td><b>ID Pegawai</b></td>
            <td><b>Nama</b></td>
            <td><b>Gol</b></td>
            <td><b>Alamat</b></td>
            <td><b>Edit Data</b></td>
        <tr>
        <?php $i = 0;
        foreach($pegawai as $pgw):?>
            </tr>
                <td><?= $i+=1 ?></td>
                <td><?= $pgw["id_pegawai"] ?></td>
                <td><?= $pgw["nama"] ?></td>
                <td><?= $pgw["golongan"] ?></td>
                <td><?= $pgw["alamat"] ?></td>
                <td>
                    <a href="welcome/formedit/<?= $pgw["id_pegawai"] ?>">Edit</a>
                    <a href="welcome/delete/<?= $pgw["id_pegawai"] ?>" onclick="return confirm('yakin nih hapusss???')">Delete</a>
                </td>
            </tr>
        <?php endforeach;?>
    </table>
</body>
</html>