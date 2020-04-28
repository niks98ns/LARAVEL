<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class StudentsController extends CI_Controller 
{
    /**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html	
	 */

	public function __construct()
	{
        parent::__construct();
        $this->load->database();
				$this->load->model('Student');
				$this->load->helper('url');
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
			$this->load->view('students/create');
		} 
		else 
		{
			$this->load->view('success');
		}
	}
	
	public function savedata()
	{
		$this->load->view('students/create');
		
		if($this->input->post('save'))
		{
			$first_name=$this->input->post('first_name');
			$last_name=$this->input->post('last_name');
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			$mobile_number=$this->input->post('mobile_number');
			$image=$this->input->post('image');
			$gender=$this->input->post('gender');
			$dob=$this->input->post('dob');
			$address=$this->input->post('address');
			print_r($image);
			$this->Student->saverecords($first_name,$last_name,$email,$password,$mobile_number,$image,$gender,$dob,$address);
			redirect("StudentsController/dispdata");  
		}
	}
	
	public function dispdata()
	{
		$result['data']=$this->Student->displayrecords();
		$this->load->view('students/display',$result);
		// print_r($result);
	}


	public function deletedata()
	
	{
		$id=$this->input->get('id');
		$this->Student->deleterecords($id);
		redirect("/StudentsController/dispdata","refresh");
	}

	public function updatedata()
	{
		$id=$this->input->get('id');
		$result['data']=$this->Student->displayrecordsById($id);
		$this->load->view('students/edit',$result);
		$this->load->helper('url');

		
			
			if($this->input->post('update'))
			{
				$first_name=$this->input->post('first_name');
				$last_name=$this->input->post('last_name');
				$email=$this->input->post('email');
				$password=$this->input->post('password');
				$mobile_number=$this->input->post('mobile_number');
				$image=$this->input->post('image');
				$config['upload_path']          = './image';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
                $this->load->library('upload', $config);

                $this->upload->do_upload();
                $dataa = array('upload_data'=>  $this->upload->data());

                $professional_info = array(
                'professional_image'=>  $dataa['upload_data']['file_name']);

                $this->UserModel->update_professional_image($professional_info);
                redirect('Professional/professional_profile_personal_info');
				$gender=$this->input->post('gender');
				$dob=$this->input->post('dob');
				$address=$this->input->post('address');
				$this->Student->updaterecords($first_name,$last_name,$email,$password,$mobile_number,$image,$gender,$dob,$address,$id);
				redirect('StudentsController/dispdata', 'refresh');
				// redirect('/StudentsController/dispdata');
			}
	}

	

		
    
}
?>

