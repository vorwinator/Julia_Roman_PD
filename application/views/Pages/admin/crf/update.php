<?php
    if(isset($info)) echo $info;
    echo form_open(current_url());

    echo form_input('address', $crf['address'], "placeholder=$crf[address]");
    echo form_error('address');

    echo form_input('working_hours', $crf['working_hours'], "placeholder=$crf[working_hours]");
    echo form_error('working_hours');

    $type_options = array(
        'Odbiór'=>'Odbiór',
        'Zwrot'=>'Zwrot',
        'Oba'=>'Oba'
    );
    echo form_dropdown('type', $type_options, $crf['type']);
    echo form_error('type');

    echo form_submit('submit', "Edytuj placówkę");

    echo form_close();
?>