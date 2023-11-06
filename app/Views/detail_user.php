<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
</head>
<body>
    <div class="container">
        <center>
            <table>
                <tr>
                    <td style="color: black;">Username : <?= $user['username'] ?></td>
                </tr>
                <tr>
                    <td style="color: black;">Password : <?= $user['password'] ?></td>
                </tr>
                <tr>
                    <td style="color: black;">Nama User : <?= $user['nama_user'] ?></td>
                </tr>
                <tr>
                    <td style="color: black;">No KTP : <?= $user['no_ktp'] ?></td>
                </tr>
                <tr>
                    <td style="color: black;">No TLP : <?= $user['no_tlp'] ?></td>
                </tr>
                <tr>
                    <td style="color: black;">Alamat : <?= $user['alamat'] ?></td>
                </tr>
            </table>
        </center>
    </div>
</body>
</html>
