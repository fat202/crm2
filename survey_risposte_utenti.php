<?
require_once 'inc/startPage.php';
require_once ('inc/db_connetti.inc.php');
?>
<!DOCTYPE html>
<html lang="it">

<head>
  <?php include 'inc/head.inc.php'; ?>
  <?php include_once 'inc/survey.inc.php'; ?>
</head>

<body>
  <?php include_once 'inc/logo.inc.php'; ?>


  <!-- Page content -->



  <div class="page-content">
    <? //include 'inc/menu.inc.php'; 
    ?>
    <!-- Main content -->
    <div class="content-wrapper">
      <!-- Content area -->
      <br><br>

      <hr>
      <div class="w-100 div_content background_white">
        <div class="row w-100 justify-content-md-center">
          <div class="col-12 ">
            <h4 class="h4_title px-5 "><b>Risposte presenti:</b></h4>
          </div>
          <div class="col-12 mt-1 d_flex_wide_screen">
          </div>
        </div>
        <div class="row mb-4">
          <div class="col-12 mt-2 mt-lg-1">
            <div class="card card_listing_medico">
              <div class="card-body">
                <?php




if (isset($_GET['sur_id'])) {
  $sur_id = mysqli_real_escape_string($conn, $_GET['sur_id']);
                $query = "SELECT * FROM crm_survey_risposte_utenti  where sur_id='$sur_id' and sur_ris_id !='' ";
                $query_run = mysqli_query($conn, $query);
                if (mysqli_num_rows($query_run) > 0) {
                  foreach ($query_run as $row) {
                    ?>
                    <p><i>
                        <?= $row['sur_ris_utn_data']; ?>
                      </i></p>
                    <b>
                      <p>
                        <?= $row['sur_dom_descr']; ?>
                      </p>
                    </b>
                    <p>
                      <?= $row['sur_ris_id']; ?>
                    </p>
                    <br>
                    <br>
                    <?php
                  }
                }} else {
                  echo "No Record Found";
                }
              

                ?>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-4">
          <div class="col-12 mt-2 mt-lg-1">
            <div class="card card_listing_medico">
              <div class="card-body">
                <div class="row" style="margin-bottom: 1rem;">

                  <form action="" method="POST" target="_self">

                    <?php
                    if (isset($_GET['sur_id'])) {
                      $sur_id = mysqli_real_escape_string($conn, $_GET['sur_id']);
                      $query = "SELECT * FROM crm_survey WHERE sur_id='$sur_id'";
                      $query_run = mysqli_query($conn, $query);
                      if (mysqli_num_rows($query_run) > 0) {
                        $crm = mysqli_fetch_array($query_run);
                        ?>
                        <p class=" font_size_18  txt-color-2 text-start px-3"> <b>
                            <?= $crm['sur_descr']; ?>
                          </b></p>
                        <?php
                      } else {
                        echo "NO ID";
                      }
                    }
                    ?>
                </div>

                <?php
       
                if (isset($_GET['sur_id'])) {
                  $sur_id = mysqli_real_escape_string($conn, $_GET['sur_id']);
                  $query = "SELECT * FROM crm_survey_domande  where sur_id='$sur_id'and sur_dom_tipo_id=3";

                  $query_run = mysqli_query($conn, $query);
                  if (mysqli_num_rows($query_run) > 0) {
                    $crm = mysqli_fetch_array($query_run);

               
                    ?>

                    <div class="row">
                      <b>
                        <p class=" font_size_16 text-start px-3">
                          <?= $crm['sur_dom_descr']; ?>
                        </p>
                      </b>


                      <?php


                      $query = "SELECT * FROM crm_survey_risposte   where sur_dom_id=  " . $crm['sur_dom_id'];

                      $query_run = mysqli_query($conn, $query);
                      $i = 0;
                      while ($utn = mysqli_fetch_array($query_run)) {
                        ?>

                        <div class="col-sm-12 px-4 col-6">
                          <p><input class="form-check-input" id="question1answer" name="sur_ris_id[]"
                              value=" <?= $utn['sur_ris_descr']; ?>" type="checkbox">
                            <label class="form-check-label" for="flexCheckDefault">
                              <?= $utn['sur_ris_descr']; ?>
                            </label>
                         </p>                
                          <input type="hidden"  name="sur_dom_descr[]" value="<?= $crm['sur_dom_descr']; ?>">
                          
                        </div>
                        <?php
                       $i++;
                      }
                      ?>
                    </div>
                    <?php
                  }
                else
                ?>
                       <?php
                    if (isset($_GET['com_utn_id'])) {
                      $com_utn_id = mysqli_real_escape_string($conn, $_GET['com_utn_id']);
                      $sur_id = mysqli_real_escape_string($conn, $_GET['sur_id']);
                      $query = "SELECT * FROM crm_survey WHERE com_utn_id='$com_utn_id' and sur_id='$sur_id'";
                      $query_run = mysqli_query($conn, $query);
                      if (mysqli_num_rows($query_run) > 0) {
                        $crm = mysqli_fetch_array($query_run);
                        ?>
  <input type="hidden" name="com_utn_id" value="<?= $crm['com_utn_id']; ?>">
  <input type="hidden" name="sur_id" value="<?= $crm['sur_id']; ?>">

                        <?php
                      } else {
                        echo "NO ID";
                      }
                    }
                    ?>
                <!-- Domanda2 -->

                <?php if (isset($_GET['sur_id'])) {
                  $sur_id = mysqli_real_escape_string($conn, $_GET['sur_id']);
                  $query = "SELECT * FROM crm_survey_domande WHERE sur_id='$sur_id' and sur_dom_tipo_id=2 ";
                  $query_run = mysqli_query($conn, $query);
                  if (mysqli_num_rows($query_run) > 0) {
                    foreach ($query_run as $crm_1) {
               
                      ?>
                        
                      <div class="row">
                        <b>
                          <p class=" font_size_16 mt-3 text-start px-3">
                            <?= $crm_1['sur_dom_descr']; ?>
                            
                          </p>
                        </b>
                        <div class="col-sm-12 px-4 col-6">


                         
                        
                          <?php

 //your condition
                         $query = "SELECT * FROM crm_survey_risposte   where sur_dom_id= " .$crm_1['sur_dom_id'];
                        
                          $query_run = mysqli_query($conn, $query);
                          $i = 0;
                          while ($utn = mysqli_fetch_array($query_run)) {
                  ?>

                            <div class="col-sm-12 px-1 col-6">
                              <p><input class="form-check-input" id="question1answer" name="sur_ris_id[]"
                                  value=" <?= $utn['sur_ris_descr']; ?>" type="checkbox">
                                <label class="form-check-label" for="flexCheckDefault">
                                  <?= $utn['sur_ris_descr']; ?>
                                </label>
                              </p>
                            </div>
                            <?php
                            $i++;
                          }
                          ?>
                        </div>
                        <?php
                    }
                  }
                  }  } else
              
                ?>
                  <!-- Domanda2 -->



                  <!-- domanda 3 -->
                  <?php if (isset($_GET['sur_id'])) {
                    $sur_id = mysqli_real_escape_string($conn, $_GET['sur_id']);
                    $query = "SELECT * FROM crm_survey_domande WHERE sur_id='$sur_id' and sur_dom_tipo_id=1 ";
                    $query_run = mysqli_query($conn, $query);
                    if (mysqli_num_rows($query_run) > 0) {
                      foreach ($query_run as $crm_2) {
                        ?>


                        <div class="row">
                          <b>
                            <p class=" font_size_16 text-start mt-3 px-3">
                              <?= $crm_2['sur_dom_descr']; ?>
                            </p>

                          </b>

                          <div class="col-sm-4 px-4 col-12">
                        
                          <input type="hidden"  name="sur_dom_descr" value="<?= $crm_2['sur_dom_descr']; ?>">

                            <select name="sur_ris_id[]" class="form-control  form-select mt-4  ">
                              <option></option>
                              <?php
                              $query = "SELECT * FROM crm_survey_risposte   where sur_dom_id= " . $crm_2['sur_dom_id'];
                              $query_run = mysqli_query($conn, $query);
                              $i = 0;
                              while ($utn = mysqli_fetch_array($query_run)) {
                                ?>

                                <option value="<?= $utn['sur_ris_descr']; ?>">
                                  <?= $utn['sur_ris_descr']; ?>
                                 

                                </option>
                                <?php
                                $i++;
                              }
                              ?>
                            </select>

                          </div>
                        </div>

                        <?php
                      }
                    }
                  } else
                  ?>
                 
                  <!-- domanda 4-->
                  <?php if (isset($_GET['sur_id'])) {
                    $sur_id = mysqli_real_escape_string($conn, $_GET['sur_id']);
                    $query = "SELECT * FROM crm_survey_domande WHERE sur_id='$sur_id' and sur_dom_tipo_id=4 ";
                    $query_run = mysqli_query($conn, $query);
                    if (mysqli_num_rows($query_run) > 0) {
                      foreach ($query_run as $crm_3) {
                        ?>
 
                        <div class="row">
                          <b>
                            <p class=" font_size_16 text-start mt-4 px-3">
                              <?= $crm_3['sur_dom_descr']; ?>
                            </p>
                          </b>
                          <div class="col-sm-4 py-4 px-4 col-12">
                            <input type="text" placeholder="" id="question8answer" name="sur_ris_id[]" class="form-control ">
                            <input type="hidden"  name="sur_dom_descr" value="<?= $crm_3['sur_dom_descr']; ?>">
                          
                          </div>
                        </div>
                        <?php
                      }
                    }
                  } else
                  ?>
                  <!-- domanda -->

                  <?php if (isset($_GET['sur_id'])) {
                    $sur_id = mysqli_real_escape_string($conn, $_GET['sur_id']);
                    $query = "SELECT * FROM crm_survey_domande WHERE sur_id='$sur_id' order by sur_id asc limit 1 offset 4 ";
                    $query_run = mysqli_query($conn, $query);
                    if (mysqli_num_rows($query_run) > 0) {
                      foreach ($query_run as $crm_4) {
                        ?>
                        <div class="row">
                          <b>
                            <p class=" font_size_16 text-start mt-3 px-3">
                              <?= $crm_4['sur_dom_descr']; ?>
                            </p>
                          </b>

                        </div>
                        <?php
                      }
                    }
                  } else
                  ?>
                  <div class="col-sm-4 px-4 col-12">


                    <button onclick="myFunction()" type="submit" value="Submit" name="submit_5" class="btn rounded-3 tasto_crea_campagna"
                      style="min-width: 170px;"><b>AGGIORNA
                      </b></button>
                  </div>
                </div>
              </div>
              </form>
              <!-- /content area -->
            </div>
            <!-- /main content -->
          </div>
        </div>
      </div>
      <!-- /page content -->
      <script type="text/javascript">
        $(document).ready(function () { });

        // $('.btn').click(function() {
        // 	$('#content p').hide();
        // 	var target = '#' + $(this).data('target');
        // 	$(target).show();
        // })

        const sections = $('.container-section');
        $('.btnClick').on('click', function () {
          $(sections).find('[data-target]').hide();
          $(sections).find('[data-target="' + $(this).data('section') + '"]').show();
        });
   
    </script>
    
  
      <?php include_once 'inc/footer.inc.php'; ?>
</body>

</html>
<?
require_once ('inc/endPage.php');
?>