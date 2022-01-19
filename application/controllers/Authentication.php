<?php
    class Authentication extends CI_Controller{
        public function construct()
        {
            parent::__construct();
            $this->load->model('authentication_m');
            $this->load->library(array('session','form_validation'));
            $this->load->helper(array('url','form'));
        }


        public function logout()
        {
            $data['title'] = "Wylogowanie";
            unset($_SESSION['login_id_acc']);
            unset($_SESSION['login_email']);
            unset($_SESSION['login_firstname']);
            unset($_SESSION['login_lastname']);
            unset($_SESSION['login_acc_type']);

            $this->unit->run(isset($_SESSION['login_acc_type']), FALSE, 'Czy pomyślnie wylogowano.');

            $data['info']="Pomyślnie wylogowano";

            $this->load->view('templates/header_client', $data);
            $this->load->view('pages/authentication/login');
            $this->load->view('templates/footer');            
        }

        
        public function login(){
            $data['title'] = "Logowanie";
            if(isset($_SESSION['login_id_acc'])){
                if($_SESSION['login_acc_type']==1){
                    redirect('admin/rent/index');
                }
                else if($_SESSION['login_acc_type']==0){
                    redirect('client/account/profile');
                }
                else{
                    redirect('main/index');
                }
            }
            else{
                $this->form_validation->set_rules('password', 'Hasło', 'required', array('required' => 'Musisz wpisać %s.'));
                $this->form_validation->set_rules('email', 'Email', 'required|valid_email', array('required' => 'Musisz wpisać %s.', 'valid_email'=>'To nie jest poprawny %s.'));

                $this->unit->run($this->form_validation->run(), TRUE, 'Czy wstawiono poprawne dane do formularza logowania.');
    
                if ($this->form_validation->run() === FALSE)
                    {
                        if(isset($_GET['info'])){
                            $data['info']=$_GET['info'];
                        }
                        $this->load->view('templates/header_client', $data);
                        $this->load->view('pages/authentication/login');
                        $this->load->view('templates/footer_client');
                    }
                    else
                    {
                        $this->load->model('authentication_m');
                        $pass=$this->authentication_m->check_password($this->input->post('email'));

                        if($pass != false){
                            $this->unit->run($pass->password!=md5($this->input->post('password')), FALSE, 'Czy podano prawidłowe hasło.');
        
                            if($pass->password!=md5($this->input->post('password'))){
                                $data['info']="Podano nieprawidłowe dane logowania";

                                $this->load->view('templates/header_client', $data);
                                $this->load->view('pages/authentication/login');
                                $this->load->view('templates/footer_client');
                            }
                            else{
                                $account=$this->authentication_m->get_acc_by_email($this->input->post('email'));

                                $_SESSION['login_id_acc']=$account->id_acc;
                                $_SESSION['login_email']=$account->email;
                                $_SESSION['login_firstname']=$account->firstname;
                                $_SESSION['login_lastname']=$account->lastname;
                                $_SESSION['login_acc_type']=$account->acc_type;

                                if($_SESSION['login_acc_type']==null){
                                    $data['info']="Wystąpił niespodziewany błąd.";
                                    redirect('main/index');
                                }

                                if($_SESSION['login_acc_type']==1)
                                {
                                    redirect('admin/rent/index');
                                }
                                else{
                                    redirect('main/index');
                                }
                            }
                        }
                        else{
                            $data['info'] = "Podano nieprawidłowe dane logowania";

                            $this->load->view('templates/header_client', $data);
                            $this->load->view('pages/authentication/login');
                            $this->load->view('templates/footer_client');
                        }
                    }
            }
        }


        public function sign_up()
        {
            $data['title'] = "Rejestracja";
            $this->load->model('account_m');

            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('firstname', 'Imię', 'required');
			$this->form_validation->set_rules('lastname', 'Nazwisko', 'required');
			$this->form_validation->set_rules('password', 'Hasło', 'required');
			$this->form_validation->set_rules('password2', ' Powtórz hasło', 'required|matches[password]');
            
            $this->unit->run($this->form_validation->run(), TRUE, 'Czy wstawiono poprawne dane do formularza tworzącego konto.');

			if ($this->form_validation->run() === FALSE)
			{
                $this->load->view('templates/header', $data);
                $this->load->view('pages/authentication/sign_up');
                $this->load->view('templates/footer');
			}
			else{
                if($this->account_m->set_account()){
                    $data['info']="Konto utworzone. Zaloguj się.";

                    $this->load->view('templates/header', $data);
                    $this->load->view('pages/authentication/login');
                    $this->load->view('templates/footer');
                } 
                else{
                    $data['info']="Niepowodzenie";

                    $this->load->view('templates/header', $data);
                    $this->load->view('pages/authentication/sign_up', $data);
                    $this->load->view('templates/footer');
                }
            }
        }
    }