<?php
    class crf_m extends CI_Model{
        public function __construct()
        {
            $this->load->database();
        }

        public function set_crf()
		{
			$data = array(
				'address' => $this->input->post('address'),
				'working_hours' => $this->input->post('working_hours'),
				'type' => $this->input->post('type')
			);

			return $this->db->insert('car_rental_facility', $data);
		}


		public function get_crfs()
		{
			$query = $this->db->select('*')
			->from('car_rental_facility')
			->get();

			if($query->num_rows() > 0){
                $respond = $query->result_array();
            }else{
                $respond = FALSE;
            }
			
			$this->unit->run($respond, 'is_array', 'Czy dane o placówkach są dostarczane w formie tabeli danych.');
            return $respond;
		}


		public function delete($id)
		{
			return $this->db->where('id_car_rental_facility', $id)->delete('car_rental_facility');
		}


		public function update($id)
		{
            $data = array(
				'address' => $this->input->post('address'),
				'working_hours' => $this->input->post('working_hours'),
				'type' => $this->input->post('type')
			);

            $this->db->set($data);

            $this->db->where('id_car_rental_facility', $id);

			$respond = $this->db->update('car_rental_facility');

			$this->unit->run($respond, TRUE, 'Czy wysłano zmodyfikowane dane placówki do bazy.');
            return $respond;
        }


		public function get_crf_by_id($id)
		{
			$query = $this->db->select('*')
			->from('car_rental_facility')
			->where('id_car_rental_facility', $id)
			->get();

			if($query->num_rows() > 0){
                $respond = $query->row_array();
            }else{
                $respond = FALSE;
            }

			return $respond;
		}
    } 