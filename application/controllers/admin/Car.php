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
            $this->form_validation->set_rules('fuel', 'Rodzaj paliwa', 'required');
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
                $uploadOk = 1;
                if (!file_exists("./assets/pictures/" . $_POST['brand'] . "/" . $_POST['model'])) {
                    mkdir("./assets/pictures/" . $_POST['brand'] . "/" . $_POST['model'], 0777, true);
                }
                $number_of_pictures = count($_FILES['pictures']['name']);
                $target_dir = "./assets/pictures/" . $_POST['brand'] . "/" . $_POST['model'] . "/";
                for ($i=0; $i < $number_of_pictures; $i++) {
                    if(str_contains($_FILES["pictures"]["name"][$i], '.png')){
                        $_FILES["pictures"]["name"][$i] = $i . ".png";
                    }
                    if(str_contains($_FILES["pictures"]["name"][$i], '.jpg')){
                        $_FILES["pictures"]["name"][$i] = $i . ".jpg";
                    }
                    $target_file[$i] = $target_dir . $_FILES["pictures"]["name"][$i];
                    $imageFileType = strtolower(pathinfo($target_file[$i], PATHINFO_EXTENSION));
                    // sprawdzenie czy plik już istnieje
                    if (file_exists($target_file[$i])) {
                        $data['pictures_error'] = "Plik " . $_FILES["pictures"]["name"][$i] . " już istnieje.";
                        $uploadOk = 0;
                    }
                    // sprawdzenie rozmiaru pliku
                    if ($_FILES["pictures"]["size"][$i] > 500000) {
                        $data['pictures_error'] = "Plik " . $_FILES["pictures"]["name"][$i] . " jest zbyt duży.";
                        $uploadOk = 0;
                    }
                    // dopuszczenie tylko wybranych formatów
                    if ($imageFileType != "jpg" && $imageFileType != "png") {
                        $data['pictures_error'] = "Plik " . $_FILES["pictures"]["name"][$i] . " powinien być z roszerzeniem .jpg lub .png.";
                        $uploadOk = 0;
                    }
                    // sprawdzenie czy obraz jest prawdziwym obrazem
                    $check = getimagesize($_FILES["pictures"]["tmp_name"][$i]);
                    if ($check !== false) {
                        $data['success'] = "Plik " . $_FILES["pictures"]["name"][$i] . " jest obrazem " . $check['mime'] . ".";
                    } 
                    else {
                        $data['pictures_error'] = "Plik " . $_FILES["pictures"]["name"][$i] . " nie jest obrazem.";
                        $uploadOk = 0;
                    }
                }
                // sprawdzenie czy wystąpił błąd
                if ($uploadOk == 1) {
                    //upload plików
                    for ($i=0; $i < $number_of_pictures; $i++) { 
                        if (move_uploaded_file($_FILES["pictures"]["tmp_name"][$i], $target_file[$i])) {
                            $data['success2'] = "Plik " . htmlspecialchars(basename($_FILES["pictures"]["name"][$i])) . " został wgrany.";
                        } 
                        else {
                            $data['pictures_error'] = "Plik " . htmlspecialchars(basename($_FILES["pictures"]["name"][$i])) . " nie został wgrany. Nieznany błąd.";
                            $uploadOk = 0;
                        }
                    }
                }
                
                if($uploadOk == 1){
                    if($this->car_m->set_car($_FILES["pictures"]["name"])){
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
                else {
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
            $this->form_validation->set_rules('fuel', 'Rodzaj paliwa', 'required');
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