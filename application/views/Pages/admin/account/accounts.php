<div class="container-fluid">
    <div class="col-md-8 col-lg-6 col-xl-4 offset-1 mx-auto">
        <h1 class="big-header-style text-center">Lista kont</h1>
    </div>
    <div class="col-md-8 col-lg-12 text-center pd-bottom">
        <a role="button" class="btn btn-outline-primary full-width-btn" href=<?php echo site_url('admin/account/create');?>>Stwórz konto</a>
    </div>
    <table id="example" class="display">
        <thead>
            <tr>
                <th>Id</th>
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Email</th>
                <th>Typ konta</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($accounts != null) foreach ($accounts as $account){
            ?>
            <tr>
                <td>
                    <?php
                    echo $account['id_acc']
                    ?>
                </td>
                <td>
                    <?php
                    echo $account['firstname']
                    ?>
                </td>
                <td>
                    <?php
                    echo $account['lastname']
                    ?>
                </td>
                <td>
                    <?php
                    echo $account['email']
                    ?>
                </td>
                <td>
                    <?php
                    if($account['acc_type']==0) echo "Klient";
                    elseif($account['acc_type']==1) echo "Admin";
                    ?>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Email</th>
                <th>Typ konta</th>
            </tr>
        </tfoot>
    </table>
</div>