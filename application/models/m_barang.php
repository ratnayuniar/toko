<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model {

	public function tampil_data(){
		return $this->db->get('barang');
	}

	public function input_data($data){
		$this->db->insert('barang',$data);
	}

	public function GetBarang()
	{
		$barang= $this->db->query('SELECT * FROM `barang` WHERE 1');
		return $barang;
	}

	function tambah_data() {
		$data = array (
			'namaBarang' => $this->input->post('namaBarang'),
			'stokBarang' => $this->input->post('stokBarang'),
			'hargaJual' => $this->input->post('hargaJual'),
			'hargaBeli' => $this->input->post('hargaBeli'),
			'jenis_satuan' => $this->input->post('jenis_satuan'),
			'gambarGaleri' => $this->input->post('gambarGaleri')
		);

		$this->db->insert('barang',$data);
		redirect('../barang');
	}

	function ubah_data($namaBarang){
		$data = array (
			'namaBarang'=>$this->input->post('namaBarang'),
			'gambarGaleri'=>$this->input->post('gambarGaleri'),
			'hargaJual' => $this->input->post('hargaJual'),
			'hargaBeli' => $this->input->post('hargaBeli'),
			'jenis_satuan' => $this->input->post('jenis_satuan'),
		);
		$this->db->where(array ('namaBarang'=>$namaBarang));
		$this->db->update('barang',$data);
		redirect('../barang');
	}

	function hapus_data($namaBarang){
        $this->db->where(array('namaBarang' => $namaBarang));
        $this->db->delete('barang');
    	redirect('../barang');
    }

	 function cek_galeri($namaBarang) {
		$query = array('namaBarang' => $namaBarang);
		return $this->db->get_where('barang', $query);
	}

	public function hapus_data2($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	
}