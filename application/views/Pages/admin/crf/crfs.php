<?php
    if($crfs!=false){
        foreach ($crfs as $crf){
            echo $crf['id_car_rental_facility']." | ";
            echo $crf['address']." | ";
            echo $crf['working_hours']." | ";
            echo $crf['type']." | ";
?>
            
            <a href=<?php echo site_url('admin/car_rental_facility/delete?id_crf_delete='.$crf['id_car_rental_facility']);?> onclick="return confirm('Na pewno usunąć tą placówkę?')">Usuń</a>
            </br>
<?php
        }
    }
?>