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
                <h2><i class="bi bi-person-plus"></i>&nbsp;user</h2>
                <hr>
            </div>
        </div>

    <form action="<?= base_url('/user/store') ?>" method="POST" enctype="multipart/form-data">
       
        <div class="mb-3">
            <label for="username" class="form-label">Username :</label>
            <input type="text" id="username" name="username" class="form-control w-50" >
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password :</label>
            <input type="password" id="password" name="password" class="form-control w-50" required aria-describedby="passwordHelpBlock">
        </div>
      
        <div class="mb-3">
            <label for="nama_user" class="form-label">Nama User: :</label>
            <input type="text" id="nama_user" name="nama_user" class="form-control w-50" >
        </div>

        <div class="mb-3">
            <label for="no_ktp" class="form-label">Nomor KTP: :</label>
            <input type="text" id="no_ktp" name="no_ktp" class="form-control w-50" >
        </div>
        
        <div class="mb-3">
            <label for="username" class="form-label">Nomor Telepon: :</label>
            <input type="text" id="no_tlp" name="no_tlp" class="form-control w-50" >
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat :</label>
            <textarea class="form-control-w-50" id="alamat" name="alamat" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">
            <i class="bi bi-send"></i> Submit
        </button>
    </form>
    </div>
</body>
</html>
