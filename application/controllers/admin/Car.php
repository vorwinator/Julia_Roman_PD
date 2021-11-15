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

            $this->unit->run($this->form_validation->run(), TRUE, 'Czy wstawiono poprawne dane do formularza dodającego samochód.');

			if ($this->form_validation->run() === FALSE)
			{
                $this->render_page($this->directory_path, 'create', '');
			}
			else{
                if($this->car_m->set_car()){
                    if($this->car_m->set_car_details()){
                        redirect('admin/car/cars?info=Dodano nowe auto');
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


        public function cars()
        {
            if(isset($_GET['info']))$data['info']=$_GET['info'];
            $data['welcome'] = "To jest lista aut";
            $data['cars'] = $this->car_m->get_cars_with_details();
            
            $this->render_page($this->directory_path, "cars", $data);
        }


        public function update()
        {
            if(isset($_GET['info']))$data['info']=$_GET['info'];
            if(isset($_GET['id_car_update']))$_SESSION['selected_car_id']=$_GET['id_car_update'];
            $data['car']=$this->car_m->get_car_by_id($_SESSION['selected_car_id']);

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

            $this->unit->run($this->form_validation->run(), TRUE, 'Czy wstawiono poprawne dane do formularza edytującego samochód.');

            if ($this->form_validation->run() === FALSE)
            {
                $this->render_page($this->directory_path, "update", $data);
            }
            else
            {
                if($this->car_m->update($_SESSION['selected_car_id'])){
                    unset($_SESSION['selected_car_id']);
                    redirect('admin/car/cars?info=Pomyślnie zedytowano dane samochodu.');
                }
                else{
                    redirect('admin/car/update?info=Niepowodzenie. Nie udało się zmodyfikować danych w bazie.');
                }
                
            }
        }


        public function delete()
        {
            if(isset($_GET['id_car_delete'])){
                $this->car_m->delete($_GET['id_car_delete']);
                $data['info']="Gratuluję. Usunięto samochód.";
                $data['cars']=$this->car_m->get_cars_with_details();
                $this->render_page($this->directory_path, "cars", $data);
            }
            else
            {
                redirect('admin/car/cars?info=Nie udało się usunąć samochodu z bazy.');
            }
        }
    }