<?php
class Home extends CI_Controller{
 function __construct(){
    parent::__construct();
    //$this->load->model('Admin_model');
	$this->load->model('User_model');
	
	$this->load->helper('url');	
	}

	function index(){
		$this->load->view('v_dashboard');
	}
	
	function daftar(){
		$this->load->view('v_daftar');
	}

	function input_aksi_user(){
    $nik=$this->input->post('nik');
    $nama=$this->input->post('nama');
    $password=$this->input->post('password');
    $level="publik";
    $email=$this->input->post('email');
    $no_telepon=$this->input->post('no_telepon');
    $bank=$this->input->post('bank');
    $no_rekening=$this->input->post('no_rekening');
        

      $table='user';


    $data=array(
      'id' => $nik,
      'nama' => $nama,
      'password' => $password,
      'level' => $level,
      'email' => $email,
      'no_telepon' => $no_telepon,
      'bank' => $bank,
      'no_rekening' => $no_rekening,
      
      );
    
    $this->User_model->input_data($table,$data);
    echo '<script language="javascript">alert("Pendaftaran berhasil, silahkan login kembali menggunakan NIK atau Email"); document.location="../home";</script>';   
    //redirect('/Home');
  
  }


	




}
?>

	