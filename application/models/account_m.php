<?php
    class account_m extends CI_Model{
        public function __construct()
        {
            $this->load->database();
        }

        public function set_account()
		{
            $hash_pass=$this->input->post('password');
            $hash_pass=md5($hash_pass);

			$data = array(
				'email' => $this->input->post('email'),
				'firstname' => $this->input->post('firstname'),
				'lastname' => $this->input->post('lastname'),
				'acc_type' => $this->input->post('acc_type'),
				'password' => $hash_pass
			);

			return $this->db->insert('account', $data);
		}
		public function get_accounts()
		{
			$query = $this->db->select('id_acc, email, firstname, lastname, acc_type')
			->from('account')
			->get();

			if($query->num_rows() > 0){
                $respond = $query->result_array();
            }else{
                $respond = FALSE;
            }
    
            return $respond;
		}
    } 