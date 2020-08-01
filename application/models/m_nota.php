<?php
class M_nota extends CI_Model{
    
    function tampil_data(){
        return $this->db->query("SELECT * FROM penjualan, nota 
            WHERE penjualan.idPenjualan=nota.idPenjualan ORDER BY idNota DESC LIMIT 1" );
    }

    function tambah_data(){
        $data = array(

            'idPenjualan' => $this->input->post('idPenjualan'),
            'total' => $this->input->post('total'),
            'bayar' => $this->input->post('bayar'),
            'kembali' => $this->input->post('kembali'),
        );
        $this->db->insert('nota', $data);
        redirect('../nota?id='.$data['idPenjualan']);
    }

    function ubah_data ($idNota){
        $data = array(
            'total' => $this->input->post('total'),
            'bayar' => $this->input->post('bayar'),
            'kembali' => $this->input->post('kembali'),

           );
            $this->db->where(array('idNota'=> $idNota));
            $this->db->update('nota',$data);
            redirect('../nota');
    }

    function hapus_data($idNota){
        $this->db->where(array('idNota'=> $idNota));
        $this->db->delete('nota');
        redirect('../nota');
    }

    public function detail_data($idNota=NULL){
        $query=$this->db->get_where('nota',array('idNota'=>$idNota))->row();
        return $query;
    }
}
?>