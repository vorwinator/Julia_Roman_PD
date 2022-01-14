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
}
