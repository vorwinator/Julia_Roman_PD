<?php
    class Main extends MY_Controller{
        public function __construct()
        {
            parent::__construct();
        }
        public function index(){
            if(isset($_GET['info'])){
                $data['info']=$_GET['info'];
                $this->render_page("pages/main/", "index", $data);
            }
            else{
                $this->render_page("pages/main/", "index", '');
            }
        }
    }