<?php

Class Select extends CI_Controller

{

	function __construct(){
	parent::__construct();
		$this->load->database();
		$this->load->helper(array('url'));
		$this->load->model('model_select');
	}


	function index(){
		$data['jenis_mobil']=$this->model_select->jenis_mobil();
		$this->load->view('view_select',$data);
	}

	function ambil_data(){
	}

}