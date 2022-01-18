<div class="container-fluid d-flex justify-content-center">
    <div class="col-md-8 col-lg-6 col-xl-4 offset-1">
            <?php
            echo form_open(current_url(), 'class="col-lg-10 pd-kaucja"');
            ?>
            <h1 class="big-header-style text-center">Potwierdzenie</h1>
            <div class="row">
                <div class="etykieta">Wybrany termin</div>
                <div class="col-md-12 border text-center">
                    <div class="form-floating">
                        <?php
                        if ($_SESSION['rent_type'] == "Wynajem"){
                        ?>
                        <span>
                            <?php
                            echo $_SESSION['start_date'];
                            ?>
                        </span>
                        <span>
                            —
                        </span>
                        <span>
                            <?php
                            echo $_SESSION['end_date'];
                            ?>
                        </span>
                        <?php 
                        }
                        if ($_SESSION['rent_type'] == "Przejazd z kierowcą"){
                        ?>
                        <span>
                            <?php
                            echo $_SESSION['date'];
                            ?>
                        </span>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <?php
                if ($_SESSION['rent_type'] == "Wynajem"){
                ?>
                <div class="etykieta">Placówka odbioru</div>
                <div class="col-md-12 border text-center">
                    <div class="form-floating">
                        <?php
                        echo $_SESSION['crf_address'];
                        ?>
                    </div>
                </div>
                <div class="etykieta">Placówka zwrotu</div>
                <div class="col-md-12 border text-center">
                    <div class="form-floating">
                        <?php
                        if($_SESSION['return_to'] != null){
                            echo $_SESSION['return_to'];
                        }
                        else{
                            echo $_SESSION['crf_address'];
                        }
                        ?>
                    </div>
                </div>
                <?php 
                }
                if ($_SESSION['rent_type'] == "Przejazd z kierowcą"){
                ?>
                <div class="etykieta">Adres odbioru</div>
                <div class="col-md-12 border text-center">
                    <div class="form-floating">
                        <?php
                        echo $_SESSION['start_address'];
                        ?>
                    </div>
                </div>
                <div class="etykieta">Adres docelowy</div>
                <div class="col-md-12 border text-center">
                    <div class="form-floating">
                        <?php
                        echo $_SESSION['finish_address'];
                        ?>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
            <div class="kwota">
                ŁĄCZNIE: 
                <?php
                echo $price;
                ?> 
                PLN
            </div>
            <div class="text-center mt-4">
                <?php
                echo form_submit('accept', "Akceptuj", 'class="btn btn-outline-primary btn-lg single-button-style"');
                ?>
            </div>
            <?php
            echo form_close();
            ?>
    </div>
</div>