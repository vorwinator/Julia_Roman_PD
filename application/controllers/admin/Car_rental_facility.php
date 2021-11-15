<?php
    class Car_rental_facility extends MY_Controller{

        public $directory_path = 'pages/admin/crf/';

        public function __construct()
        {
            parent::__construct();
            $this->load->model('crf_m');
        }

        public function create(){
            $this->form_validation->set_rules('address', 'Adres', 'required');
			$this->form_validation->set_rules('working_hours', 'Godziny pracy', 'required');
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
    }