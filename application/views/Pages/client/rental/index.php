<?php
        echo $car['brand']." | ";
        echo $car['model']." | ";
        echo $car['number_of_doors']." | ";
        echo $car['number_of_seats']." | ";
        echo $car['drive']." | ";
        echo $car['fuel']." | ";
        echo $car['air_conditioning']." | ";
        echo $car['deposit']." | ";
        echo $car['price_per_day'];
?>
<?php
    if(isset($info)) echo $info;
    echo form_open(current_url());

    echo form_input('start_date', set_value('start_date'), "placeholder='Data rozpoczęcia'");
    echo form_error('start_date');

    echo form_input('end_date', set_value('end_date'), "placeholder='Data zakończenia'");
    echo form_error('end_date');
    
    echo form_dropdown('address', $address_options);
    echo form_error('address');

    echo form_submit('submit', "Zatwierdź wynajem");

    echo form_close();
?>