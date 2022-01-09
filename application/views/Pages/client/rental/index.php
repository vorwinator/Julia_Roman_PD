<div class="container-fluid d-flex justify-content-center">
    <div class="col-md-8 col-lg-6 col-xl-4 offset-1">
        <form class="col-lg-10 pd-kaucja">
            <?php
            echo form_open(current_url(), 'class="col-lg-10 pd-kaucja"');
            ?>
            <h1 class="big-header-style text-center">Wynajmij samochód</h1>
            <div class="border padding-custom mt-2">
                <div class="row d-flex align-items-center">
                    <div class="col-md-6 text-center">
                        <img width="100%" src="<?php echo base_url(); ?>/assets/bil.png">
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
                                echo $car['price_per_day'] . " PLN/DZIEŃ";
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
                        <input name="start_date" id="start_date" type="date" class="form-control form-control-lg"/>
                        <label for="start_date">Data rozpoczęcia</label>
                    </div>
                    <div class="error-message-style">
                        <?php
                        if(isset($start_date_error))echo $start_date_error;
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
                        if (isset($end_date_error)) echo $end_date_error;
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
            </div>
            <!-- <div class="kwota">
                ŁĄCZNIE: 1300 PLN
            </div> -->
            <div class="text-center mt-4">
                <?php
                echo form_submit('submit', "Wynajmij", 'class="btn btn-outline-primary btn-lg single-button-style"');
                ?>
            </div>
            <?php
            echo form_close();
            ?>
    </div>
</div>