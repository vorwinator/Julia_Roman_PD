<?php
    foreach ($accounts as $account){
        echo $account['id_acc']." | ";
        echo $account['email']." | ";
        echo $account['firstname']." | ";
        echo $account['lastname']." | ";
        echo $account['acc_type']."</br>";
    }
?>