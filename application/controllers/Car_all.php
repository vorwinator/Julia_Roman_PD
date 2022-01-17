<?php
    class Car_all extends MY_Controller{

        public $directory_path = 'pages/main/';

        public function __construct()
        {
            parent::__construct();
            $this->load->model('car_m');
            $this->load->model('rental_m');
            $this->load->model('car_ride_m');
        }


        public function cars()
        {
            $rentals = $this->rental_m->get_rentals();
            if($rentals!=null) foreach($rentals as $rental){
                if($rental['end_date'] < date("Y-m-d")){
                    if($rental["rental_status"] == 1){
                        $this->rental_m->rental_status_off($rental['id_car']);
                    }
                    else{
                        $this->rental_m->rental_status_on($rental['id_car']);
                        $this->rental_m->delete($rental['id_rental']);
                    }
                }
            }

            $car_rides = $this->car_ride_m->get_car_rides();
            if($car_rides!=null) foreach($car_rides as $car_ride){
                $date = explode(" ", $car_ride['date']);
                if($date[0] < date("Y-m-d")){
                    if($car_ride["rental_status"] == 1){
                        $this->car_ride_m->rental_status_off($car_ride['id_car']);
                        $this->car_ride_m->delete($car_ride['id_car_ride']);
                    }
                }
            }

            $data['title'] = "Lista samochodów do wynajęcia";
            if(isset($_GET['info']))$data['info']=$_GET['info'];
            $data['cars'] = $this->car_m->get_unique_cars_with_details_free_to_rent();
            
            $this->render_page($this->directory_path, "cars", $data);
        }


        public function details()
        {
            $data['title'] = "Szczegóły wybranego auta";
            if(isset($_GET['info']))$data['info']=$_GET['info'];
            if(isset($_GET['id_car_details']))$_SESSION['selected_car_id']=$_GET['id_car_details'];
            $data['car']=$this->car_m->get_car_by_id($_SESSION['selected_car_id']);

            $this->render_page($this->directory_path, "details", $data);
        }
    }