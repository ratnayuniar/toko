<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nota extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_nota'); 
		$this->load->model('m_penjualan');
		$this->load->helper('tanggal_helper');
		$this->load->helper('url');
	}

	public function index() {
		$data['idPenjualan'] = $this->input->get('id');
		$data['query'] = $this->m_nota->tampil_data();

		$this->load->view('header', $data);
		$this->load->view('transaksi/nota', $data);
		$this->load->view('footer', $data);
	}

	public function add(){
        $this->m_nota->tambah_data();   
	}

	public function delete(){
		$idNota= $this->input->post('idNota2');
		$this->m_nota->hapus_data($idNota);
	}

	public function detail($idNota){
        $this->load->model('M_nota');
        $detail=$this->M_nota->detail_data($idNota);
        $data['detail'] =$detail;
        $this->load->view('header(string)');
        $this->load->view('transaksi/nota',$data);
        $this->load->view('footer');

    }
}
?>