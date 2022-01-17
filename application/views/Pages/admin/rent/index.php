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
                <th>Cena za dzień</th>
                <th>Cena za kilometr</th>
                <th>Data zwrotu</th>
                <th>Placówka zwrotu</th>
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
                        echo $rent['price_per_day']
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $rent['price_per_kilometer_with_chauffeur']
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
                        <button type="button" class="btn btn-danger btn-custom">Usuń</button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Id wypożyczenia</th>
                <th>Id klienta</th>
                <th>Cena za dzień</th>
                <th>Cena za kilometr</th>
                <th>Data zwrotu</th>
                <th>Placówka zwrotu</th>
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
                <th>Cena za dzień</th>
                <th>Cena za kilometr</th>
                <th>Data przejazdu</th>
                <th>Adres odbioru</th>
                <th>Adres celu podróży</th>
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
                        echo $car_ride['price_per_day']
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $car_ride['price_per_kilometer_with_chauffeur']
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
                        <button type="button" class="btn btn-danger btn-custom">Usuń</button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Id przejazdu</th>
                <th>Id klienta</th>
                <th>Cena za dzień</th>
                <th>Cena za kilometr</th>
                <th>Data przejazdu</th>
                <th>Adres odbioru</th>
                <th>Adres celu podróży</th>
                <th></th>
            </tr>
        </tfoot>
    </table>
</div>