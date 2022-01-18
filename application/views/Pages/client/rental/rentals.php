<div class="container-fluid">
    <div class="col-md-8 col-lg-6 col-xl-4 offset-1 mx-auto">
        <h1 class="big-header-style text-center">Lista usług - klient</h1>
    </div>
    <?php
    if ($rentals != null) foreach ($rentals as $rental) {
    ?>
        <div class="container rounded wynajem-container">
            <div class="border padding-custom mt-2">
                <div class="row d-flex align-items-center">
                    <?php
                    $pic = explode(' ', $rental['pictures']);
                    $src = base_url() . "/" . "assets/pictures/" . $rental['brand'] . "/" . $rental['model'] . "/" . $pic[0];
                    ?>
                    <div class="col-md-8 text-center" style="font-weight: bold;"><img width="100%" src="<?php echo $src; ?>" onerror="this.onerror=null;this.src=' <?php echo base_url(); ?>/assets/check.jpg';">
                        <?php
                        echo $rental['brand'] . " " . $rental['model'];
                        ?>
                    </div>
                    <div class="col-md-4 ">
                        <ul>
                            <li>
                                Początek: <b><?php echo $rental['start_date']; ?></b>
                            </li>
                            <li>
                                Zakończenie: <b><?php echo $rental['end_date']; ?></b>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    <?php
    if ($car_rides != null) foreach ($car_rides as $car_ride) {
    ?>
        <div class="container rounded wynajem-container">
            <div class="border padding-custom mt-2">
                <div class="row d-flex align-items-center">
                    <?php
                    $pic = explode(' ', $car_ride['pictures']);
                    $src = base_url() . "/" . "assets/pictures/" . $car_ride['brand'] . "/" . $car_ride['model'] . "/" . $pic[0];
                    ?>
                    <div class="col-md-8 text-center" style="font-weight: bold;"><img width="100%" src="<?php echo $src; ?>" onerror="this.onerror=null;this.src=' <?php echo base_url(); ?>/assets/check.jpg';">
                        <?php
                        echo $car_ride['brand'] . " " . $car_ride['model'];
                        ?>
                    </div>
                    <div class="col-md-4 ">
                        <ul>
                            <li>
                                Dzień przejazdu: <b><?php echo $car_ride['date']; ?></b>
                            </li>
                            <li>
                                Adres docelowy: <b><?php echo $car_ride['finish_address']; ?></b>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>