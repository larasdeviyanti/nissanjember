<?php

class ModelDataDaftarService extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this ->load ->database();
	}

	function insert_data_daftarservice($data){ 
        $this->db->insert('tb_daftar_service', $data);
    }

	public function get_data_daftarservice(){
	$this->db->select('*'); 
    $this->db->from('tb_daftar_service'); 
    $this->db->join('tb_user', 'tb_daftar_service.id_user = tb_user.id_user', 'inner');
    $data = $this->db->get(); 
    return $data->result(); 
	}

	public function get_noantri($tgl){
	$this->db->select('MAX(no_antri)+1 as no_antri'); 
    $this->db->from('tb_daftar_service'); 
	$this->db->like('tgl_service',$tgl,'both');
    return $this->db->get(); 
	}


	public function get_cekmobil($tgl,$jenismobil){
	$this->db->select('*'); 
    $this->db->from('tb_daftar_service'); 
	$this->db->like('tgl_service',$tgl,'both');
	$this->db->where('jenismobil',$jenismobil);
	
    return $this->db->get(); 
	}



	public function get_data_daftarservice_byid($id){
        $this->db->select('*'); 
	    $this->db->from('tb_daftar_service'); 
    	$this->db->join('tb_user', 'tb_daftar_service.id_user = tb_user.id_user', 'inner');
		$this->db->where('id_daftar_service',$id);

		$query = $this ->db ->get();

		return $query;
	}

	public function update_data_daftarservice($id,$data){
            $this->db->where('id_daftar_service', $id);
            $this->db->update('tb_daftar_service', $data);
	}

	

}

?>