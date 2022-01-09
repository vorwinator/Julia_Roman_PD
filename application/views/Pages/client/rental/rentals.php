<div class="container-fluid">
    <div class="col-md-8 col-lg-6 col-xl-4 offset-1 mx-auto">
        <h1 class="big-header-style text-center">Lista wynajmów - klient</h1>
    </div>
    <?php
    foreach ($rentals as $rental) {
    ?>
        <div class="container rounded wynajem-container">
            <div class="border padding-custom mt-2">
                <div class="row d-flex align-items-center">
                    <!-- <div class="col-md-8 text-center" style="font-weight: bold;"><img width="100%" src="bil.png">
                        Toyota Yaris jakis tam model numer itp
                    </div> -->
                    <div class="col-md-4 ">
                        <ul>
                            <li>
                                Początek: <b><?php echo $rental['start_date']; ?></b>
                            </li>
                            <li>
                                Zakończenie: <b><?php echo $rental['end_date']; ?></b>
                            </li>
                        </ul>
                        <!-- <div class="text-center"><button type="button" class="btn btn-primary btn-custom">Wybierz</button></div> -->
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>