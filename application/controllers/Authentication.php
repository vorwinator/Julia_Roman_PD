<?php
    class Authentication extends CI_Controller{
        public function construct()
        {
            parent::__construct();
            $this->load->model('authentication');
            $this->load->library(array('session','form_validation'));
            $this->load->helper(array('url','form'));
        }
        public function login(){
            if(isset($_SESSION['id_acc_login'])){
                redirect('client');
            }
            else{
                $this->form_validation->set_rules('password', 'Hasło', 'required', array('required' => 'Musisz wpisać %s.'));
                $this->form_validation->set_rules('email', 'Email', 'required|valid_email', array('required' => 'Musisz wpisać %s.', 'valid_email'=>'To nie jest poprawny %s.'));
    
                if ($this->form_validation->run() === FALSE)
                    {
                        $this->load->view('login');
                    }
                    else
                    {
                        $pass=$this->authentication->check_password($this->input->post('email'));
    
                        if($pass!=md5($this->input->post('password'))){
                            $data['info']="Podano nieprawidłowe dane logowania";
                            $this->load->view('login',$data);
                        }
                        else{
                            $account=$this->authentication->get_acc_by_email($this->input->post('email'));

                            $this->load->view('templates/header');
                            $this->load->view('client/mainpage');
                            $this->load->view('templates/footer');
                        }
                        
                    }
            }
        }
    }