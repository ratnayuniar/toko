<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_pegawai');
		$this->load->model('m_login');
		$this->load->helper('url');
	}

	public function index() {
		$data['query'] = $this->m_login->data_login();

		$this->load->view('header', $data);
		$this->load->view('master_data/pengguna', $data);
		$this->load->view('footer', $data);
	}

	public function add(){
		$idPengguna = $this->input->post('idPengguna');
		
		if(empty($idPengguna)) $this->m_login->tambah_data();
		else $this->m_login->ubah_data($idPengguna);
	}

	public function delete(){
		$idPengguna= $this->input->post('idPengguna2');
		$this->m_login->hapus_data($idPengguna);
	}
}
?>