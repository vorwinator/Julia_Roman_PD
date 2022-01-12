<?php
    class car_m extends CI_Model{
        public function __construct()
        {
            $this->load->database();
        }


		public function delete($id)
		{
			return $this->db->where('id_car', $id)->delete('car');
		}

        public function set_car($pictures)
		{
			$pictures_string = "";
			foreach($pictures as $picture){
				$pictures_string = $pictures_string . $picture . " ";
			}
			$data = array(
				'release_year' => $this->input->post('release_year'),
				'fuel' => $this->input->post('fuel'),
				'price_per_day' => $this->input->post('price_per_day'),
				'price_per_kilometer_with_chauffeur' => $this->input->post('price_per_kilometer_with_chauffeur'),
				'mileage' => $this->input->post('mileage'),
				'rental_status' => $this->input->post('rental_status'),
				'insurance' => $this->input->post('insurance'),
				'pictures' => $pictures_string
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


		public function get_cars_with_details()
		{
			$query = $this->db->select('*')
			->from('car_details')
			->join('car', 'car.id_car=car_details.id_car')
			->get();

			if($query->num_rows() > 0){
                $respond = $query->result_array();
            }else{
                $respond = FALSE;
            }

			$this->unit->run($respond, 'is_array', 'Czy dane o samochodach są dostarczane w formie tabeli danych.');
			return $respond;
		}


		public function get_unique_cars_with_details_free_to_rent()
		{
			$query = $this->db->select('*')
			->from('car_details')
			->join('car', 'car.id_car=car_details.id_car')
			->where('car.rental_status', 0)
			->distinct('car.model')
			->get();

			if($query->num_rows() > 0){
                $respond = $query->result_array();
            }else{
                $respond = FALSE;
            }

			$this->unit->run($respond, 'is_array', 'Czy dane o samochodach są dostarczane w formie tabeli danych.');
			return $respond;
		}


		public function get_car_by_id($id)
		{
            $query = $this->db->select('*')
			->from('car_details')
			->join('car', 'car.id_car=car_details.id_car')
			->where('car.id_car', $id)
			->get();

			if($query->num_rows() > 0){
                $respond = $query->row_array();
            }else{
                $respond = FALSE;
            }

			return $respond;
        }


		public function update($id_car)
		{
            $data = array(
				'release_year' => $this->input->post('release_year'),
				'fuel' => $this->input->post('fuel'),
				'price_per_day' => $this->input->post('price_per_day'),
				'price_per_kilometer_with_chauffeur' => $this->input->post('price_per_kilometer_with_chauffeur'),
				'mileage' => $this->input->post('mileage'),
				'rental_status' => $this->input->post('rental_status'),
				'insurance' => $this->input->post('insurance')
			);
			$this->update_details($id_car);

            $this->db->set($data);

            $this->db->where('id_car', $id_car);

			$respond = $this->db->update('car');

			$this->unit->run($respond, TRUE, 'Czy wysłano zmodyfikowane dane samochodu do bazy.');
            return $respond;
        }


		public function update_details($id_car)
		{
            $data = array(
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

            $this->db->set($data);

            $this->db->where('id_car', $id_car);

			$respond = $this->db->update('car_details');

			$this->unit->run($respond, TRUE, 'Czy wysłano zmodyfikowane dane szczegółów samochodu do bazy.');
            return $respond;
        }
    } 