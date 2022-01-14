<div class="container-fluid">
    <div class="col-md-8 col-lg-6 col-xl-4 offset-1 mx-auto">
        <h1 class="big-header-style text-center">Lista wynajmów - admin</h1>
    </div>
    <table id="example" class="display">
        <thead>
            <tr>
                <th>Id wypożyczenia</th>
                <th>Id samochodu</th>
                <th>Id klienta</th>
                <th>Id placówki</th>
                <th>Data wypożyczenia</th>
                <th>Data zwrotu</th>
                <th>Placówka zwrotu</th>
                <th>Typ</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php
        if ($rentals != null) foreach ($rentals as $rent){
        ?>
            <tr>
                <td>
                    <?php
                    echo $rent['id_rental']
                    ?>
                </td>
                <td>
                    <?php
                    echo $rent['id_car']
                    ?>
                </td>
                <td>
                    <?php
                    echo $rent['id_acc']
                    ?>
                </td>
                <td>
                    <?php
                    echo $rent['id_car_rental_facility']
                    ?>
                </td>
                <td>
                    <?php
                    echo $rent['start_date']
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
                    echo $rent['rent_type']
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
                <th>Id samochodu</th>
                <th>Id klienta</th>
                <th>Id placówki</th>
                <th>Data wypożyczenia</th>
                <th>Data zwrotu</th>
                <th>Placówka zwrotu</th>
                <th>Typ</th>
                <th></th>
            </tr>
        </tfoot>
    </table>
</div>