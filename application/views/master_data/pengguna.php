                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title m-b-30"><b>Data Pengguna</b></h4>

                            <div style="width:100%; text-align:right; margin-bottom:10px;">
                                <a href="#" class="on-default edit-row btn btn-success" data-toggle="modal" data-target="#custom-width-modal"><i class="fa fa-plus"></i></a>

                            </div>
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Level</th>
                                    <th>Status User</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>


                                <tbody>
                                <?php 
                                    $no = 1;
                                    foreach($query->result() as $row){
                                echo "<tr>
                                <td>".$no."</td>
                                
                                <td>".$row->username."</td>
                                <td>*********************</td>
                                <td>".$row->level."</td>
                                <td>".$row->statusUser."</td>
                                
                                <td><a href ='#' class ='on-default edit-row btn btn-primary' data-toggle='modal' data-target='#custom-width-modal' onClick=\"SetInput( '".$row->idPegawai."', '".$row->idPengguna."','".$row->username."','".$row->passPengguna."','".$row->level."','".$row->statusUser."')\"><i class ='fa fa-pencil'></i></a>
                                    <a href ='#' class ='on-default remove-row btn btn-danger' data-toggle='modal' data-target='#delete-modal'onClick=\"SetInputs('".$row->idPegawai."', '".$row->idPengguna."','".$row->username."','".$row->passPengguna."','".$row->level."', '".$row->statusUser."')\"><i class ='fa fa-trash'></i></a>
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
                <h4 class="modal-title" id="custom-width-modalLabel">Data Pengguna</h4>
            </div>
        <form action="<?php echo base_url(). 'pengguna/add'; ?>" method="post" class="form-horizontal" role="form">
            <div class="modal-body"> 
                        <div class="form-group">
                        <label class="col-md-3 control-label">Pegawai</label>
                        <div class="col-md-4">
                            <select class="selectpicker" data-live-search="true"  data-style="btn-white" id="idPegawai" name="idPegawai" required>
                            <?php
                            $query = $this->m_pegawai->tampil_data();
                            foreach($query->result() as $row) {
                                echo "<option value='".$row->idPegawai."'>".$row->namaPegawai."</option>";
                            }
                            ?>
                            </select>
                        </div>
                    </div>                                   
                    <div class="form-group">
                        <input type="hidden" id="idPengguna" name="idPengguna">
                        <label class="col-md-3 control-label">Username</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                    </div>     
                    
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label">Password</label>
                        <div class="col-md-4">
                            <input type="password"  class="form-control"  id="passPengguna" name="passPengguna" required>
                        </div>
                    </div>     
                     <div class="form-group">
                        <label class="col-md-3 control-label">Level</label>
                        <div class="col-md-4">
                            <select  type="text" class="form-control" id="level" name="level" >
                                <option>Admin</option>
                                <option>Karyawan</option>
                            </select>
                        </div>
                    </div>    
                     <div class="form-group">
                        <label class="col-md-3 control-label">Status</label>
                        <div class="col-md-4">
                            <select type="text" class="form-control" id="statusUser" name="statusUser" >
                             <option>Aktif</option>
                            <option>Tidak Aktif</option>   
                            </select> 
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
                                                    <form action="<?php echo base_url(). 'pengguna/delete'; ?>" method="post" class="form-horizontal" role="form">
                                                    <div class="modal-body">
                                                        <p>Apakah anda yakin ingin menghapus?</p>
                                                            <div>
                                                                <input type="hidden" id="idPengguna2" name="idPengguna2">
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
    function SetInput(idPegawai, idPengguna, username, passPengguna, level, statusUser){
       idPegawai
        document.getElementById('idPegawai').value = idPegawai;
        document.getElementById('idPengguna').value = idPengguna;
        document.getElementById('username').value = username;
        document.getElementById('passPengguna').value = passPengguna;
        document.getElementById('level').value = level;
        document.getElementById('statusUser').value = statusUser;
        
    }
    function SetInputs(idPegawai, idPengguna, username, passPengguna, level, statusUser){
        
        document.getElementById('idPengguna2').value = idPengguna;
        document.getElementById('username2').value = username;
        document.getElementById('passPengguna2').value = passPengguna;
        document.getElementById('level2').value = level;
         document.getElementById('statusUser2').value = statusUser;
        
    }

    function ResetInput(idPegawai, idPengguna, username, passPengguna, level, statusUser){
        
        document.getElementById('idPegawai').value = "";
        document.getElementById('idPengguna').value = "";
        document.getElementById('username').value = "";
        document.getElementById('passPengguna').value = "";
        document.getElementById('level').value = "";
         document.getElementById('statusUser').value = "";
        
    }
</script>