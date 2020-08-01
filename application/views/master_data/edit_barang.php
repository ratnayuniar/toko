
	<section class="content-header">
    <h1>
      Edit Data Barang
      <small>Toko Kelontong</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Master Data</a></li>
        <li><a href="#">Data Barang</a></li>
      </ol>
  </section>
	<section class="content">
		<div class="row">
        <div class="col-xs-12">
        	<div class="box">
        		<div class="box-header">
        		</div>
        		<div class="box-body">
		<?php foreach($barang as $row) { ?>
		<form action="<?php echo base_url().'barang/update'; ?>" method="post">
			<div class="form-group">
				<label>Nama Barang</label>
				<input type="hidden" name="idBarang" class="form-control" value="<?php echo $row->idBarang ?>">
				<input type="text" name="namaBarang" class="form-control" value="<?php echo $row->namaBarang ?>">
			</div>
			<div class="form-group">
				<label>Jumlah Barang</label>
				<input type="text" name="stokBarang" class="form-control" value="<?php echo $row->stokBarang ?>">
			</div>
			<div class="form-group">
				<label>Harga Jual</label>
				<input type="text" name="hargaJual" class="form-control" value="<?php echo $row->hargaJual ?>">
			</div>
			<div class="form-group">
				<label>Harga Beli</label>
				<input type="text" name="hargaBeli" class="form-control" value="<?php echo $row->hargaBeli ?>">
			</div>
			<div class="form-group">
				<label>Jenis Satuan</label>
				<input type="text" name="jenis_satuan" class="form-control" value="<?php echo $row->jenis_satuan ?>">
			</div>
			<button type="submit" class="btn btn-primary">Simpan</button>
		</form>
	<?php }?>
</div>
</div>
</div>
</div>
	</section>
</div>
</div>
</div>