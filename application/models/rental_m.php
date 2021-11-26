<?php
    class rental_m extends CI_Model{
        public function __construct()
        {
            $this->load->database();
        }

        public function set($id_car, $id_acc, $crf_address)
        {
            $query = $this->db->select("id_car_rental_facility")
            ->from('car_rental_facility')
            ->where('address', $crf_address);
            $id_car_rental_facility = $query->row();

            if($this->input->post('return_to')!=null){
                $return_to = $this->input->post('return_to');
            }
            else{
                $return_to = $crf_address;
            }
            $data = array(
				'id_car' => $id_car,
				'id_acc' => $id_acc,
				'id_car_rental_facility' => $id_car_rental_facility,
				'start_date' => $this->input->post('start_date'),
				'end_date' => $this->input->post('end_date'),
				'return_to' => $return_to
			);
            $this->rental_status_on($id_car);

			return $this->db->insert('rental', $data);
        }

        public function rental_status_on($id_car)
        {
            return $this->db->set('rental_status', 1)
            ->where('id_car', $id_car)
            ->update('car');
        }
    } 