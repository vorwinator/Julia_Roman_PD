<?php
    class Account extends MY_Controller{

        public $directory_path = 'pages/admin/account/';

        public function __construct()
        {
            parent::__construct();
            $this->load->model('account_m');
        }

        public function create(){
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('firstname', 'Imię', 'required');
			$this->form_validation->set_rules('lastname', 'Nazwisko', 'required');
			$this->form_validation->set_rules('password', 'Hasło', 'required');
			$this->form_validation->set_rules('password2', 'Powtórz hasło', 'required|matches[password]');
            
            $this->unit->run($this->form_validation->run(), TRUE, 'Czy wstawiono poprawne dane do formularza tworzącego konto.');

			if ($this->form_validation->run() === FALSE)
			{
                $this->render_page($this->directory_path, 'create', '');
			}
			else{
                if($this->account_m->set_account()){
                    $data['info']="Dodano nowe konto";
                    $data['accounts'] = $this->account_m->get_accounts();

                    $this->render_page($this->directory_path, "accounts", $data);
                } 
                else{
                    $data['info']="Niepowodzenie";

                    $this->render_page($this->directory_path, "create", $data);
                }
            }
        }
        public function accounts()
        {
            $data['welcome'] = "To jest lista kont";
            $data['accounts'] = $this->account_m->get_accounts();
            
            $this->render_page($this->directory_path, "accounts", $data);
        }
    }