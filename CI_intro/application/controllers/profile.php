<?php
	/**
	* 
	*/
	class Profile extends CI_Controller
	{
		
		public function __construct(argument)
		{
			parent::__construct();
		}

		public function index(){
		  $this->load->model('register_model');
          $this->register_model->find();
		}
	}


?>