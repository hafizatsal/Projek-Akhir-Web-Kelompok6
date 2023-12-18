<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <ol class="row g-2 mr-0 pl-3 justify-content-between">
                <div class="ml-0">
                    <h1 class="mt-1"><?= $templateAtas ?></h1>
                </div>
                <div class="mt-2 mr-1">
                    <a href="<?= base_url('admin/poli') ?>" class="btn btn-light ms-auto me-3 me-lg-4 p-1" data-bs-toggle="modal">
                        <i class="bi bi-box-arrow-in-left" style="font-size: 20px;"></i>
                    </a>
                </div>
            </ol>

            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('admin/poli') ?>"><?= $templateAtas ?></a></li>
                <li class="breadcrumb-item active"><?= $templateJudul ?></li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    <?= $templateJudul ?>
                </div>
                <div class="card-body">
                  

                    <form action="<?= site_url('admin/store_poli') ?>" method="POST" enctype="multipart/form-data">
                        <?= csrf_field() ?>

                        <div class="mb-3">
                            <label for="kode_poli" class="form-label">No Poli : <small style="color: red;">*</small></label>
                            <input type="text" id="kode_poli" name="kode_poli" class="form-control " value="<?= $poli['kode_poli'] ?>" readonly>
                            <div class="invalid-feedback">
                                
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="nama_poli" class="form-label">Nama Poli :</label>
                            <input type="text" id="nama_poli" name="nama_poli" class="form-control" value="<?= $poli['nama_poli'] ?>" readonly>
                            <div class="invalid-feedback">
                               
                            </div>
                        </div>


                        <div class="modal-footer">
                            <a href="<?= base_url('admin/poli') ?>" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</a>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>
