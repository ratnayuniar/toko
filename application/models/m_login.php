<?php
    class m_login extends CI_Model{


        function cek_login($table, $where){
            return $this->db->get_where($table, $where);
        }

        function data_login(){
		return $this->db->get('pengguna');
	}

	

	function tambah_data(){
		$data = array(
			
			'idPegawai' => $this->input->post('idPegawai'),
			'username' => $this->input->post('username'),
			'passPengguna' => md5($this->input->post('passPengguna')),
			'level' => $this->input->post('level'),
			'statusUser' => $this->input->post('statusUser'),
			
		);
		$this->db->insert('pengguna', $data);
		redirect('../pengguna');
	}

	function ubah_data ($idPengguna){
		$data = array(
			
			'idPegawai' => $this->input->post('idPegawai'),
			'username' => $this->input->post('username'),
			'passPengguna' => md5($this->input->post('passPengguna')),
			'level' => $this->input->post('level'),
			'statusUser' => $this->input->post('statusUser'),
			
			
		   );
			$this->db->where(array('idPengguna'=> $idPengguna));
			$this->db->update('pengguna',$data);
			redirect('../pengguna');
	}

	function hapus_data($idPengguna){
		$this->db->where(array('idPengguna'=> $idPengguna));
		$this->db->delete('pengguna');
		redirect('../pengguna');
	}
    }
?>