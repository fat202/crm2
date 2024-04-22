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
              <h4 class=" text-start fw-bold">Survey - Pubblicate</h4>
            </div>
          </div>

        </div>
        <?php include_once 'inc/paginate.php'; ?>
        <form action="#" method="POST">
          <p class="text-start fw-bold"></p>

          <div class="row ">
            <table class="table table-striped ">
              <thead>
                <tr>
                  <th>CAMPAGNA</th>
                  <th>ID</th>
                  <th>SURVEY</th>
                  <th>ORDINE</th>
                  <th></th>
                </tr>
              </thead>
              <?php
        $query = "SELECT sur_id,sur_descr,sur_ordine FROM crm_survey WHERE NOT EXISTS (SELECT * FROM  crm_survey_comunicazione where crm_survey.sur_id=crm_survey_comunicazione.sur_id)";
        $query_run = mysqli_query($conn, $query);
              if (mysqli_num_rows($query_run) > 0) {
                foreach ($query_run as $crm) { ?>
              <tr>
             
              
  <td>
  
        </td>
        <td>
  <?= $crm['sur_id'] ?>
        </td>
        <td>
        <?= $crm['sur_descr'] ?>
        </td>
        <td>
        <?= $crm['sur_ordine'] ?>
        </td>
        <td>
                      <a href="" style="text-decoration: none; color: grey;" class="elemina"><i> Elemina </i></a>
                    </td>
</tr>
<?php
                }


              }

              ?>
              
              <?php
              $query = "SELECT * FROM crm_survey inner join crm_survey_comunicazione on crm_survey.sur_id = crm_survey_comunicazione.sur_id left join crm_comunicazione on crm_comunicazione.com_id = crm_survey_comunicazione.com_id ";
              $query_run = mysqli_query($conn, $query);
              if (mysqli_num_rows($query_run) > 0) {
                foreach ($query_run as $row) { ?>

                  <tr class="border border-1">

                    <td>
                      <?= $row['com_name'] ?>
                    </td>

                    <td>
                      <?= $row['sur_id'] ?>
                    </td>
                    <td>
                      <a href="survey_da_publicare.php?sur_id=<?= $row['sur_id'] ?>" class="link-3">
                        <?= $row['sur_descr'] ?>
                      </a>
                    </td>
                    <td>
                      <?= $row['sur_ordine'] ?>
                    </td>
                    <td>
                      <a href="" style="text-decoration: none; color: grey;" class="elemina"><i> Elemina </i></a>
                    </td>
                  </tr>

              </div>
              <?php
                }


              }
              ?>
          </table>


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