<?php
    class authentication extends CI_Model{
        public function __construct()
        {
            $this->load->database();
        }

        public function check_password($email){
            $this->db->select('password')
            ->from('account')
            ->where('email', $email);
            $query=$this->db->get();

            if($query->num_rows() > 0){
                $respond = $query->row();
            }else{
                $respond = FALSE;
            }
    
            return $respond;
        }

        public function get_acc_by_email($email){
            $this->db->select('*')
            ->from('account')
            ->where('email', $email);
            
            $query=$this->db->get();

            if($query->num_rows() > 0){
                $respond = $query->row();
            }else{
                $respond = FALSE;
            }
    
            return $respond;
        }
    } 