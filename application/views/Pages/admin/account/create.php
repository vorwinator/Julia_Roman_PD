<div class="container-fluid d-flex justify-content-center">
    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form class="col-lg-9 pd-registr">
        <?php
        echo form_open(current_url(), 'class="col-lg-9 pd-registr"');
        ?>
            <h1 class="big-header-style text-center">Zarejestruj konto</h1>
            <div class="pd-top">
                <div class="form-floating mb-4">
                    <!-- <input type="imie" class="form-control form-control-lg" placeholder="imie" />
                    <label for="imie">Imię</label> -->
                    <?php
                    echo form_input('email', set_value('email'), 'class="form-control form-control-lg"');
                    echo form_label('Email', 'email');
                    ?>
                    <div class="error-message-style">
                        <?php    
                        echo form_error('email');
                        ?>
                    </div>
                </div>
                <div class="form-floating mb-4">
                    <!-- <input type="surname" class="form-control form-control-lg" placeholder="surname" />
                    <label for="surname">Nazwisko</label> -->
                    <?php
                    echo form_input('firstname', set_value('firstname'), 'class="form-control form-control-lg"');
                    echo form_label('Imię', 'firstname');
                    ?>
                </div>
                <div class="form-floating mb-4">
                    <!-- <input type="email" class="form-control form-control-lg" placeholder="email" />
                    <label for="email">Email</label> -->
                    <?php
                    echo form_input('lastname', set_value('lastname'), 'class="form-control form-control-lg"');
                    echo form_label('Nazwisko', 'lastname');
                    ?>
                </div>
                <div class="form-floating mb-3">
                    <!-- <input type="password" class="form-control form-control-lg" placeholder="password" />
                    <label for="password">Hasło</label> -->
                    <?php
                    echo form_password('password', '', 'class="form-control form-control-lg"');
                    echo form_label('Hasło', 'password');
                    ?>
                </div>
                <div class="form-floating mb-3">
                    <!-- <input type="repeat" class="form-control form-control-lg" placeholder="repeat" />
                    <label for="repeat">Powtórz hasło</label> -->
                    <?php
                    echo form_password('password2', '', 'class="form-control form-control-lg"');
                    echo form_label('Powtórz hasło', 'password2');
                    ?>
                </div>
                <div class="text-center mt-4">
                    <!-- <button type="button" class="btn btn-primary btn-lg single-button-style">Utwórz konto</button> -->
                    <?php
                    echo form_input('acc_type', 1, 'style="display:none;"');
                    echo form_submit('submit', "Utwórz konto", 'class="btn btn-primary btn-lg single-button-style"');
                    ?>
                </div>
            </div>
        <?php   
        echo form_close();
        ?>
    </div>
</div>
