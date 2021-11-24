<?php
    class Car_rental_facility extends MY_Controller{

        public $directory_path = 'pages/admin/crf/';

        public function __construct()
        {
            parent::__construct();
            $this->load->model('crf_m');
        }

        public function create(){
            $this->form_validation->set_rules('address_city', 'Miasto', 'required');
            $this->form_validation->set_rules('address_street', 'Ulicę', 'required');
            $this->form_validation->set_rules('address_housenumber', 'Numer budynku', 'required');
            // $this->form_validation->set_rules('address_apartmentnumber', 'Numer mieszkania', 'required');
            $this->form_validation->set_rules('address_postalcode', 'Kod pocztowy', 'required');
			$this->form_validation->set_rules('type', 'Przeznaczenie placówki', 'required');
            
            $this->unit->run($this->form_validation->run(), TRUE, 'Czy wstawiono poprawne dane do formularza tworzącego placówkę.');

			if ($this->form_validation->run() === FALSE)
			{
                $data['options'] = array(
                    'Odbiór',
                    'Zwrot',
                    'Oba'
                );
                $this->render_page($this->directory_path, 'create', '');

			}
			else{
                if($this->crf_m->set_crf()){
                    $data['info']="Dodano nową placówkę";
                    $data['crfs'] = $this->crf_m->get_crfs();

                    $this->render_page($this->directory_path, "crfs", $data);
                } 
                else{
                    $data['info']="Niepowodzenie";

                    $this->render_page($this->directory_path, "create", $data);
                }
            }
        }


        public function crfs()
        {
            $data['crfs'] = $this->crf_m->get_crfs();
            
            $this->render_page($this->directory_path, "crfs", $data);
        }


        public function delete()
        {
            if($_GET['id_crf_delete'])$this->crf_m->delete($_GET['id_crf_delete']);

            $data['info'] = "Usunięto placówkę.";
            $data['crfs'] = $this->crf_m->get_crfs();
            
            $this->render_page($this->directory_path, "crfs", $data);
        }


        public function update()
        {
            if(isset($_GET['info']))$data['info']=$_GET['info'];
            if(isset($_GET['id_crf_update']))$_SESSION['selected_crf_id']=$_GET['id_crf_update'];
            $data['crf']=$this->crf_m->get_crf_by_id($_SESSION['selected_crf_id']);

            $this->form_validation->set_rules('address', 'Adres', 'required');
			$this->form_validation->set_rules('working_hours', 'Godziny pracy', 'required');
			$this->form_validation->set_rules('type', 'Przeznaczenie placówki', 'required');
            
            $this->unit->run($this->form_validation->run(), TRUE, 'Czy wstawiono poprawne dane do formularza tworzącego placówkę.');

            if ($this->form_validation->run() === FALSE)
            {
                $this->render_page($this->directory_path, "update", $data);
            }
            else
            {
                if($this->crf_m->update($_SESSION['selected_crf_id'])){
                    unset($_SESSION['selected_car_id']);
                    redirect('admin/car_rental_facility/crfs?info=Pomyślnie zedytowano dane placówki.');
                }
                else{
                    redirect('admin/car_rental_facility/update?info=Niepowodzenie. Nie udało się zmodyfikować danych w bazie.');
                }
                
            }
        }
    }