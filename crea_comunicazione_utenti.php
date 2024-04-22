<?
require_once('inc/startPage.php');
?>
<!DOCTYPE html>
<html lang="it">

<head>
  <?php include('inc/head.inc.php'); ?>
  <?php include('inc/crea_comucazione_utenti.inc.php'); ?>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>

<body>
  <?php include_once('inc/logo.inc.php'); ?>
  <?php include_once('inc/navbar.inc.php'); ?>

  <div class="container ">
    <div class="row justify-content-between  mt-4">
      <div class="col-3  collapse navbar-collapse" id="navbarRightAlignExample">
        <ul class="dorpdown d-block d-sm-none navbar-nav">
          <a class="dropdown-item  nav-item" href="">Appuntamenti</a>
          <a class="dropdown-item" href="">Appuntamenti Sposta</a>
          <a class="dropdown-item" href="">Da Richiamare</a>
          <a class="dropdown-item" href="">Disponibilit� Informatori</a>
          <a class="dropdown-item" href="utenti_list.php">Utenti</a>
          <a class="dropdown-item" href="utenti_filter.php">Utenti Filter</a>
          <a class="dropdown-item" href="crea_comunicazione_utenti.php">Comunicazioni Utenti</a>
          <a class="dropdown-item" href="">Blocca agende</a>
          <a class="dropdown-item" href="">iCalendar</a>
          <a class="dropdown-item" href="campaings_list_copy.php">Verifica KO</a>
          <a class="dropdown-item" href="">Errori</a>
          <a class="dropdown-item" href="">Correggi schede</a>
          <a class="dropdown-item" href="campaings_list.php">Configurazione campagne</a>
          <a class="dropdown-item" href="">Aggiungi utente</a>
          <a class="dropdown-item" href="">Aggiungi utente (manuale)</a>
          <a class="dropdown-item" href="#">SMS - Inviati</a>
          <a class="dropdown-item" href="#">SMS - Ricevuti</a>
          <a class="dropdown-item" href="#">Survey - Da pubblicare</a>
          <a class="dropdown-item" href="#">Survey - Nuova</a>
          <a class="dropdown-item" href="#">Attivit� - Ore lavorate</a>
          <a class="dropdown-item" href="#">Attivit� - Call recuperate</a>
          <a class="dropdown-item" href="#">Manuale d'uso</a>
        </ul>
      </div>
      <div class="col-3 d-none d-sm-block ">
        <ul class="dorpdown navbar-nav">
          <a class="dropdown-item  nav-item" href="">Appuntamenti</a>
          <a class="dropdown-item" href="">Appuntamenti Sposta</a>
          <a class="dropdown-item" href="">Da Richiamare</a>
          <a class="dropdown-item" href="">Disponibilit� Informatori</a>
          <a class="dropdown-item" href="utenti_list.php">Utenti</a>
          <a class="dropdown-item" href="utenti_filter.php">Utenti Filter</a>
          <a class="dropdown-item" href="crea_comunicazione_utenti.php">Comunicazioni Utenti</a>
          <a class="dropdown-item" href="">Blocca agende</a>
          <a class="dropdown-item" href="">iCalendar</a>
          <a class="dropdown-item" href="campaings_list_copy.php">Verifica KO</a>
          <a class="dropdown-item" href="">Errori</a>
          <a class="dropdown-item" href="">Correggi schede</a>
          <a class="dropdown-item" href="campaings_list.php">Configurazione campagne</a>
          <a class="dropdown-item" href="">Aggiungi utente</a>
          <a class="dropdown-item" href="crea_utenti.php">Aggiungi utente (manuale)</a>
          <a class="dropdown-item" href="#">SMS - Inviati</a>
          <a class="dropdown-item" href="#">SMS - Ricevuti</a>
          <a class="dropdown-item" href="#">Survey - Da pubblicare</a>
          <a class="dropdown-item" href="#">Survey - Nuova</a>
          <a class="dropdown-item" href="#">Attivit� - Ore lavorate</a>
          <a class="dropdown-item" href="#">Attivit� - Call recuperate</a>
          <a class="dropdown-item" href="#">Manuale d'uso</a>
        </ul>
      </div>
      <div class="text-center col-sm-9">
        <div class="row mt-4 mb-4">
          <div class="col-12 col-sm-6 col-md-4 mt-1 d-flex">
            <span class="center_element">
              <a href="crea_campagna.php"><button class="btn tasto_crea_campagna" style="min-width: 170px;"><b>CREA
                    CAMPAGNA</b> <button class="btn tasto_crea_campagna_plus"><i class="fa fa-plus"></i></button></button></a>
            </span>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mt-1">
          </div>
          <div class="col-12 col-md-6 col-lg-4 mt-1 d-flex">
            <span class="center_element d-flex">
              <button class="btn tasto_aggingi_appuntamento color_white d-flex" style="min-width: 170px;"><i class="fa fa-calendar-o color_red_emc mt_mb_auto" style="margin-right: 10px;"></i><span style="text-align: left; font-size: 10px;">OGGI <b class="color_red_emc">9.30</b><br>A.M. DOTT: <b class="color_red_emc">ROSSI PAOLO</b></span><button class="btn tasto_aggingi_appuntamento_plus" data-bs-toggle="modal" data-bs-target="#modaleNuovoEvento"><i class="fa fa-plus"></i></button></button>
            </span>
          </div>
        </div>
        <div class="row ">


          <!-- crea Utenti -->
          <div class="" style="overflow-x: hidden;">
            <!-- Content area -->

            <form method="POST">
              <div class="container">
                <div class="w-100 d-flex">
                  <h4 class="h4_title">Crea nuova utenti</h4>
                </div>
                <div class="row mt-4 mb-4">
                  <!-- campagna -->


                  <div class="col-12 mt-3">
                    <div class="card" style="background-color: #f7f7f7;">
                      <div class="card-body">
                        <h4 class="h5_title text-start"><b>Comunicazione ID:
                          </b></h4>
                          <select id="basic" name="com_id"   class="form-control selectpicker form-select mt-4  " data-live-search="true"  >
                          <option selected>None</option>
                          <?php
                          $query = "SELECT * FROM crm_comunicazione where crm_deleted = 0";
                          $query_run = mysqli_query($conn, $query);

                          while ($utn = mysqli_fetch_array($query_run)) {
                          ?>
                            <option value="<?= $utn['com_id']; ?>">
                              <?= $utn['com_name']; ?></option>
                          <?php
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                  </div>

                  <!-- Comunicazione ID -->
                  <div class="col-12 mt-3">
                    <div class="card" style="background-color: #f7f7f7;">
                      <div class="card-body">
                        <p class="text-start"><b>Comunicazione Utenti</b></p>
                        <select id="basic" name="utn_id"   class="form-control selectpicker form-select mt-4  " data-live-search="true"  >
                          <option selected>None</option>
                          <?php
                          $query = "SELECT * FROM crm_utenti where utn_deleted = 0";
                          $query_run = mysqli_query($conn, $query);
                          $i = 0;
                          while ($utn = mysqli_fetch_array($query_run)) {
                          ?>

                            <option value="<?= $utn['utn_id']; ?>">
                              <?= $utn['utn_nome']; ?></option>
                          <?php
                            $i++;
                          }
                          ?>
                             </select>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-2 mb-4">
						<div class="col-12 d-flex">
							<span class="mx-auto">
								<button type="submit" name="submit" class="btn tasto_carica_altri"><b>Carica nuova comunicazione utenti</b></button>
							</span>
						</div>
					</div>
                </div>
      
            </form>
          </div>
          <!-- /content area -->
        </div>

      </div>
      <div class="row ">
      </div>
    </div>
  </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function() {});
  </script>
  <script type="text/javascript">
    var links = document.querySelectorAll(".dropdown-item");
    for (link of links) {
      link.addEventListener("click", function(e) {
        for (inlink of links) {
          inlink.classList.remove("active");
        }
        e.target.classList.add("active");
      });
    }


    $(document).ready(function() {
      var today = moment().format('YYYY-MM-DD HH:mm:ss');
      $('#DateTime').val(today);
  
    });
  </script>
  <script>


$('#basic2').selectpicker({
  liveSearch: true,
  maxOptions: 1
});
</script>


<script src="assets/bootstrap-5.0.2-dist/js/bootstrap-select.js"></script>
</body>

</html>
<?
require_once('inc/endPage.php');
?>