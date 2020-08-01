<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class detailPenjualan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_penjualan');
		$this->load->model('m_barang');
		$this->load->model('m_detailPenjualan'); 
		$this->load->helper('url');
	}

	public function index() {
		$data['idPenjualan'] = $this->input->get('id');
		$data['query'] = $this->m_detailPenjualan->tampil_data($data['idPenjualan']);

		$this->load->view('header', $data);
		$this->load->view('transaksi/detailPenjualan', $data);
		$this->load->view('footer', $data);
	}


	public function add(){
		$this->m_detailPenjualan->tambah_data();
	}

	public function delete(){
		$idDetail= $this->input->post('idDetail2');
		$this->m_detailPenjualan->hapus_data($idDetail);
	}

	public function tambah(){
		$this->m_detailPenjualan->tambah_data2();
	}
}
?>