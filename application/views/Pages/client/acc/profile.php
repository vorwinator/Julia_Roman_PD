<div class="container-fluid">
    <div class="container-fluid padding-custom text-colour d-flex justify-content-center">
        <h1 class="header-colour">Profil</h1> 
    </div>
    <div class="container rounded mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"><?php echo $acc['firstname']." ".$acc['lastname']?></span><span class="text-black-50"><?php echo $acc['email']?></span><span> </span></div>
            </div>
            <div class="col-md-6 border-right">
                <div class="p-3 py-5">
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="labels">Imie</label>
                            <?php
                                if(isset($info)) echo $info;
                                echo form_open(current_url());
                            
                                echo form_input('firstname', $acc['firstname'], "placeholder=$acc[firstname] class=form-control");
                                echo form_error('firstname');
                            ?>
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Nazwisko</label>
                            <?php
                                echo form_input('lastname', $acc['lastname'], "placeholder=$acc[lastname] class=form-control");
                                echo form_error('lastname');
                            ?>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <label class="labels">Adres email</label>
                            <?php
                                echo form_input('email', $acc['email'], "placeholder=$acc[email] class=form-control");
                                echo form_error('email');

                                echo form_input('acc_type', 1, 'style="display:none;"');
                            ?>
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <?php
                            echo form_submit('submit', "Zapisz", "class='btn btn-primary' style='margin-right: 2%'");

                            echo form_close();
                        ?>
                        <button class="btn btn-primary" type="button">Lista wypożyczeń</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>