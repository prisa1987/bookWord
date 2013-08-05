<?php

	/**
	* 
	*/
	class Register_model extends CI_Model
	{
		
		public function __construct()
		{
			parent::__construct();
			 $this->load->database();

		}

		public function insert(){

			$data = array(
			   		"username"=>$this->input->post("username"),
					"password"=>$this->input->post("password"),
					"email"=>$this->input->post("email"),
					"address"=>$this->input->post("address")
			   );
			  $this->db->insert('form_user',$data); 
			  redirect("form","refresh");
			  exit();
		}


		public function find($id){
			$sql = "Select * from tb_member where id='$id'";
			$rs = $this->db->query($sql);


			if( $rs->num_rows()==0){
				$data['rs'] = array();
			}
			else{
				$data['rs'] = $rs->row_array();
			}
			$this->load->view('profile',$data);

			echo form_input($data);

		}
	}
?>