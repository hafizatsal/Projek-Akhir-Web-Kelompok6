<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <title>Create User</title>
    
</head>
<body>
<div class="container" style="padding:20px ">
        <div class="row my-3">
            <div class="col-md">
                <h2><i class="bi bi-pencil-square"></i>&nbsp;edit user</h2>
                <hr>
            </div>
        </div>
    <form action="<?= base_url('/user/' . $user['id']) ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        <?= csrf_field(); ?>
        
        <div class="mb-3">
         <label for="username" class="form-label">Username:</label>
        <input type="text" value="<?= $user['username'] ?>"  name="username" id="username" class="form-control w-50" required><br>
        </div>

        <div class="mb-3">
        <label for="password" class="form-label">Password:</label>
        <input type="password" value="<?= $user['password'] ?>" name="password" id="password" class="form-control w-50" required><br>
        </div>

        <div class="mb-3">
        <label for="nama_user" class="form-label">Nama User:</label>
        <input type="text" value="<?= $user['nama_user'] ?>" name="nama_user" id="nama_user" class="form-control w-50" required><br>
        </div>

        <div class="mb-3">
        <label for="no_ktp" class="form-label" >Nomor KTP:</label>
        <input type="text" value="<?= $user['no_ktp'] ?>" name="no_ktp" id="no_ktp" class="form-control w-50" required><br>
        </div>

        <div class="mb-3">
        <label for="no_tlp" class="form-label">Nomor Telepon:</label>
        <input type="text" value="<?= $user['no_tlp'] ?>" name="no_tlp" id="no_tlp" class="form-control w-50" required><br>
        </div>

        <div class="mb-3">
        <label for="alamat" class="form-label">Alamat:</label>
        <textarea class="form-control w-50" name="alamat" id="alamat" rows="3" required><?= $user['alamat'] ?> </textarea><br>
        </div>

        <button type="submit" class="btn btn-primary">
            <i class="bi bi-send"></i> Submit
        </button>
    </form>
</body>
</html>
