<?php
class Login extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('Login_model');	
	}

	function index(){
	 if(($this->session->userdata('tabel')=="admin")|| ($this->session->userdata('tabel')=="user")){
	 	redirect('/home');		
   

    }
    else{
		$this->load->view('v_login');

	}
}

	function auth(){
		$id=htmlspecialchars($this->input->post('id',TRUE),ENT_QUOTES);
		$password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
	
		$cek_admin=$this->Login_model->auth_admin($id,$password);

		if ($cek_admin->num_rows() != 0){
			$data=$cek_admin->row_array();
			$this->session->set_userdata('masuk',TRUE);

			if($data['level']=='admin')//admin tulen
			{
				$this->session->set_userdata('akses','admin');
				$this->session->set_userdata('tabel','admin');
				
				$this->session->set_userdata('ses_id',$data['id']);
				$this->session->set_userdata('ses_nama',$data['nama']);
				$this->session->set_userdata('ses_level',$data['level']);
				echo '<script language="javascript">alert("Login berhasil"); document.location="../Admin/index";</script>';				
				//redirect ('Admin/index');
			}

			else//akses panitia lain only seee
			{
					$this->session->set_userdata('akses','panitia');
					$this->session->set_userdata('tabel','admin');
				
				$this->session->set_userdata('ses_id',$data['id']);
				$this->session->set_userdata('ses_nama',$data['nama']);
				$this->session->set_userdata('ses_level',$data['level']);
				echo '<script language="javascript">alert("Login berhasil"); document.location="../Admin/index";</script>';		
				//redirect ('Admin/index');
			}
		}

		else//member
		{
			$cek_user=$this->Login_model->auth_user($id,$password);
			if ($cek_user->num_rows() != 0){
				$data=$cek_user->row_array();
				$this->session->set_userdata('masuk',TRUE);

			if($data['level']=='member')//admin tulen
			{
				$this->session->set_userdata('akses','member');
				$this->session->set_userdata('tabel','user');
				
				$this->session->set_userdata('ses_id',$data['id']);
				$this->session->set_userdata('ses_nama',$data['nama']);
				$this->session->set_userdata('ses_level',$data['level']);
				echo '<script language="javascript">alert("Login berhasil"); document.location="../User/index";</script>';		
				//redirect ('User/index');
			}

			else //akses panitia lain only seee
			{
				$this->session->set_userdata('akses','publik');
				$this->session->set_userdata('tabel','user');
				
				$this->session->set_userdata('ses_nama',$data['nama']);
				$this->session->set_userdata('ses_id',$data['id']);
				$this->session->set_userdata('ses_level',$data['level']);
				echo '<script language="javascript">alert("Login berhasil"); document.location="../User/index";</script>';	
				//redirect ('User/index');
			}		

			}

			else//jika password dan username tidak sah
			{
				
				echo '<script language="javascript">alert("Login tidak berhasil, harap daftar terlebih dahulu"); document.location="../home";</script>';		
				//redirect('/home');
				//$url=base_url();
				//redirect ($url);
			}
		}
		}


	function logout(){

		$this->session->sess_destroy();
				echo '<script language="javascript">alert("Logout"); document.location="../home";</script>';		


				//redirect('/home');
				//$url=base_url('');
				//redirect($url);
		
	}	



}
?>

	
