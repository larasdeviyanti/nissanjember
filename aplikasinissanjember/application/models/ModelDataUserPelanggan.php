<?php

class ModelDataUserPelanggan extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this ->load ->database();
	}

	function insert_data_pelanggan($data){ 
        $this->db->insert('tb_user', $data);
    }

    function insert_data_mobil_pelanggan($data){ 
        $this->db->insert('tb_mobil', $data);
    }
	
	
	public function get_data_user(){
	$this->db->select('*'); 
    $this->db->from('tb_user');
    $data = $this->db->get(); 
    return $data->result(); 
	}
	

	public function get_data_pelanggan_byid($id){
        $this->db->select('*'); 
	    $this->db->from('tb_user'); 
		$this->db->where('id_user',$id);
		$query = $this ->db ->get();

		return $query;
	}

	public function get_data_pelanggan_byidnoplat($id,$noplat){
        $this->db->select('*'); 
	    $this->db->from('tb_user'); 
		$this->db->where('id_user',$id);
		$this->db->where('no_plat',$noplat);
		$query = $this ->db ->get();

		return $query;
	}

	public function get_data_pelanggan_mobil_byid($id){
        $query="select * from tb_mobil where id_user='$id'";
        $q=$this->db->query($query);
        if($q->num_rows()>0){
            foreach ($q->result() as $row) {
                $data[]=$row;
            }
            return $data;
        }
	}

	public function get_data_pelanggan_mobil_byidnoplat($id,$noplat){
        $query="select * from tb_mobil where id_user='$id' AND no_plat ='$noplat'";
        $q=$this->db->query($query);
        if($q->num_rows()>0){
            foreach ($q->result() as $row) {
                $data[]=$row;
            }
            return $data;
        }
	}

	public function get_data_mobilpelanggan_byid($id){
        $this->db->select('*'); 
	    $this->db->from('tb_mobil'); 
		$this->db->where('id_user',$id);
		$query = $this ->db ->get();

		return $query;
	}

	public function update_data_pelanggan($id,$data){
            $this->db->where('id_user', $id);
            $this->db->update('tb_user', $data);
	}

	function delete_mobil_byiduser($id_user){
        $this->db->where('id_user', $id_user);
        $this->db->delete('tb_mobil');   
    }
	
	function insert_data_jenismobil($data){ 
        $this->db->insert('tb_jenis_mobil', $data);
    }
	
	function get_jenismobil(){
		$hasil=$this->db->query("SELECT * FROM tb_jenis_mobil");
		return $hasil;
	}

	public function get_data_type_byid($id){
        $query="select * from tb_type_mobil where id_type_jenis='$id'";
        $q=$this->db->query($query);
        if($q->num_rows()>0){
            foreach ($q->result() as $row) {
                $data[]=$row;
            }
            return $data;
        }
	}

}

?>