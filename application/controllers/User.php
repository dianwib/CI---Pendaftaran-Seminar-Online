<?php
class User extends CI_Controller{
 function __construct(){
    parent::__construct();
    $this->load->model('User_model');
  $this->load->helper('url'); 
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
            redirect('/home');
        }
    if($this->session->userdata('tabel')!="user"){
  echo '<script language="javascript">alert("Please Login User"); document.location="../Admin/index";</script>';    
      //redirect('User/index');
    }

    


  }
 
  function index(){
    $this->load->view('v_dashboard');
  }
 
  function lihat_data_event(){
    // function ini hanya boleh diakses oleh admin dan dosen
    if($this->session->userdata('akses')=='member'){
      $where='';
      $data['event']=$this->User_model->lihat_data($where,'event')->result();
      $this->load->view('v_lihat_data_event.php',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
 
  }
 
   function edit_member($id){
    if($this->session->userdata('akses')=='member'){
 
    $where=array('id'=>$id);
    $table='user';
  $data['user']=$this->User_model->edit_data($where,$table)->result();
  $this->load->view('v_edit_member',$data);
  }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
 
  }

  function update_member($id){
     if($this->session->userdata('akses')=='member'){
 
    $nama=$this->input->post('nama');
    $email=$this->input->post('email');
    $no_telepon=$this->input->post('no_telepon');
    $bank=$this->input->post('bank');
    $no_rekening=$this->input->post('no_rekening');
    $password=$this->input->post('password');
    #$level=$this->input->post('level');
        
    $table='user';
    $data=array(

      'nama' => $nama,
      'password' => $password,
      'level' => 'member',
      'email' => $email,
      'no_telepon' => $no_telepon,
      'bank' => $bank,
      'no_rekening' => $no_rekening
      
      );
    $where=array('id'=>$id);
    $this->User_model->update_data($where,$data,$table);
    redirect('User/');  

  }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
 
  }

   function lihat_sertifikat(){
    if($this->session->userdata('akses')=='member'){
      $this->load->view('v_sertifikat');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }


}
?>