    <!-- Page-Title -->
    <div class="row"> 
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <h4 class="m-t-0 header-title m-b-30"><b>Data Barang</b></h4>
                        <div style="width:100%; text-align:right; margin-bottom:10px;">
                            <a href="#" class="on-default edit-row btn btn-success" data-toggle="modal" data-target="#custom-width-modal"><i class="fa fa-plus"></i></a>
                        </div>

                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Harga Beli</th>
                                    <th>Harga Jual</th>
                                    <th>Diskon</th>
                                    <th>Stok</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php 
                                    $no = 1;
                                    foreach($query->result() as $row){
                                echo "<tr>
                                <td>".$no."</td>
                                <td>".$row->namaBarang."</td>
                                <td>".$row->hargaBeli."</td>
                                <td>".$row->hargaJual."</td>
                                <td>".$row->diskon."</td>
                                <td>".$row->stokBarang."</td>
                                <td><a href ='#' class ='on-default edit-row btn btn-primary' data-toggle='modal' data-target='#custom-width-modal' onClick=\"SetInput('".$row->idJenis."', '".$row->idMerk."', '".$row->idBarang."','".$row->namaBarang."','".$row->hargaBeli."','".$row->hargaJual."','".$row->diskon."','".$row->stokBarang."')\"><i class ='fa fa-pencil'></i></a>
                                    <a href ='#' class ='on-default remove-row btn btn-danger' data-toggle='modal' data-target='#delete-modal'onClick=\"SetInputs('".$row->idJenis."', '".$row->idMerk."', '".$row->idBarang."','".$row->namaBarang."','".$row->hargaBeli."','".$row->hargaJual."', '".$row->diskon."','".$row->stokBarang."')\"><i class ='fa fa-trash'></i></a>
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
                <h4 class="modal-title" id="custom-width-modalLabel">Data Barang</h4>
            </div>
            <form action="<?php echo base_url(). 'barang/add'; ?>" method="post" class="form-horizontal" role="form">
            <div class="modal-body">                                   
                <div class="form-group">
                    <input type="hidden" id="idBarang" name="idBarang">
                    <label class="col-md-3 control-label">Nama Barang</label>
                    <div class="col-md-9">
                    <input type="text" class="form-control" id="namaBarang" name="namaBarang" required>
                    </div>
                </div>     
                <div class="form-group">
                    <label class="col-md-3 control-label">Jenis</label>
                    <div class="col-md-4">
                        <select class="selectpicker" data-live-search="true"  data-style="btn-white" id="idJenis" name="idJenis" required>
                            <?php
                            $query = $this->m_jenis->tampil_data();
                            foreach($query->result() as $row) {
                                echo "<option value='".$row->idJenis."'>".$row->namaJenis."</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div> 
                <div class="form-group">
                    <label class="col-md-3 control-label">Merk</label>
                    <div class="col-md-4">
                        <select class="selectpicker" data-live-search="true"  data-style="btn-white" id="idMerk" name="idMerk" required>
                            <?php
                            $query = $this->m_merk->tampil_data();
                            foreach($query->result() as $row) {
                                echo "<option value='".$row->idMerk."'>".$row->namaMerk."</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div> 
                <div class="form-group">
                    <label class="col-md-3 control-label">Harga Beli</label>
                    <div class="col-md-4">
                        <input type="number" min="0" class="form-control" style="text-align: right;" id="hargaBeli" name="hargaBeli" required>
                    </div>
                </div>     
                <div class="form-group">
                    <label class="col-md-3 control-label">Harga Jual</label>
                    <div class="col-md-4">
                        <input type="number" class="form-control" id="hargaJual" name="hargaJual" required>
                    </div>
                </div>    
                <div class="form-group">
                    <label class="col-md-3 control-label">Diskon</label>
                    <div class="col-md-4">
                        <input type="number" min="1" class="form-control" id="diskon" name="diskon" required>
                    </div>
                        <label class="col-md-3 control-label" style="text-align: left;">%</label>
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
                                                    <form action="<?php echo base_url(). 'barang/delete'; ?>" method="post" class="form-horizontal" role="form">
                                                    <div class="modal-body">
                                                        <p>Apakah anda yakin ingin menghapus?</p>
                                                            <div>
                                                                <input type="hidden" id="idBarang2" name="idBarang2">
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
    function SetInput(idJenis, idMerk, idBarang, namaBarang, hargaBeli, hargaJual, diskon, stokBarang){
        document.getElementById('idJenis').value = idJenis;
        document.getElementById('idMerk').value = idMerk;
        document.getElementById('idBarang').value = idBarang;
        document.getElementById('namaBarang').value = namaBarang;
        document.getElementById('hargaBeli').value = hargaBeli;
        document.getElementById('hargaJual').value = hargaJual;
        document.getElementById('diskon').value = diskon;
        document.getElementById('stokBarang').value = stokBarang;
    }
    function SetInputs(idJenis, idMerk, idBarang, namaBarang, hargaBeli, hargaJual, diskon, stokBarang){
        
        document.getElementById('idBarang2').value = idBarang;
        document.getElementById('namaBarang2').value = namaBarang;
        document.getElementById('hargaBeli2').value = hargaBeli;
        document.getElementById('hargaJual2').value = hargaJual;
         document.getElementById('diskon2').value = diskon;
        document.getElementById('stokBarang2').value = stokBarang;
    }

    function ResetInput(idJenis, idMerk, idBarang, namaBarang, hargaBeli, hargaJual, diskon, stokBarang){
         document.getElementById('idJenis').value = "";
        document.getElementById('idMerk').value = "";
        document.getElementById('idBarang').value = "";
        document.getElementById('namaBarang').value = "";
        document.getElementById('hargaBeli').value = "";
        document.getElementById('hargaJual').value = "";
         document.getElementById('diskon').value = "";
        document.getElementById('stokBarang').value = "";
    }
</script>

<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.maskedinput.js" type="text/javascript"></script>

<script>
jQuery(function($){

$("#percent").mask("99%");

 function SetHargaNet(){
        var hargaNet = ( $('#hargaJual').val() * $('#diskon').val());
        $('#subTotal').val(hargaNet);
    }
</script>;
   

</script>