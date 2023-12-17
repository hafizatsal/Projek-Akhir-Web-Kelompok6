            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"><?php echo $templateAtas?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"><?php echo $templateJudul?></li>

                            <button type="button" class="btn btn-success ms-auto me-3 me-lg-4 " data-bs-toggle="modal" data-bs-target="#tambahDokter" ><i class="bi bi-person-plus"></i>&nbsp;dokter</button>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                <?php echo $templateJudul?>
                            </div>
                            <div class="card-body">
                            <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>SIP</th>
                                            <th>Nama Dokter</th>
                                            <th>Spesialis</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>SIP</th>
                                            <th>Nama Dokter</th>
                                            <th>Spesialis</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php foreach ($users as $user): ?>
                                        <tr>
                                            <td><?= $user['id'] ?></td>
                                            <td><?= $user['sip'] ?></td>
                                            <td><?= $user['nama_dokter'] ?></td>
                                            <td><?= $user['spesialis'] ?></td>
                                            <td style="text-align: center;">
                                                <button type="button" class="btn btn-primary  " data-bs-toggle="modal" 
                                                data-bs-target="#detailDokter<?php echo $user['id']?>" ><i class="bi bi-eye"></i></button>
                                                <button type="button" class="btn btn-warning  " data-bs-toggle="modal" 
                                                data-bs-target="#editDokter<?php echo $user['id']?>" ><i class="bi bi-pencil-square"></i></button>

                                                <form action="<?= site_url('admin/delete/' . $user['id']) ?>" method="post" style="display: inline-block;">
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
<!-- tambah dokter -->
                    <div class="modal fade" id="tambahDokter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah <?php echo $templateJudul?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <form action="<?php echo site_url('admin/store')?>" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="sip" class="form-label">Surat Izin Praktek : <small style="color: red;">*</small></label>
                                    <input type="text" id="sip" name="sip" class="form-control " >
                                </div>
                                <div class="mb-3">
                                    <label for="nip" class="form-label">Nomor Induk Kepegawaian :</label>
                                    <input type="text" id="nip" name="nip" class="form-control "  >
                                </div>
                                
                                <div class="mb-3">
                                    <label for="nama_dokter" class="form-label">Nama Dokter: <small style="color: red;">*</small></label>
                                    <input type="text" id="nama_dokter" name="nama_dokter" class="form-control" >
                                </div>

                                <div class="mb-3">
                                    <label for="spesialis" class="form-label">Spesialis: </label>
                                    <input type="text" id="spesialis" name="spesialis" class="form-control " >
                                </div>
                                
                                <div class="mb-3">
                                    <label for="username" class="form-label">Nomor Telepon: <small style="color: red;">*</small></label>
                                    <input type="text" id="no_tlp" name="no_tlp" class="form-control " >
                                </div>

                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat : <small style="color: red;">*</small></label>
                                    <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                        </div>
                        </form>
                    </div>
                    </div>

                    <?php $no = 0; 
                    foreach ($users as $user): $no++;?>
                    <div class="modal fade" id="editDokter<?php echo $user['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit <?php echo $templateJudul?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
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
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                        </div>
                        </form>
                    </div>
                    </div>
                    <?php endforeach; ?>

                    <?php $no = 0; 
                    foreach ($users as $user): $no++;?>
                    <div class="modal fade" id="detailDokter<?php echo $user['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Detail <?php echo $templateJudul?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <form action="" method="POST" enctype="multipart/form-data">
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
                        </div>
                        </form>
                    </div>
                    </div>
                    <?php endforeach; ?>
                </main>
         

