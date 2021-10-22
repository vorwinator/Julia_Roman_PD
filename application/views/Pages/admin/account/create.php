<?php
    if(isset($info)) echo $info;
    echo form_open(current_url());

    echo form_input('email', set_value('email'), "placeholder='Email'");
    echo form_error('email');

    echo form_input('firstname', set_value('firstname'), "placeholder='Imię'");
    echo form_error('firstname');

    echo form_input('lastname', set_value('lastname'), "placeholder='Nazwisko'");
    echo form_error('lastname');

    echo form_password('password', '', "placeholder='Hasło'");
    echo form_error('password');

    echo form_password('password2', '', "placeholder='Powtórz hasło'");
    echo form_error('password2');

    echo form_input('acc_type', 1, 'style="display:none;"');

    echo form_submit('submit', "Stwórz konto");

    echo form_close();
?>