<?php
    class car_m extends CI_Model{
        public function __construct()
        {
            $this->load->database();
        }
        public function set_car()
		{
			$data = array(
				'release_year' => $this->input->post('release_year'),
				'price_per_day' => $this->input->post('price_per_day'),
				'mileage' => $this->input->post('mileage'),
				'rental_status' => $this->input->post('rental_status'),
				'insurance' => $this->input->post('insurance')
			);
			return $this->db->insert('car', $data);
		}
        public function set_car_details()
		{
            $query = $this->db->query("SELECT max(id_car) AS id_car FROM car");
            $last_inserted_car_id = $query->row();

			$data = array(
                'id_car' => $last_inserted_car_id->id_car,
                'brand' => $this->input->post('brand'),
				'model' => $this->input->post('model'),
				'average_consumption' => $this->input->post('average_consumption'),
				'number_of_airbags' => $this->input->post('number_of_airbags'),
				'number_of_doors' => $this->input->post('number_of_doors'),
				'number_of_seats' => $this->input->post('number_of_seats'),
				'drive' => $this->input->post('drive'),
				'air_conditioning' => $this->input->post('air_conditioning'),
				'gearbox' => $this->input->post('gearbox'),
				'trunk_capacity' => $this->input->post('trunk_capacity'),
				'deposit' => $this->input->post('deposit'),
				'car_type' => $this->input->post('car_type')
			);

			return $this->db->insert('car_details', $data);
		}
    } 