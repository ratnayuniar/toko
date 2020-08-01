<section class="content-header">
      <h1>
        Stok Barang
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()?>admin/#"><i class="fa fa-dashboard"></i> Beranda</a></li>
      </ol>
</section>

<section class="content">
                             
                <!--<div class="alert alert-danger">
                 <strong>
                     <?php
                        $barang = $this->db->query("SELECT * FROM barang WHERE stokBarang <= '5'");
                        $no = $barang->num_rows();
                        if($no>0){
                        echo "Ada $no Barang Yang Stoknya Menipis, Silahkan diperiksa";
                        }
                     ?>
                 </strong>
                </div>-->
        <div class="row">
                                      
                   <?php
                    $barang = $this->db->query("SELECT * FROM barang ");
                    $no = $barang->num_rows();
                    if($no>0){
                        foreach($barang->result() as $row){
                    ?>  
                    <div class="col-lg-3 col-xs-6">
                           <!-- <div class="col-md-6 col-sm-6 col-lg-4">-->
                    <div class="small-box bg-red">
                    <div class="inner">
                    <h3><?php echo $row->stokBarang;?>       
                    <span><?php echo $row->jenis_satuan;?></span>     
                    </h3>

                        <p><?php echo $row->namaBarang; ?></p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="<?php echo base_url()?>admin/#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    </div>
                            <?php
                        }
                    }
                    ?>    
                </div>

                <div class="row">
        <!-- Left col -->
                <section class="col-lg-7 connectedSortable">
                </section>
                 <section class="col-lg-5 connectedSortable">
                 </section>
             </div>
            </section>
        </div>
<!-- ==============================

    ================================ -->
<!-- End Right content here -->
<!-- ============================================================== -->