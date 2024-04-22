<?php
require_once 'inc/startPage.php'; ?>
<!DOCTYPE html>
<html lang="it">

<head>
  <?php include 'inc/head.inc.php'; ?>
  <?php include_once 'inc/survey.inc.php'; ?>
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
                    CAMPAGNA</b> <button class="btn tasto_crea_campagna_plus"><i
                      class="fa fa-plus"></i></button></button></a>
            </span>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mt-1">
          </div>
          <div class="col-12 col-md-6 col-lg-4 mt-1 d-flex">
            <span class="center_element d-flex">
              <button class="btn tasto_aggingi_appuntamento color_white d-flex" style="min-width: 170px;"><i
                  class="fa fa-calendar-o color_red_emc mt_mb_auto" style="margin-right: 10px;"></i><span
                  style="text-align: left; font-size: 10px;">OGGI <b class="color_red_emc">9.30</b><br>A.M. DOTT: <b
                    class="color_red_emc">ROSSI PAOLO</b></span><button class="btn tasto_aggingi_appuntamento_plus"
                  data-bs-toggle="modal" data-bs-target="#modaleNuovoEvento"><i
                    class="fa fa-plus"></i></button></button>
            </span>
          </div>
        </div>
   
        <div class="row ">
          <div class="" style="overflow-x: hidden;">
           
              <div class="container-flex">
                <div class="">
                  <h4 class=" text-start fw-bold">Survey -da pubblicare</h4>
                </div>
                <div class="row justify-content-md-end mt-4 mb-4 px-0">
                  <div class="col-6 text-end">
                <i TYPE="button" VALUE=""class="link-3" onClick="history.go(-1);">Elenco survey da pubblicare<img src="images/right-arrow.png" class="h-15 w-15" style="width:13px;height:13px"></img></i>
                </div>
                </div>
                <?php include_once 'inc/paginate.php'; ?>
              </div>
              </div>
<div class="container-flex border border-1 py-2">
<form action="" method="POST">
             
            
             
            
              <?php
                  if (isset($_GET['sur_id'])) {
                    $sur_id = mysqli_real_escape_string($conn, $_GET['sur_id']);
                  $query = "SELECT * from crm_survey where sur_id =$sur_id";
                  $query_run = mysqli_query($conn, $query);
                  while ($row = mysqli_fetch_array($query_run)) { ?>
<h4 class="fw-bold text-start"><?= $row['sur_descr'] ?> </h4>
<div class="row px-0">
<div class="col-sm-6 col-12  mt-3">
                    <div class="card" style="background-color: #f7f7f7;">
                      <div class="card-body">
                        <p class="text-start"><b>Titolo:</b></p>
                        <input type="text" name="" class="form-control" placeholder="Inserisci il titolo" value=" <?= $row['sur_descr'] ?>">
                      </div>
                    </div>
                  </div>
</div>
                  <div class="row px-0">
                  <div class="col-sm-6 col-12  mt-3">
                    <div class="card" style="background-color: #f7f7f7;">
                      <div class="card-body">
                        <p class="text-start"><b>Ordine:</b></p>
                        <input type="text" name="" class="form-control" placeholder="Inserisci il titolo" value=" <?= $row['sur_ordine'] ?>">
                      </div>
                    </div>
                  </div>
                  </div>
<?php
            }
          }
          ?>       
                  <div class="row mt-3">
                  <div class="col-sm-6 col-12 ">
                    <div class="card" style="background-color: #f7f7f7;">
                      <div class="card-body">
                        <p class="text-start"><b>Associa campagna:</b></p>
                        <select id="basic" name="com_id" class="form-control selectpicker form-select " data-live-search="true" placeholder="">
                          <option value=""></option>
                          <?php
                          $query = "SELECT * from crm_comunicazione ";
                          $res_crm = mysqli_query($conn, $query);
                          while ($crm = mysqli_fetch_array($res_crm)) { ?>
                            <option value="<?= $crm['com_id'] ?>" >
                              <?= $crm['com_name'] ?>
                            </option>
                          <?php }
                          ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <?php if (isset($_GET['sur_id'])) {
     $sur_id = mysqli_real_escape_string($conn, $_GET['sur_id']);
     $query = "SELECT * FROM crm_survey WHERE sur_id='$sur_id'";

     $query_run = mysqli_query($conn, $query);
     if (mysqli_num_rows($query_run) > 0) {
         $crm = mysqli_fetch_array($query_run); ?>
										
                    <input type="hidden" name="sur_id" value="<?= $crm['sur_id'] ?>">
											
											<?php
     } else {
         echo '';
     }
 } ?>

