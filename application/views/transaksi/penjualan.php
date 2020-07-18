<section class="content-header">
      <h1>
        Penjualan Barang
        <small>Toko Kelontong</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Transaksi</a></li>
        <li><a href="#">Penjualan Barang</a></li>
      </ol>
</section>

                <!-- Page-Title -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body"> 
                           <div style="width:100%; text-align:right; margin-bottom:10px;">
                                <a href="#" class="on-default edit-row btn btn-success" data-toggle="modal" data-target="#custom-width-modal"><i class="fa fa-plus"></i></a>

                            </div>

                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Total</th>
                            
                                    <th>Aksi</th>
                                </tr>
                                </thead>


                                 <tbody>
                                <?php 
                                    $no = 1;
                                    foreach($query->result() as $row){
                                echo "<tr>
                                <td>".$no."</td>
                                
                                <td>".date_indo($row->tanggal)."</td>
                                <td>".$row->nama_pelanggan."</td>
                                <td>".number_format($row->total, 0, ',', '.')."</td>
                                
                                <td>
                               <a href='".base_url('detailPenjualan?id='.$row->idPenjualan)."' class='on-default edit-row btn btn-primary' ><i class='fa fa-search'></i></a>

                                    <a href ='#' class ='on-default remove-row btn btn-danger' data-toggle='modal' data-target='#delete-modal'onClick=\"SetInputs('".$row->idPenjualan."','".$row->tanggal."','".$row->nama_pelanggan."','".$row->total."')\"><i class ='fa fa-trash'></i></a>
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
                <h4 class="modal-title" id="custom-width-modalLabel">Data penjualan</h4>
            </div>
        <form action="<?php echo base_url(). 'penjualan/add'; ?>" method="post" class="form-horizontal" role="form">
            <div class="modal-body">                                   
                    <div class="form-group">
                        
                        <label class="col-md-3 control-label">Tanggal</label>
                        <div class="col-md-9">
                            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                        </div>
                    </div>
                    <div class="form-group">
                        
                        <label class="col-md-3 control-label">Nama Pelanggan</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" required>
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
                                                    <form action="<?php echo base_url(). 'penjualan/delete'; ?>" method="post" class="form-horizontal" role="form">
                                                    <div class="modal-body">
                                                        <p>Apakah anda yakin ingin menghapus?</p>
                                                            <div>
                                                                <input type="hidden" id="idPenjualan2" name="idPenjualan2">
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
    function SetInput(idPenjualan, tanggal,nama_pelanggan){
        document.getElementById('idPenjualan').value = idPenjualan;
        document.getElementById('tanggal').value = tanggal;
        document.getElementById('nama_pelanggan').value = nama_pelanggan;
        
    }
    function SetInputs(idPenjualan, tanggal, total){
        document.getElementById('idPenjualan2').value = idPenjualan;
        document.getElementById('tanggal2').value = tanggal;
         document.getElementById('total2').value = total;
         document.getElementById('nama_pelanggan2').value = nama_pelanggan2;
        
    }

    function ResetInput(idPenjualan, tanggal){
        document.getElementById('idPenjualan').value = "";
        document.getElementById('tanggal').value = "";
        document.getElementById('nama_pelanggan').value = nama_pelanggan;
        
    }
</script>