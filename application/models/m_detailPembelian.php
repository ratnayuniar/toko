<?php
class M_detailpembelian extends CI_Model {
    
    function tampil_data($idPembelian) {
        return $this->db->query("SELECT * FROM barang, pembelian, detailpembelian 
            WHERE barang.idBarang=detailpembelian.idBarang AND 
            pembelian.idPembelian=detailpembelian.idPembelian AND 
            pembelian.idPembelian='".$idPembelian."'");

    }
   
    function tambah_data() {
        $data = array(
            'idPembelian' => $this->input->post('idPembelian'),
            'idBarang' => $this->input->post('idBarang'),
            'hargaBeli' => $this->input->post('hargaBeli'),
            'jumlah' => $this->input->post('jumlah'),
            'subTotal' => $this->input->post('subTotal')
        );

        $this->db->insert('detailpembelian',$data);
        $this->set_total($data['idPembelian']);

        redirect('../detailpembelian?id='.$data['idPembelian']);
    }

    function set_total($idPembelian){
        $query = $this->db->query("SELECT SUM(subTotal) AS total FROM detailpembelian 
            WHERE idPembelian='".$idPembelian."'");

        foreach($query->result() as $row) {
            $data = array(
                'total' => $row->total                
            );

        }
        $this->db->where(array('idPembelian'=> $idPembelian));
        $this->db->update('pembelian', $data);
    }
   
    function hapus_data($idDetail){
        
        $this->db->where(array('idDetail' => $idDetail));
        $this->db->delete('detailpembelian');
        $this->set_total($this->input->post('idLink'));
         redirect('../detailpembelian?id='.$this->input->post('idLink'));
    }
}