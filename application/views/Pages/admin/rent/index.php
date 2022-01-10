<?php
foreach($rentals as $rent){//to ma być przed <tr>
    echo $rent['id_rental'];//id wypożyczenia
    echo $rent['id_car'];//id samochodu
    echo $rent['id_acc'];//id klienta
    echo $rent['id_car_rental_facility'];//id placówki
    echo $rent['start_date'];//data wypożyczenia
    echo $rent['end_date'];//data zwrotu
    echo $rent['return_to'];//placówka zwrotu
    echo $rent['rent_type'];//przejazd/wynajem
}//to ma być za <tr>
?>