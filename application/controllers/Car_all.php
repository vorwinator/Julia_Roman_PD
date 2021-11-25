<?php
    class Car_all extends MY_Controller{

        public $directory_path = 'pages/main/';

        public function __construct()
        {
            parent::__construct();
            $this->load->model('car_m');
        }


        public function cars()
        {
            if(isset($_GET['info']))$data['info']=$_GET['info'];
            $data['welcome'] = "To jest lista aut";
            $data['cars'] = $this->car_m->get_cars_with_details();
            
            $this->render_page($this->directory_path, "cars", $data);
        }


        public function details()
        {
            if(isset($_GET['info']))$data['info']=$_GET['info'];
            if(isset($_GET['id_car_details']))$_SESSION['selected_car_id']=$_GET['id_car_details'];
            $data['car']=$this->car_m->get_car_by_id($_SESSION['selected_car_id']);

            $this->render_page($this->directory_path, "details", $data);
        }
    }