                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title m-b-30"><b>Data Info Wisata</b></h4>

                             <div style="width:100%; text-align:right; margin-bottom:10px;">
                                <a href="#" class="on-default edit-row btn btn-success" data-toggle="modal" data-target="#custom-width-modal"><i class="fa fa-plus"></i></a>

                            </div>

                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Wisata</th>
                                    <th>Deskripsi</th>
                                    <th>Gambar Wisata</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>


                                <tbody>
                                <?php 
                                    $no = 1;
                                    foreach($query->result() as $row){
                                echo "<tr>
                                <td>".$no."</td>
                                <td>".$row->nama_wisata."</td>
                                <td>".$row->deskripsi."</td>
                                <td>".$row->gambar_wisata."</td>
                                <td><a href ='#' class ='on-default edit-row btn btn-primary' data-toggle='modal' data-target='#custom-width-modal' onClick=\"SetInput('".$row->idinfoWisata."','".$row->nama_wisata."','".$row->deskripsi."','".$row->gambar_wisata."')\"><i class ='fa fa-pencil'></i></a>
                                    <a href ='#' class ='on-default remove-row btn btn-danger' data-toggle='modal' data-target='#delete-modal'onClick=\"SetInputs('".$row->idinfoWisata."','".$row->nama_wisata."','".$row->deskripsi."','".$row->gambar_wisata."')\"><i class ='fa fa-trash'></i></a>
                                </td>
                            
                                
                            </tr>";
                            $no++;
                                    
                            } 
                            ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end row -->

 <div id="custom-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog" style="width:55%;">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title" id="custom-width-modalLabel">Data Info Wisata</h4>
                                                </div>
                                            <form action="<?php echo base_url(). 'pegawai/add'; ?>" method="post" class="form-horizontal" role="form">
                                                <div class="modal-body">
                                                                               
                                                <div class="form-group">
                                                <input type="hidden" id="idinfoWisata" name="idinfoWisata">
                                                    <label class="col-md-3 control-label">Nama Wisata</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" id="nama_wisata" name="nama_wisata" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Deskripsi</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Gambar Wisata</label>
                                                    <div class="col-md-4">
                                                        <input type="text" onkeypress="return hanyaAngka(event)" class="form-control" id="gambar_wisata" name="gambar_wisata" required>
                                                    </div>
                                                </div>
                                                </div>
                                            
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Tutup</button>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                                                </div>
                                            </form>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                        <div id="delete-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog" style="width:55%;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title" id="custom-width-modalLabel">Konfirmasi Hapus</h4>
                                                    </div>
                                                    <form action="<?php echo base_url(). 'pegawai/delete'; ?>" method="post" class="form-horizontal" role="form">
                                                    <div class="modal-body">
                                                        <p>Apakah anda yakin ingin menghapus?</p>
                                                            <div>
                                                                <input type="hidden" id="idinfoWisata2" name="idinfoWisata2">
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Tidak</button>
                                                        <button type="submit" class="btn btn-success waves-effect waves-light">Ya</button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->            

<script type="text/javascript">
    function SetInput(idinfoWisata, nama_wisata, deskripsi, gambar_wisata){
        document.getElementById('idinfoWisata').value = idinfoWisata;
        document.getElementById('nama_wisata').value = nama_wisata;
        document.getElementById('deskripsi').value = deskripsi;
        document.getElementById('gambar_wisata').value = gambar_wisata;
    }
    function SetInputs(idinfoWisata, nama_wisata, deskripsi, gambar_wisata){
        document.getElementById('idinfoWisata2').value = idinfoWisata;
        document.getElementById('nama_wisata2').value = nama_wisata;
        document.getElementById('deskripsi2').value = deskripsi;
        document.getElementById('gambar_wisata2').value = gambar_wisata;
    }

    function ResetInput(idinfoWisata, nama_wisata, deskripsi, gambar_wisata){
        document.getElementById('idinfoWisata').value = "";
        document.getElementById('nama_wisata').value = "";
        document.getElementById('deskripsi').value = "";
        document.getElementById('gambar_wisata').value = "";
    }

        function hanyaAngka(evt) {
          var charCode = (evt.which) ? evt.which : event.keyCode
           if (charCode > 31 && (charCode < 48 || charCode > 57))
 
            return false;
          return true;
        }



</script>