<?php
    if(isset($info)) echo $info;
    echo form_open('authentication/login');

    echo form_input('email', set_value('email'), "placeholder='Email'");

    echo form_password('password', '', "placeholder='Hasło'");

    echo form_input('acc_type', 1, 'style="display:none;"');

    echo form_submit('submit', "Zaloguj się");

    echo form_close();
?>