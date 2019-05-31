<?php if(! defined('BASEPATH')) exit('Akses langsung tidak diperbolehkan'); 
class Dashboard extends CI_Controller{
	function __construct()
	{
		parent::__construct();
	$this->load->model('ModelLogin');	
}
function index()
{
	$ambil_akun = $this->ModelLogin->ambil_user($this->session->userdata('nama'));
	$data = array(
		'user'=>$ambil_akun,
		);
		$stat = $this->session->userdata('lvl');
		if($stat=='Admin'){
			$this->load->view('Beranda',$data);
		}
		else if($stat=='Mekanik'){
			$this->load->view('Beranda',$data);
		}else{	
		}
		$this->load->view('Login');
	}
	
	function login()
	{
		$session = $this->session->userdata('isLogin');
		if($session==FALSE)
	{
		$this->load->view('public/homeLogin');
	}else
	{
		redirect('dashboard');
	}
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect('login','refresh');
	}
}

?>