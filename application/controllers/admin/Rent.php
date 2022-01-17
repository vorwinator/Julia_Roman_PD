<?php
class Rent extends MY_Controller
{

    public $directory_path = 'pages/admin/rent/';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('rental_m');
        $this->load->model('car_ride_m');
    }


    public function index()
    {
        $data['title'] = "Lista wynajmów";
        $data['rentals'] = $this->rental_m->get_rentals();
        $data['car_rides'] = $this->car_ride_m->get_car_rides();
        $this->render_page($this->directory_path, "index", $data);
    }
}
