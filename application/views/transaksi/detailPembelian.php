<!-- Page-Title -->
<?php
$barang = $this->m_barang->tampil_data();
echo "<script> var barang = ".json_encode($barang->result()).";</script>";
?>
<script type="text/javascript">
    function SethargaBarang(){
        $('#hargaBeli').val(0);
        var idBarang = $('#idBarang').val();
       for (var i = 0; i < barang.length; i++) {
           if(idBarang == barang[i]['idBarang']){
            $('#hargaBeli').val(barang[i]['hargaBeli']);
           }
       }
       SetsubTotal();
    }

    function SetsubTotal(){
        var subTotal =  $('#jumlah').val() * $('#hargaBeli').val();
        $('#subTotal').val(subTotal);
    }
    
</script> 


<section class="content-header">
      <h1>
        Detail Penjualan
        <small>Toko Kelontong</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Transaksi</a></li>
        <li><a href="#">Penjualan Barang</a></li>
        <li><a href="#">Detail Data Penjualan</a></li>
      </ol>
</section>

<section class="content">
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
            </div>
            <div class="row" >
                <form action="<?php echo base_url(). 'detailPembelian/add'; ?>" method="post" class="form-horizontal" role="form">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="hidden" id="idPembelian" name="idPembelian" value="<?php echo $idPembelian; ?>">
                            <label  class="col-sm-3 control-label">Nama Barang</label>
                            <div class="col-sm-9">
                             <select class="form-control" data-live-search="true"  data-style="btn-white" onchange="SethargaBarang()" id="idBarang" name="idBarang" required>
                                <option value="">-- Nama Barang --</option>
                                <?php
                                $y = $this->m_barang->tampil_data();
                                foreach($y->result() as $row) {
                                    echo "<option value='".$row->idBarang."'>".$row->namaBarang."</option>";
                                }
                                ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-3 control-label">Jumlah Barang</label>
                            <div class="col-sm-9">
                              <input type="number" min="1" class="form-control" onchange ="SetsubTotal()" id="jumlah" name="jumlah" placeholder="Jumlah Barang">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label  class="col-sm-3 control-label">Harga</label>
                            <div class="col-sm-9">
                              <input type="number" class="form-control" id="hargaBeli" name="hargaBeli" placeholder="" readonly="">
                            </div>
                        </div>
                        <div class="form-group" >
                            <label class="col-sm-3 control-label">Subtotal</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control"  id="subTotal" name="subTotal" placeholder="" readonly="">
                             </div>
                        </div>
                       
                        <div class="form-group m-b-0">
                            <div class="col-sm-offset-3 col-sm-9">
                              <button type="submit" class="btn btn-info waves-effect waves-light" >Submit</button>
                            </div>
                        </div>
                    </div> 
                </form>  
            </div> 
                 <div class="card-box table-responsive">
            <table id="" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    
                    <th>Subtotal</th>
                    <th>Aksi</th>


                    
                </tr>
                </thead>


                <tbody>
                <?php
                $no = 1;
                foreach($query->result() as $row) {
                    echo"<tr>
                    <td>".$no."</td>
                    <td>".$row->namaBarang."</td>
                    <td>".number_format($row->hargaBeli, 0, ',', '.')."</td>
                    <td>".$row->jumlah."</td>
                    <td>".number_format($row->subTotal, 0, ',', '.')."</td>
                    <td>
                    <a href='#' class ='on-default remove-row btn btn-danger' data-toggle='modal' data-target='#delete-modal'onClick=
                    \"SetInputs(
                    '".$row->idDetail."'
                    )\"><i class ='fa fa-trash'></i></a>
                    </td>
                </tr>";$no++;
                }
                ?>
                </tbody>
                
            </table>
            <div class="col-md-5">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Total Harga </label>
                        <div class="col-sm-4">
                         <?php
                        $sum=0;
                        foreach ($query->result_array() as $row ) {
                            $sum += str_replace(",", "" , $row['subTotal']);
                        }
                        $total = number_format($sum, 0, ',', '.');
                        
                        ?>
                          <input type="text" class="form-control" id="total" name="total" readonly="" value="<?php echo $total; ?>" >
                          <input type="hidden" class="form-control" id="sum" name="sum"  readonly="" value="<?php echo $sum; ?>" >
                        </div>
                    </div>
                    </div>
                    
                </form>
            </div>           
        </div>
    </div>
</div>
<!-- end row -->



<div id="delete-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog" style="width:55%;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title" id="custom-width-modalLabel">Konfirmasi Hapus</h4>
                                                    </div>
                                                    <form action="<?php echo base_url(). 'detailPembelian/delete'; ?>" method="post" class="form-horizontal" role="form">
                                                    <div class="modal-body">
                                                        <p>Apakah anda yakin ingin menghapus?</p>
                                                            <div>
                                                                <input type="hidden" id="idLink" name="idLink"> 
                                                                <input type="hidden" id="idDetail2" name="idDetail2" value="<?php echo $idPembelian; ?>">
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
    function SetInputs(idDetail,idPembelian, namaBarang, hargaBeli, Jumlah, subTotal){
         $('#idLink').val(<?php echo $_GET['id']; ?>);
        document.getElementById('idDetail2').value = idDetail;
        document.getElementById('namaBarang2').value = namaBarang;
        document.getElementById('hargaBeli2').value = hargaBeli;
        document.getElementById('jumlah2').value = jumlah;
        document.getElementById('subTotal2').value = subTotal;
    }



</script>
