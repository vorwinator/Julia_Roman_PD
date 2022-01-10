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
				'firstname' => ucfirst(strtolower($this->input->post('firstname'))),
				'lastname' => ucfirst(strtolower($this->input->post('lastname'))),
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
			
			$this->unit->run($respond, 'is_array', 'Czy dane o kontach są dostarczane w formie tabeli danych.');
            return $respond;
		}


		public function get_acc_by_id($id)
		{
			$query = $this->db->select('id_acc, email, firstname, lastname, acc_type')
			->where('id_acc', $id)
			->from('account')
			->get();

			if($query->num_rows() > 0){
                $respond = $query->row_array();
            }else{
                $respond = FALSE;
            }
			
			$this->unit->run($respond, 'is_array', 'Czy dane o koncie są dostarczane w formie tabeli danych.');
            return $respond;
		}


		public function edit_acc_by_id($id)
		{
			$data = array(
				'email' => $this->input->post('email'),
				'firstname' => $this->input->post('firstname'),
				'lastname' => $this->input->post('lastname')
			);

			$this->db->set($data);

			$this->db->where('id_acc', $id);

			$respond = $this->db->update('account');

			return $respond;
		}
    } 