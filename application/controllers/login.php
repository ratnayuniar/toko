<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
	}

	public function index(){
		$this->load->view('login');
	}
	function aksi_login(){
		$username = $this->input->post('username');
		$passPengguna = $this->input->post('passPengguna');
		$where = array(
			'username' => $username,
			'passPengguna' => md5($passPengguna)
		);
		$cek = $this->m_login->cek_login("pengguna", $where);
		if($cek->num_rows() > 0){
			foreach ($cek->result() as $row ) {
				
			$data_session = array(
			'username' => $username,
			 'status' => "Aktif",
			 'id' => $row->idPengguna,
			 'level' => $row->level);

			}
			$this->session->set_userdata($data_session);
			redirect(base_url('beranda'));
		}else{
			echo '<script language="javascript">';
			echo 'alert("username / passPengguna Salah!");';
			echo 'window.location = "../login";</script>';
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
