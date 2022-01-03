<div class="container-fluid d-flex justify-content-center">
    <div class="col-md-8 col-lg-6 col-xl-6 offset-1">
        <?php
        echo form_open(current_url(), 'class="col-lg-10 pd-bottom"');
    
        $address = explode(" ", str_replace('/',' ', $crf['address']));
        $i = 0;
        $city=$address[$i];$i++;
        $street=$address[$i];$i++;
        $house_number=$address[$i];$i++;
        if(str_contains($crf['address'], '/')){
            $apartment_number=$address[$i];$i++;
        }
        else {
            $apartment_number="";
        }
        $postalcode=$address[$i];
        ?>
        <h1 class="big-header-style text-center">Edytuj placówkę</h1>
        <div class="row">
            <h3 class="small-header-style text-center">Typ placówki</h3>
            <div class="col-md-12">
                <div class="form-floating mb-3">
                    <?php
                    $type_options = array(
                        'Odbiór' => 'Odbiór',
                        'Zwrot' => 'Zwrot',
                        'Oba' => 'Oba'
                    );
                    echo form_dropdown('type', $type_options, $crf['type'], 'class="col-md-12 form-control-lg"');
                    ?>
                    <div class="error-message-style">
                        <?php
                        echo form_error('type');
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <h3 class="small-header-style text-center">Adres</h3>
            <div class="col-md-6">
                <div class="form-floating mb-3">
                    <?php
                    echo form_input('address_street', $street, 'class="form-control form-control-lg" placeholder="Ulica"');
                    echo form_label("Ulica", 'address_street');
                    ?>
                    <div class="error-message-style">
                        <?php
                        echo form_error('address_street');
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-floating mb-3">
                    <?php
                    echo form_input('address_housenumber', $house_number, 'class="form-control form-control-lg" placeholder="Nr domu"');
                    echo form_label("Nr domu", 'address_housenumber');
                    ?>
                    <div class="error-message-style">
                        <?php
                        echo form_error('address_housenumber');
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-floating mb-3">
                    <?php
                    echo form_input('address_apartmentnumber', $apartment_number, 'class="form-control form-control-lg" placeholder="Nr mieszk."');
                    echo form_label("Nr mieszk.", 'address_apartmentnumber');
                    ?>
                    <div class="error-message-style">
                        <?php
                        echo form_error('address_apartmentnumber');
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating mb-3">
                    <?php
                    echo form_input('address_city', $city, 'class="form-control form-control-lg" placeholder="Miasto"');
                    echo form_label("Miasto", 'address_city');
                    ?>
                    <div class="error-message-style">
                        <?php
                        echo form_error('address_city');
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating mb-3">
                    <?php
                    echo form_input('address_postalcode', $postalcode, 'class="form-control form-control-lg" placeholder="Kod pocztowy"');
                    echo form_label("Kod pocztowy", 'address_postalcode');
                    ?>
                    <div class="error-message-style">
                        <?php
                        echo form_error('address_postalcode');
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="small-header-style text-center">Godziny otwarcia</h3>
        <?php
        $working_hours = explode(" ", str_replace('-',' ', $crf['working_hours']));
        $i = 0;
        ?>
        <div class="row">
            <div class="col-md-6">
                <div class="etykieta">Poniedziałek</div>
            </div>
            <div class="col-md-3">
                <div class="form-floating mb-3">
                    <input type="time" id="working_hours_open_monday" name="working_hours_open_monday" class="form-control form-control-lg" value='<?php echo $working_hours[$i];$i++?>'>
                    <?php
                    echo form_label("Otwarcie", 'working_hours_open_monday');
                    ?>
                    <div class=" error-message-style">
                        <?php
                        echo form_error('working_hours_open_monday');
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-floating mb-3">
                    <input type="time" id="working_hours_close_monday" name="working_hours_close_monday" class="form-control form-control-lg" value='<?php echo $working_hours[$i];$i++?>'>
                    <?php
                    echo form_label("Zamknięcie", 'working_hours_close_monday');
                    ?>
                    <div class="error-message-style">
                        <?php
                        echo form_error('working_hours_close_monday');
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="etykieta">Wtorek</div>
            </div>
            <div class="col-md-3">
                <div class="form-floating mb-3">
                    <input type="time" id="working_hours_open_tuesday" name="working_hours_open_tuesday" class="form-control form-control-lg" value='<?php echo $working_hours[$i];$i++?>'>
                    <?php
                    echo form_label("Otwarcie", 'working_hours_open_tuesday');
                    ?>
                    <div class="error-message-style">
                        <?php
                        echo form_error('working_hours_open_tuesday');
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-floating mb-3">
                    <input type="time" id="working_hours_close_tuesday" name="working_hours_close_tuesday" class="form-control form-control-lg" value='<?php echo $working_hours[$i];$i++?>'>
                    <?php
                    echo form_label("Zamknięcie", 'working_hours_close_tuesday');
                    ?>
                    <div class="error-message-style">
                        <?php
                        echo form_error('working_hours_close_tuesday');
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="etykieta">Środa</div>
            </div>
            <div class="col-md-3">
                <div class="form-floating mb-3">
                    <input type="time" id="working_hours_open_wednesday" name="working_hours_open_wednesday" class="form-control form-control-lg" value='<?php echo $working_hours[$i];$i++?>'>
                    <?php
                    echo form_label("Otwarcie", 'working_hours_open_wednesday');
                    ?>
                    <div class="error-message-style">
                        <?php
                        echo form_error('working_hours_open_tuesday');
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-floating mb-3">
                    <input type="time" id="working_hours_close_wednesday" name="working_hours_close_wednesday" class="form-control form-control-lg" value='<?php echo $working_hours[$i];$i++?>'>
                    <?php
                    echo form_label("Zamknięcie", 'working_hours_close_wednesday');
                    ?>
                    <div class="error-message-style">
                        <?php
                        echo form_error('working_hours_close_wednesday');
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="etykieta">Czwartek</div>
            </div>
            <div class="col-md-3">
                <div class="form-floating mb-3">
                    <input type="time" id="working_hours_open_thursday" name="working_hours_open_thursday" class="form-control form-control-lg" value='<?php echo $working_hours[$i];$i++?>'>
                    <?php
                    echo form_label("Otwarcie", 'working_hours_open_thursday');
                    ?>
                    <div class="error-message-style">
                        <?php
                        echo form_error('working_hours_open_thursday');
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-floating mb-3">
                    <input type="time" id="working_hours_close_thursday" name="working_hours_close_thursday" class="form-control form-control-lg" value='<?php echo $working_hours[$i];$i++?>'>
                    <?php
                    echo form_label("Zamknięcie", 'working_hours_close_thursday');
                    ?>
                    <div class="error-message-style">
                        <?php
                        echo form_error('working_hours_close_thursday');
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="etykieta">Piątek</div>
            </div>
            <div class="col-md-3">
                <div class="form-floating mb-3">
                    <input type="time" id="working_hours_open_friday" name="working_hours_open_friday" class="form-control form-control-lg" value='<?php echo $working_hours[$i];$i++?>'>
                    <?php
                    echo form_label("Otwarcie", 'working_hours_open_friday');
                    ?>
                    <div class="error-message-style">
                        <?php
                        echo form_error('working_hours_open_friday');
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-floating mb-3">
                    <input type="time" id="working_hours_close_friday" name="working_hours_close_friday" class="form-control form-control-lg" value='<?php echo $working_hours[$i];$i++?>'>
                    <?php
                    echo form_label("Zamknięcie", 'working_hours_close_friday');
                    ?>
                    <div class="error-message-style">
                        <?php
                        echo form_error('working_hours_close_friday');
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="etykieta">Sobota</div>
            </div>
            <div class="col-md-3">
                <div class="form-floating mb-3">
                    <input type="time" id="working_hours_open_saturday" name="working_hours_open_saturday" class="form-control form-control-lg" value='<?php echo $working_hours[$i];$i++?>'>
                    <?php
                    echo form_label("Otwarcie", 'working_hours_open_saturday');
                    ?>
                    <div class="error-message-style">
                        <?php
                        echo form_error('working_hours_open_saturday');
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-floating mb-3">
                    <input type="time" id="working_hours_close_saturday" name="working_hours_close_saturday" class="form-control form-control-lg" value='<?php echo $working_hours[$i];$i++?>'>
                    <?php
                    echo form_label("Zamknięcie", 'working_hours_close_saturday');
                    ?>
                    <div class="error-message-style">
                        <?php
                        echo form_error('working_hours_close_saturday');
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="etykieta">Niedziela</div>
            </div>
            <div class="col-md-3">
                <div class="form-floating mb-3">
                    <input type="time" id="working_hours_open_sunday" name="working_hours_open_sunday" class="form-control form-control-lg" value='<?php echo $working_hours[$i];$i++?>'>
                    <?php
                    echo form_label("Otwarcie", 'working_hours_open_sunday');
                    ?>
                    <div class="error-message-style">
                        <?php
                        echo form_error('working_hours_open_sunday');
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-floating mb-3">
                    <input type="time" id="working_hours_close_sunday" name="working_hours_close_sunday" class="form-control form-control-lg" value='<?php echo $working_hours[$i];$i++?>'>
                    <?php
                    echo form_label("Zamknięcie", 'working_hours_close_sunday');
                    ?>
                    <div class="error-message-style">
                        <?php
                        echo form_error('working_hours_close_sunday');
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <?php
            echo form_submit('submit', "Edytuj placówkę", 'class="btn btn-outline-primary btn-lg single-button-style"');
            ?>
        </div>
        <?php
        echo form_close();
        ?>
    </div>
</div>