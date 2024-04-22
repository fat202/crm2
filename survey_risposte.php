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
        <form action="" method="POST">
        <div class="row ">
          <div class="" style="overflow-x: hidden;">
           
              <div class="container">
                <div class="w-100 d-flex">
                  <h4 class="h4_title">Survey - Risposte</h4>
                </div>
                <div class="row justify-content-md-end mt-4 mb-4 px-0">
                  <div class="col-6 text-end">
                <i TYPE="button" VALUE=""class="link-3" onClick="history.go(-1);">Elenco Domanda<img src="images/right-arrow.png" class="h-15 w-15" style="width:13px;height:13px"></img></i>
                </div>
                </div>
              </div>
              </div>
              <div class="row">
              <table class="table table-striped">
                  <thead>
                  <tr>
                    <th>Risposte</th>
                    <th>Ordine</th>
                  </tr>
                  </thead>
                  <?php
                  if (isset($_GET['sur_dom_id'])) {
                    $sur_dom_id = mysqli_real_escape_string($conn, $_GET['sur_dom_id']);
                  $query = "SELECT * from crm_survey_risposte where sur_dom_id =$sur_dom_id";
                  $query_run = mysqli_query($conn, $query);
                  while ($row = mysqli_fetch_array($query_run)) { ?>
 

                  
                  <tr>
                        <td>
                         <?= $row['sur_ris_descr'] ?>
                        </td>
                        <td>
                          <?= $row['sur_ris_ordine'] ?>
                        </td>
                      </tr>
              
              </div>
            <?php
            }
       
        
          }
          ?>
            </table>
                 <div class="row">
              <div class="col-12 col-sm-6 mt-3">
                    <div class="card" style="background-color: #f7f7f7;">
                      <div class="card-body">
                        <p class="text-start"><b>Risposte:</b></p>
                        <input type="text" name="sur_ris_descr" class="form-control" placeholder="Inserisci il risposte" value="">
                      </div>
                    </div>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-sm-6 col-12 mt-3">
                    <div class="card" style="background-color: #f7f7f7;">
                      <div class="card-body">
                        <p class="text-start"><b>Ordine(numerico):</b></p>
                        <input type="text" name="sur_ris_ordine" class="form-control" placeholder="0" value="">
                      </div>
                    </div>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-sm-2 text-start col-12 mt-3">
                    <div class="card" style="background-color: #f7f7f7;">
                      <div class="card-body">
                      <input class="form-check-input" name="sur_ris_free_text" type="checkbox" value="3" id="flexCheckDefault">
<input type="hidden" name="sur_ris_free_text" value="0">
<label class="form-check-label" for="flexCheckDefault">
 Free text
</label>
</div>
                       
                      </div>
                    </div>
                  </div>
        

<?php if (isset($_GET['sur_dom_id'])) {
     $sur_dom_id = mysqli_real_escape_string($conn, $_GET['sur_dom_id']);
     $query = "SELECT * FROM crm_survey_domande WHERE sur_dom_id='$sur_dom_id'";

     $query_run = mysqli_query($conn, $query);
     if (mysqli_num_rows($query_run) > 0) {
         $crm = mysqli_fetch_array($query_run); ?>
										
                    <input type="hidden" name="sur_dom_id" value="<?= $crm['sur_dom_id'] ?>">
											
											<?php
     } else {
         echo '';
     }
 } ?>

        </div>
        <div class="row mt-2 mb-4">
                <div class="col-12  text-start">
                  <span class="mx-auto">
           
                    <button type="submit" name="submit_2" class="btn tasto_carica_altri"><b>INSERISCI</b></button> 
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