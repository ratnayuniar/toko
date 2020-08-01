<!-- Page-Title -->
<?php
$barang = $this->m_barang->tampil_data();
echo "<script> var barang = ".json_encode($barang->result()).";</script>";
?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<script src="jquery-2.1.4.js"></script>
<script type="text/javascript">
    $(function(){
        $("#idBarang").change(function(){
            var displaycourse=$("#idBarang option:selected").image();
            $("#txtresults").val(displaycourse);
        })
    })
</script>
<script type="text/javascript"> 
    function SethargaBarang(){
        var idBarang = $('#idBarang').val();
       for (var i = 0; i < barang.length; i++) {
           if(idBarang == barang[i]['idBarang']){
            $('#hargaJual').val(barang[i]['hargaJual']);
            $('#gambar_barang').val(barang[i]['gambar_barang']);
            $('#diskon').val(barang[i]['diskon']);
           }
       }
       SetsubTotal();
    }

    function SetsubTotal(){
        var subTotal = ( $('#jumlah').val() * $('#hargaJual').val() );
        $('#subTotal').val(subTotal);
    }
    function setKembali(){
        var bayar = $('#bayar').val();
        localStorage.setItem("bayar", bayar);

        var kembali = $('#bayar').val() - $('#sum').val();
        localStorage.setItem("kembali", kembali);

        var number_string = kembali.toString(),
            sisa    = number_string.length % 3,
            rupiah  = number_string.substr(0, sisa),
            ribuan  = number_string.substr(sisa).match(/\d{3}/g);
        if (ribuan){
            separator   = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        $('#kembali').val(rupiah);
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
        <form action="<?php echo base_url('detailPenjualan/add'); ?>" method="post" class="form-horizontal" role="form">
            <div class="col-md-6">
                
                    <div class="form-group">
                        <input type="hidden" id="idPenjualan" name="idPenjualan"  value="<?php echo $idPenjualan; ?>">
                        <label  class="col-sm-3 control-label">Nama Barang</label>
                        <div class="col-sm-9" id="tampilan">
                            <!--COBA LAGI-->
                                   

 
                         <select class="form-control" data-live-search="true"  data-style="btn-white" onchange="SethargaBarang()" id="idBarang" name="idBarang"   required>
                            <option value="">--Nama Barang--</option>
                            <?php
                            $x = $this->m_barang->tampil_data();
                            foreach($x->result() as $row) {
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
                    <!--<div class="form-group">
                        <label  class="col-sm-3 control-label">Diskon</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="diskon" name="diskon" readonly>
                        </div>
                    </div>-->
                    
            </div>
            <div class="col-md-3">
                
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Harga</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="hargaJual" name="hargaJual" placeholder="" readonly="">
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
                          <button type="submit" class="btn btn-info waves-effect waves-light">Beli</button>
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
                    <th>Jumlah</th>     
                    <th>Harga</th> 
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
                    <td>".$row->jumlah."</td>
                    <td>".number_format($row->hargaJual, 0, ',', '.')."</td>
                    <td>".$row->subTotal."</td>
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
                <form action="<?php echo base_url(). 'nota/add'; ?>" method="post" class="form-horizontal" id="tampilan"role="form">
                    <div class="form-group">
                         <input type="hidden" id="idPenjualan" name="idPenjualan"  value="<?php echo $idPenjualan; ?>">
                        <label class="col-md-3 control-label">Total Harga </label>
                        <div class="col-sm-4">
                         <?php
                        $sum=0;
                        foreach ($query->result_array() as $row ) {
                            $sum += str_replace(",", "" , $row['subTotal']);
                        }
                        $total = number_format($sum, 0, ',', '.');
                        
                        ?>
                          <input type="number" class="form-control" id="total" name="total" readonly="" value="<?php echo $total; ?>" >
                          <input type="hidden" class="form-control" id="sum" name="sum"  readonly="" value="<?php echo $sum; ?>" >
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label">Bayar </label>
                        <div class="col-sm-4">
                        
                          <input type="number" min="0" class="form-control"  onchange="setKembali()" id="bayar" name="bayar"  >
                        </div>
                    </div>
                <div class="form-group">
                        <label for="totalHarga" class="col-sm-3 control-label">Kembalian </label>
                        <div class="col-sm-4">

                         
                          <input type="number" class="form-control" readonly="" id="kembali" name="kembali" >
                        </div>
                    </div>
                    <button name="alamat" value="berbeda" type="submit" class="btn btn-primary" >Tampilkan Nota</button>       
                
                </form>


                <div class="row" id="form-tampilan">
<div class="col-md-6">
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Nota Belanja</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal Transaksi</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Pelanggan</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Total</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" >
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Bayar</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Kembali</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" >
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>


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

                <div class="tampildata">
                    
                </div>

            </div>           
        </div>
    </div>
</div>
</section>
<!-- end row -->



<div id="delete-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog" style="width:55%;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title" id="custom-width-modalLabel">Konfirmasi Hapus</h4>
                                                    </div>
                                                    <form action="<?php echo base_url(). 'detailPenjualan/delete'; ?>" method="post" class="form-horizontal" role="form">
                                                    <div class="modal-body">
                                                        <p>Apakah anda yakin ingin menghapus?</p>
                                                            <div>
                                                                <input type="hidden" id="idLink" name="idLink"> 
                                                                <input type="hidden" id="idDetail2" name="idDetail2" value="<?php echo $idPenjualan; ?>">
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
    function SetInputs(idDetail, namaBarang, diskon, hargaBeli, Jumlah, subTotal){
        $('#idLink').val(<?php echo $_GET['id']; ?>);
        document.getElementById('idDetail2').value = idDetail;
        document.getElementById('namaBarang2').value = namaBarang;
         document.getElementById('diskon2').value = diskon;
        document.getElementById('hargaBeli2').value = hargaBeli;
        document.getElementById('jumlah2').value = jumlah;
        document.getElementById('subTotal2').value = subTotal;
        document.getElementById('kembali2').value = kembali;
        document.getElementById('bayar2').value = bayar;
    }

    



</script>

<script>
$(document).ready(function(){
$("#form-tampilan").css("display","none"); //Menghilangkan form-input ketika pertama kali dijalankan
$(".detail").click(function(){ //Memberikan even ketika class detail di klik (class detail ialah class radio button)
if ($("input[name='alamat']:checked").val() == "berbeda" ) { //Jika radio button "berbeda" dipilih maka tampilkan form-inputan
$("#form-tampilan").slideDown("fast"); //Efek Slide Down (Menampilkan Form Input)
} else {
$("#form-tampilan").slideUp("fast"); //Efek Slide Up (Menghilangkan Form Input)
}
});
});
</script>


<script type="text/javascript">
    $(document).ready(function(){
        $(".tombol-simpan").click(function(){
            var data = $('.form-user').serialize();
            $.ajax({
                type:'POST',
                url:"<?php echo base_url(). 'm_detailPenjualan/tambah_data'; ?>",
                data:data,
                success:function(data){
                  console.log(data)
                  $('#tampildata').html(data);
                }
            });
        });
    });
</script>


