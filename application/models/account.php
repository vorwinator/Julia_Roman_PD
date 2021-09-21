<?php
    class account extends CI_Model{
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
    } 