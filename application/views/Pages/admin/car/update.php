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
                        echo form_input('brand', $car['brand'], 'class="form-control form-control-lg" placeholder="Marka"');
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
                        echo form_input('model', $car['model'], 'class="form-control form-control-lg" placeholder="Model"');
                        echo form_label('Model', 'model');
                        ?>
                    </div>
                    <div class="form-floating mb-3">
                        <?php
                        echo form_input('fuel', $car['fuel'], 'class="form-control form-control-lg" placeholder="Paliwo"');
                        echo form_label('Paliwo', 'fuel');
                        ?>
                    </div>
                    <div class="form-floating mb-3">
                        <?php
                        echo form_input('release_year', $car['release_year'], 'class="form-control form-control-lg" placeholder="Rok produkcji"');
                        echo form_label('Rok produkcji', 'release_year');
                        ?>
                    </div>
                    <div class="form-floating mb-3">
                        <?php
                        echo form_input('price_per_day', $car['price_per_day'], 'class="form-control form-control-lg" placeholder="Cena za dobę"');
                        echo form_label('Cena za dobę', 'price_per_day');
                        ?>
                    </div>
                    <div class="form-floating mb-3">
                        <?php
                        echo form_input('price_per_kilometer_with_chauffeur', $car['price_per_kilometer_with_chauffeur'], 'class="form-control form-control-lg" placeholder="Cena za km"');
                        echo form_label('Cena za km', 'price_per_kilometer_with_chauffeur');
                        ?>
                    </div>
                    <div class="form-floating mb-3">
                        <?php
                        echo form_input('average_consumption', $car['average_consumption'], 'class="form-control form-control-lg" placeholder="Średnie spalanie"');
                        echo form_label('Średnie spalanie', 'average_consumption');
                        ?>
                    </div>
                    <div class="form-floating mb-3">
                        <?php
                        echo form_input('mileage', $car['mileage'], 'class="form-control form-control-lg" placeholder="Przebieg w km"');
                        echo form_label('Przebieg w km', 'mileage');
                        ?>
                    </div>
                    <div class="form-floating mb-3">
                        <?php
                        echo form_input('number_of_airbags', $car['number_of_airbags'], 'class="form-control form-control-lg" placeholder="Liczba poduszek powietrznych"');
                        echo form_label('Liczba poduszek powietrznych', 'number_of_airbags');
                        ?>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-floating mb-3">
                        <?php
                        echo form_input('number_of_doors', $car['number_of_doors'], 'class="form-control form-control-lg" placeholder="Licczba drzwi"');
                        echo form_label('Liczba drzwi', 'number_of_doors');
                        ?>
                    </div>
                    <div class="form-floating mb-3">
                        <?php
                        echo form_input('number_of_seats', $car['number_of_seats'], 'class="form-control form-control-lg" placeholder="Liczba siedzeń"');
                        echo form_label('Liczba siedzeń', 'number_of_seats');
                        ?>
                    </div>
                    <div class="form-floating mb-3">
                        <?php
                        echo form_input('drive', $car['drive'], 'class="form-control form-control-lg" placeholder="Napęd"');
                        echo form_label('Napęd', 'drive');
                        ?>
                    </div>
                    <div class="form-floating mb-3">
                        <?php
                        echo form_input('air_conditioning', $car['air_conditioning'], 'class="form-control form-control-lg" placeholder="Klimatyzacja"');
                        echo form_label('Klimatyzacja', 'air_conditioning');
                        ?>
                    </div>
                    <div class="form-floating mb-3">
                        <?php
                        echo form_input('gearbox', $car['gearbox'], 'class="form-control form-control-lg" placeholder="Skrzynia biegów"');
                        echo form_label('Skrzynia biegów', 'gearbox');
                        ?>
                    </div>
                    <div class="form-floating mb-3">
                        <?php
                        echo form_input('trunk_capacity', $car['trunk_capacity'], 'class="form-control form-control-lg" placeholder="Pojemność bagażnika"');
                        echo form_label('Pojemność bagażnika', 'trunk_capacity');
                        ?>
                    </div>
                    <div class="form-floating mb-3">
                        <?php
                        echo form_input('deposit', $car['deposit'], 'class="form-control form-control-lg" placeholder="Kaucja"');
                        echo form_label('Kaucja', 'deposit');
                        ?>
                    </div>
                    <div class="form-floating mb-3">
                        <?php
                        echo form_input('car_type', $car['car_type'], 'class="form-control form-control-lg" placeholder="Typ samochodu"');
                        echo form_label('Typ samochodu', 'car_type');
                        ?>
                    </div>
                    <div class="form-floating mb-3">
                        <?php
                        echo form_input('insurance', $car['insurance'], 'class="form-control form-control-lg" placeholder="Ubezpieczenie"');
                        echo form_label('Ubezpieczenie', 'insurance');
                        ?>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <?php
                echo form_submit('submit', "Edytuj auto", 'class="btn btn-outline-primary btn-lg single-button-style"');
                ?>
            </div>
        <?php
        echo form_close();
        ?>
    </div>
</div>