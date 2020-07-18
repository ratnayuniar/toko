<?php
class M_pegawai extends CI_Model{
	function tampil_data(){
		return $this->db->get('infowisata');
	}

	function tambah_data(){
		$data = array(
			'nama_wisata' => $this->input->post('nama_wisata'),
			'deskripsi' => $this->input->post('deskripsi'),
			'gambar_wisata' => $this->input->post('gambar_wisata'),
		);
		$this->db->insert('infowisata', $data);
		redirect('../pegawai');
	}

	function ubah_data ($idinfoWisata){
		$data = array(
			'nama_wisata' => $this->input->post('nama_wisata'),
			'deskripsi' => $this->input->post('deskripsi'),
			'gambar_wisata' => $this->input->post('gambar_wisata')
		   );
			$this->db->where(array('idinfoWisata'=> $idinfoWisata));
			$this->db->update('idinfoWisata',$data);
			redirect('../pegawai');
	}

	function hapus_data($idinfoWisata){
		$this->db->where(array('idinfoWisata'=> $idinfoWisata));
		$this->db->delete('idinfoWisata');
		redirect('../pegawai');
	}
}