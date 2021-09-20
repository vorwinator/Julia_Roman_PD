<?php
    class Account extends MY_Controller{

        public $directory_path = 'pages/admin/';

        public function __construct()
        {
            parent::__construct();
        }
        public function index(){
            $data['welcome'] = "To jest domek";
            
            $this->render_page($this->directory_path, "index", $data);
        }
    }