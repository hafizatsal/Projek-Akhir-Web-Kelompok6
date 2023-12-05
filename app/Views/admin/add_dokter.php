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