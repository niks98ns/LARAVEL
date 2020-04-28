<?php
  class FormController extends CI_Controller
  {
	public function __construct()
	{
	parent::__construct();
	$this->load->helper(array('form'));
	$this->load->library(array('form_validation'));
	}
   public function form()
   {
        $this->form_validation->set_rules('first_name','First Name','required'); 
        $this->form_validation->set_rules('last_name','Last Name','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('mobile_number','Mobile Number','required');
        $this->form_validation->set_rules('image','Image','required');
        $this->form_validation->set_rules('gender','Gender','required');
        $this->form_validation->set_rules('dob','DOB','required');
        $this->form_validation->set_rules('address','Address','required');

	   if ($this->form_validation->run() == FALSE) 
		{
			$this->load->view('nikhil');
		} 
		else 
		{
			$this->load->view('success');
		}
    }
  }
?>