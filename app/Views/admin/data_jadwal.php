<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"><?php echo $templateAtas?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"><?php echo $templateJudul?></li>

                            <button type="button" class="btn btn-success ms-auto me-3 me-lg-4 " data-bs-toggle="modal" 
                            data-bs-target="#tambahJadwal" ><i class="bi bi-person-plus"></i>&nbsp;jadwal</button>
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
                                          
                                            <th>Senin</th>
                                            <th>Selasa</th>                                           
                                            <th>Rabu</th>
                                            <th>Kamis</th>
                                            <th>Jum'at</th>
                                            <th>Sabtu</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th> 
                                         
                                            <th>Senin</th>
                                            <th>Selasa</th>                                          
                                            <th>Rabu</th>
                                            <th>Kamis</th>
                                            <th>Jum'at</th>
                                            <th>Sabtu</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                  
                                    <?php foreach ($kelas as $kelas): ?>
                                        <tr>
                                            <td><?= $kelas['id'] ?></td>
                                     
                                            <td><?= $kelas['senin'] ?></td>
                                            <td><?= $kelas['selasa'] ?></td>
                                            <td><?= $kelas['rabu'] ?></td>
                                            <td><?= $kelas['kamis'] ?></td>
                                            <td><?= $kelas['jumat'] ?></td>
                                            <td><?= $kelas['sabtu'] ?></td>
                                            <td style="text-align: center;">
                                                
                                                <button type="button" class="btn btn-warning  " data-bs-toggle="modal" 
                                                data-bs-target="#editJadwal<?php echo $kelas['id']?>" ><i class="bi bi-pencil-square"></i></button>

                                                <form action="<?= site_url('admin/delete_jadwal/' . $kelas['id']) ?>" method="post" style="display: inline-block;">
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
                    <div class="modal fade" id="tambahJadwal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah <?php echo $templateJudul?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <form action="<?php echo site_url('admin/jadwal_store')?>" method="POST" enctype="multipart/form-data">
                                
                                <div class="mb-3">
                                    <label for="" class="form-label">Senin :</label>
                                    <input id="senin" type="text" class="form-control" name="senin" placeholder="HH:MM - HH:MM">

                                    <!-- <div class="input-group">
                                        <input id="timepkr" type="text" class="form-control" name="nama_dokter" placeholder="HH:MM">
                                        <a class="btn btn-primary" onclick="showpickers('timepkr', 24)">
                                            <i class="fa fa-clock-o"></i>
                                        </a>
                                    </div> -->
                                </div>
                               
                                
                                <div class="mb-3">
                                    <label for="selasa" class="form-label">Selasa : <small style="color: red;">*</small></label>
                                    <input id="selasa" type="text" class="form-control" name="selasa" placeholder="HH:MM - HH:MM">
                                </div>

                                <div class="mb-3">
                                    <label for="rabu" class="form-label">Rabu : </label>
                                    <input id="rabu" type="text" class="form-control" name="rabu" placeholder="HH:MM - HH:MM">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="kamis" class="form-label">Kamis : <small style="color: red;">*</small></label>
                                    <input id="kamis" type="text" class="form-control" name="kamis" placeholder="HH:MM - HH:MM">
                                </div>

                                <div class="mb-3">
                                    <label for="jumat" class="form-label">Jumat : <small style="color: red;">*</small></label>
                                    <input id="jumat" type="text" class="form-control" name="jumat" placeholder="HH:MM - HH:MM">
                                </div>
                                <div class="mb-3">
                                    <label for="sabtu" class="form-label">Sabtu : <small style="color: red;">*</small></label>
                                    <input id="sabtu" type="text" class="form-control" name="sabtu" placeholder="HH:MM - HH:MM">
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

                   
                    <div class="modal fade" id="editJadwal<?php echo $kelas['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit <?php echo $templateJudul?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <form action="<?= site_url('admin/update_jadwal/' . $kelas['id']) ?>" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PUT">
                        <?= csrf_field(); ?>        
                        <div class="mb-3">
                               
                                <div class="mb-3">
                                    <label for="" class="form-label">Senin :</label>
                                    <input id="senin" type="text" class="form-control" name="senin" placeholder="HH:MM - HH:MM" value="<?= $kelas['senin'] ?>">

                                    <!-- <div class="input-group">
                                        <input id="timepkr" type="text" class="form-control" name="nama_dokter" placeholder="HH:MM">
                                        <a class="btn btn-primary" onclick="showpickers('timepkr', 24)">
                                            <i class="fa fa-clock-o"></i>
                                        </a>
                                    </div> -->
                                </div>
                               
                                
                                <div class="mb-3">
                                    <label for="nama_dokter" class="form-label">Selasa : <small style="color: red;">*</small></label>
                                    <input id="selasa" type="text" class="form-control" name="selasa" placeholder="HH:MM - HH:MM" value="<?= $kelas['selasa'] ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="spesialis" class="form-label">Rabu : </label>
                                    <input id="rabu" type="text" class="form-control" name="rabu" placeholder="HH:MM - HH:MM" value="<?= $kelas['rabu'] ?>">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="username" class="form-label">Kamis : <small style="color: red;">*</small></label>
                                    <input id="kamis" type="text" class="form-control" name="kamis" placeholder="HH:MM - HH:MM" value="<?= $kelas['kamis'] ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Jumat : <small style="color: red;">*</small></label>
                                    <input id="jumat" type="text" class="form-control" name="jumat" placeholder="HH:MM - HH:MM" value="<?= $kelas['jumat'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Sabtu : <small style="color: red;">*</small></label>
                                    <input id="sabtu" type="text" class="form-control" name="sabtu" placeholder="HH:MM - HH:MM" value="<?= $kelas['sabtu'] ?>">
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
                   

                 
                 
                  
                </main>
         

