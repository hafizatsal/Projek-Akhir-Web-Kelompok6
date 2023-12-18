<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <ol class="row g-2 mr-0 pl-3 justify-content-between">
                <div class="ml-0">
                    <h1 class="mt-1"><?= $templateAtas ?></h1>
                </div>
                <div class="mt-2 mr-1">
                    <a href="<?= base_url('admin/jadwal_dokter') ?>" class="btn btn-light ms-auto me-3 me-lg-4 p-1" data-bs-toggle="modal">
                        <i class="bi bi-box-arrow-in-left" style="font-size: 20px;"></i>
                    </a>
                </div>
            </ol>

            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('admin/jadwal_dokter') ?>"><?= $templateAtas ?></a></li>
                <li class="breadcrumb-item active"><?= $templateJudul ?></li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    <?= $templateJudul ?>
                </div>
                <div class="card-body">
                    <form action="<?= site_url('admin/jadwal_store') ?>" method="POST" enctype="multipart/form-data">
                        <?= csrf_field() ?>

                        <div class="mb-3">
                            <label for="hari" class="form-label">Hari : <small style="color: red;">*</small></label>
                            <input type="text" id="hari" name="hari" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal Praktek :</label>
                            <input type="text" id="tanggal" name="tanggal" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="jam_mulai" class="form-label">Jam Mulai :<small style="color: red;">*</small></label>
                            <input type="text" id="jam_mulai" name="jam_mulai" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="jam_selesai" class="form-label">Jam Selesai :</label>
                            <input type="text" id="jam_selesai" name="jam_selesai" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="id_poli" class="form-label">Nama Ruang :<small style="color: red;">*</small></label>
                            <select class="form-control" name="id_poli" id="id_poli">
                                <?php foreach ($poli as $ruang) : ?>
                                    <option value="<?= $ruang['id_poli'] ?>">
                                        <?= $ruang['kode_poli'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="id_dokter" class="form-label">Nama Dokter :<small style="color: red;">*</small></label>
                            <select class="form-control" name="id_dokter" id="id_dokter">
                                <?php foreach ($dokter as $dr) : ?>
                                    <option value="<?= $dr['id'] ?>">
                                        <?= $dr['nama_dokter'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="modal-footer">
                            <a href="<?= base_url('admin/jadwal_dokter') ?>" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>
