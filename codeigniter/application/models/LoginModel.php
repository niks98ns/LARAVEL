<?php
class LoginModel extends CI_Model 
{
	// public function saverecords($username,$password)
	// {
	// $query="insert into users values('','$username','$password')";
	// $this->db->query($query);
	// }

	
	public function login_users($username,$password)
	{
		$query=$this->db->query("SELECT * FROM `students` where email = '$username' AND password = '$password'");
		return $query->result();

		
	}

	

	
}


