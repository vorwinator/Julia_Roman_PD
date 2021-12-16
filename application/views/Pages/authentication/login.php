<div class="container-fluid d-flex justify-content-center">
    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <?php
        echo form_open('authentication/login', 'class=col-lg-9 pd-login');
        ?>
            <h1 class="big-header-style text-center">Zaloguj się</h1>
            <div class="pd-top">
                <div class="caption">
                    <p class="small fw-bold mt-2 pt-1 mb-0">Nie posiadasz konta?<a href=<?php echo site_url('authentication/sign_up');?> class="link-primary"> Zarejestruj się</a></p>
                </div>
                <div class="form-floating mb-4">
                    <?php
                    echo form_input('email', set_value('email'), 'class="form-control form-control-lg"');
                    echo form_label('Email', 'email');
                    ?>
                </div>
                <div class="form-floating mb-3">
                    <?php
                    echo form_password('password', '', 'class="form-control form-control-lg"');
                    echo form_label('Hasło', 'password');
                    ?>
                </div>
                <!-- <div class="d-flex justify-content-between align-items-center">
                    <div class="form-check mb-0 pd-right">
                        <input class="form-check-input me-2" type="checkbox" value="" id="logform" />
                        <label class="form-check-label" for="logform">Zapamiętaj mnie</label>
                    </div>
                    <a href="#" class="text-body">Przypomnij hasło</a>
                </div> -->
                <div class="text-center mt-4">
                    <?php
                    echo form_input('acc_type', 1, 'style="display:none;"');

                    echo form_submit('submit', "Zaloguj", 'class="btn btn-primary btn-lg single-button-style"');
                    ?>
                </div>
            </div>
        <?php
        echo form_close();
        ?>
    </div>
</div>