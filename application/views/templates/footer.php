    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" ></script>
  </body>
  <footer>
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2021 Copyright: Firma roku
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
  </footer>
</html>
<?php
    $this->unit->run(isset($_SESSION['login_acc_type']), TRUE, 'Czy jesteś zalogowany.');
if(isset($_SESSION['login_acc_type'])){
    $this->unit->run($_SESSION['login_acc_type'], 1, 'Czy jesteś zalogowany jako admin.');
    $this->unit->run($_SESSION['login_acc_type'], 0, 'Czy jesteś zalogowany jako klient.');
}
    
    // echo $this->unit->report();
?>