<?php
class Beranda extends CI_Controller{
	public function index(){
		$data = array(
            "menu"      => "MenuAdmin",
            "panelbody" => "admin/Beranda"
        );
        $this->load->view('panelbody', $data);
	}
}
?>