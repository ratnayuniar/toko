<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class detailPembelian extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_pembelian');
		$this->load->model('m_barang');
		$this->load->model('m_detailPembelian');
		$this->load->helper('url');
		
	}

	public function index() {
		$data['idPembelian'] = $this->input->get('id');
		$data['query'] = $this->m_detailPembelian->tampil_data($data['idPembelian']);

		$this->load->view('header', $data);
		$this->load->view('transaksi/detailPembelian', $data);
		$this->load->view('footer', $data);
	}

	public function add(){
		$this->m_detailPembelian->tambah_data();
	}

	public function delete(){
		$idDetail= $this->input->post('idDetail2');
		$this->m_detailPembelian->hapus_data($idDetail);
	}
}
?>