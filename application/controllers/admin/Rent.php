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
        if (isset($_GET['info'])) $data['info'] = $_GET['info'];

        $this->render_page($this->directory_path, "index", $data);
    }


    public function delete_rent()
    {
        if (isset($_GET['id_rental'])) {
            $this->rental_m->rental_status_off($_GET['id_car']);
            $this->rental_m->delete($_GET['id_rental']);
        }
        redirect('admin/Rent/index?info=Pomyślnie usunięto wynajem.');
    }


    public function delete_car_ride()
    {
        if (isset($_GET['id_car_ride'])) {
            $this->car_ride_m->rental_status_off($_GET['id_car']);
            $this->car_ride_m->delete($_GET['id_car_ride']);
        }
        redirect('admin/Rent/index?info=Pomyślnie usunięto przejazd.');
    }
}
