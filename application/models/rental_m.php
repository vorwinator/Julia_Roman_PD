<?php
    class rental_m extends CI_Model{
        public function __construct()
        {
            $this->load->database();
        }

        public function set($id_car, $id_acc, $crf_address, $start_date, $end_date)
        {
            $query = $this->db->select("id_car_rental_facility")
            ->from('car_rental_facility')
            ->where('address', $crf_address)
            ->get();
            $id_car_rental_facility = $query->row();

            if($_SESSION['return_to']!=null){
                $return_to = $_SESSION['return_to'];
            }
            else{
                $return_to = $crf_address;
            }
            $data = array(
				'id_car' => $id_car,
				'id_acc' => $id_acc,
				'id_car_rental_facility' => $id_car_rental_facility->id_car_rental_facility,
				'start_date' => $start_date,
				'end_date' => $end_date,
				'return_to' => $return_to
			);
            $this->rental_status_on($id_car);

            unset($_SESSION['return_to']);

			return $this->db->insert('rental', $data);
        }

        public function rental_status_on($id_car)
        {
            return $this->db->set('rental_status', 1)
            ->where('id_car', $id_car)
            ->update('car');
        }

        public function rental_status_off($id_car)
        {
            return $this->db->set('rental_status', 0)
            ->where('id_car', $id_car)
            ->update('car');
        }

        public function get_user_rentals($id_acc)
        {
            $query = $this->db->select('*')
            ->from('rental')
            ->join('car', 'car.id_car=rental.id_car')
            ->join('car_details', 'car_details.id_car=car.id_car')
            ->where('id_acc', $id_acc)
            ->order_by('start_date')
            ->get();

            if ($query->num_rows() > 0) {
                $respond = $query->result_array();
            } else {
                $respond = FALSE;
            }

            return $respond;
        }

        public function get_rentals()
        {
            $query = $this->db->select('*')
            ->from('rental')
            ->join('car', 'car.id_car=rental.id_car')
            ->order_by('rental.start_date')
            ->get();

            if ($query->num_rows() > 0) {
                $respond = $query->result_array();
            } else {
                $respond = FALSE;
            }

            return $respond;
        }


        public function delete($id)
        {
            return $this->db->where('id_rental', $id)
            ->delete('rental');
        }
    } 