<?php
    class Crf extends MY_Controller{

        public $directory_path = 'pages/client/crf/';

        public function __construct()
        {
            parent::__construct();
            $this->load->model('crf_m');
        }
        public function crfs()
        {
            $data['crfs'] = $this->crf_m->get_crfs();
            if(isset($_GET['info']))$data['info']=$_GET['info'];
            
            $this->render_page($this->directory_path, "crfs", $data);
        }
    }