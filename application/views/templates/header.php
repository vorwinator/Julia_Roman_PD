<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/style.css">
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#example2').DataTable();
        });
    </script>
    <script>
        <?php if (isset($info)) { ?>

            function infoWindow(message) {
                alert(message);
            }
        <?php } ?>

        function alertWindow() {
            infoWindow("<?php if (isset($info)) echo $info ?>");
        }
    </script>
    <title>
        <?php
        echo $title;
        ?>
    </title>
</head>

<body onload=alertWindow()>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #4D4847;">
        <div class="container-fluid nav-container1">
            <a class="navbar-brand mx-auto text-colour" href="<?php echo site_url('admin/rent/index'); ?>">
                <img src="https://getbootstrap.com/docs/4.1/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="">
                Firma roku
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse nav-container2" id="navbarNav">
            <ul class="navbar-nav nav-fill w-100">
                <li class="nav-item active">
                    <a class="nav-link" href=<?php echo site_url('admin/account/accounts'); ?>>Konta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-colour" href=<?php echo site_url('admin/car/cars'); ?>>Samochody</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-colour" href=<?php echo site_url('admin/car_rental_facility/crfs'); ?>>Placówki</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-colour" href=<?php echo site_url('admin/rent/index'); ?>>Wynajmy</a>
                </li>
                <li class="nav-item">
                    <?php
                    if (isset($_SESSION['login_acc_type'])) {
                    ?>
                        <a class="nav-link text-colour" href="<?php echo site_url('authentication/logout'); ?>">Wyloguj się</a>
                    <?php
                    } else if (!isset($_SESSION['login_acc_type'])) {
                    ?>
                        <a class="nav-link text-colour" href="<?php echo site_url('authentication/login'); ?>">Zaloguj się</a>
                    <?php
                    }
                    ?>
                </li>
            </ul>
        </div>
    </nav>