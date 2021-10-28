</body>
<?php
    $this->unit->run(isset($_SESSION['login_acc_type']), TRUE, 'Czy jesteś zalogowany.');
if(isset($_SESSION['login_acc_type'])){
    $this->unit->run($_SESSION['login_acc_type'], 1, 'Czy jesteś zalogowany jako admin.');
    $this->unit->run($_SESSION['login_acc_type'], 0, 'Czy jesteś zalogowany jako klient.');
}
    
    echo $this->unit->report();
?>