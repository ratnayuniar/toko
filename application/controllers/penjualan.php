<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_pegawai');
		$this->load->model('m_penjualan');
		$this->load->helper('tanggal_helper');
		$this->load->helper('url');
	}

	public function index() {
		$data['query'] = $this->m_penjualan->tampil_data();

		$this->load->view('header', $data);
		$this->load->view('transaksi/penjualan', $data);
		$this->load->view('footer', $data);
	}

	public function add(){
		 $idPenjualan = $this->input->post('idPenjualan');
        $this->m_penjualan->tambah_data();   
	}

	public function add_nota(){
		 $idPenjualan = $this->input->post('idPenjualan');
        $this->m_penjualan->tambah_nota();   
	}

	public function delete(){
		$idPenjualan= $this->input->post('idPenjualan2');
		$this->m_penjualan->hapus_data($idPenjualan);
	}
}
?>