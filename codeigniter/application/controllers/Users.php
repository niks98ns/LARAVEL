<?php
class Users extends CI_Controller 
{
	public function __construct()
	{
	//call CodeIgniter's default Constructor
	parent::__construct();
	
	//load database libray manually
	$this->load->database();
	
	//load Model
	$this->load->model('User');
	}

// 	public function insert()
// 	{
// 		//load registration view form
// 		$this->load->view('users/add');
	
// 		//Check submit button 
// 		if($this->input->post('save'))
// 		{
// 		//get form's data and store in local varable
// 		$n=$this->input->post('picture');
// 		$e=$this->input->post('name');
// 		$m=$this->input->post('email');
		
// //call saverecords method of Hello_Model and pass variables as parameter
// 		$this->User->insertdata($n,$e,$m);		
// 		echo "Records Saved Successfully";
// 		}
//     }
    
    public function insert(){
        $this->load->view('users/add');
        $post = $this->input->post();
        // $this->load->model('file');
        $file_name = $this->file->UploadImage();
        $post['file_name'] = $file_name;
      
        $bool = $this->cotizacion->insert($post);
        if($bool){
           header("Location: " . base_url() . "profile"); 
        }else{
          header("Location: " . base_url() . "article/nuevo"); //no se guardo
        }
      
        }
}
?>