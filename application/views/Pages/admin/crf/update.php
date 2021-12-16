<?php
    if(isset($info)) echo $info;
    echo form_open(current_url());

    $address = explode(" ", str_replace('/',' ', $crf['address']));
    $i = 0;

    echo form_input('address_city', $address[$i], "placeholder=$address[$i]");$i++;
    echo form_error('address_city')."</br>";

    echo form_input('address_street', $address[$i], "placeholder=$address[$i]");$i++;
    echo form_error('address_street')."</br>";

    echo form_input('address_housenumber', $address[$i], "placeholder=$address[$i]");$i++;
    echo form_error('address_housenumber')."</br>";

if(str_contains($crf['address'], '/')){
    echo form_input('address_apartmentnumber', $address[$i], "placeholder=$address[$i]");$i++;
    echo form_error('address_apartmentnumber')."</br>";
}
    echo form_input('address_postalcode', $address[$i], "placeholder=$address[$i]");
    echo form_error('address_postalcode')."</br>";

    $working_hours = explode(" ", str_replace('-',' ', $crf['working_hours']));
    $i = 0;

    echo form_input('working_hours_open_monday', $working_hours[$i], "placeholder=$working_hours[$i]");$i++;
    echo form_error('working_hours_open_monday');
    echo form_input('working_hours_close_monday', $working_hours[$i], "placeholder=$working_hours[$i]");$i++;
    echo form_error('working_hours_close_monday')."</br>";

    echo form_input('working_hours_open_tuesday', $working_hours[$i], "placeholder=$working_hours[$i]");$i++;
    echo form_error('working_hours_open_tuesday');
    echo form_input('working_hours_close_tuesday', $working_hours[$i], "placeholder=$working_hours[$i]");$i++;
    echo form_error('working_hours_close_tuesday')."</br>";

    echo form_input('working_hours_open_wednesday', $working_hours[$i], "placeholder=$working_hours[$i]");$i++;
    echo form_error('working_hours_open_wednesday');
    echo form_input('working_hours_close_wednesday', $working_hours[$i], "placeholder=$working_hours[$i]");$i++;
    echo form_error('working_hours_close_wednesday')."</br>";

    echo form_input('working_hours_open_thursday', $working_hours[$i], "placeholder=$working_hours[$i]");$i++;
    echo form_error('working_hours_open_thursday');
    echo form_input('working_hours_close_thursday', $working_hours[$i], "placeholder=$working_hours[$i]");$i++;
    echo form_error('working_hours_close_thursday')."</br>";

    echo form_input('working_hours_open_friday', $working_hours[$i], "placeholder=$working_hours[$i]");$i++;
    echo form_error('working_hours_open_friday');
    echo form_input('working_hours_close_friday', $working_hours[$i], "placeholder=$working_hours[$i]");$i++;
    echo form_error('working_hours_close_friday')."</br>";

    echo form_input('working_hours_open_saturday', $working_hours[$i], "placeholder=$working_hours[$i]");$i++;
    echo form_error('working_hours_open_saturday');
    echo form_input('working_hours_close_saturday', $working_hours[$i], "placeholder=$working_hours[$i]");$i++;
    echo form_error('working_hours_close_saturday')."</br>";

    echo form_input('working_hours_open_sunday', $working_hours[$i], "placeholder=$working_hours[$i]");$i++;
    echo form_error('working_hours_open_sunday');
    echo form_input('working_hours_close_sunday', $working_hours[$i], "placeholder=$working_hours[$i]");
    echo form_error('working_hours_close_sunday')."</br>";

    $type_options = array(
        'Odbiór'=>'Odbiór',
        'Zwrot'=>'Zwrot',
        'Oba'=>'Oba'
    );
    echo form_dropdown('type', $type_options, $crf['type']);
    echo form_error('type')."</br>";

    echo form_submit('submit', "Edytuj placówkę");

    echo form_close();
?>