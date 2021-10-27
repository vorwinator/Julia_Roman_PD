<?php
    class authentication_m extends CI_Model{
        public function __construct()
        {
            $this->load->database();
        }

        public function check_password($email){
            $query = $this->db->select('password')
            ->from('account')
            ->where('email', $email)
            ->get();

            if($query->num_rows() > 0){
                $respond = $query->row();
            }else{
                $respond = FALSE;
            }
    
            return $respond;
        }

        public function get_acc_by_email($email){
            $query = $this->db->select('*')
            ->from('account')
            ->where('email', $email)
            ->get();

            if($query->num_rows() > 0){
                $respond = $query->row();
            }else{
                $respond = FALSE;
            }
    
            return $respond;
        }
    } 