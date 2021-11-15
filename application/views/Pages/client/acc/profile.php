<?php
    if(isset($info)) echo $info;
    echo form_open(current_url());

    echo form_input('email', $acc['email'], "placeholder=$acc[email]");
    echo form_error('email');

    echo form_input('firstname', $acc['firstname'], "placeholder=$acc[firstname]");
    echo form_error('firstname');

    echo form_input('lastname', $acc['lastname'], "placeholder=$acc[lastname]");
    echo form_error('lastname');

    echo form_input('acc_type', 1, 'style="display:none;"');

    echo form_submit('submit', "Zapisz");

    echo form_close();
?>