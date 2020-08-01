<?php
class M_detailpenjualan extends CI_Model {
    
    function tampil_data($idPenjualan) {
        return $this->db->query("SELECT * FROM barang, penjualan, detailpenjualan 
            WHERE barang.idBarang=detailpenjualan.idBarang AND 
            penjualan.idPenjualan=detailpenjualan.idPenjualan AND 
            penjualan.idPenjualan='".$idPenjualan."'");

    }
   
    function tambah_data() {
        $data = array(
            'idPenjualan' => $this->input->post('idPenjualan'),
            'idBarang' => $this->input->post('idBarang'),
            'hargaJual' => $this->input->post('hargaJual'),
            'jumlah' => $this->input->post('jumlah'),
            'subTotal' => $this->input->post('subTotal')
        );

        $this->db->insert('detailpenjualan',$data);
        $this->set_total($data['idPenjualan']);

        redirect('../detailPenjualan?id='.$data['idPenjualan']);
    }

    function set_total($idPenjualan){
        $query = $this->db->query("SELECT SUM(subTotal) AS total FROM detailpenjualan 
            WHERE idPenjualan='".$idPenjualan."'");

        foreach($query->result() as $row) {
            $data = array(
                'total' => $row->total                
            );

        }
        $this->db->where(array('idPenjualan'=> $idPenjualan));
        $this->db->update('penjualan', $data);
    }
   
    function hapus_data($idDetail){
        
        $this->db->where(array('idDetail' => $idDetail));
        $this->db->delete('detailpenjualan');
        $this->set_total($this->input->post('idLink'));
        redirect('../detailpenjualan?id='.$this->input->post('idLink'));
    }
}
?>
