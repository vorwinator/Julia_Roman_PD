<?php
    class Authentication extends CI_Controller{
        public function construct()
        {
            parent::__construct();
            $this->load->model('authentication_m');
            $this->load->library(array('session','form_validation'));
            $this->load->helper(array('url','form'));
        }
        public function login(){
            if(isset($_SESSION['login_id_acc'])){
                if($_SESSION['login_acc_type']==1){
                    redirect('main/index');//temp
                }
                else{
                    redirect('main/index');//temp
                }
            }
            else{
                $this->form_validation->set_rules('password', 'Hasło', 'required', array('required' => 'Musisz wpisać %s.'));
                $this->form_validation->set_rules('email', 'Email', 'required|valid_email', array('required' => 'Musisz wpisać %s.', 'valid_email'=>'To nie jest poprawny %s.'));
    
                if ($this->form_validation->run() === FALSE)
                    {
                        $this->load->view('templates/header');
                        $this->load->view('pages/authentication/login');
                        $this->load->view('templates/footer');
                    }
                    else
                    {
                        $this->load->model('authentication_m');
                        $pass=$this->authentication_m->check_password($this->input->post('email'));
    
                        if($pass->password!=md5($this->input->post('password'))){
                            $data['info']="Podano nieprawidłowe dane logowania";
                            $this->load->view('templates/header');
                            $this->load->view('pages/authentication/login',$data);
                            $this->load->view('templates/footer');
                        }
                        else{
                            $account=$this->authentication_m->get_acc_by_email($this->input->post('email'));

                            $_SESSION['login_id_acc']=$account['id_acc'];
                            $_SESSION['login_email']=$account['email'];
                            $_SESSION['login_firstname']=$account['firstname'];
                            $_SESSION['login_lastname']=$account['lastname'];
                            $_SESSION['login_acc_type']=$account['acc_type'];

                            if($_SESSION['login_acc_type']==null){
                                $data['info']="Wystąpił niespodziewany błąd.";
                                redirect('main/index');//temp
                            }

                            if($_SESSION['login_acc_type']==1)
                            {
                                $this->load->view('templates/header');
                                $this->load->view('pages/main/index');//temp
                                $this->load->view('templates/footer');
                            }
                            else{
                                $this->load->view('templates/header');
                                $this->load->view('pages/main/index');//temp
                                $this->load->view('templates/footer');
                            }
                        }
                        
                    }
            }
        }
    }