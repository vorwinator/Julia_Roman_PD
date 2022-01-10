<?php
    class Acc extends MY_Controller{

        public $directory_path = 'pages/client/acc/';

        public function __construct()
        {
            parent::__construct();
            $this->load->model('account_m');
        }
        public function profile(){
            if(isset($_POST["submit"])){
                $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
                $this->form_validation->set_rules('firstname', 'Imię', 'required');
                $this->form_validation->set_rules('lastname', 'Nazwisko', 'required');

                if ($this->form_validation->run() === TRUE) {
                    $this->account_m->edit_acc_by_id($_SESSION['login_id_acc']);
                }
            }

            $data['acc'] = $this->account_m->get_acc_by_id($_SESSION['login_id_acc']);
            
            $this->render_page($this->directory_path, "profile", $data);
        }
    }