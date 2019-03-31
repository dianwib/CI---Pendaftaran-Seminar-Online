<?php
class Admin extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('Admin_model');
	$this->load->helper('url');	

   //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
            redirect('/home');
        }
    if($this->session->userdata('tabel')!="admin"){
	echo '<script language="javascript">alert("Please Login Admin"); document.location="../User/index";</script>';		
    	//redirect('User/index');
    }


  }
 
  function index(){
    $this->load->view('v_dashboard');
  }
 
  function lihat_data_member(){

    // function ini hanya boleh diakses oleh admin dan panitia
    if($this->session->userdata('akses')=='admin' || $this->session->userdata('akses')=='panitia')
    {
		$where=array('level'=>'member');
		$data['user']=$this->Admin_model->lihat_data($where,'user')->result();
		$this->load->view('v_lihat_data_member.php',$data);
    }
    else
    {
      echo "Anda tidak berhak mengakses halaman ini";
    }
 
  }

  function lihat_data_non_member(){
    // function ini hanya boleh diakses oleh admin dan panitia
    if($this->session->userdata('akses')=='admin')
    {
		$where=array('level'=>'publik');
		$data['user']=$this->Admin_model->lihat_data($where,'user')->result();
		$this->load->view('v_lihat_data_non_member.php',$data);
    }
    else
    {
      echo "Anda tidak berhak mengakses halaman ini";
    }
 
  }

  function edit_member($id){
    
    //if($this->session->userdata('akses')=='admin' || $this->session->userdata('akses')=='member')
    if($this->session->userdata('akses')=='admin')
    
    {
  	$where=array('id'=>$id);
  	$table='user';
	$data['user']=$this->Admin_model->edit_data($where,$table)->result();
	$this->load->view('v_edit_member',$data);
  }
  else
    {
      echo "Anda tidak berhak mengakses halaman ini";
    }
 
  }  

  function update_member($id){
	
    if($this->session->userdata('akses')=='admin' )
    {
		$nama=$this->input->post('nama');
		$email=$this->input->post('email');
		$no_telepon=$this->input->post('no_telepon');
		$bank=$this->input->post('bank');
		$no_rekening=$this->input->post('no_rekening');
		$password=$this->input->post('password');
		//$level=$this->input->post('level');
				
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
		$this->Admin_model->update_data($where,$data,$table);
		
		redirect('Admin/lihat_data_member');	

	}
	else
    {
      echo "Anda tidak berhak mengakses halaman ini";
    }
 
  }  


	function hapus_member($id){
		    if($this->session->userdata('akses')=='admin')
    {

		$where=array('id' => $id);
		$table='user';
		$this->Admin_model->hapus_data($where,$table);
		redirect('Admin/lihat_data_member');
	}
	else
    {
      echo "Anda tidak berhak mengakses halaman ini";
    }
 
  }  

	function aktivasi_member($id){
    if($this->session->userdata('akses')=='admin' )
    {

		$where=array('id' => $id);
		
		//level diganti ke member
		$data=array(
			'level' => 'member'
			);

		$this->Admin_model->update_data($where,$data,'user');
		redirect('Admin/lihat_data_member');
	}

	else
    {
      echo "Anda tidak berhak mengakses halaman ini";
    }
 
  }  

	function deaktivasi_member($id){
    if($this->session->userdata('akses')=='admin')
    {

		$where=array('id' => $id);
		
		//level diganti ke member
		$data=array(
			'level' => 'publik'
			);

		$this->Admin_model->update_data($where,$data,'user');
		redirect('Admin/lihat_data_non_member');
	}

	else
    {
      echo "Anda tidak berhak mengakses halaman ini";
    }
 
  }  

 
   function lihat_data_event(){
    // function ini hanya boleh diakses oleh admin dan panitia
    
    	$where='';
		$data['event']=$this->Admin_model->lihat_data($where,'event')->result();
		$this->load->view('v_lihat_data_event.php',$data);
    }
    
 function edit_event($id){
    if($this->session->userdata('akses')=='admin')
    {

  	$where=array('id_acara'=>$id);
  	$table='event';
	$data['event']=$this->Admin_model->edit_data($where,$table)->result();
	$this->load->view('v_edit_event',$data);
  }

	else
    {
      echo "Anda tidak berhak mengakses halaman ini";
    }
 
  }  
  function update_event($id){
    if($this->session->userdata('akses')=='admin')
    {

		$table='event';
	
		$jam_acara=$this->input->post('jam_acara');
		$keterangan_acara=$this->input->post('keterangan_acara');
		$pembawa_acara=$this->input->post('pembawa_acara');
		$penanggungjawab_acara=$this->input->post('penanggungjawab_acara');
				

		$data=array(

			'jam_acara' => $jam_acara,
			'pembawa_acara' => $pembawa_acara,
			'keterangan_acara' => $keterangan_acara,
			'penanggungjawab_acara' => $penanggungjawab_acara,
			
			);
		$where=array('id_acara'=>$id);
		$this->Admin_model->update_data($where,$data,$table);
		redirect('Admin/lihat_data_event');	

	}

	else
    {
      echo "Anda tidak berhak mengakses halaman ini";
    }
 
  }  
	function hapus_event($id){
    if($this->session->userdata('akses')=='admin')
    {

		//pada PK id-acara
		$where=array('id_acara' => $id);
		$table='event';
		$this->Admin_model->hapus_data($where,$table);
		redirect('Admin/lihat_data_event');
	}

	else
    {
      echo "Anda tidak berhak mengakses halaman ini";
    }
 
  }  
	function input_event(){
    if($this->session->userdata('akses')=='admin' )
    {

		$this->load->view('v_input_event');
	}

	else
    {
      echo "Anda tidak berhak mengakses halaman ini";
    }
 
  }  
	
	 function input_aksi_event(){
    if($this->session->userdata('akses')=='admin')
    {

		$jam_acara=$this->input->post('jam_acara');
		$keterangan_acara=$this->input->post('keterangan_acara');
		$pembawa_acara=$this->input->post('pembawa_acara');
		$penanggungjawab_acara=$this->input->post('penanggungjawab_acara');
	  	$table='event';


		$data=array(
			'jam_acara' => $jam_acara,
			'pembawa_acara' => $pembawa_acara,
			'keterangan_acara' => $keterangan_acara,
			'penanggungjawab_acara' => $penanggungjawab_acara,
			);
		
		$this->Admin_model->input_data($table,$data);
		redirect('Admin/lihat_data_event');
	}

	else
    {
      echo "Anda tidak berhak mengakses halaman ini";
    }
 
  }  
}
?>