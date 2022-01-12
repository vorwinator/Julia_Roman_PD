<div class="container-fluid">
    <div class="col-md-8 col-lg-6 col-xl-4 offset-1 mx-auto">
        <h1 class="big-header-style text-center">Lista samochodów - admin</h1>
    </div>
    <div class="col-md-8 col-lg-12 text-center pd-bottom">
        <a role="button" class="btn btn-outline-primary full-width-btn" href=<?php echo site_url('admin/car/create'); ?>>Dodaj samochód</a>
    </div>
    <table id="example" class="display">
        <thead>
            <tr>
                <th>Id</th>
                <th>Marka</th>
                <th>Model</th>
                <th>Rok produkcji</th>
                <th>Cena za dobę</th>
                <th>Przebieg w km</th>
                <th>Czy wypożyczony</th>
                <th>Zdjęcie</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($cars as $car) {
            ?>
                <tr>
                    <td>
                        <?php
                        echo $car['id_car']
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $car['brand']
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $car['model']
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $car['release_year']
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $car['price_per_day']
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $car['mileage']
                        ?>
                    </td>
                    <td>
                        <?php
                        if ($car['rental_status'] == 0) echo "Nie";
                        elseif ($car['rental_status'] == 1) echo "Tak";
                        ?>
                    </td>
                    <td style="width: 10%">
                        <?php
                        $pic = explode(' ', $car['pictures']);
                        $src = base_url() . "/" . "assets/pictures/".$car['brand']."/".$car['model']."/".$pic[0];
                        ?>
                        <img class="img-fluid" style="max-width:50%" src="<?php echo $src; ?>" alt="Image not found" onerror="this.onerror=null;this.src=' <?php echo base_url(); ?>/assets/check.jpg';" />
                    </td>
                    <td>
                        <a href=<?php echo site_url('admin/car/update?id_car_update=' . $car['id_car']); ?>><button type="button" class="btn btn-primary btn-custom">Edytuj</button></a>
                        <a href=<?php echo site_url('admin/car/delete?id_car_delete=' . $car['id_car']); ?> onclick="return confirm('Na pewno usunąć ten samochód?')"><button type="button" class="btn btn-danger btn-custom">Usuń</button></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Marka</th>
                <th>Model</th>
                <th>Rok produkcji</th>
                <th>Cena za dobę</th>
                <th>Przebieg w km</th>
                <th>Czy wypożyczony</th>
                <th>Zdjęcie</th>
                <th></th>
            </tr>
        </tfoot>
    </table>
</div>