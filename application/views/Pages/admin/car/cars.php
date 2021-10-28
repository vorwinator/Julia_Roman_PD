<?php
    foreach ($cars as $car){
        echo $car['id_car']." | ";
        echo $car['release_year']." | ";
        echo $car['price_per_day']." | ";
        echo $car['mileage']." | ";
        echo $car['rental_status']." | ";
        echo $car['insurance']."</br>";
        echo $car['brand']." | ";
        echo $car['model']." | ";
        echo $car['average_consumption']." | ";
        echo $car['number_of_airbags']." | ";
        echo $car['number_of_doors']." | ";
        echo $car['number_of_seats']." | ";
        echo $car['drive']." | ";
        echo $car['air_conditioning']." | ";
        echo $car['gearbox']." | ";
        echo $car['trunk_capacity']." | ";
        echo $car['deposit']." | ";
        echo $car['car_type']."</br>";
    }
?>