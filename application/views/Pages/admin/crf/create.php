<div class="container-fluid d-flex justify-content-center">
    <div class="col-md-8 col-lg-6 col-xl-6 offset-1">
        <!-- <form class="col-lg-10 pd-bottom"> -->
        <?php
        echo form_open(current_url(), 'class="col-lg-10 pd-bottom"');
        ?>
        <h1 class="big-header-style text-center">Dodaj placówkę</h1>
        <div class="row">
            <h3 class="small-header-style text-center">Typ placówki</h3>
            <div class="col-md-12">
                <div class="form-floating mb-3">
                    <!-- <select class="col-md-12 form-control-lg">
                        <option>Odbiór</option>
                        <option>Zwrot</option>
                    </select> -->
                    <?php
                    $type_options = array(
                        'Odbiór' => 'Odbiór',
                        'Zwrot' => 'Zwrot',
                        'Oba' => 'Oba'
                    );
                    echo form_dropdown('type', $type_options, '', 'class="col-md-12 form-control-lg"');
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
            <div class="col-md-8">
                <div class="form-floating mb-3">
                    <?php
                    echo form_input('address_street', set_value('address_street'), 'class="form-control form-control-lg" placeholder="Ulica"');
                    echo form_label("Ulica", 'address_street');
                    ?>
                    <div class="error-message-style">
                        <?php
                        echo form_error('address_street');
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-floating mb-3">
                    <?php
                    echo form_input('address_housenumber', set_value('address_housenumber'), 'class="form-control form-control-lg" placeholder="Nr domu"');
                    echo form_label("Nr domu", 'address_housenumber');
                    ?>
                    <div class="error-message-style">
                        <?php
                        echo form_error('address_housenumber');
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-floating mb-3">
                    <?php
                    echo form_input('address_apartmentnumber', set_value('address_apartmentnumber'), 'class="form-control form-control-lg" placeholder="Nr mieszk."');
                    echo form_label("Nr mieszk.", 'address_apartmentnumber');
                    ?>
                    <div class="error-message-style">
                        <?php
                        echo form_error('address_apartmentnumber');
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-floating mb-3">
                    <?php
                    echo form_input('address_city', set_value('address_city'), 'class="form-control form-control-lg" placeholder="Miasto"');
                    echo form_label("Miasto", 'address_city');
                    ?>
                    <div class="error-message-style">
                        <?php
                        echo form_error('address_city');
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <?php
                    echo form_input('address_postalcode', set_value('address_postalcode'), 'class="form-control form-control-lg" placeholder="Kod pocztowy"');
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
        <div class="row">
            <div class="col-md-6">
                <div class="etykieta">Poniedziałek</div>
            </div>
            <div class="col-md-3">
                <div class="form-floating mb-3">
                    <input type="time" id="working_hours_open_monday" name="working_hours_open_monday" class="form-control form-control-lg">
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
                    <input type="time" id="working_hours_close_monday" name="working_hours_close_monday" class="form-control form-control-lg">
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
                    <input type="time" id="working_hours_open_tuesday" name="working_hours_open_tuesday" class="form-control form-control-lg">
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
                    <input type="time" id="working_hours_close_tuesday" name="working_hours_close_tuesday" class="form-control form-control-lg">
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
                    <input type="time" id="working_hours_open_wednesday" name="working_hours_open_wednesday" class="form-control form-control-lg">
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
                    <input type="time" id="working_hours_close_wednesday" name="working_hours_close_wednesday" class="form-control form-control-lg">
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
                    <input type="time" id="working_hours_open_thursday" name="working_hours_open_thursday" class="form-control form-control-lg">
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
                    <input type="time" id="working_hours_close_thursday" name="working_hours_close_thursday" class="form-control form-control-lg">
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
                    <input type="time" id="working_hours_open_friday" name="working_hours_open_friday" class="form-control form-control-lg">
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
                    <input type="time" id="working_hours_close_friday" name="working_hours_close_friday" class="form-control form-control-lg">
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
                    <input type="time" id="working_hours_open_saturday" name="working_hours_open_saturday" class="form-control form-control-lg">
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
                    <input type="time" id="working_hours_close_saturday" name="working_hours_close_saturday" class="form-control form-control-lg">
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
                    <input type="time" id="working_hours_open_sunday" name="working_hours_open_sunday" class="form-control form-control-lg">
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
                    <input type="time" id="working_hours_close_sunday" name="working_hours_close_sunday" class="form-control form-control-lg">
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
            echo form_submit('submit', "Dodaj placówkę", 'class="btn btn-outline-primary btn-lg single-button-style"');
            ?>
        </div>
        <?php
        echo form_close();
        ?>
    </div>
