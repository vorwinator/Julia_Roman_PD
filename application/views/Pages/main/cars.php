<div class="container-fluid">
    <div class="col-md-8 col-lg-6 col-xl-4 offset-1 mx-auto">
        <h1 class="big-header-style text-center">Lista samochodów - klient</h1>
    </div>
    <table class="table table-hover">
        <tbody>
            <?php
            if ($cars != null) {
                foreach ($cars as $car) {
            ?>
                    <tr>
                        <?php
                        $pic = explode(' ', $car['pictures']);
                        $src = base_url() . "/" . "assets/pictures/" . $car['brand'] . "/" . $car['model'] . "/" . $pic[0];
                        ?>
                        <td style="width: 65%" class="car-img"><img class="img-fluid" style="max-width:75%" src="<?php echo $src; ?>" onerror="this.onerror=null;this.src=' <?php echo base_url(); ?>/assets/check.jpg';"></td>
                        <td>
                            <div class="big-bold">
                                <?php
                                echo $car['brand'] . " " . $car['model'];
                                ?>
                            </div>
                            <div class="car-details">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm">
                                            <div>
                                                <?php
                                                echo "• " . $car['air_conditioning']
                                                ?>
                                            </div>
                                            <div>
                                                <?php
                                                echo "• " . $car['number_of_doors'] . "-drzwiowy";
                                                ?>
                                            </div>
                                            <div>
                                                <?php
                                                echo "• " . $car['fuel']
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div>
                                                <?php
                                                echo "• " . $car['drive']
                                                ?>
                                            </div>
                                            <div>
                                                <?php
                                                echo "• " . $car['number_of_seats'] . "-osobowy";
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pd-kaucja">kaucja:
                                <?php
                                echo "<b>" . $car['deposit'] . "pln</b>"
                                ?>
                            </div>
                            <div class="big-bold">
                                <?php
                                echo $car['price_per_day'] . " PLN/DZIEŃ<br>";
                                echo $car["price_per_kilometer_with_chauffeur"] . " PLN/KM<br>";
                                ?>
                                <a href=<?php echo site_url('car_all/details?id_car_details=' . $car['id_car']); ?>>
                                    <button type="button" class="btn btn-primary btn-custom">Wybierz</button>
                                </a>
                            </div>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>
</div>