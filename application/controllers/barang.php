<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

    function __construct(){
        parent:: __construct();
        $this->load->model('m_barang');
        $this->load->helper('url');
    }
    
    public function index()
    {
         $data['barang']=$this->m_barang->GetBarang();
        $this->load->view('header');
        $this->load->view('barang',$data);
        $this->load->view('footer');
 
    }

    public function tambah_aksi(){
        $namaBarang   =$this->input->post('namaBarang');
        $stokBarang   =$this->input->post('stokBarang');
        $hargaJual   =$this->input->post('hargaJual');
        $hargaBeli   =$this->input->post('hargaBeli');
        $jenis_satuan   =$this->input->post('jenis_satuan');
        $gambar_barang           =$_FILES['gambar_barang'];
        if ($gambar_barang=''){}else{
            $config['upload_path']      ='./upload/barang';
            $config['allowed_types']    ='jpg|png|gif';

            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('gambar_barang')){
                echo "Upload gagal" ; die();
            }else{
                $gambar_barang=$this->upload->data('file_name');
            }
        }

        $data = array(
            'namaBarang'      =>$namaBarang,
            'stokBarang'      =>$stokBarang,
            'hargaJual'      =>$hargaJual,
            'hargaBeli'      =>$hargaBeli,
            'jenis_satuan'      =>$jenis_satuan,
            'gambar_barang'              =>$gambar_barang
        );

        $this->m_barang->input_data($data, 'barang');
        redirect('barang/index');
    }

    public function hapus($idBarang){
        $where = array('idBarang'=>$idBarang);
        $this->m_barang->hapus_data2($where, 'barang');
        redirect('barang/index');
    }

    public function edit($idBarang){
        $where= array('idBarang' =>$idBarang);
        $data['barang'] = $this->m_barang->edit_data($where,'barang')->result();
        $this->load->view('header');
        $this->load->view('master_data/edit_barang',$data);
        $this->load->view('footer');

    }

    public function update(){
        $idBarang= $this->input->post('idBarang');
        $namaBarang= $this->input->post('namaBarang');
        $stokBarang= $this->input->post('stokBarang');
        $hargaBeli= $this->input->post('hargaBeli');

        $data=array(
            'namaBarang' =>$namaBarang,
            'stokBarang' =>$stokBarang,
            'hargaBeli' =>$hargaBeli

        );
        $where=array(
            'idBarang'=>$idBarang
        );

        $this->m_barang->update_data($where,$data,'barang');
        redirect('barang/index');
    }
}
