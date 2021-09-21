<?php
    class Account extends MY_Controller{

        public $directory_path = 'pages/account/';

        public function __construct()
        {
            parent::__construct();
            $this->load->model('account_m');
        }
        public function index(){
            $data['welcome'] = "To jest domek";
            
            $this->render_page($this->directory_path, "index", $data);
        }

        public function create(){
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('firstname', 'Imię', 'required');
			$this->form_validation->set_rules('lastname', 'Nazwisko', 'required');
			$this->form_validation->set_rules('password', 'Hasło', 'required');
			$this->form_validation->set_rules('password2', ' Powtórz hasło', 'required|matches[password]');

			if ($this->form_validation->run() === FALSE)
			{
                $this->render_page($this->directory_path, 'create', '');

			}
			else{
                if($this->account_m->set_account()){
                    $data['info']="Dodano nowe konto";
                } 
                else{
                    $data['info']="Niepowodzenie";
                }
                $this->render_page($this->directory_path, "create", $data);
            }
        }
    }