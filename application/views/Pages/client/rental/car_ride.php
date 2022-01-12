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
                            <b>Klimatyzacja</b>
                        </li>
                        <li>
                            <b>
                                <?php
                                echo $car['number_of_doors'];
                                ?>
                            </b>
                        </li>
                        <li>
                            <b>
                                <?php
                                echo $car['number_of_seats'];
                                ?>
                            </b>
                        </li>
                        <li>
                            <b>
                                <?php
                                echo $car['gearbox'];
                                ?>
                            </b>
                        </li>
                        <li>
                            <b>
                                <?php
                                echo $car['fuel'];
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
            <div class="col-md-6">
                <div class="form-floating mb-3">
                    <input name="start_date" id="start_date" type="date" class="form-control form-control-lg" />
                    <label for="start_date">Data rozpoczęcia</label>
                </div>
                <div class="error-message-style">
                    <?php
                    echo form_error('start_date');
                    ?>
                    <?php
                    if (isset($start_date_error)) echo $start_date_error;
                    ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating mb-3">
                    <input name="end_date" id="end_date" type="date" class="form-control form-control-lg" />
                    <label for="end_date">Data zakończenia</label>
                </div>
                <div class="error-message-style">
                    <?php
                    echo form_error('end_date');
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="error-message-style">
                <?php
                if (isset($date_error)) echo $date_error;
                ?>
            </div>
            <div class="etykieta">Wybierz placówkę odbioru</div>
            <?php
            echo form_dropdown('crf_address', $address_options, '', 'class="col-md-12 form-control-lg"');
            ?>
            <div class="etykieta">Wybierz placówkę zwrotu</div>
            <?php
            echo form_dropdown('return_to', $return_to_options, '', 'class="col-md-12 form-control-lg"');
            ?>
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