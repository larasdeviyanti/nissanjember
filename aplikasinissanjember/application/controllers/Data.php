<?php

Class Data extends CI_Controller{

	public function __construct(){
		
		parent::__construct();

        
        $this->load->helper(array('form','url'));
        $this ->load ->model('ModelDataDaftarService');
        $this ->load ->model('ModelDataUserPelanggan');
        $this ->load ->model('ModelDataUserMekanik');

        $this ->load ->model('ModelUi');
		if($this ->session ->userdata('logon') != true){

			redirect(base_url('login'));
		}
	}

    public function index(){
        $list = $this->ModelDataDaftarService->get_data_daftarservice();
        $data = array(
            "menu"      => "MenuAdmin",
            "panelbody" => "admin/data/data_daftarservice/index",
            "list"      => $list
        );
        $this->load->view('panelbody', $data);
        
    }
	
	
/*
===========================================================================================
==============================  DATA PELANGGAN    ============================================
--=========================================================================================
*/


    public function data_user_pelanggan(){
        $list = $this->ModelDataUserPelanggan->get_data_user();
        $data = array(
            "menu"      => "MenuAdmin",
            "panelbody" => "admin/data/data_user_pelanggan/index",
            "list"      => $list
        );
        $this->load->view('panelbody', $data);   
    }

    public function input_data_pelanggan(){
		$list = $this->ModelDataUserPelanggan->get_jenismobil();
        $data = array(
            'menu' => 'MenuAdmin',
            "panelbody" => "admin/data/data_user_pelanggan/input_data_pelanggan"
        );
        $this ->load ->view('panelbody',$data);
    }
	

    public function proses_input_data_pelanggan(){
        
        $data['nama_pengguna'] = $this->input->post('nama_pelanggan');
        $data['no_ktp'] = $this->input->post('no_ktp');
        $data['tmpt_tgl'] = $this->input->post('tmpt_tgl');
        $data['alamat'] = $this->input->post('alamat');
        $data['no_hp'] = $this->input->post('no_hp');
        $data['email'] = $this->input->post('email');
        $data['username'] = $this->input->post('username');
        $data['password'] = $this->input->post('password');
        $data['jumlah_mobil'] = $this->input->post('jumlah_mobil');

        $no_plat = $this->input->post('no_plat');    
        $jenis_mobil = $this->input->post('nama_mobil'); 
        $type = $this->input->post('type');
        $no_bpkb = $this->input->post('no_bpkb');
        $no_mesin = $this->input->post('no_mesin');
        $no_rangka = $this->input->post('no_rangka');
        $jumlah_mobil = $this->input->post('jumlah_mobil');
        
        $this->ModelDataUserPelanggan->insert_data_pelanggan($data); //memakai 
        $id_user = $this->db->query("SELECT MAX(id_user) as id_user from tb_user");
        for($i=0;$i<$jumlah_mobil;$i++){
            $datamobil['id_user']=$id_user->row()->id_user; 
            $datamobil['no_plat']=$no_plat[$i];  
            $datamobil['jenis_mobil']=$jenis_mobil[$i]; 
			$datamobil['type']=$type[$i];
			$datamobil['no_bpkb']=$no_bpkb[$i]; 
			$datamobil['no_mesin']=$no_mesin[$i];
			$datamobil['no_rangka']=$no_rangka[$i]; 
            $this->ModelDataUserPelanggan->insert_data_mobil_pelanggan($datamobil);
        }  

        redirect(site_url('Data/data_user_pelanggan'));
    }

    public function edit_data_pelanggan($id){
        $list = $this ->ModelDataUserPelanggan ->get_data_pelanggan_byid($id)->row_array();
        $datamobil = $this ->ModelDataUserPelanggan ->get_data_mobilpelanggan_byid($id)->result();
        $data = array(
            'menu' => 'MenuAdmin',
            'panelbody' => 'admin/data/data_user_pelanggan/edit_data_pelanggan',
            'list' => $list,
            'datamobil' => $datamobil
            
        );
        $this ->load ->view('panelbody',$data);
    }

    public function proses_edit_data_pelanggan(){
        $id = $this->input->post('id_user');
        $data['nama_pengguna'] = $this->input->post('nama_pelanggan');
        $data['no_ktp'] = $this->input->post('no_ktp');
        $data['tmpt_tgl'] = $this->input->post('tmpt_tgl');
        $data['alamat'] = $this->input->post('alamat');
        $data['no_hp'] = $this->input->post('no_hp');
        $data['email'] = $this->input->post('email');
        $data['username'] = $this->input->post('username');
        $data['password'] = $this->input->post('password');
        $data['jumlah_mobil'] = $this->input->post('jumlah_mobil');

        $this->ModelDataUserPelanggan->delete_mobil_byiduser($id);

        $no_plat = $this->input->post('no_plat');    
        $jenis_mobil = $this->input->post('nama_mobil'); 
        $type = $this->input->post('type');
        $no_bpkb = $this->input->post('no_bpkb');
        $no_mesin = $this->input->post('no_mesin');
        $no_rangka = $this->input->post('no_rangka');
        for($i=0;$i<$jumlah_mobil;$i++){
            $datamobil['id_user']=$id; 
            $datamobil['no_plat']=$no_plat[$i];  
            $datamobil['jenis_mobil']=$jenis_mobil[$i];  
			$datamobil['type']=$type[$i];  
            $datamobil['no_bpkb']=$no_bpkb[$i];  
            $datamobil['no_mesin']=$no_mesin[$i];  
            $datamobil['no_rangka']=$no_rangka[$i];  

			
            $this->ModelDataUserPelanggan->insert_data_mobil_pelanggan($datamobil);
        }  
        $this->ModelDataUserPelanggan->update_data_pelanggan($id, $data); //memakai 
        redirect(site_url('Data/data_user_pelanggan'));
    }

    public function hapus_data_pelanggan($id_user){
        $this ->db ->where_in('id_user',$id_user);
        $this ->db ->delete('tb_user');

        redirect('Data/data_user_pelanggan');
    }
	
	public function input_jenis_mobil(){ 
        $x['data']=$this->ModelDataUserPelanggan->get_jenis_mobil();

        $data = array(
            'menu' => 'MenuAdmin',
            "panelbody" => "admin/data/data_user_pelanggan/input_data_pelanggan"
        );
        $this ->load ->view('panelbody', $data, $x);
    }
	
	
	
/*
===========================================================================================
==============================  DAFTAR JENIS MOBIL ============================================
--=========================================================================================
*/
	
	
	function data_jenis_mobil(){
        $x['data']=$this->ModelDataUserPelanggan->get_jenis_mobil();
        $this->load->view('input_data_pelanggan',$x);
    }
 
    function get_type_mobil(){
        $id=$this->input->post('id');
        $data=$this->ModelDataUserPelanggan->get_type_mobil($id);
        echo json_encode($data);
    }
	
	public function ambil_data_type(){    
          $nama_mobil=$this->input->post('nama_mobil');
          
          $data_type=$this->ModelDataUserPelanggan->get_data_type_byid($nama_mobil);
          $i=0;//memanggil id sesuai inputan nama_pelanggan yang berisi id kecamatan
          echo '<select name="nama_mobil" id="nama_mobil" required=""> ';
          foreach ($data_type as $row ) {
            if($i==0){

              echo '<option value="'.$row->id_type_mobil.'" selected>'.$row->type_mobil.'</option>';
            }else{
            echo '<option value="'.$row->id_type_mobil.'">'.$row->type_mobil.'</option>';
            }
            $i++;
          }
          echo '</select>';
    }
	
	
/*
===========================================================================================
==============================  DAFTAR SERVICE ============================================
--=========================================================================================
*/

    public function data_daftarservice(){
        $list = $this->ModelDataDaftarService->get_data_daftarservice();
        $data = array(
            "menu"      => "MenuAdmin",
            "panelbody" => "admin/data/data_daftarservice/index",
            "list"      => $list
        );
        $this->load->view('panelbody', $data);
        
    }

    public function input_data_daftarservice(){
        $data_pelanggan = $this->ModelDataUserPelanggan->get_data_user();
        $data = array(
            'menu' => 'MenuAdmin',
            "panelbody" => "admin/data/data_daftarservice/input_data_daftarservice",
            'data_pelanggan' => $data_pelanggan
        );
        $this ->load ->view('panelbody',$data);
    }

    public function ambil_data_noplat(){    
        $nama_pelanggan=$this->input->post('nama_pelanggan');
          
        $data_noplat_user=$this->ModelDataUserPelanggan->get_data_pelanggan_mobil_byid($nama_pelanggan);
        $i=0;
			echo '<select name="noplat" id="noplat" required=""> ';
			foreach ($data_noplat_user as $row ) {
            if($i==0){

				echo '<option value="'.$row->no_plat.'" selected>'.$row->no_plat.'</option>';
            }else{
				echo '<option value="'.$row->no_plat.'">'.$row->no_plat.'</option>';
            }
            $i++;
        }
			echo '</select>';
    }

    public function ambil_data_mobil(){
        $nama_pelanggan=$this->input->post('nama_pelanggan');    
        $no_plat=$this->input->post('noplat');
          
        $data_mobil_user=$this->ModelDataUserPelanggan->get_data_pelanggan_mobil_byidnoplat($nama_pelanggan,$no_plat);
            $i=0;
				echo '<select name="jenismobil" id="jenismobil" required="" > ';

        foreach ($data_mobil_user as $row ) {
            if($i==0){

				echo '<option value="'.$row->jenis_mobil.'" selected>'.$row->jenis_mobil.'</option>';
            }else{
                echo '<option value="'.$row->jenis_mobil.'">'.$row->jenis_mobil.'</option>';
            }
            $i++;
        }
		
			echo '</select>';
    }

    public function ambil_data_nohp(){    
        $nama_pelanggan=$this->input->post('nama_pelanggan');
          
        $data_noplat_user=$this->ModelDataUserPelanggan->get_data_pelanggan_byid($nama_pelanggan)->row();
         
		//echo '<input type="text" name="nohp" class="form-control" id="nohp" value="'.$data_noplat_user->no_hp.'" required="" readonly="">';
        echo $data_noplat_user->no_hp;
    }

    public function ambil_data_email(){    
        $nama_pelanggan=$this->input->post('nama_pelanggan');
          
        $data_noplat_user=$this->ModelDataUserPelanggan->get_data_pelanggan_byid($nama_pelanggan)->row();
         
        //echo '<input type="text" name="email" class="form-control" id="email" value="'.$data_noplat_user->email.'" required="" readonly="">';
        echo $data_noplat_user->email;
    }

    public function ambil_data_alamat(){    
        $nama_pelanggan=$this->input->post('nama_pelanggan');
          
        $data_noplat_user=$this->ModelDataUserPelanggan->get_data_pelanggan_byid($nama_pelanggan)->row();
         
        //echo '<input type="text" name="alamat" class="form-control" id="alamat" value="'.$data_noplat_user->alamat.'" required="" readonly="">';
        echo $data_noplat_user->alamat;
    }

    public function proses_input_data_daftarservice(){
        $tanggal=date("d-m-y", strtotime($this->input->post('tgl_service')));
        //$tanggaljam=date("Y-m-d h:i:s", strtotime($this->input->post('tgl_service')));
		
		date_default_timezone_set("Asia/Jakarta");
        $tanggaljam=$tanggal." ".date("h:i:s");
        $ceknoantri= $this->ModelDataDaftarService->get_noantri($tanggal)->row();
        
        if($ceknoantri->no_antri!=""){
            $noantri=$ceknoantri->no_antri;
        }else{
            $noantri='1';
        }


        $cekmobil= $this->ModelDataDaftarService->get_cekmobil($tanggal,$this->input->post('jenismobil'))->row();
        
        if($cekmobil->jenismobil!=""){
            //$noantri=$ceknoantri->no_antri;
            
            echo ("<script LANGUAGE='JavaScript'>
                  window.alert('Mobil sudah terdaftar');
                  window.location.href='http://localhost/webnissan/Data/input_data_daftarservice';
               </script>");
            return;
        }else{
            //$noantri='1';
        }

        // echo $noantri;
        // return;

        $data['id_daftar_service'] = '';
        $data['id_user'] = $this->input->post('nama_pelanggan');
        $data['tgl_service']= $tanggaljam;
        $data['no_antri']=$noantri;
        $data['nohp'] = $this->input->post('nohp');
        $data['noplat'] = $this->input->post('noplat');
        $data['jenismobil'] = $this->input->post('jenismobil');
        $data['email'] = $this->input->post('email');
        $data['alamat'] = $this->input->post('alamat');
        //$data['status_service'] = '0';
        //$data['id_user_mekanik'] = '0';
        $data['kerusakan_mobil'] = $this->input->post('kerusakan_mobil');
        //$data['kerusakan'] = '-';
        //$data['astimasi_kerusakan'] = '';
        //$data['final_kerusakan'] = '';
        //$data['status_baca'] = 'belum';
        $this->ModelDataDaftarService->insert_data_daftarservice($data); //memakai 
        redirect(site_url('Data/data_daftarservice'));
    }

    public function edit_data_daftarservice($id){
        $list = $this ->ModelDataDaftarService ->get_data_daftarservice_byid($id)->row_array();
        $data_mekanik = $this->ModelDataUserMekanik->get_data_user();
        $data = array(
            'menu' => 'MenuAdmin',
            "panelbody" => "admin/data/data_daftarservice/edit_data_daftarservice",
            'list' => $list,
            'data_mekanik' => $data_mekanik
        );
        $this ->load ->view('panelbody',$data);
    }

    public function proses_edit_data_daftarservice(){
        $id = $this->input->post('id_daftar_service');
        $data['id_user_mekanik'] = $this->input->post('nama_mekanik');
        $data['status_service']=$this->input->post('status_service');;
        $data['status_baca']='0';
        $data['kerusakan'] = $this->input->post('kerusakan');
        $data['final_kerusakan'] = $this->input->post('final_kerusakan');
        //$data['astimasi_kerusakan'] = $this->input->post('astimasi_kerusakan');
        $this->ModelDataDaftarService->update_data_daftarservice($id, $data); //memakai 
        redirect(site_url('Data/data_daftarservice'));
    }

    public function hapus_data_daftarservice($id_daftar_service){
        $this ->db ->where_in('id_daftar_service',$id_daftar_service);
        $this ->db ->delete('tb_daftar_service');

        redirect('Data/data_daftarservice');
    }


    /*
===========================================================================================
==============================  MEKANIK ============================================
--=========================================================================================
*/

    public function data_user_mekanik(){
        $list = $this->ModelDataUserMekanik->get_data_user();
        $data = array(
            "menu"      => "MenuAdmin",
            "panelbody" => "admin/data/data_user_mekanik/index",
            "list"      => $list
        );
        $this->load->view('panelbody', $data);   
    }

    public function input_data_mekanik(){
        $data = array(
            'menu' => 'MenuAdmin',
            "panelbody" => "admin/data/data_user_mekanik/input_data_mekanik"
        );
        $this ->load ->view('panelbody',$data);
    }

    public function proses_input_data_mekanik(){
        
        $data['nama_mekanik'] = $this->input->post('nama_mekanik');
        $data['alamat'] = $this->input->post('alamat');
        $data['no_telp'] = $this->input->post('no_telp');
        $this->ModelDataUserMekanik->insert_data_mekanik($data); //memakai 
        redirect(site_url('Data/data_user_mekanik'));
    }

    public function edit_data_mekanik($id){
        $list = $this ->ModelDataUserMekanik ->get_data_mekanik_byid($id)->row_array();
        $data = array(
            'menu' => 'MenuAdmin',
            'panelbody' => 'admin/data/data_user_mekanik/edit_data_mekanik',
            'list' => $list
        );
        $this ->load ->view('panelbody',$data);
    }

    public function proses_edit_data_mekanik(){
        $id = $this->input->post('id_user_mekanik');
        $data['nama_mekanik'] = $this->input->post('nama_mekanik');
        $data['alamat'] = $this->input->post('alamat');
        $data['no_telp'] = $this->input->post('no_telp');
        $this->ModelDataUserMekanik->update_data_mekanik($id, $data); //memakai 
        redirect(site_url('Data/data_user_mekanik'));
    }

    public function hapus_data_mekanik($id_user_mekanik){
        $this ->db ->where_in('id_user_mekanik',$id_user_mekanik);
        $this ->db ->delete('tb_user_mekanik');

        redirect('Data/data_user_mekanik');
    }
	
	/*
===========================================================================================
==============================  KEPALA MEKANIK ============================================
--=========================================================================================
*/


/*
===========================================================================================
==============================  KERUSAKAN YANG AKAN DITAMPILKAN ============================================
--=========================================================================================
*/
	
	public function data_kerusakan(){
        $list = $this->ModelKerusakanMobil->get_data_kerusakan();
        $data = array(
            "menu"      => "MenuAdmin",
            "panelbody" => "admin/data/data_kerusakan/index",
            "list"      => $list
        );
        $this->load->view('panelbody', $data);   
    }
	
	
	
}