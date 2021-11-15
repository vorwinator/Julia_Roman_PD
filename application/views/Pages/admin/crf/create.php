<?php
    if(isset($info)) echo $info;
    echo form_open(current_url());

    echo form_input('address', set_value('address'), "placeholder='Adres'");
    echo form_error('address');

    echo form_input('working_hours', set_value('working_hours'), "placeholder='Godziny pracy'");
    echo form_error('working_hours');

    $type_options = array(
        'Odbiór'=>'Odbiór',
        'Zwrot'=>'Zwrot',
        'Oba'=>'Oba'
    );
    echo form_dropdown('type', $type_options);
    echo form_error('type');

    echo form_submit('submit', "Dodaj placówkę");

    echo form_close();
?>