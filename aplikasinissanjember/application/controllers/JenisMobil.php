<?php
class JenisMobil extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_kategori');
    }
    function jenis_mobil(){
        $x['data']=$this->m_kategori->get_jenis_mobil();
        $this->load->view('v_kategori',$x);
    }
 
    function get_type_mobil(){
        $id=$this->input->post('id');
        $data=$this->m_kategori->get_type_mobil($id);
        echo json_encode($data);
    }
}