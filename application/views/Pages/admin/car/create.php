<div class="container-fluid d-flex justify-content-center">
    <div class="col-md-8 col-lg-6 col-xl-6 offset-1">
        <?php
        echo form_open(current_url(), 'class="col-lg-10 pd-bottom"');
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
                    </div>
                    <div class="form-floating mb-3">
                        <?php
                        echo form_input('release_year', set_value('release_year'), 'class="form-control form-control-lg" placeholder="Rok produkcji"');
                        echo form_label('Rok produkcji', 'release_year');
                        ?>
                    </div>
                    <div class="form-floating mb-3">
                        <?php
                        echo form_input('price_per_day', set_value('price_per_day'), 'class="form-control form-control-lg" placeholder="Cena za dobę"');
                        echo form_label('Cena za dobę', 'price_per_day');
                        ?>
                    </div>
                    <div class="form-floating mb-3">
                        <?php
                        echo form_input('price_per_kilometer_with_chauffeur', set_value('price_per_kilometer_with_chauffeur'), 'class="form-control form-control-lg" placeholder="Cena za km"');
                        echo form_label('Cena za km', 'price_per_kilometer_with_chauffeur');
                        ?>
                    </div>
                    <div class="form-floating mb-3">
                        <?php
                        echo form_input('average_consumption', set_value('average_consumption'), 'class="form-control form-control-lg" placeholder="Średnie spalanie"');
                        echo form_label('Średnie spalanie', 'average_consumption');
                        ?>
                    </div>
                    <div class="form-floating mb-3">
                        <?php
                        echo form_input('mileage', set_value('mileage'), 'class="form-control form-control-lg" placeholder="Przebieg w km"');
                        echo form_label('Przebieg w km', 'mileage');
                        ?>
                    </div>
                    <div class="form-floating mb-3">
                        <?php
                        echo form_input('number_of_airbags', set_value('number_of_airbags'), 'class="form-control form-control-lg" placeholder="Liczba poduszek powietrznych"');
                        echo form_label('Liczba poduszek powietrznych', 'number_of_airbags');
                        ?>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-floating mb-3">
                        <?php
                        echo form_input('number_of_doors', set_value('number_of_doors'), 'class="form-control form-control-lg" placeholder="Licczba drzwi"');
                        echo form_label('Liczba drzwi', 'number_of_doors');
                        ?>
                    </div>
                    <div class="form-floating mb-3">
                        <?php
                        echo form_input('number_of_seats', set_value('number_of_seats'), 'class="form-control form-control-lg" placeholder="Liczba siedzeń"');
                        echo form_label('Liczba siedzeń', 'number_of_seats');
                        ?>
                    </div>
                    <div class="form-floating mb-3">
                        <?php
                        echo form_input('drive', set_value('drive'), 'class="form-control form-control-lg" placeholder="Napęd"');
                        echo form_label('Napęd', 'drive');
                        ?>
                    </div>
                    <div class="form-floating mb-3">
                        <?php
                        echo form_input('air_coditioning', set_value('air_coditioning'), 'class="form-control form-control-lg" placeholder="Klimatyzacja"');
                        echo form_label('Klimatyzacja', 'air_coditioning');
                        ?>
                    </div>
                    <div class="form-floating mb-3">
                        <?php
                        echo form_input('gearbox', set_value('gearbox'), 'class="form-control form-control-lg" placeholder="Skrzynia biegów"');
                        echo form_label('Skrzynia biegów', 'gearbox');
                        ?>
                    </div>
                    <div class="form-floating mb-3">
                        <?php
                        echo form_input('trunk_capacity', set_value('trunk_capacity'), 'class="form-control form-control-lg" placeholder="Pojemność bagażnika"');
                        echo form_label('Pojemność bagażnika', 'trunk_capacity');
                        ?>
                    </div>
                    <div class="form-floating mb-3">
                        <?php
                        echo form_input('deposit', set_value('deposit'), 'class="form-control form-control-lg" placeholder="Kaucja"');
                        echo form_label('Kaucja', 'deposit');
                        ?>
                    </div>
                    <div class="form-floating mb-3">
                        <?php
                        echo form_input('car_type', set_value('car_type'), 'class="form-control form-control-lg" placeholder="Typ samochodu"');
                        echo form_label('Typ samochodu', 'car_type');
                        ?>
                    </div>
                    <div class="form-floating mb-3">
                        <?php
                        echo form_input('insurance', set_value('insurance'), 'class="form-control form-control-lg" placeholder="Ubezpieczenie"');
                        echo form_label('Ubezpieczenie', 'insurance');
                        ?>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <?php
                echo form_submit('submit', "Dodaj auto", 'class="btn btn-outline-primary btn-lg single-button-style"');
                ?>
            </div>
        <?php
        echo form_close();
        ?>
    </div>
</div>
<?php
    if(isset($info)) echo $info;
    echo form_open(current_url());

    echo form_input('release_year', set_value('release_year'), "placeholder='Rok produkcji'");
    echo form_error('release_year')."</br>";

    echo form_input('fuel', set_value('fuel'), "placeholder='Rodzaj paliwa'");
    echo form_error('fuel')."</br>";

    echo form_input('price_per_day', set_value('price_per_day'), "placeholder='Cena za dobę w PLN'");
    echo form_error('price_per_day')."</br>";

    echo form_input('mileage', set_value('mileage'), "placeholder='Przebieg'");
    echo form_error('mileage')."</br>";

    echo form_input('rental_status', 0, 'style="display:none;"');

    echo form_input('insurance', set_value('insurance'), "placeholder='Ubezpieczenie'");
    echo form_error('insurance')."</br>";

    echo "szczegóły"."</br>";

    echo form_input('brand', set_value('brand'), "placeholder='Marka'");
    echo form_error('brand')."</br>";

    echo form_input('model', set_value('model'), "placeholder='Model'");
    echo form_error('model')."</br>";

    echo form_input('average_consumption', set_value('average_consumption'), "placeholder='Średnie spalanie'");
    echo form_error('average_consumption')."</br>";

    echo form_input('number_of_airbags', set_value('number_of_airbags'), "placeholder='Liczba poduszek powietrznych'");
    echo form_error('number_of_airbags')."</br>";

    echo form_input('number_of_doors', set_value('number_of_doors'), "placeholder='Liczba drzwi'");
    echo form_error('number_of_doors')."</br>";

    echo form_input('number_of_seats', set_value('number_of_seats'), "placeholder='Liczba miejsc'");
    echo form_error('number_of_seats')."</br>";

    echo form_input('drive', set_value('drive'), "placeholder='Napęd'");
    echo form_error('drive')."</br>";

    echo form_input('air_conditioning', set_value('air_conditioning'), "placeholder='Klimatyzacja'");
    echo form_error('air_conditioning')."</br>";

    echo form_input('gearbox', set_value('gearbox'), "placeholder='Skrzynia biegów'");
    echo form_error('gearbox')."</br>";

    echo form_input('trunk_capacity', set_value('trunk_capacity'), "placeholder='Pojemność bagażnika'");
    echo form_error('trunk_capacity')."</br>";

    echo form_input('deposit', set_value('deposit'), "placeholder='Kaucja'");
    echo form_error('deposit')."</br>";

    echo form_input('car_type', set_value('car_type'), "placeholder='Typ samochodu'");
    echo form_error('car_type')."</br>";

    echo form_submit('submit', "Dodaj auto");

    echo form_close();
?>