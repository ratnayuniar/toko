<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title m-b-30"><b>Data Penjualan</b></h4>
            <div class="row" >
            <div class="col-md-6">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="kode" class="col-sm-3 control-label">Nama Barang</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" id="namaBarang" placeholder="Nama Barang">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="namaBarang" class="col-sm-3 control-label">Jumlah Barang</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="jumlahBarang" placeholder="Jumlah Barang">
                        </div>
                    </div>
                    
                </form>
            </div>
            <div class="col-md-5">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="jumlahBarang" class="col-sm-3 control-label">Harga</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" id="harga" name="harga" placeholder="" readonly>
                        </div>
                    </div>
                   
                    <div class="form-group m-b-0">
                        <div class="col-sm-offset-3 col-sm-9">
                          <button type="submit" class="btn btn-info waves-effect waves-light">Submit</button>
                        </div>
                    </div>
                </form>
            </div>   
            </div> 

            <table id="" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Diskon</th>
                    <th>Subtotal</th>
                    <th>Aksi</th>
                    
                </tr>
                </thead>


                <tbody>
                <tr>
                    <td>1</td>
                    <td>10/20/2019</td>
                    <td>-</td>
                    
                </tr>
                </tbody>
            </table>
            <div class="col-md-5">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="totalHarga" class="col-sm-3 control-label">Total Harga</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" id="totalHarga">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bayar" class="col-sm-3 control-label">Bayar</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" id="bayar">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kembali" class="col-sm-3 control-label">Kembali</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" id="kembali">
                        </div>
                    </div>
                    
                </form>
            </div>           
        </div>
    </div>
</div>
<!-- end row -->

<div id="custom-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width:55%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="custom-width-modalLabel">Data Pembelian</h4>
            </div>
        <form class="form-horizontal" role="form"> 
            <div class="modal-body">                                   
                                             
                    <div class="form-group">
                        <label class="col-md-3 control-label">Tanggal</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker"required>
                            <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i>
                        </div>
                    </div>                                    
                    <div class="form-group">
                        <label class="col-md-3 control-label">Total</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="total" name="total" required>
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
            <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Tidak</button>
                <button type="button" class="btn btn-success waves-effect waves-light">Ya</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

