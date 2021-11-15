<?php
    if($crfs!=false){
        foreach ($crfs as $crf){
            echo $crf['id_car_rental_facility']." | ";
            echo $crf['address']." | ";
            echo $crf['working_hours']." | ";
            echo $crf['type']."</br>";
        }
    }
?>