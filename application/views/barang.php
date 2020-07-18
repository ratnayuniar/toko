

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Barang
      <small>Toko Kelontong</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Master Data</a></li>
        <li><a href="#">Data Barang</a></li>
      </ol>
  </section>

  <!-- Main content -->
  <section class="content">
  <div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body"> 
              <a href="#" class="on-default edit-row btn btn-success pull-right" data-toggle="modal" pull="right"data-target="#custom-width-modal" onclick="ResetInput()"><i class="fa fa-plus" ></i></a>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Barang</th>
                  <th>Jumlah Barang</th>
                  <th>Harga Jual</th>
                  <th>Harga Beli</th>
                  <th>Jenis Satuan</th>
                  <th>Gambar Barang</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                   <?php
                  $no=1;
                  foreach ($barang->result() as $row) : ?>

                    <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row->namaBarang ?></td>
                    <td><?php echo $row->stokBarang ?></td>
                    <td><?php echo $row->hargaJual ?></td>
                    <td><?php echo $row->hargaBeli ?></td>
                    <td><?php echo $row->jenis_satuan ?></td>
                    <td><img src="<?php echo base_url(); ?>upload/barang/<?php echo $row->gambar_barang;?>" width="50" height="50"></td>
                    <td onClick="javascript: return confirm('Anda yakin hapus?') "><?php echo anchor('barang/hapus/'.$row->idBarang, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?></td>
                </tr>

                 <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>


  <div id="custom-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog" style="width:55%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="custom-width-modalLabel">Data Info Galeri</h4>
          </div>
        <?php echo form_open_multipart('barang/tambah_aksi') ?>
            <div class="modal-body">                                   
                <div class="form-group">
                    <label class="col-md-3 control-label">Nama Barang</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="namaBarang" name="namaBarang" required>
                        </div>
                </div> 

                 <div class="form-group">
                    <label class="col-md-3 control-label">Jumlah</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="stokBarang" name="stokBarang" required>
                        </div>
                </div> 

                 <div class="form-group">
                    <label class="col-md-3 control-label">Harga Jual</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="hargaJual" name="hargaJual" required>
                        </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Harga Beli</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="hargaBeli" name="hargaBeli" required>
                        </div>
                </div> 
                <br><br>                                   
                <div class="form-group">
                    <label class="col-md-3 control-label">Gambar Galeri</label>
                        <div class="col-md-9">
                            <input type="file" class="form-control" id="gambar_barang" name="gambar_barang" required>
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
</div>

  <!-- /.content-wrapper -->
 <!-- page script -->

