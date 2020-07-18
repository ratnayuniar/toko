<?php
class M_penjualan extends CI_Model{
	function tampil_data(){
		return $this->db->query("SELECT * FROM penjualan");
	}

	function tambah_data(){
		$data = array(
			'tanggal' => $this->input->post('tanggal'),
			'nama_pelanggan' => $this->input->post('nama_pelanggan'),
		);
		$this->db->insert('penjualan', $data);
		redirect('../penjualan');
	}

	function ubah_data ($idPenjualan){
		$data = array(
			'tanggal' => $this->input->post('tanggal'),
			'nama_pelanggan' => $this->input->post('nama_pelanggan'),
		   );
			$this->db->where(array('idPenjualan'=> $idPenjualan));
			$this->db->update('penjualan',$data);
			redirect('../penjualan');
	}

	function hapus_data($idPenjualan){
		$this->db->where(array('idPenjualan'=> $idPenjualan));
		$this->db->delete('penjualan');
		redirect('../penjualan');
	}
}
?>