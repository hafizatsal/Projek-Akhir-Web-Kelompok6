<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <ol class="row g-2 mr-0 pl-3 justify-content-between">
                <div class="ml-0">
                    <h1 class="mt-1"><?= $templateAtas ?></h1>
                </div>
                <div class="mt-2 mr-1">
                    <a href="<?= base_url('resepsionis/data_dokter') ?>" class="btn btn-light ms-auto me-3 me-lg-4 p-1" data-bs-toggle="modal">
                        <i class="bi bi-box-arrow-in-left" style="font-size: 20px;"></i>
                    </a>
                </div>
            </ol>

            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('resepsionis/data_dokter') ?>">Daftar Dokter</a></li>
                <li class="breadcrumb-item active"><?= $templateJudul ?></li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    <?= $templateJudul ?>
                </div>
                <div class="card-body">
                  

                    <form action="<?= site_url('resepsionis/store') ?>" method="POST" enctype="multipart/form-data">
                        <?= csrf_field() ?>

                        <div class="mb-3">
                            <label for="sip" class="form-label">Surat Izin Praktek : <small style="color: red;">*</small></label>
                            <input type="text" id="sip" name="sip" class="form-control ">
                            <div class="invalid-feedback">
                                
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="nip" class="form-label">Nomor Induk Kepegawaian :</label>
                            <input type="text" id="nip" name="nip" class="form-control">
                            <div class="invalid-feedback">
                               
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="nama_dokter" class="form-label">Nama Dokter: <small style="color: red;">*</small></label>
                            <input type="text" id="nama_dokter" name="nama_dokter" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="spesialis" class="form-label">Spesialis: </label>
                            <input type="text" id="spesialis" name="spesialis" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="no_tlp" class="form-label">Nomor Telepon: <small style="color: red;">*</small></label>
                            <input type="text" id="no_tlp" name="no_tlp" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat : <small style="color: red;">*</small></label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                        </div>

                        <div class="modal-footer">
                            <a href="<?= base_url('resepsionis/data_dokter') ?>" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>
