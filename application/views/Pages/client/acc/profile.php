<div class="container-fluid d-flex justify-content-center">
    <div class="col-md-8 col-lg-6 col-xl-4">
        <div class="container rounded mb-5">
            <?php
            echo form_open(current_url(), 'class="col-lg-9 profile-form"');
            ?>
            <h1 class="big-header-style text-center" style="padding-bottom: 10%;">Profil</h1>
            <div class="row">
                <div class="col col-border">
                    <div class="form-floating mb-3">
                        <?php
                        echo form_input('firstname', $acc['firstname'], "placeholder=$acc[firstname] class=form-control form-control-lg");
                        echo form_label('Imie', 'firstname');
                        echo form_error('firstname');
                        ?>
                    </div>
                    <div class="form-floating mb-3">
                        <?php
                        echo form_input('lastname', $acc['lastname'], "placeholder=$acc[lastname] class=form-control form-control-lg");
                        echo form_label('Nazwisko', 'lastname');
                        echo form_error('lastname');
                        ?>
                    </div>
                    <div class="form-floating mb-3">
                        <?php
                        echo form_input('email', $acc['email'], "placeholder=$acc[email] class=form-control form-control-lg");
                        echo form_label('Email', 'email');
                        echo form_error('email');
                        ?>
                    </div>
                    <div class="text-center">
                        <?php
                        echo form_submit('submit', "Zapisz", 'class="btn btn-primary single-button-style"');
                        ?>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control form-control-lg" placeholder="password" />
                        <label for="flpassword">Obecne hasło</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password2" class="form-control form-control-lg" placeholder="password2" />
                        <label for="password2">Nowe hasło</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="repeat" class="form-control form-control-lg" placeholder="repeat" />
                        <label for="repeat">Powtórz nowe hasło</label>
                    </div>
                    <div class="text-center">
                        <?php
                        echo form_submit('submit_password', "Zapisz", 'class="btn btn-primary single-button-style"');
                        echo form_close();
                        ?>
                    </div>
                </div>
                <div class="col-xs-12 text-center pd-top">
                    <a class="btn btn-outline-primary single-button-style" role="button" href=<?php echo site_url('client/rental/rentals'); ?>>Lista wynajmów</a>
                </div>
            </div>
        </div>
    </div>
</div>