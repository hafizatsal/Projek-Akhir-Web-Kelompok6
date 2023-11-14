<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
</head>
<body>
    <h2>Create User</h2>

    <form action="<?= base_url('/user/store')?>" method="POST" enctype="multipart/form-data">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>

        <label for="nama_user">Nama User:</label>
        <input type="text" name="nama_user" id="nama_user" required><br>

        <label for="no_ktp">Nomor KTP:</label>
        <input type="text" name="no_ktp" id="no_ktp" required><br>
        
        <label for="no_tlp">Nomor Telepon:</label>
        <input type="text" name="no_tlp" id="no_tlp" required><br>

        <label for="alamat">Alamat:</label>
        <textarea name="alamat" id="alamat" required></textarea><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
