<?php
require_once 'inc/startPage.php'; ?>
<!DOCTYPE html>
<html lang="it">

<head>
  <?php include 'inc/head.inc.php'; ?>
</head>

<body>
  <?php include_once 'inc/logo.inc.php'; ?>
  <?php include_once 'inc/navbar.inc.php'; ?>
  <div class="container ">
    <div class="row justify-content-between  mt-4">
      <?php include_once 'inc/menu.php'; ?>
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
          <div class="" style="overflow-x: hidden;">
            <form method="GET" action="utenti_filter.php">
              <div class="container">
                <div class="w-100 d-flex">
                  <h4 class="h4_title">Crea nuova utenti</h4>
                </div>
                <div class="row mt-4 mb-4">
                  <div class="col-sm-12 col-12 text-end">
                    <?php
                  $query ='SELECT * from  crm_utenti  INNER JOIN crm_comunicazione_utenti    ON crm_utenti.utn_id = crm_comunicazione_utenti.utn_id  ';
                  $query_run = mysqli_query($con, $query);
                  if (mysqli_num_rows($query_run) > 0) {
                      foreach ($query_run as $crm) { ?>
                        <ul>

                          <a class="link-3" href="listing_medici.php?utn_id=<?= $crm['utn_id'] ?>&com_utn_id=<?= $crm[ 'com_utn_id'] ?>&com_utn_code=<?= $crm['com_utn_code'] ?>"> <?= $crm['utn_nome'] ?></a>

                        </ul>

                    <?php }
                  }
                  ?>

                  </div>
                  <!-- campagna -->
                  <div class="col-12 mt-3">
                    <div class="card" style="background-color: #f7f7f7;">
                      <div class="card-body">
                        <h4 class="h5_title text-start"><b>Cerca per Campagna:</b></h4>
                        <select id="basic" name="utn_campagna" class="form-control selectpicker form-select mt-4" data-live-search="true" placeholder="Inserisci il Campagna">
                          <option value=""></option>
                          <?php
                          $query =
                              'SELECT * from crm_comunicazione where crm_deleted = 0';
                          $res_crm = mysqli_query($conn, $query);
                          while ($crm = mysqli_fetch_array($res_crm)) { ?>
                            <option value="<?= $crm['com_id'] ?>" <?= $crm['com_id'] ==($_GET['utn_campagna'] ?? null)? 'selected': null ?>>
                              <?= $crm['com_name'] ?>
                            </option>
                          <?php }
                          ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <!-- nome -->
                  <div class="col-6 mt-3">
                    <div class="card" style="background-color: #f7f7f7;">
                      <div class="card-body">
                        <p class="text-start"><b>Cerca per Nome:</b></p>
                        <input type="text" name="utn_nome" class="form-control" placeholder="Inserisci il nome" value="<?= $_GET[
                            'utn_nome'
                        ] ?? null ?>">
                      </div>
                    </div>
                  </div>
                  <!-- Cognome -->
                  <div class="col-6 mt-3">
                    <div class="card" style="background-color: #f7f7f7;">
                      <div class="card-body">
                        <p class="text-start"><b> Cerca per Cognome:</b></p>
                        <input type="text" name="utn_cognome" class="form-control" placeholder="Inserisci il Cognome" value="<?= $_GET[
                            'utn_cognome'
                        ] ?? null ?>">
                      </div>
                    </div>
                  </div>
                  <!-- ragione_sociale -->
                  <div class="col-6 mt-3">
                    <div class="card" style="background-color: #f7f7f7;">
                      <div class="card-body">
                        <p class="text-start"><b>Cerca per Ragione Sociale:</b></p>
                        <input type="text" name="utn_rag_soc" class="form-control" placeholder="Inserisci il Ragione Sociale" value="<?= $_GET[
                            'utn_rag_soc'
                        ] ?? null ?>">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-2 mb-4">
                <div class="col-12 d-flex">
                  <span class="mx-auto">
                  
                    <button type="submit" name="submit" class="btn tasto_carica_altri"><b>Cerca utenti</b></button>
                  </span>
                </div>
              </div>
            </form>
            <div class="row ">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Utente</th>


                  </tr>
                </thead>
                <?php if (isset($_GET['submit'])) {
                    $utn_campagna = mysqli_real_escape_string(
                        $con,
                        $_GET['utn_campagna']
                    );
                    $utn_nome = mysqli_real_escape_string(
                        $con,
                        $_GET['utn_nome']
                    );
                    $utn_cognome = mysqli_real_escape_string(
                        $con,
                        $_GET['utn_cognome']
                    );
                    $utn_rag_soc = mysqli_real_escape_string(
                        $con,
                        $_GET['utn_rag_soc']
                    );
                    $query = "SELECT * from crm_utenti a left join crm_comunicazione_utenti b using (utn_id) 
                  where a.utn_deleted = 0";

                    if (!empty($utn_campagna)) {
                        $query .= " AND com_id = $utn_campagna";
                    }
                    if (!empty($utn_nome)) {
                        $query .= " AND utn_nome like '%$utn_nome%'";
                    }
                    if (!empty($utn_cognome)) {
                        $query .= " AND utn_cognome like '%$utn_cognome%'";
                    }
                    if (!empty($utn_rag_soc)) {
                        $query .= " AND utn_rag_soc like '%$utn_rag_soc%'";
                    }

                    ($data = mysqli_query($conn, $query)) or die('error');
                    if (mysqli_num_rows($data) > 0) {
                        while ($row = mysqli_fetch_array($data)) { ?>
                      <tr>
                        <td><?= $row['utn_id'] ?></td>
                        <td><?= $row['utn_nome'] ?></td>
                      </tr>
                    <?php }
                    } else {
                         ?>
                    <tr>
                      <td>No records</td>
                    </tr>
                <?php
                    }
                } ?>
              </table>
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
          // alert($('#DateTime').val());
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
<?php require_once 'inc/endPage.php'; ?>
