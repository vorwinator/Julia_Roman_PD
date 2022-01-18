<div class="container-fluid">
        <div class="row car-select">
                <div class="col-md-6 d-flex justify-content-center">
                        <div id="carouselExampleIndicators" class="carousel carousel-car slide" data-bs-ride="carousel">
                                <ol class="carousel-indicators">
                                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                                        <?php
                                        $pic = explode(' ', $car['pictures']);
                                        $number_of_pics = count($pic) - 1;
                                        if ($number_of_pics < 1) $number_of_pics = 1;
                                        for ($i = 1; $i < $number_of_pics; $i++) {
                                        ?>
                                                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $i; ?>"></li>
                                        <?php
                                        }
                                        ?>
                                </ol>
                                <div class="carousel-inner">
                                        <?php
                                        for ($i = 0; $i < $number_of_pics; $i++) {
                                                $src = base_url() . "/" . "assets/pictures/" . $car['brand'] . "/" . $car['model'] . "/" . $pic[$i];
                                                if ($i == 0) {
                                        ?>
                                                        <div class="carousel-item active">
                                                                <img style="object-fit: cover; width:700px; height:700px" src="<?php echo $src; ?>" alt="First slide" onerror="this.onerror=null;this.src=' <?php echo base_url(); ?>/assets/check.jpg';">
                                                                <div class="carousel-caption d-none d-md-block">

                                                                </div>
                                                        </div>
                                                <?php } else {
                                                ?>
                                                        <div class="carousel-item">
                                                                <img style="object-fit: cover; width:700px; height:700px" src="<?php echo $src; ?>" alt="Second slide">
                                                                <div class="carousel-caption d-none d-md-block">

                                                                </div>
                                                        </div>
                                        <?php
                                                }
                                        }
                                        ?>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                </a>
                        </div>
                </div>
                <div class="col-md-6">
                        <h1 class="car-header-style">
                                <?php
                                echo $car['brand'] . " " . $car['model'];
                                ?>
                        </h1>
                        <ul>
                                <li>Rok produkcji:
                                        <?php
                                        echo $car['release_year'];
                                        ?>
                                </li>
                                <li>Liczba siedzeń:
                                        <?php
                                        echo $car['number_of_seats'];
                                        ?>
                                </li>
                                <li>Liczba drzwi:
                                        <?php
                                        echo $car['number_of_doors'];
                                        ?>
                                </li>
                                <li>Spalanie:
                                        <?php
                                        echo $car['average_consumption'];
                                        ?>
                                </li>
                                <li>Przebieg w km:
                                        <?php
                                        echo $car['mileage'];
                                        ?>
                                </li>
                                <li>Liczba poduszek powietrznych:
                                        <?php
                                        echo $car['number_of_airbags'];
                                        ?>
                                </li>
                                <li>Napęd:
                                        <?php
                                        echo $car['drive'];
                                        ?>
                                </li>
                                <li>Klimatyzacja:
                                        <?php
                                        echo $car['air_conditioning'];
                                        ?>
                                </li>
                                <li>Skrzynia biegów:
                                        <?php
                                        echo $car['gearbox'];
                                        ?>
                                </li>
                                <li>Pojemność bagażnika:
                                        <?php
                                        echo $car['trunk_capacity'];
                                        ?>
                                </li>
                                <li>Kaucja:
                                        <?php
                                        echo $car['deposit'];
                                        ?>
                                </li>
                                <li>Ubezpieczenie:
                                        <?php
                                        echo $car['insurance'];
                                        ?>
                                </li>
                                <li>Paliwo:
                                        <?php
                                        echo $car['fuel'];
                                        ?>
                                </li>
                                <li>Typ pojazdu:
                                        <?php
                                        echo $car['car_type'];
                                        ?>
                                </li>
                        </ul>
                        <div class="row caption">
                                <div class="col-md-4 kwota-bold text-center">
                                        <?php
                                        echo $car['price_per_day'];
                                        ?>
                                        PLN/DZIEŃ
                                        <br><a role="button" class="btn btn-primary full-width-btn" href=<?php echo site_url('client/rental?id_car_rent=' . $car['id_car']); ?>>Wynajmij<br>samochód</a>
                                </div>
                                <div class="col-md-1 odstep text-center">
                                        lub
                                </div>
                                <div class="col-md-4 kwota-bold text-center">
                                        <?php
                                        echo $car["price_per_kilometer_with_chauffeur"];
                                        ?>
                                        PLN/KM
                                        <br><a role="button" class="btn btn-primary full-width-btn" href=<?php echo site_url('client/rental/car_ride?id_car_rent=' . $car['id_car']); ?>>Zamów przejazd<br>z kierowcą</a>
                                </div>
                        </div>
                </div>
        </div>
</div>