<?php
class Rent extends MY_Controller
{

    public $directory_path = 'pages/admin/rent/';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('rental_m');
    }


    public function index()
    {
        $data['rentals'] = $this->rental_m->get_rentals();
        $this->render_page($this->directory_path, "index", $data);
    }
}
