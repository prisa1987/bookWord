<?php

	/**
	* 
	*/
	class Authentication extends CI_Controller
	{
		
		private $id=0;
		public function __construct()
		{
			parent::__construct();
		}
		public function index(){
			$this->load->view('login');
		}

		public function login(){
			// $this->db->select('username', 'password');
			// $this->db->from('form_user');

			$username = "";
			$password = "";

			if($this->input->post("btnlogin")!=null){
				
					$username=$this->input->post("email");
					$password=$this->input->post("password");
			
					$sql = "Select * from form_user where email='$email'";
					$rs = $this->db->query($sql);

					foreach ($rs->result() as $row)
					{
					    if($row->password==$password){
					    	$data['rs'] = $rs->row_array();

					    	$this->load->view('profile',$data);
					    }
					    else{
					    	echo "fail";
					    }
					    
					}	

			}

		}


		public function look_profile(){
			$sql = "Select * from form_user where id='$this->id'";
			$rs = $this->db->query($sql);

			
		}

}

?>