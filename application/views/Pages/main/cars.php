<?php
    foreach ($cars as $car){
        echo $car['brand']." | ";
        echo $car['model']." | ";
        echo $car['number_of_doors']." | ";
        echo $car['number_of_seats']." | ";
        echo $car['drive']." | ";
        echo $car['fuel']." | ";
        echo $car['air_conditioning']." | ";
        echo $car['deposit']." | ";
?>
    <a href=<?php echo site_url('car_all/details?id_car_details='.$car['id_car']);?>>Wybierz</a></br>
<?php } ?>