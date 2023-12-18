<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Form Pendaftaran Pasien</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header text-center">
            Form Pendaftaran Pasien
          </div>
          <div class="card-body">
            <form action="<?= base_url('/home_pasien/pasien_daftar')?>" method="POST">
              <div class="row g-3">
                <div class="col-md-6">
                  <label for="nama" class="col-form-label">Nama Lengkap</label>
                  <input type="text" name="nama" id="nama" class="form-control">
                </div>
                <div class="col-md-6">
                  <label for="jenis_kelamin" class="col-form-label">Jenis Kelamin</label>
                  <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                  </select>
                </div>
              </div>
              <div class="row g-3">
                <div class="col-md-4">
                  <label for="tanggal_lahir" class="col-form-label">Tanggal Lahir</label>
                  <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
                </div>
                <div class="col-md-4">
                  <label for="alamat" class="col-form-label">Alamat</label>
                  <input type="text" name="alamat" id="alamat" class="form-control">
                </div>
                <div class="col-md-4">
                  <label for="no_telp" class="col-form-label">Nomor Telepon</label>
                  <input type="text" name="no_telp" id="no_telp" class="form-control">
                </div>
              </div>
              <div class="row g-3">
                <div class="col-md-6">
                  <label for="asal_rujukan" class="col-form-label">Asal Rujukan</label>
                  <input type="text" name="asal_rujukan" id="asal_rujukan" class="form-control">
                </div>
                <div class="col-md-6">
                  <label for="keluhan" class="col-form-label">Keluhan</label>
                  <textarea name="keluhan" id="keluhan" class="form-control" rows="4"></textarea>
                </div>
              </div>
              <div class="d-flex justify-content-center mt-5">
                <button type="submit" class="btn btn-primary">Daftar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>