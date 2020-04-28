<?php
    class Student extends CI_Model
    {
        public function saverecords($first_name,$last_name,$email,$password,$mobile_number,$image,$gender,$dob,$address)
        {
            $query="insert into students values('','$first_name','$last_name','$email','$password','$mobile_number','$image','$gender','$dob','$address')";
            $this->db->query($query);
        }

        
        public function displayrecords()
        {
            $query=$this->db->query("select * from students");
            return $query->result();
        }


        public function deleterecords($id)
        {
        $this->db->query("delete  from students where id='".$id."'");
        }

        public function displayrecordsById($id)
        {
            $query=$this->db->query("select * from students where id='".$id."'");
            return $query->result();
        }

        public function updaterecords($first_name,$last_name,$email,$password,$mobile_number,$image,$gender,$dob,$address,$id)
        {
            $query=$this->db->query("update students SET first_name='$first_name',last_name='$last_name',email='$email',password='$password',mobile_number='$mobile_number',image='$image',gender='$gender',dob='$dob',address='$address' where id='".$id."'");
        }



        public function UploadImage(){

            $config['upload_path']          = './public/img/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('image'))
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
?>

