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
            unset($_SESSION['login_id_acc']);
            unset($_SESSION['login_email']);
            unset($_SESSION['login_firstname']);
            unset($_SESSION['login_lastname']);
            unset($_SESSION['login_acc_type']);

            $this->unit->run(isset($_SESSION['login_acc_type']), FALSE, 'Czy pomyślnie wylogowano.');

            $data['info']="Pomyślnie wylogowano";

            $this->load->view('templates/header', $data);
            $this->load->view('pages/authentication/login');//temp
            $this->load->view('templates/footer');            
        }

        
        public function login(){
            if(isset($_SESSION['login_id_acc'])){
                if($_SESSION['login_acc_type']==1){
                    redirect('admin/account/create');//temp
                }
                else{
                    redirect('main/index');//temp
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
                            $this->load->view('templates/header', $data);
                        }
                        else{
                            $this->load->view('templates/header');
                        }
                        $this->load->view('pages/authentication/login');
                        $this->load->view('templates/footer');
                    }
                    else
                    {
                        $this->load->model('authentication_m');
                        $pass=$this->authentication_m->check_password($this->input->post('email'));

                        $this->unit->run($pass->password!=md5($this->input->post('password')), FALSE, 'Czy podano prawidłowe hasło.');
    
                        if($pass->password!=md5($this->input->post('password'))){
                            $data['info']="Podano nieprawidłowe dane logowania";

                            $this->load->view('templates/header', $data);
                            $this->load->view('pages/authentication/login');
                            $this->load->view('templates/footer');
                        }
                        else{
                            $account=$this->authentication_m->get_acc_by_email($this->input->post('email'));

                            $_SESSION['login_id_acc']=$account->id_acc;
                            $_SESSION['login_email']=$account->email;
                            $_SESSION['login_firstname']=$account->firstname;
                            $_SESSION['login_lastname']=$account->lastname;
                            $_SESSION['login_acc_type']=$account->acc_type;

                            if($_SESSION['login_acc_type']==null){
                                $data['info']="Wystąpił niespodziewany błąd.";//źle
                                redirect('main/index');//temp
                            }

                            if($_SESSION['login_acc_type']==1)
                            {
                                $this->load->view('templates/header');
                                $this->load->view('pages/admin/account/create');//temp
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


        public function sign_up()
        {
            $this->load->model('account_m');

            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('firstname', 'Imię', 'required');
			$this->form_validation->set_rules('lastname', 'Nazwisko', 'required');
			$this->form_validation->set_rules('password', 'Hasło', 'required');
			$this->form_validation->set_rules('password2', ' Powtórz hasło', 'required|matches[password]');
            
            $this->unit->run($this->form_validation->run(), TRUE, 'Czy wstawiono poprawne dane do formularza tworzącego konto.');

			if ($this->form_validation->run() === FALSE)
			{
                $this->load->view('templates/header');
                $this->load->view('pages/authentication/sign_up');
                $this->load->view('templates/footer');
			}
			else{
                if($this->account_m->set_account()){
                    $data['info']="Konto utworzone. Zaloguj się.";

                    $this->load->view('templates/header');
                    $this->load->view('pages/authentication/login');
                    $this->load->view('templates/footer');
                } 
                else{
                    $data['info']="Niepowodzenie";

                    $this->load->view('templates/header');
                    $this->load->view('pages/authentication/sign_up', $data);
                    $this->load->view('templates/footer');
                }
            }
        }
    }