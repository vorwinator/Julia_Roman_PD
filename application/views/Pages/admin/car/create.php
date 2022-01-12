<div class="container-fluid d-flex justify-content-center">
    <div class="col-md-8 col-lg-6 col-xl-6 offset-1">
        <?php
        echo form_open_multipart(current_url(), 'class="col-lg-10 pd-bottom"');
        ?>
        <h1 class="big-header-style text-center">Dodaj samochód</h1>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-floating mb-3">
                    <?php
                    echo form_input('brand', set_value('brand'), 'class="form-control form-control-lg" placeholder="Marka"');
                    echo form_label('Marka', 'brand');
                    ?>
                    <div class="error-message-style">
                        <?php
                        echo form_error('brand');
                        ?>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <?php
                    echo form_input('model', set_value('model'), 'class="form-control form-control-lg" placeholder="Model"');
                    echo form_label('Model', 'model');
                    ?>
                    <div class="error-message-style">
                        <?php
                        echo form_error('model');
                        ?>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <?php
                    echo form_input('fuel', set_value('fuel'), 'class="form-control form-control-lg" placeholder="Paliwo"');
                    echo form_label('Paliwo', 'fuel');
                    ?>
                    <div class="error-message-style">
                        <?php
                        echo form_error('fuel');
                        ?>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <?php
                    echo form_input('release_year', set_value('release_year'), 'class="form-control form-control-lg" placeholder="Rok produkcji"');
                    echo form_label('Rok produkcji', 'release_year');
                    ?>
                    <div class="error-message-style">
                        <?php
                        echo form_error('release_year');
                        ?>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <?php
                    echo form_input('price_per_day', set_value('price_per_day'), 'class="form-control form-control-lg" placeholder="Cena za dobę"');
                    echo form_label('Cena za dobę', 'price_per_day');
                    ?>
                    <div class="error-message-style">
                        <?php
                        echo form_error('price_per_day');
                        ?>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <?php
                    echo form_input('price_per_kilometer_with_chauffeur', set_value('price_per_kilometer_with_chauffeur'), 'class="form-control form-control-lg" placeholder="Cena za km"');
                    echo form_label('Cena za km', 'price_per_kilometer_with_chauffeur');
                    ?>
                    <div class="error-message-style">
                        <?php
                        echo form_error('price_per_kilometer_with_chauffeur');
                        ?>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <?php
                    echo form_input('average_consumption', set_value('average_consumption'), 'class="form-control form-control-lg" placeholder="Średnie spalanie"');
                    echo form_label('Średnie spalanie', 'average_consumption');
                    ?>
                    <div class="error-message-style">
                        <?php
                        echo form_error('average_consumption');
                        ?>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <?php
                    echo form_input('mileage', set_value('mileage'), 'class="form-control form-control-lg" placeholder="Przebieg w km"');
                    echo form_label('Przebieg w km', 'mileage');
                    ?>
                    <div class="error-message-style">
                        <?php
                        echo form_error('mileage');
                        ?>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <?php
                    echo form_input('number_of_airbags', set_value('number_of_airbags'), 'class="form-control form-control-lg" placeholder="Liczba poduszek powietrznych"');
                    echo form_label('Liczba poduszek powietrznych', 'number_of_airbags');
                    ?>
                    <div class="error-message-style">
                        <?php
                        echo form_error('number_of_airbags');
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-floating mb-3">
                    <?php
                    echo form_input('number_of_doors', set_value('number_of_doors'), 'class="form-control form-control-lg" placeholder="Licczba drzwi"');
                    echo form_label('Liczba drzwi', 'number_of_doors');
                    ?>
                    <div class="error-message-style">
                        <?php
                        echo form_error('number_of_doors');
                        ?>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <?php
                    echo form_input('number_of_seats', set_value('number_of_seats'), 'class="form-control form-control-lg" placeholder="Liczba siedzeń"');
                    echo form_label('Liczba siedzeń', 'number_of_seats');
                    ?>
                    <div class="error-message-style">
                        <?php
                        echo form_error('number_of_seats');
                        ?>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <?php
                    echo form_input('drive', set_value('drive'), 'class="form-control form-control-lg" placeholder="Napęd"');
                    echo form_label('Napęd', 'drive');
                    ?>
                    <div class="error-message-style">
                        <?php
                        echo form_error('drive');
                        ?>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <?php
                    echo form_input('air_conditioning', set_value('air_conditioning'), 'class="form-control form-control-lg" placeholder="Klimatyzacja"');
                    echo form_label('Klimatyzacja', 'air_conditioning');
                    ?>
                    <div class="error-message-style">
                        <?php
                        echo form_error('air_conditioning');
                        ?>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <?php
                    echo form_input('gearbox', set_value('gearbox'), 'class="form-control form-control-lg" placeholder="Skrzynia biegów"');
                    echo form_label('Skrzynia biegów', 'gearbox');
                    ?>
                    <div class="error-message-style">
                        <?php
                        echo form_error('gearbox');
                        ?>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <?php
                    echo form_input('trunk_capacity', set_value('trunk_capacity'), 'class="form-control form-control-lg" placeholder="Pojemność bagażnika"');
                    echo form_label('Pojemność bagażnika', 'trunk_capacity');
                    ?>
                    <div class="error-message-style">
                        <?php
                        echo form_error('trunk_capacity');
                        ?>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <?php
                    echo form_input('deposit', set_value('deposit'), 'class="form-control form-control-lg" placeholder="Kaucja"');
                    echo form_label('Kaucja', 'deposit');
                    ?>
                    <div class="error-message-style">
                        <?php
                        echo form_error('deposit');
                        ?>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <?php
                    echo form_input('car_type', set_value('car_type'), 'class="form-control form-control-lg" placeholder="Typ samochodu"');
                    echo form_label('Typ samochodu', 'car_type');
                    ?>
                    <div class="error-message-style">
                        <?php
                        echo form_error('car_type');
                        ?>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <?php
                    echo form_input('insurance', set_value('insurance'), 'class="form-control form-control-lg" placeholder="Ubezpieczenie"');
                    echo form_label('Ubezpieczenie', 'insurance');
                    ?>
                    <div class="error-message-style">
                        <?php
                        echo form_error('insurance');
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <?php
            echo form_label('Dodaj zdjęcia pojazdu', 'pictures');
            echo form_upload(array('pictures'), '', 'class="form-control form-control-lg" multiple="multiple" name="pictures[]"');
            ?>
            <div class="error-message-style">
                <?php
                if(isset($pictures_error)){
                    echo $pictures_error;
                }
                ?>
            </div>
        </div>
        <div class="text-center mt-4">
            <?php
            echo form_input('rental_status', 0, 'style="display:none;"');
            echo form_submit('submit', "Dodaj auto", 'class="btn btn-outline-primary btn-lg single-button-style"');
            ?>
        </div>
        <?php
        echo form_close();
        ?>
    </div>
</div>