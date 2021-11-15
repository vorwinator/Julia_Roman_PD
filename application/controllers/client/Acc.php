<?php
    class Acc extends MY_Controller{

        public $directory_path = 'pages/client/acc/';

        public function __construct()
        {
            parent::__construct();
            $this->load->model('account_m');
        }
        public function profile(){
            $data['acc'] = $this->account_m->get_acc_by_id($_SESSION['login_id_acc']);
            
            $this->render_page($this->directory_path, "profile", $data);
        }
    }