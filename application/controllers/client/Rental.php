<?php
    class Rental extends MY_Controller{

        public $directory_path = 'pages/client/rental/';

        public function __construct()
        {
            parent::__construct();
            $this->load->model('car_m');
            $this->load->model('rental_m');
        }


        public function index(){
            if(isset($_GET['info']))$data['info']=$_GET['info'];
            if(isset($_GET['id_car_details']))$_SESSION['selected_car_id']=$_GET['id_car_details'];
            $data['car']=$this->car_m->get_car_by_id($_SESSION['selected_car_id']);
            
            $this->form_validation->set_rules('start_date', 'Datę rozpoczęcia', 'required');
            $this->form_validation->set_rules('end_date', 'Datę zakończenia', 'required');
            $this->form_validation->set_rules('address', 'Adres placówki', 'required');
            
            $this->unit->run($this->form_validation->run(), TRUE, 'Czy wstawiono poprawne dane do formularza ustanawiającego wynajem.');

            if ($this->form_validation->run() === FALSE)
            {
                $this->render_page($this->directory_path, "index", $data);
            }
            else
            {
                if($this->rental_m->set($_SESSION['selected_car_id'], $_SESSION['login_id_acc'], $this->input->post('crf_address'))){
                    unset($_SESSION['selected_car_id']);
                    $data['info'] = 'Pomyślnie dodano wynajem.';
                    $this->render_page($this->directory_path, "rentals", $data);
                }
                else{
                    $data['info'] = 'Niepowodzenie. Nie udało się zmodyfikować danych w bazie.';
                    $this->render_page($this->directory_path, "index", $data);
                }
            }
        }


        public function rentals()
        {
            $this->render_page($this->directory_path, "rentals", "data");
        }
    }