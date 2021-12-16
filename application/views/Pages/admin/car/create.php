<?php
    if(isset($info)) echo $info;
    echo form_open(current_url());

    echo form_input('release_year', set_value('release_year'), "placeholder='Rok produkcji'");
    echo form_error('release_year')."</br>";

    echo form_input('fuel', set_value('fuel'), "placeholder='Rodzaj paliwa'");
    echo form_error('fuel')."</br>";

    echo form_input('price_per_day', set_value('price_per_day'), "placeholder='Cena za dobę w PLN'");
    echo form_error('price_per_day')."</br>";

    echo form_input('mileage', set_value('mileage'), "placeholder='Przebieg'");
    echo form_error('mileage')."</br>";

    echo form_input('rental_status', 0, 'style="display:none;"');

    echo form_input('insurance', set_value('insurance'), "placeholder='Ubezpieczenie'");
    echo form_error('insurance')."</br>";

    echo "szczegóły"."</br>";

    echo form_input('brand', set_value('brand'), "placeholder='Marka'");
    echo form_error('brand')."</br>";

    echo form_input('model', set_value('model'), "placeholder='Model'");
    echo form_error('model')."</br>";

    echo form_input('average_consumption', set_value('average_consumption'), "placeholder='Średnie spalanie'");
    echo form_error('average_consumption')."</br>";

    echo form_input('number_of_airbags', set_value('number_of_airbags'), "placeholder='Liczba poduszek powietrznych'");
    echo form_error('number_of_airbags')."</br>";

    echo form_input('number_of_doors', set_value('number_of_doors'), "placeholder='Liczba drzwi'");
    echo form_error('number_of_doors')."</br>";

    echo form_input('number_of_seats', set_value('number_of_seats'), "placeholder='Liczba miejsc'");
    echo form_error('number_of_seats')."</br>";

    echo form_input('drive', set_value('drive'), "placeholder='Napęd'");
    echo form_error('drive')."</br>";

    echo form_input('air_conditioning', set_value('air_conditioning'), "placeholder='Klimatyzacja'");
    echo form_error('air_conditioning')."</br>";

    echo form_input('gearbox', set_value('gearbox'), "placeholder='Skrzynia biegów'");
    echo form_error('gearbox')."</br>";

    echo form_input('trunk_capacity', set_value('trunk_capacity'), "placeholder='Pojemność bagażnika'");
    echo form_error('trunk_capacity')."</br>";

    echo form_input('deposit', set_value('deposit'), "placeholder='Kaucja'");
    echo form_error('deposit')."</br>";

    echo form_input('car_type', set_value('car_type'), "placeholder='Typ samochodu'");
    echo form_error('car_type')."</br>";

    echo form_submit('submit', "Dodaj auto");

    echo form_close();
?>