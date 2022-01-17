<?php
class car_ride_m extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function set($id_acc, $id_car, $date, $start_address, $finish_address, $kilometers)
    {
        $data = array(
            'id_acc' => $id_acc,
            'id_car' => $id_car,
            'date' => $date,
            'start_address' => $start_address,
            'finish_address' => $finish_address,
            'kilometers' => $kilometers
        );
        $this->rental_status_on($id_car);

        return $this->db->insert('car_ride', $data);
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


    public function get_car_rides()
    {
        $query = $this->db->select('*')
        ->from('car_ride')
        ->join('car', 'car.id_car=car_ride.id_car')
        ->order_by('car_ride.date')
        ->get();

        if ($query->num_rows() > 0) {
            $respond = $query->result_array();
        } else {
            $respond = FALSE;
        }

        return $respond;
    }
}
