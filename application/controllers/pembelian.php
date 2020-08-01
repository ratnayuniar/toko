<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian extends CI_Controller {
    function __construct(){
        parent::__construct();      
            $this->load->model('m_pembelian');
            $this->load->helper('url');
            $this->load->helper('tanggal_helper');
    }
   
    public function index() {
        $data['query'] = $this->m_pembelian->tampil_data();
       
        $this->load->view('header', $data);
        $this->load->view('transaksi/pembelian', $data);
        $this->load->view('footer', $data);
    }

    public function add(){
        $idPembelian = $this->input->post('idPembelian');
        $this->m_pembelian->tambah_data();        
    }

    public function delete(){
        $idPembelian = $this->input->post('idPembelian2');
        $this->m_pembelian->hapus_data($idPembelian);
    }
}
