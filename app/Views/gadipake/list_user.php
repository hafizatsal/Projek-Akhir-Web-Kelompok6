<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pengguna</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">

</head>
<body>

<div class="container" style="padding:40px;  width:100%;">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-uppercase text-center fw-bold">Data Pengguna</h2>
            <hr>
            <a class="btn btn-success" href="<?= base_url('/user/create') ?>"><i class="bi bi-person-plus"></i>&nbsp;user</a>
            <br>
            <div class="row my-3">
            <table id="table_id" class="table table-striped table-bordered" cellspacing="10" width="100%">
                <thead>
                    <tr style="text-align: center;">
                        <th>ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Nama User</th>
                        <th>No. KTP</th>
                        <th>Alamat</th>
                        <th>No. Telp</th>
                        <th>Action</th>
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
                            <td style="text-align: center;">
                                <a href="<?= base_url('user/' . $user['id']) ?>" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                                <a href="<?= base_url('user/' . $user['id'] . '/edit') ?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                <form action="<?= base_url('user/' . $user['id']) ?>" method="post" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <?= csrf_field() ?>
                                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
                    </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable();
  } );
</script>

</body>
</html>
