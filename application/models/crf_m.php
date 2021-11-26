<?php
    class crf_m extends CI_Model{
        public function __construct()
        {
            $this->load->database();
        }

        public function set_crf()
		{

			$working_hours = array(
				$this->input->post('working_hours_open_monday')."-".$this->input->post('working_hours_close_monday'),
				$this->input->post('working_hours_open_tuesday')."-".$this->input->post('working_hours_close_tuesday'),
				$this->input->post('working_hours_open_wednesday')."-".$this->input->post('working_hours_close_wednesday'),
				$this->input->post('working_hours_open_thursday')."-".$this->input->post('working_hours_close_thursday'),
				$this->input->post('working_hours_open_friday')."-".$this->input->post('working_hours_close_friday'),
				$this->input->post('working_hours_open_saturday')."-".$this->input->post('working_hours_close_saturday'),
				$this->input->post('working_hours_open_sunday')."-".$this->input->post('working_hours_close_sunday')
			);
			$working_hours_final = "";

			for ($i=0; $i < 7; $i++) { 
				if(strlen($working_hours[$i])<9 || str_contains($working_hours[$i], "Nieczynne")){
					$working_hours[$i]="Nieczynne dzisiaj";
				}
				$working_hours_final .= $working_hours[$i]." ";
			}
			$adress_apartmentnumber = "";
			if($this->input->post('address_apartmentnumber')!=null){
				$adress_apartmentnumber = "/".$this->input->post('address_apartmentnumber');
			}
			$data = array(
				'address' => ucfirst(strtolower($this->input->post('address_city')))." ".ucfirst(strtolower($this->input->post('address_street')))." ".$this->input->post('address_housenumber').$adress_apartmentnumber." ".$this->input->post('address_postalcode'),
				'working_hours' => $working_hours_final,
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
			$working_hours = array(
				$this->input->post('working_hours_open_monday')."-".$this->input->post('working_hours_close_monday'),
				$this->input->post('working_hours_open_tuesday')."-".$this->input->post('working_hours_close_tuesday'),
				$this->input->post('working_hours_open_wednesday')."-".$this->input->post('working_hours_close_wednesday'),
				$this->input->post('working_hours_open_thursday')."-".$this->input->post('working_hours_close_thursday'),
				$this->input->post('working_hours_open_friday')."-".$this->input->post('working_hours_close_friday'),
				$this->input->post('working_hours_open_saturday')."-".$this->input->post('working_hours_close_saturday'),
				$this->input->post('working_hours_open_sunday')."-".$this->input->post('working_hours_close_sunday')
			);
			$working_hours_final = "";

			for ($i=0; $i < 7; $i++) { 
				if(strlen($working_hours[$i])<9 || str_contains($working_hours[$i], "Nieczynne")){
					$working_hours[$i]="Nieczynne dzisiaj";
				}
				$working_hours_final .= $working_hours[$i]." ";
			}
			$adress_apartmentnumber = "";
			if($this->input->post('address_apartmentnumber')!=null){
				$adress_apartmentnumber = "/".$this->input->post('address_apartmentnumber');
			}
            $data = array(
				'address' => ucfirst(strtolower($this->input->post('address_city')))." ".ucfirst(strtolower($this->input->post('address_street')))." ".$this->input->post('address_housenumber').$adress_apartmentnumber." ".$this->input->post('address_postalcode'),
				'working_hours' => $working_hours_final,
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


		public function get_crfs_addresses()
		{
			$query = $this->db->select('address')
			->from('car_rental_facility')
			->get();

			if($query->num_rows() > 0){
                $respond = $query->result_array();
            }else{
                $respond = FALSE;
            }

			return $respond;
		}
    } 