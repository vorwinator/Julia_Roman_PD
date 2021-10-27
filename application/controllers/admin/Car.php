<?php
    class Car extends MY_Controller{

        public $directory_path = 'pages/admin/car/';

        public function __construct()
        {
            parent::__construct();
            $this->load->model('car_m');
        }
        public function create()
        {
            $this->form_validation->set_rules('release_year', 'Rok produkcji', 'required');
			$this->form_validation->set_rules('price_per_day', 'Cenę za dobę', 'required');
			$this->form_validation->set_rules('mileage', 'Przebieg', 'required');
			$this->form_validation->set_rules('insurance', 'Ubezpieczenie', 'required');
			$this->form_validation->set_rules('brand', 'Markę', 'required');
			$this->form_validation->set_rules('model', 'Model', 'required');
			$this->form_validation->set_rules('average_consumption', 'Średnie spalanie', 'required');
			$this->form_validation->set_rules('number_of_airbags', 'Liczbę poduszek powietrznych', 'required');
			$this->form_validation->set_rules('number_of_doors', 'Liczbę drzwi', 'required');
			$this->form_validation->set_rules('number_of_seats', 'Liczbę miejsc', 'required');
			$this->form_validation->set_rules('drive', 'Napęd', 'required');
			$this->form_validation->set_rules('air_conditioning', 'Klimatyzację', 'required');
			$this->form_validation->set_rules('gearbox', 'Gearbox', 'required');
			$this->form_validation->set_rules('trunk_capacity', 'Pojemność bagażnika', 'required');
			$this->form_validation->set_rules('deposit', 'Kaucję', 'required');
			$this->form_validation->set_rules('car_type', 'Typ auta', 'required');

			if ($this->form_validation->run() === FALSE)
			{
                $this->render_page($this->directory_path, 'create', '');
			}
			else{
                if($this->car_m->set_car()){
                    if($this->car_m->set_car_details()){
                        $data['info']="Dodano nowe auto";
                        $this->render_page($this->directory_path, "cars", $data);
                    }
                    else{
                        $data['info']="Niepowodzenie";
                        $this->render_page($this->directory_path, "create", $data);
                    }
                } 
                else{
                    $data['info']="Niepowodzenie";
                    $this->render_page($this->directory_path, "create", $data);
                }
            }
        }
    }