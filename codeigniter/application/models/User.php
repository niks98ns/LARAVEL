<?php
class User extends CI_Model 
{
	function insertdata($picture,$name,$email)
	{
	$query="insert into account values('','$picture','$name','$email')";
	$this->db->query($query);
    }
    

    public function UploadImage(){

        $config['upload_path']          = './public/img/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('picture'))
        {
                $error = array('error' => $this->upload->display_errors());

                $this->load->view("/clientes/nuevo", $error);
        }
        else
        {
                $file_data = $this->upload->data();

                 $file_name = $file_data['file_name'];
                 return $file_name;
        }
}
}