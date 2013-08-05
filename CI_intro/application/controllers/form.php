<?php

	class Form extends CI_Controller{


    public function __construct()
    {
      parent::__construct();
      $this->load->model("register_model");
    }

		public function index(){
			$this->load->helper('form');
			$this->load->library('form_validation');
			$form = $this->form_validation;

			$config = array(
               	array(
                     'field'   => 'username', 
                     'label'   => 'Username', 
                     'rules'   => 'required|callback_check_username'
                  ),
               	array(
                     'field'   => 'password', 
                     'label'   => 'Password',
                     'rules'   => 'required|matches[passwordA]'
                  ),
           	   	array(
                     'field'   => 'passwordA', 
                     'label'   => 'PasswordAgain',
                     'rules'   => 'required|matches[password]' 
                  ),
           	   	array(
                     'field'   => 'address', 
                     'label'   => 'Address',
                     'rules'   => 'required' 
                  ),
           	   	array(
                     'field'   => 'email', 
                     'label'   => 'E-mail',
                     'rules'   => 'required|valid_email|callback_check_email' 
                  ),

           	);

			$this->form_validation->set_rules($config);
      $form->set_message("required","กรุณากรอกข้อมูล %s");
      $form->set_message("valid_email","กรุณากรอก E-mail ที่ถูกต้อง");
      $form->set_message("matches","กรุณา กรอก password ให้ตรงกัน");
			if($form->run()==false){
				$this->load->view('main');
			}
			else{
        $this->submit();
			

			}
		}

     public function check_username($str){
        if($str=="admin"){
          $this->form_validation->set_message("check_username","มีผู้ใช้งานแล้ว");
          return false;
        }
        else{
          return true;
        }
     }

     public function check_email($str){

      $this->db->select('email');
      $query = $this->db->get('form_user');
     
          foreach ($query->result() as $row) {
            
            if($str==$row->email){
              $this->form_validation->set_message("check_email","e-mail นี้มีผู้ใช้้งานแล้ว");
              return false;
            }
          }
              return true;
        
     }

     public function submit(){
          $this->load->model('register_model');
          $this->register_model->insert();
          
    }

     
	}
?>