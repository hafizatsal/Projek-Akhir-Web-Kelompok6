            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <ol class="row g-2 mr-0 pl-3 justify-content-between ">
                        <div class="ml-0  ">
                        <h1 class="mt-1"><?php echo $templateAtas?></h1>
                        </div>
                        <div class="mt-2 mr-1">
                        <a href="<?php echo site_url('admin/tambah_poli')?>" class="btn btn-success ms-auto me-3 me-lg-4 p-2" 
                        
                         ><i class="bi bi-person-plus"></i>&nbsp;<?php echo $templateAtas?></a>
                        </div>
        </ol>

                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"><?php echo $templateJudul?></li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                <?php echo $templateJudul?>
                            </div>
                            <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Poli</th>
                                            <th>Nama Poli</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Poli</th>
                                            <th>Nama Poli</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php foreach ($poli as $poli): ?>
                                        <tr>
                                            <td><?= $poli['id_poli'] ?></td>
                                            <td><?= $poli['kode_poli'] ?></td>
                                            <td><?= $poli['nama_poli'] ?></td>
                                            <td style="text-align: center;">
                                                <a href="<?php echo site_url('admin/detail_poli/'. $poli['id_poli'])?>" class="btn btn-primary  "><i class="bi bi-eye"></i></a>
                                                
                                                <a href="<?php echo site_url('admin/edit_poli/'. $poli['id_poli'])?>"  class="btn btn-warning  " data-bs-toggle="modal" 
                                                data-bs-target="#editDokter<?php echo $poli['id_poli']?>" ><i class="bi bi-pencil-square"></i></a>

                                                <form action="<?= site_url('admin/delete_poli/' . $poli['id_poli']) ?>" method="post" style="display: inline-block;">
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
<!-- tambah dokter -->
                   
   
         

