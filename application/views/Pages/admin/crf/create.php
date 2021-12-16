<?php
    if(isset($info)) echo $info;
    echo form_open(current_url());

    echo form_input('address_city', set_value('address_city'), "placeholder='Miasto'");
    echo form_error('address_city')."</br>";

    echo form_input('address_street', set_value('address_street'), "placeholder='Ulica'");
    echo form_error('address_street')."</br>";

    echo form_input('address_housenumber', set_value('address_housenumber'), "placeholder='Numer budynku'");
    echo form_error('address_housenumber')."</br>";

    echo form_input('address_apartmentnumber', set_value('address_apartmentnumber'), "placeholder='Numer mieszkania'");
    echo form_error('address_apartmentnumber')."</br>";

    echo form_input('address_postalcode', set_value('address_postalcode'), "placeholder='Kod pocztowy'");
    echo form_error('address_postalcode')."</br>";

    echo form_input('working_hours_open_monday', set_value('working_hours_open_monday'), "placeholder='Godzina otwarcia'");
    echo form_error('working_hours_open_monday');
    echo form_input('working_hours_close_monday', set_value('working_hours_close_monday'), "placeholder='Godzina zamknięcia'");
    echo form_error('working_hours_close_monday')."</br>";

    echo form_input('working_hours_open_tuesday', set_value('working_hours_open_tuesday'), "placeholder='Godzina otwarcia'");
    echo form_error('working_hours_open_tuesday');
    echo form_input('working_hours_close_tuesday', set_value('working_hours_close_tuesday'), "placeholder='Godzina zamknięcia'");
    echo form_error('working_hours_close_tuesday')."</br>";

    echo form_input('working_hours_open_wednesday', set_value('working_hours_open_wednesday'), "placeholder='Godzina otwarcia'");
    echo form_error('working_hours_open_wednesday');
    echo form_input('working_hours_close_wednesday', set_value('working_hours_close_wednesday'), "placeholder='Godzina zamknięcia'");
    echo form_error('working_hours_close_wednesday')."</br>";

    echo form_input('working_hours_open_thursday', set_value('working_hours_open_thursday'), "placeholder='Godzina otwarcia'");
    echo form_error('working_hours_open_thursday');
    echo form_input('working_hours_close_thursday', set_value('working_hours_close_thursday'), "placeholder='Godzina zamknięcia'");
    echo form_error('working_hours_close_thursday')."</br>";

    echo form_input('working_hours_open_friday', set_value('working_hours_open_friday'), "placeholder='Godzina otwarcia'");
    echo form_error('working_hours_open_friday');
    echo form_input('working_hours_close_friday', set_value('working_hours_close_friday'), "placeholder='Godzina zamknięcia'");
    echo form_error('working_hours_close_friday')."</br>";

    echo form_input('working_hours_open_saturday', set_value('working_hours_open_saturday'), "placeholder='Godzina otwarcia'");
    echo form_error('working_hours_open_saturday');
    echo form_input('working_hours_close_saturday', set_value('working_hours_close_saturday'), "placeholder='Godzina zamknięcia'");
    echo form_error('working_hours_close_saturday')."</br>";

    echo form_input('working_hours_open_sunday', set_value('working_hours_open_sunday'), "placeholder='Godzina otwarcia'");
    echo form_error('working_hours_open_sunday');
    echo form_input('working_hours_close_sunday', set_value('working_hours_close_sunday'), "placeholder='Godzina zamknięcia'");
    echo form_error('working_hours_close_sunday')."</br>";

    $type_options = array(
        'Odbiór'=>'Odbiór',
        'Zwrot'=>'Zwrot',
        'Oba'=>'Oba'
    );
    echo form_dropdown('type', $type_options);
    echo form_error('type')."</br>";

    echo form_submit('submit', "Dodaj placówkę");

    echo form_close();
?>