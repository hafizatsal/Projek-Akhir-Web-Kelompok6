<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pengguna</title>
</head>
<body>

    <h1>Daftar Pengguna</h1>

    <a class="btn btn-primary" href="<?= base_url('/user/create') ?>">+ user</a>
    <br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Nama User</th>
                <th>No. KTP</th>
                <th>Alamat</th>
                <th>No. Telp</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['username'] ?></td>
                    <td><?= $user['password'] ?></td>
                    <td><?= $user['nama_user'] ?></td>
                    <td><?= $user['no_ktp'] ?></td>
                    <td><?= $user['alamat'] ?></td>
                    <td><?= $user['no_tlp'] ?></td>
                    <td>
                    <a  href="<?= base_url('user/' . $user['id']) ?>">Detail</a>
                    <a href="<?= base_url('user/' . $user['id'] . '/edit') ?>">Edit</a>
                    <form action="<?= base_url('user/' . $user['id']) ?>" method="post" style="display: inline-block;">
                            <input type="hidden" name="_method" value="DELETE">
                            <?= csrf_field() ?>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>                    
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