<?php if (isset($_GET['com_utn_id'])) {
     $com_utn_id = mysqli_real_escape_string($conn, $_GET['com_utn_id']);
     $query = "SELECT * FROM crm_comunicazione_utenti WHERE com_utn_id='$com_utn_id'";

     $query_run = mysqli_query($conn, $query);
     if (mysqli_num_rows($query_run) > 0) {
         $crm = mysqli_fetch_array($query_run); ?>
										
                    <input type="hidden" name="com_utn_id" value="<?= $crm['com_utn_id'] ?>">
											
											<?php
     } else {
         echo '';
     }
 } ?>


                  </div>
      

        <div class="row mt-2 mb-4">
                <div class="col-12  text-start">
                  <span class="mx-auto">
           
                    <button type="submit" name="submit_3" class="btn tasto_carica_altri"><b>AGGIORNA</b></button>
                    
                </div>
              </div>
              </div>
        </div>
        </form>

<br>
<br>


<form action="#" method="POST">
              <p class="text-start fw-bold">Domande presenti</p>
            
              <div class="row ">
              <table class="table table-striped ">
                  <thead>
                  <tr>
                    <th>Domanda</th>
                    <th>Tipo Domanda</th>
                  </tr>
                  </thead>
                  <?php
                  if (isset($_GET['sur_id'])) {
                    $sur_id = mysqli_real_escape_string($conn, $_GET['sur_id']);
                  $query = "SELECT * from crm_survey_domande where sur_id =$sur_id";
                  $query_run = mysqli_query($conn, $query);
                  while ($row = mysqli_fetch_array($query_run)) { ?>
                  

                    
                  <tr class="border border-1">
                        <td>
                          <a href="survey_risposte.php?sur_id=<?= $row['sur_id'] ?>&sur_dom_id=<?= $row['sur_dom_id'] ?>" class="link-3" ><?= $row['sur_dom_descr'] ?></a>
                        </td>
                        <td>
                          <?= $row['sur_dom_tipo_id'] ?>
                        </td>
                      </tr>
              
              </div>
            <?php
            }
       
        
          }
          ?>
            </table>
                 <div class="row mt-4 mb-4">
              <div class="col-sm-6 col-12  mt-3">
                    <div class="card" style="background-color: #f7f7f7;">
                      <div class="card-body">
                        <p class="text-start"><b>Titolo:</b></p>
                        <input type="text" name="sur_dom_descr" class="form-control" placeholder="Inserisci il titolo" value="">
                      </div>
                    </div>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-sm-6 col-12 ">
                    <div class="card" style="background-color: #f7f7f7;">
                      <div class="card-body">
                        <p class="text-start"><b>Tipo Domanda:</b></p>
                        <select id="basic" name="sur_dom_tipo_id" class="form-control selectpicker form-select " data-live-search="true" placeholder="">
                          <option value=""></option>
                          <?php
                          $query = "SELECT * from crm_survey_domande_tipo ";
                          $res_crm = mysqli_query($conn, $query);
                          while ($crm = mysqli_fetch_array($res_crm)) { ?>
                            <option value="<?= $crm['sur_dom_tipo_id'] ?>" >
                              <?= $crm['sur_dom_tipo_id'] ?>
                            </option>
                          <?php }
                          ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <?php if (isset($_GET['sur_id'])) {
     $sur_id = mysqli_real_escape_string($conn, $_GET['sur_id']);
     $query = "SELECT * FROM crm_survey WHERE sur_id='$sur_id'";

     $query_run = mysqli_query($conn, $query);
     if (mysqli_num_rows($query_run) > 0) {
         $crm = mysqli_fetch_array($query_run); ?>
										
                    <input type="hidden" name="sur_id" value="<?= $crm['sur_id'] ?>">
											
											<?php
     } else {
         echo '';
     }
 } ?>



                  </div>

        </div>

        <div class="row mt-2 mb-4">
                <div class="col-12  text-start">
                  <span class="mx-auto">
           
                    <button type="submit" name="submit_1" class="btn tasto_carica_altri"><b>INSERISCI</b></button>
                    
                </div>
              </div>
              
        </form>

      </div>
    </div>
  </div>



                <script type="text/javascript">
        $(document).ready(function () { });
      </script>
      <script type="text/javascript">
        var links = document.querySelectorAll(".dropdown-item");
        for (link of links) {
          link.addEventListener("click", function (e) {
            for (inlink of links) {
              inlink.classList.remove("active");
            }
            e.target.classList.add("active");
          });
        }
        $(document).ready(function () {
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