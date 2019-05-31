<?php

Class Login extends CI_Controller{

	public function __construct(){
		
		parent::__construct();
		$this ->load ->model('ModelLogin');
		$this ->load ->model('ModelUi');

	}

    public function index(){
        $this ->load->view('public/homeLogin');
    }

    public function prosesLogin(){

    	$user = $this ->input ->post('username');
    	$pass = $this ->input ->post('pass');

    	if($user=='admin' && $pass=='admin'){
    		$this ->session ->set_userdata('logon', true);
    			redirect('Beranda');
	    }elseif($user=='kepala' && $pass=='kepala'){
            $this ->session ->set_userdata('logon', true);
                redirect('Beranda');
        }


        else{
	    
    			$this ->session ->set_flashdata('msg', $this ->ModelUi ->alert('Username atau password anda salah !','danger'));
    			redirect('login');
    	}

    }

    public function logout(){

    	$this ->session ->sess_destroy();
    	redirect(base_url("login"));
    }

    public function loginadmin(){
  {
    $username = $this->input->post('username',true);
    $password = $this->input->post('pass',true);

     $query = "SELECT * FROM login where username='$username' ";
        $row = $this->db->query($query)->row();
        $level  = $row->level;
        $id     = $row->id_login;
        

   
    $akun = $this->ModelLogin->Ceklogin($username,$password);
        $temp_account = count($akun);
         if( $level == "Admin" ){
        if ($temp_account > 0)
        {
            $data = array(

                            'username' => $akun->username,
                            'password' => $akun->password,
                            'id_login' => $id,
                            // 'status'=> "login"
            );
            
            $this->session->set_userdata($data);
            redirect(base_url("Beranda/"));
    } 

    else{
        
                $this ->session ->set_flashdata('msg', $this ->ModelUi ->alert('Username atau password anda salah !','danger'));
                redirect('login');
        }

    }

    elseif( $level == "Mekanik" ) {
    if ($temp_account > 0)
        {
            $data = array(
                            'username' => $akun->username,
                            'password' => $akun->password,
                            'id_login' => $id,
                            // 'status'=> "login"
            );
            
            $this->session->set_userdata($data);
            redirect(base_url("Beranda/"));
    }
    else{
        
                $this ->session ->set_flashdata('msg', $this ->ModelUi ->alert('Username atau password anda salah !','danger'));
                redirect('login');
        }
    }
    else{
        
                $this ->session ->set_flashdata('msg', $this ->ModelUi ->alert('Username atau password anda salah !','danger'));
                redirect('login');
        }
  }
}

}