<?php
    if(isset($info)) echo $info;
    echo form_open(current_url());

    echo form_input('release_year', $car['release_year'], "placeholder='Rok produkcji'");
    echo form_error('release_year')."</br>";

    echo form_input('fuel', $car['fuel'], "placeholder='Rodzaj paliwa'");
    echo form_error('fuel')."</br>";

    echo form_input('price_per_day', $car['price_per_day'], "placeholder='Cena za dobę w PLN'");
    echo form_error('price_per_day')."</br>";

    echo form_input('mileage', $car['mileage'], "placeholder='Przebieg'");
    echo form_error('mileage')."</br>";

    echo form_input('rental_status', $car['rental_status'], "placeholder='Status wypożyczenia'")."</br>";

    echo form_input('insurance', $car['insurance'], "placeholder='Ubezpieczenie'");
    echo form_error('insurance')."</br>";

    echo "szczegóły"."</br>";

    echo form_input('brand', $car['brand'], "placeholder='Marka'");
    echo form_error('brand')."</br>";

    echo form_input('model', $car['model'], "placeholder='Model'");
    echo form_error('model')."</br>";

    echo form_input('average_consumption', $car['average_consumption'], "placeholder='Średnie spalanie'");
    echo form_error('average_consumption')."</br>";

    echo form_input('number_of_airbags', $car['number_of_airbags'], "placeholder='Liczba poduszek powietrznych'");
    echo form_error('number_of_airbags')."</br>";

    echo form_input('number_of_doors', $car['number_of_doors'], "placeholder='Liczba drzwi'");
    echo form_error('number_of_doors')."</br>";

    echo form_input('number_of_seats', $car['number_of_seats'], "placeholder='Liczba miejsc'");
    echo form_error('number_of_seats')."</br>";

    echo form_input('drive', $car['drive'], "placeholder='Napęd'");
    echo form_error('drive')."</br>";

    echo form_input('air_conditioning', $car['air_conditioning'], "placeholder='Klimatyzacja'");
    echo form_error('air_conditioning')."</br>";

    echo form_input('gearbox', $car['gearbox'], "placeholder='Skrzynia biegów'");
    echo form_error('gearbox')."</br>";

    echo form_input('trunk_capacity', $car['trunk_capacity'], "placeholder='Pojemność bagażnika'");
    echo form_error('trunk_capacity')."</br>";

    echo form_input('deposit', $car['deposit'], "placeholder='Kaucja'");
    echo form_error('deposit')."</br>";

    echo form_input('car_type', $car['car_type'], "placeholder='Typ samochodu'");
    echo form_error('car_type')."</br>";

    echo form_submit('submit', "Edytuj auto");

    echo form_close();
?>