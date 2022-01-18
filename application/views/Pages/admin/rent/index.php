<div class="container-fluid">
    <div class="col-md-8 col-lg-6 col-xl-4 offset-1 mx-auto">
        <h1 class="big-header-style text-center">Lista usług - admin</h1>
    </div>
    <h3 class="small-header-style text-center">Wynajmy</h3>
    <table id="example" class="display">
        <thead>
            <tr>
                <th>Id wypożyczenia</th>
                <th>Id klienta</th>
                <th>Id samochodu</th>
                <th>Cena za dzień</th>
                <th>Cena za kilometr</th>
                <th>Data zwrotu</th>
                <th>Placówka zwrotu</th>
                <th>Koszt</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($rentals != null) foreach ($rentals as $rent) {
            ?>
                <tr>
                    <td>
                        <?php
                        echo $rent['id_rental']
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $rent['id_acc']
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $rent['id_car']
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $rent['price_per_day'] . "PLN";
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $rent['price_per_kilometer_with_chauffeur'] . "PLN";
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $rent['end_date']
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $rent['return_to']
                        ?>
                    </td>
                    <td>
                        <?php
                        $start = strtotime($rent['start_date']);
                        $end = strtotime($rent['end_date']);
                        $number_of_days = abs($start - $end) / 86400 + 1;
                        $price = $number_of_days * $rent['price_per_day'];
                        echo $price . "PLN";
                        ?>
                    </td>
                    <td>
                        <a href=<?php echo site_url('admin/Rent/delete_rent?id_rental=' . $rent['id_rental'] . '&id_car=' . $rent['id_car']); ?> onclick="return confirm('Na pewno usunąć ten wynajem?')">
                            <button type="button" class="btn btn-danger btn-custom">Usuń</button>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Id wypożyczenia</th>
                <th>Id klienta</th>
                <th>Id samochodu</th>
                <th>Cena za dzień</th>
                <th>Cena za kilometr</th>
                <th>Data zwrotu</th>
                <th>Placówka zwrotu</th>
                <th>Koszt</th>
                <th></th>
            </tr>
        </tfoot>
    </table>
    <h3 class="small-header-style text-center">Przejazdy z kierowcą</h3>
    <table id="example2" class="display">
        <thead>
            <tr>
                <th>Id przejazdu</th>
                <th>Id klienta</th>
                <th>Id samochodu</th>
                <th>Cena za dzień</th>
                <th>Cena za kilometr</th>
                <th>Data przejazdu</th>
                <th>Adres odbioru</th>
                <th>Adres celu podróży</th>
                <th>Koszt</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($car_rides != null) foreach ($car_rides as $car_ride) {
            ?>
                <tr>
                    <td>
                        <?php
                        echo $car_ride['id_car_ride']
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $car_ride['id_acc']
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $car_ride['id_car']
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $car_ride['price_per_day'] . "PLN";
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $car_ride['price_per_kilometer_with_chauffeur'] . "PLN";
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $car_ride['date']
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $car_ride['start_address']
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $car_ride['finish_address']
                        ?>
                    </td>
                    <td>
                        <?php
                        $price = $car_ride['price_per_kilometer_with_chauffeur'] * $car_ride['kilometers'];
                        echo $price . "PLN";
                        ?>
                    </td>
                    <td>
                        <a href=<?php echo site_url('admin/Rent/delete_car_ride?id_car_ride=' . $car_ride['id_car_ride'] . '&id_car=' . $car_ride['id_car']); ?> onclick="return confirm('Na pewno usunąć ten przejazd?')">
                            <button type="button" class="btn btn-danger btn-custom">Usuń</button>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Id przejazdu</th>
                <th>Id klienta</th>
                <th>Id samochodu</th>
                <th>Cena za dzień</th>
                <th>Cena za kilometr</th>
                <th>Data przejazdu</th>
                <th>Adres odbioru</th>
                <th>Adres celu podróży</th>
                <th>Koszt</th>
                <th></th>
            </tr>
        </tfoot>
    </table>
</div>