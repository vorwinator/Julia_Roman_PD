<div class="container-fluid">
    <div class="col-md-8 col-lg-6 col-xl-4 offset-1 mx-auto">
        <h1 class="big-header-style text-center">Lista placówek - admin</h1>
    </div>
    <div class="col-md-8 col-lg-12 text-center pd-bottom">
        <a role="button" class="btn btn-outline-primary full-width-btn" href=<?php echo site_url('admin/car_rental_facility/create'); ?>>Dodaj placówkę</a>
    </div>
    <table id="example" class="display">
        <thead>
            <tr>
                <th>Id</th>
                <th>Ulica</th>
                <th>Miasto</th>
                <th>Kod pocztowy</th>
                <th>Typ placówki</th>
                <th>Godziny otwarcia</th>
                <th>Opcje</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($crfs != false) {
                foreach ($crfs as $crf) {
                    $free_days_explode = explode("Nieczynne dzisiaj ", $crf['working_hours']);
                    $i = 0;
                    foreach ($free_days_explode as $row) {
                        if ($row == "") {
                            $working_hours[$i] = "Nieczynne dzisiaj";
                            $i++;
                        } else {
                            $days = explode(" ", $row);
                            foreach ($days as $day) {
                                $working_hours[$i] = $day;
                                $i++;
                            }
                        }
                    }
                    $address_explode = explode(" ", $crf['address']);
            ?>
                    <tr>
                        <td>
                            <?php
                            echo $crf['id_car_rental_facility'];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $address_explode[1] . " " . $address_explode[2];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $address_explode[0];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $address_explode[3];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $crf['type'];
                            ?>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-md-1">
                                    <div><b>Pn:</b></div>
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <?php
                                        echo $working_hours[0];
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1">
                                    <div><b>Wt:</b></div>
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <?php
                                        echo $working_hours[1];
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1">
                                    <div><b>Śr:</b></div>
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <?php
                                        echo $working_hours[2];
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1">
                                    <div><b>Cz:</b></div>
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <?php
                                        echo $working_hours[3];
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1">
                                    <div><b>Pt:</b></div>
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <?php
                                        echo $working_hours[4];
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1">
                                    <div><b>Sb:</b></div>
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <?php
                                        echo $working_hours[5];
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1">
                                    <div><b>Nd:</b></div>
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <?php
                                        echo $working_hours[6];
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a href=<?php echo site_url('admin/car_rental_facility/update?id_crf_update=' . $crf['id_car_rental_facility']); ?>>
                                <button type="button" class="btn btn-primary btn-custom">Edytuj</button>
                            </a>
                            <a href=<?php echo site_url('admin/car_rental_facility/delete?id_crf_delete=' . $crf['id_car_rental_facility']); ?> onclick="return confirm('Na pewno usunąć tą placówkę?')">
                                <button type="button" class="btn btn-danger btn-custom">Usuń</button>
                            </a>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Ulica</th>
                <th>Miasto</th>
                <th>Kod pocztowy</th>
                <th>Typ placówki</th>
                <th>Godziny otwarcia</th>
                <th>Opcje</th>
            </tr>
        </tfoot>
    </table>
</div>