<?php

class ModelDataUserMekanik extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this ->load ->database();
	}

	function insert_data_mekanik($data){ 
        $this->db->insert('tb_user_mekanik', $data);
    }

	public function get_data_user(){
	$this->db->select('*'); 
    $this->db->from('tb_user_mekanik');
    $this->db->where('id_user_mekanik !=','0');
    $data = $this->db->get(); 
    return $data->result(); 
	}

	public function get_data_mekanik_byid($id){
        $this->db->select('*'); 
	    $this->db->from('tb_user_mekanik'); 
		$this->db->where('id_user_mekanik',$id);

		$query = $this ->db ->get();

		return $query;
	}

	public function update_data_mekanik($id,$data){
            $this->db->where('id_user_mekanik', $id);
            $this->db->update('tb_user_mekanik', $data);
	}

}

?>