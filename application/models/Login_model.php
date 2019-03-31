<?php

class Login_model extends CI_Model
{
	
	public function auth_admin($id,$password){
		$query=$this->db->query("SELECT * FROM admin where id='$id' AND password='$password' Limit 1 ");
		return $query;
	}
	

	public function auth_user($id,$password){
		$query=$this->db->query("SELECT * FROM user where id='$id' AND password='$password' or email='$id' AND password='$password'Limit 1 ");
		return $query;
	}
}
?>
