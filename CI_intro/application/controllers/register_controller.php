<?php

	class Form extends CI_Controller{


    public function __construct()
    {
      parent::__construct();
    }

		public function index(){
			$this->load->helper('form');
			$this->load->library('form_validation');
			$form = $this->form_validation;

			$config = array(
               	array(
                     'field'   => 'username', 
                     'label'   => 'Username', 
                     'rules'   => 'required'
                  ),
               	array(
                     'field'   => 'password', 
                     'label'   => 'Password',
                     'rules'   => 'required' 
                  ),
           	   	array(
                     'field'   => 'passwordA', 
                     'label'   => 'PasswordAgain',
                     'rules'   => 'required' 
                  ),
           	   	array(
                     'field'   => 'address', 
                     'label'   => 'Address',
                     'rules'   => 'required' 
                  ),
           	   	array(
                     'field'   => 'email', 
                     'label'   => 'E-mail',
                     'rules'   => 'required' 
                  ),

           	);

			$this->form_validation->set_rules($config);
           		
			if($form->run() == false){
				$this->load->view('register');
			}
			else{
				echo "Save complete";
			}



		}
	}
?>