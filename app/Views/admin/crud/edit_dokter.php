            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <ol class="row g-2 mr-0 pl-3 justify-content-between ">
                        <div class="ml-0  ">
                        <h1 class="mt-1"><?php echo $templateAtas?></h1>
                        </div>
                        <div class="mt-2 mr-1">
                    <a href="<?= base_url('admin/data_dokter') ?>" class="btn btn-light ms-auto me-3 me-lg-4 p-1" data-bs-toggle="modal">
                        <i class="bi bi-box-arrow-in-left" style="font-size: 20px;"></i>
                    </a>
                </div>
        </ol>

        <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('admin/data_dokter') ?>">Daftar Dokter</a></li>
                <li class="breadcrumb-item active"><?= $templateJudul ?></li>
            </ol>
                     
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                <?php echo $templateJudul?>
                            </div>
                            <div class="card-body">
                            
                            <form action="<?= site_url('admin/update/' . $user['id']) ?>" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PUT">
                        <?= csrf_field(); ?>        
                        <div class="mb-3">
                            <label for="sip" class="form-label">Surat Izin Praktek : </label>
                            <input type="text" id="sip" name="sip" class="form-control " value="<?= $user['sip'] ?>">
                        </div>
                                <div class="mb-3">
                                    <label for="nip" class="form-label">Nomor Induk Kepegawaian :</label>
                                    <input type="text" id="nip" name="nip" class="form-control "  value="<?= $user['nip'] ?>">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="nama_dokter" class="form-label">Nama Dokter: </label>
                                    <input type="text" id="nama_dokter" name="nama_dokter" class="form-control" value="<?= $user['nama_dokter'] ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="spesialis" class="form-label">Spesialis: </label>
                                    <input type="text" id="spesialis" name="spesialis" value="<?= $user['spesialis'] ?>" class="form-control " >
                                </div>
                                
                                <div class="mb-3">
                                    <label for="username" class="form-label">Nomor Telepon: </label>
                                    <input type="text" id="no_tlp" name="no_tlp" value="<?= $user['no_tlp'] ?>" class="form-control " >
                                </div>

                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat : </label>
                                    <textarea class="form-control" id="alamat" name="alamat"  rows="3"><?= $user['alamat'] ?></textarea>
                                </div>
                        </div>
                        <div class="modal-footer">
                        <a href="<?= base_url('admin/data_dokter') ?>"  class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                        </div>
                        </form>
                            </div>
                        </div>
                        
                    </div>
                    </div>
                    </div>

<!-- tambah dokter -->
 