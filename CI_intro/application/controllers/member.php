<?php
	/**
	*  
	*/
	class Member extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
		}

		public function index(){
			$sql = "Select * from tb_member order by id asc";
			$rs = $this->db->query($sql);

			$data['rs'] = $rs->result_array();

			$this->load->view('index',$data);
		}

		public function add(){

			if($this->input->post("btsave")!=null){
				$ar=array(
					"name"=>$this->input->post("name"),
					"tel"=>$this->input->post("tel"),
					"address"=>$this->input->post("address")

				);

			$this->db->insert("tb_member",$ar);
			redirect("member","refresh");
			exit();
		  }
		  $this->load->view('add'); 
		}

		public function del($id){
			$this->db->delete('tb_member', array('id' => $id)); 
			redirect('member','refresh');
			exit();
		}

		public function edit($id){



			if($this->input->post("btsave")!=null){
				$ar=array(
					"name"=>$this->input->post("name"),
					"tel"=>$this->input->post("tel"),
					"address"=>$this->input->post("address")

				);

			
			$this->db->where('id',$id);
			$this->db->update('tb_member',$ar);
			redirect('member','refresh');
			exit();
		  }
		  
			$sql = "Select * from tb_member where id='$id'";
			$rs = $this->db->query($sql);

			if( $rs->num_rows()==0){
				$data['rs'] = array();
			}
			else{
				$data['rs'] = $rs->row_array();
			}
			$this->load->view('edit',$data);



		}
	}
?>