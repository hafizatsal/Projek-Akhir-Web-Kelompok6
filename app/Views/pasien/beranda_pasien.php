<div id="content">
<div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"><?php echo $templateJudul?></h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <form action="<?= base_url('/home_pasien/pasien_daftar')?>" method="POST">
              
                
              </div>
              <div class="row g-3">
                <div class="col-md-6">
                  <label for="nama" class="col-form-label">Nama pasien </label>
                  <input type="text" name="nama" id="nama" class="form-control" value="<?php echo session()->get('akun_nama_user')?>" readonly>
                </div>
                <div class="col-md-6">
                  <label for="jenis_kelamin" class="col-form-label">Nama poli <small style="color: red;">*</small></label>
                  <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                  </select>
                </div>
              </div>
              <div class="row g-3">

              <div class="col-md-6">
                  <label for="no_telp" class="col-form-label">Alamat</label>
                  <input type="text" name="no_telp" id="no_telp" class="form-control" value="<?php echo session()->get('akun_alamat')?>">
                </div>
                 
                <div class="col-md-3">
                  <label for="nama" class="col-form-label">Nomor telepon </label>
                  <input type="text" name="nama" id="nama" class="form-control" value="<?php echo session()->get('akun_no_tlp')?>">
                </div>
                <div class="col-md-3">
                  <label for="tanggal_lahir" class="col-form-label">Tanggal periksa <small style="color: red;">*</small></label>
                  <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
                </div>
                
                
              </div>
              <div class="row g-3">
              <div class="col-md-3">
              <label for="alamat" class="col-form-label">Jenis Kelamin</label>
                  <input type="text" name="alamat" id="alamat" class="form-control">
                </div>
                <div class="col-md-3">
                  <label for="alamat" class="col-form-label">Usia</label>
                  <input type="text" name="alamat" id="alamat" class="form-control">
                </div>
              
                <div class="col-md-6">
                  <label for="keluhan" class="col-form-label">Keluhan <small style="color: red;">*</small></label>
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
                <!-- /.container-fluid -->

            </div>