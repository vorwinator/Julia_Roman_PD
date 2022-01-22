<div class="container-fluid d-flex justify-content-center">
    <div class="col-md-8 col-lg-6 col-xl-4 offset-1">
        <?php
        echo form_open(current_url(), 'class="col-lg-10 pd-kaucja"');
        ?>
        <h1 class="big-header-style text-center">Zamów przejazd z kierowcą</h1>
        <div class="border padding-custom mt-2">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 text-center">
                    <?php
                    $pic = explode(' ', $car['pictures']);
                    $src = base_url() . "/" . "assets/pictures/" . $car['brand'] . "/" . $car['model'] . "/" . $pic[0];
                    ?>
                    <img width="100%" src="<?php echo $src; ?>" onerror="this.onerror=null;this.src=' <?php echo base_url(); ?>/assets/check.jpg';">
                </div>
                <div class="col-md-6">
                    <ul>
                        <li>
                            <b>
                                <?php
                                echo "Klimatyzacja: " . $car['air_conditioning'];
                                ?>
                            </b>
                        </li>
                        <li>
                            <b>
                                <?php
                                echo $car['number_of_doors'] . "-drzwiowy";
                                ?>
                            </b>
                        </li>
                        <li>
                            <b>
                                <?php
                                echo $car['number_of_seats'] . "-osobowy";
                                ?>
                            </b>
                        </li>
                        <li>
                            <b>
                                <?php
                                echo "Skrzynia biegów: " . $car['gearbox'];
                                ?>
                            </b>
                        </li>
                        <li>
                            <b>
                                <?php
                                echo "Paliwo: " . $car['fuel'];
                                ?>
                            </b>
                        </li>
                    </ul>
                    <div class="big-font-min">
                        <b>
                            <?php
                            echo $car['price_per_kilometer_with_chauffeur'] . " PLN/KM";
                            ?>
                        </b>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="etykieta">Wybierz termin</div>
            <div class="col-md-7">
                <div class="form-floating mb-3">
                    <input name="date" id="date" type="date" class="form-control form-control-lg" placeholder="Dzień przejazdu" />
                    <label for="date">Dzień przejazdu</label>
                </div>
                <div class="error-message-style">
                    <?php
                    echo form_error('date');
                    ?>
                    <?php
                    if (isset($date_error)) echo $date_error;
                    ?>
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-floating mb-3">
                    <input name="date2" id="date2" type="time" class="form-control form-control-lg" placeholder="Godzina przybycia" />
                    <label for="date2">Godzina przybycia</label>
                </div>
                <div class="error-message-style">
                    <?php
                    echo form_error('date2');
                    ?>
                    <?php
                    if (isset($date2_error)) echo $date2_error;
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="etykieta">Wybierz adres startowy</div>
            <div class="col-md-12">
                <div class="form-floating mb-3">
                    <?php
                    echo form_input('start_address_street', set_value('start_address_street'), 'class="form-control form-control-lg" placeholder="Ulica"');
                    echo form_label('Ulica i numer budynku', 'start_address_street');
                    ?>
                </div>
                <div class="error-message-style">
                    <?php
                    echo form_error('start_address_street');
                    ?>
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-floating mb-3">
                    <?php
                    echo form_input('start_address_city', set_value('start_address_city'), 'class="form-control form-control-lg" placeholder="Miasto"');
                    echo form_label('Miasto', 'start_address_city');
                    ?>
                </div>
                <div class="error-message-style">
                    <?php
                    echo form_error('start_address_city');
                    ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <?php
                    echo form_input('start_address_postalcode', set_value('start_address_postalcode'), 'class="form-control form-control-lg" placeholder="Kod pocztowy"');
                    echo form_label('Kod pocztowy', 'start_address_postalcode');
                    ?>
                </div>
                <div class="error-message-style">
                    <?php
                    echo form_error('start_address_postalcode');
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="etykieta">Wybierz adres docelowy</div>
            <div class="col-md-12">
                <div class="form-floating mb-3">
                    <?php
                    echo form_input('finish_address_street', set_value('finish_address_street'), 'class="form-control form-control-lg" placeholder="Ulica"');
                    echo form_label('Ulica', 'finish_address_street');
                    ?>
                </div>
                <div class="error-message-style">
                    <?php
                    echo form_error('finish_address_street');
                    ?>
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-floating mb-3">
                    <?php
                    echo form_input('finish_address_city', set_value('finish_address_city'), 'class="form-control form-control-lg" placeholder="Miasto"');
                    echo form_label('Miasto', 'finish_address_city');
                    ?>
                </div>
                <div class="error-message-style">
                    <?php
                    echo form_error('finish_address_city');
                    ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <?php
                    echo form_input('finish_address_postalcode', set_value('finish_address_postalcode'), 'class="form-control form-control-lg" placeholder="Kod pocztowy"');
                    echo form_label('Kod pocztowy', 'finish_address_postalcode');
                    ?>
                </div>
                <div class="error-message-style">
                    <?php
                    echo form_error('finish_address_postalcode');
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="etykieta">Zarezerwuj ilość kilometrów</div>
            <div class="form-floating mb-3">
                <?php
                echo form_input('kilometers', set_value('kilometers'), 'class="form-control form-control-lg" placeholder="Ilość kilometrów"');
                echo form_label('Ilość kilometrów', 'kilometers');
                ?>
                <div class="error-message-style">
                    <?php
                    echo form_error('kilometers');
                    ?>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <?php
            echo form_submit('submit', "Zamów przejazd z kierowcą", "class='btn btn-outline-primary btn-lg single-button-style'");
            ?>
        </div>
        <?php
        echo form_close();
        ?>
    </div>
</div>