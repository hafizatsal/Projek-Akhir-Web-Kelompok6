<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <title>Profil Pengguna</title>
</head>
<body>
    <div class="container text-center" style="padding:20px ">
    <div class="row my-3">
            <div class="col-md">
                <h2 class="text-uppercase fw-bold">Detail user</h2>
                <hr>
            </div>
        </div>
        <center>
            <table>
                <tr>
                <div class="mb-3">
                    <td class="form-control w-100" style="color: black;">Username : <?= $user['username'] ?></td>
                <div class="mb-3">
                </tr>
                <tr>
                <div class="mb-3">
                    <td class="form-control w-100" style="color: black;">Password : <?= $user['password'] ?></td>
                <div class="mb-3">
                </tr>
                <tr>
                <div class="mb-3">
                    <td class="form-control w-100" style="color: black;">Nama User : <?= $user['nama_user'] ?></td>
                <div class="mb-3">
                </tr>
                <tr>
                <div class="mb-3">
                    <td class="form-control w-100" style="color: black;">No KTP : <?= $user['no_ktp'] ?></td>
                </div>
                </tr>
                <tr>
                <div class="mb-3">
                    <td class="form-control w-100" style="color: black;">No TLP : <?= $user['no_tlp'] ?></td>
                </div>
                </tr>
                <tr>
                <div class="mb-3">
                    <td class="form-control w-100" style="color: black;">Alamat : <?= $user['alamat'] ?></td>
                </div>
                </tr>
            </table>
        </center>
    </div>
</body>
</html>
