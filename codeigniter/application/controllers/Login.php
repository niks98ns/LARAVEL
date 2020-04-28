<?php
// session_start();

class Login extends CI_Controller 
{
	public function __construct()
	{
        parent::__construct();
        $this->load->database();
		$this->load->model('LoginModel');
		$this->load->library('session');
	}

	public function index()
	{
		// $data['title'] = "Login";
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		// $this->load->view('login', $data);    
		$result['data']=$this->LoginModel->login_users($username,$password);	
		$this->load->view('login',$result);
		// print_r($result);
		if ($result){
 		$_SESSION['user'] = $result;
		$_SESSION['login'] = true;
		// print_r($_SESSION['user']);
		// redirect("index");
			header("Location: http://localhost/codeigniter/index.php/StudentsController/dispdata");
		}
		else
		{
	    	header("Location:http://localhost/codeigniter/index.php/login/index");
		}
	}


	public function logout()
	{
		// $this->load->view('login');
		// print_r('jgvh');
		if($this->input->post('logout_btn'))
		{
		// 	unset(
		// 	$_SESSION['user'],
		// 	$_SESSION['login'] == true;
		// );
		$this->session->sess_destroy(['user']);

		header("Location:http://localhost/codeigniter/index.php/login/index");
		}
	}


	
}
?>
