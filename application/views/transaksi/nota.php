<section class="content">
<div class="row">
<div class="col-md-6">
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Nota Belanja</h3>
            </div>

            <table id="" class="table table-striped table-bordered">
               
                 <?php
                $no = 1;
                foreach($query->result() as $row) {
                    echo"
                    <tr>
                      <th>Nama Pelanggan</th>
                      <td>".$row->nama_pelanggan."</td>
                    </tr>
                    <tr>
                      <th>Tanggal</th>
                      <td>".$row->tanggal."</td>
                    </tr>
                    <tr>
                      <th>Total</th>
                      <td>".$row->total."000</td>
                    </tr>
                    <tr>
                      <th>Bayar</th>
                      <td>".$row->bayar."</td>
                    </tr>
                     <tr>
                      <th>Kembali</th>
                      <td>".$row->kembali."000</td>
                    </tr>
                   ";$no++;
                }
                ?>
            </table> 
              <div class="box-body">
                <a href="<?php echo base_url(). 'notapdf'; ?>" class="on-default edit-row btn btn-primary" ><i class ='fa fa-print'></i>       Cetak Nota</a>
              </div> 
               
          </div>
        </div>
      </div>
    </section>