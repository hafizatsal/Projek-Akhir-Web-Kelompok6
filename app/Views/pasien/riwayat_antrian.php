<div class="container-fluid">

                    <!-- Page Heading -->
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"><?php echo $templateJudul?></h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                        <tr>
                                            <th>Tanggal Daftar :</th>
                                            <th>No. Pendaftaran :</th>
                                            <th>Nama Pasien :</th>
                                            <th>Nama Poli :</th>
                                            <th>Tanggal Periksa :</th>
                                      
                                            <th>Aksi :</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Tanggal Daftar :</th>
                                            <th>No. Pendaftaran :</th>
                                            <th>Nama Pasien :</th>
                                            <th>Nama Poli :</th>
                                            <th>Tanggal Periksa :</th>
                                      
                                            <th>Aksi :</th>
                                        </tr>
                                    </tfoot>
                                    <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                          
                                            <td>$320,800</td>
                                            <td style="text-align: center;">
                                                <button type="button" class="btn btn-success btn-circle" data-bs-toggle="modal" 
                                                data-bs-target="#detailDokter" ><i class="bi bi-eye-fill"></i></button>
                                                <button type="button" class="btn btn-warning btn-circle " data-bs-toggle="modal" 
                                                data-bs-target="#editDokter" ><i class="bi bi-pencil-fill"></i></button>

                                                <form action="" method="post" style="display: inline-block;">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <?= csrf_field() ?>
                                                    <button type="submit" class="btn btn-danger btn-circle">
                                                    <i class="bi bi-trash3-fill"></i></button>
                                                </form>
                                            </td>

                                        </tr>
                          
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>