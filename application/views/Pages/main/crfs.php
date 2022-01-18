<div class="container-fluid">
    <div class="col-md-8 col-lg-6 col-xl-4 offset-1 mx-auto">
        <h1 class="big-header-style text-center">Lista placówek - klient</h1>
    </div>
    <div class="row pd-space">
        <?php
        if ($crfs != null) foreach($crfs as $crf){
            $address_explode = explode(" ", $crf['address']);
            if($crf['type']=="Oba")$crf_purpose="Zwroty i odbiory";
            if($crf['type']=="Zwrot")$crf_purpose="Zwroty";
            if($crf['type']=="Odbiór")$crf_purpose="Odbiory";
        ?>
        <div class="col-sm-4 placowka d-flex justify-content-center placowka">
            <?php
            echo $address_explode[1] ." ". $address_explode[2] ."<br>".
            $address_explode[3] ." ". $address_explode[0] ."<br>
            tel: 000 000 000<br>
            email: car@net.com<br>";
            echo $crf_purpose;
            ?>
        </div>
        <?php } ?>
    </div>
</div>