</div>
<?php
// if (isset($info)) echo $info;
// echo form_open(current_url());

// echo form_input('address_city', set_value('address_city'), "placeholder='Miasto'");
// echo form_error('address_city') . "</br>";

// echo form_input('address_street', set_value('address_street'), "placeholder='Ulica'");
// echo form_error('address_street') . "</br>";

// echo form_input('address_housenumber', set_value('address_housenumber'), "placeholder='Numer budynku'");
// echo form_error('address_housenumber') . "</br>";

// echo form_input('address_apartmentnumber', set_value('address_apartmentnumber'), "placeholder='Numer mieszkania'");
// echo form_error('address_apartmentnumber') . "</br>";

// echo form_input('address_postalcode', set_value('address_postalcode'), "placeholder='Kod pocztowy'");
// echo form_error('address_postalcode') . "</br>";

// echo form_input('working_hours_open_monday', set_value('working_hours_open_monday'), "placeholder='Godzina otwarcia'");
// echo form_error('working_hours_open_monday');
// echo form_input('working_hours_close_monday', set_value('working_hours_close_monday'), "placeholder='Godzina zamknięcia'");
// echo form_error('working_hours_close_monday') . "</br>";

// echo form_input('working_hours_open_tuesday', set_value('working_hours_open_tuesday'), "placeholder='Godzina otwarcia'");
// echo form_error('working_hours_open_tuesday');
// echo form_input('working_hours_close_tuesday', set_value('working_hours_close_tuesday'), "placeholder='Godzina zamknięcia'");
// echo form_error('working_hours_close_tuesday') . "</br>";

// echo form_input('working_hours_open_wednesday', set_value('working_hours_open_wednesday'), "placeholder='Godzina otwarcia'");
// echo form_error('working_hours_open_wednesday');
// echo form_input('working_hours_close_wednesday', set_value('working_hours_close_wednesday'), "placeholder='Godzina zamknięcia'");
// echo form_error('working_hours_close_wednesday') . "</br>";

// echo form_input('working_hours_open_thursday', set_value('working_hours_open_thursday'), "placeholder='Godzina otwarcia'");
// echo form_error('working_hours_open_thursday');
// echo form_input('working_hours_close_thursday', set_value('working_hours_close_thursday'), "placeholder='Godzina zamknięcia'");
// echo form_error('working_hours_close_thursday') . "</br>";

// echo form_input('working_hours_open_friday', set_value('working_hours_open_friday'), "placeholder='Godzina otwarcia'");
// echo form_error('working_hours_open_friday');
// echo form_input('working_hours_close_friday', set_value('working_hours_close_friday'), "placeholder='Godzina zamknięcia'");
// echo form_error('working_hours_close_friday') . "</br>";

// echo form_input('working_hours_open_saturday', set_value('working_hours_open_saturday'), "placeholder='Godzina otwarcia'");
// echo form_error('working_hours_open_saturday');
// echo form_input('working_hours_close_saturday', set_value('working_hours_close_saturday'), "placeholder='Godzina zamknięcia'");
// echo form_error('working_hours_close_saturday') . "</br>";

// echo form_input('working_hours_open_sunday', set_value('working_hours_open_sunday'), "placeholder='Godzina otwarcia'");
// echo form_error('working_hours_open_sunday');
// echo form_input('working_hours_close_sunday', set_value('working_hours_close_sunday'), "placeholder='Godzina zamknięcia'");
// echo form_error('working_hours_close_sunday') . "</br>";

// $type_options = array(
//     'Odbiór' => 'Odbiór',
//     'Zwrot' => 'Zwrot',
//     'Oba' => 'Oba'
// );
// echo form_dropdown('type', $type_options);
// echo form_error('type') . "</br>";

// echo form_submit('submit', "Dodaj placówkę");

// echo form_close();
?>