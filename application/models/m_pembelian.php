<?php
class M_pembelian extends CI_Model{
	
	function tampil_data(){
		return $this->db->query("SELECT * FROM pembelian");
	}


	function tambah_data(){
		$data = array(
			'tanggal' => $this->input->post('tanggal'),
			'nama_suplier' => $this->input->post('nama_suplier'),
			
		);
		$this->db->insert('pembelian', $data);
		redirect('../pembelian');
	}

	function ubah_data ($idPembelian){
		$data = array(
			'tanggal' => $this->input->post('tanggal'),
			'nama_suplier' => $this->input->post('nama_suplier'),
			
			
			
		   );
			$this->db->where(array('idPembelian'=> $idPembelian));
			$this->db->update('pembelian',$data);
			redirect('../pembelian');
	}


	function addDetail (){
		$data = array(
			'idPembelian' => $this->input->post('idPembelian'),
			'idBarang' => $this->input->post('idBarang'),
			'jumlah' => $this->input->post('jumlah'),
			'hargaBeli' => $this->input->post('hargaBeli'),
			'subTotal' => $this->input->post('subTotal'),
			
			
		   );
			
			$this->db->insert('detailPembelian',$data);
			redirect('../detailPembelian?id =' ,$this->input->post('idPembelian'));
	}

	function hapus_data($idPembelian){
		$this->db->where(array('idPembelian'=> $idPembelian));
	//	delete(detailPembelian.idPembelian==detailPembelian.idPembelian);
		$this->db->delete('pembelian');
		redirect('../pembelian');
	}
}
?>