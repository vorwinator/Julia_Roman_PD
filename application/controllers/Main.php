<?php
    class Main extends MY_Controller{
        public function __construct()
        {
            parent::__construct();
        }
        public function index(){
            $data['welcome'] = "To jest domek";
            
            $this->view("pages/admin/", "index", $data);
        }
    }