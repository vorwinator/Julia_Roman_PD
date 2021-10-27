<!DOCTYPE html>
<html>
<head>
    <script>
        <?php if(isset($info)) { ?>
            function infoWindow(message) {
                alert(message);
            }
        <?php } ?>
            function alertWindow() {
                infoWindow("<?php if(isset($info)) echo $info ?>");
            }
    </script>
</head>
<body onload=alertWindow()>
<a href=<?php echo site_url('admin/account');?>>Konto</a> </br>
<a href=<?php echo site_url('admin/account/create');?>>Utwórz konto</a> </br>
<a href=<?php echo site_url('admin/account/accounts');?>>Lista kont</a> </br>
<a href=<?php echo site_url('admin/car/create');?>>Dodaj samochód</a> </br>
<a href=<?php echo site_url('authentication/login');?>>Logowanie</a> </br>
<a href=<?php echo site_url('authentication/logout');?>>Wyloguj</a> </br>
<a href=<?php echo site_url('main/index');?>>Główna</a> </br>