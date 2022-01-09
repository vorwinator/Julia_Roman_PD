<?php
    class Rental extends MY_Controller{

        public $directory_path = 'pages/client/rental/';

        public function __construct()
        {
            parent::__construct();
            $this->load->model('car_m');
            $this->load->model('crf_m');
            $this->load->model('rental_m');
        }


        public function index(){
            if(isset($_GET['info']))$data['info']=$_GET['info'];
            if(isset($_GET['id_car_details']))$_SESSION['selected_car_id']=$_GET['id_car_details'];
            $data['car']=$this->car_m->get_car_by_id($_SESSION['selected_car_id']);
            $data['address_options']=$this->crf_m->get_crfs_addresses();
            $data['return_to_options']=$this->crf_m->get_return_to_addresses();
            $start_date=null;
            $end_date=null;
            
            $validation=true;
            if(isset($_GET['start_date'])){
                $start_date = $_GET['start_date'];
                $start=strtotime($_GET['start_date']);
            }
            if (isset($_GET['end_date'])) {
                $end_date = $_GET['end_date'];
                $end=strtotime($_GET['end_date']);
            }
            if (isset($_GET['start_date']) && isset($_GET['end_date'])) {
                $start_end=$start-$end;
                $number_of_days=abs($start-$end)/86400;
            }

            if(isset($_GET['submit'])){
                if($start_date==null) {
                $validation = false;
                $data['start_date_error'] = "Musisz podać datę rozpoczęcia.";
                }
                if($end_date==null) {
                    $validation = false;
                    $data['end_date_error'] = "Musisz podać datę zakończenia.";
                }
                else if($start_end>0) {
                    $validation = false;
                    $data['date_error'] = "Data rozpoczęcia musi być wcześniejsza niż data zakończenia.";
                }
                else if($start_date < date("Y-m-d")) {
                    $validation = false;
                    $data['start_date_error'] = "Data rozpoczęcia nie może mieć miejsca w przeszłości.";
                }
            }
            else{
                $validation = false;
            }
            

            if ($validation === FALSE)
            {
                $this->render_page($this->directory_path, "index", $data);
            }
            else
            {
                $_SESSION['crf_address'] = $_GET['crf_address'];
                $_SESSION['start_date'] = $start_date;
                $_SESSION['end_date'] = $end_date;
                $_SESSION['return_to'] = $_GET['return_to'];
                $price = $number_of_days * $data["car"]["price_per_day"];
                redirect('client/Rental/accept?price='.$price);
                // $this->render_page($this->directory_path, "accept", $data);
            }
        }


        public function accept()
        {
            if(!isset($_GET['accept'])){
                if(isset($_GET['price'])){
                    $data['price'] = $_GET['price'];
                }
                $this->render_page($this->directory_path, "accept", $data);
            }
            else{
                if ($this->rental_m->set($_SESSION['selected_car_id'], $_SESSION['login_id_acc'], $_SESSION['crf_address'], $_SESSION['start_date'], $_SESSION['end_date'])) {
                    unset($_SESSION['selected_car_id']);
                    unset($_SESSION['start_date']);
                    unset($_SESSION['end_date']);
                    unset($_SESSION['crf_address']);
                    redirect('client/Rental/rentals?info=Pomyślnie dodano wynajem.');
                } 
                else 
                {
                    $data['info'] = 'Niepowodzenie. Nie udało się zmodyfikować danych w bazie.';
                    $this->render_page($this->directory_path, "accept", $data);
                }
            }
        }


        public function rentals()
        {
            $data['rentals'] = $this->rental_m->get_user_rentals($_SESSION['login_id_acc']);
            $this->render_page($this->directory_path, "rentals", $data);
        }
    }