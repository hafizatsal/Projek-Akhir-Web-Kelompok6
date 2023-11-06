<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
</head>
<body>
    <h2>Create User</h2>

    <form action="<?= base_url('/user/' . $user['id']) ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        <?= csrf_field(); ?>
        
        <label for="username">Username:</label>
        <input type="text" value="<?= $user['username'] ?>"  name="username" id="username" required><br>

        <label for="password">Password:</label>
        <input type="password" value="<?= $user['password'] ?>" name="password" id="password" required><br>

        <label for="nama_user">Nama User:</label>
        <input type="text" value="<?= $user['nama_user'] ?>" name="nama_user" id="nama_user" required><br>

        <label for="no_ktp">Nomor KTP:</label>
        <input type="text" value="<?= $user['no_ktp'] ?>" name="no_ktp" id="no_ktp" required><br>
        
        <label for="no_tlp">Nomor Telepon:</label>
        <input type="text" value="<?= $user['no_tlp'] ?>" name="no_tlp" id="no_tlp" required><br>

        <label for="alamat">Alamat:</label>
        <textarea  name="alamat" id="alamat"  required><?= $user['alamat'] ?></textarea><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
