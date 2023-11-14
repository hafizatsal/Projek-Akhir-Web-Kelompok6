<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
</head>
<body>
    <h1>Pendaftaran Pasien</h1>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= $nama ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?= $jk ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><?= $tgl ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?= $alamat ?></td>
        </tr>
        <tr>
            <td>Nomor Telepon</td>
            <td>:</td>
            <td><?= $notlp ?></td>
        </tr>
        <tr>
            <td>Asal Rujukan</td>
            <td>:</td>
            <td><?= $rujukan ?></td>
        </tr>
        <tr>
            <td>Keluhan</td>
            <td>:</td>
            <td><?= $keluhan ?></td>
        </tr>
    </table>
</body>
</html>