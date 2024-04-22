<?
require_once('inc/startPage.php');
?>
<!DOCTYPE html>
<html lang="it">

<head>
  <?php include('inc/head.inc.php'); ?>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>


<body>
  <?php include_once('inc/logo.inc.php'); ?>
  <?php include_once('inc/navbar.inc.php'); ?>

  <div class="container ">
    <div class="row justify-content-between  mt-4">
    <?php include_once('inc/menu.php'); ?>
      <div class="text-center col-sm-9">
        <div class="row ">
        <div class="col-sm-12 col-12 text-end">
                    <?php
                  $query ='SELECT * from  crm_utenti  INNER JOIN crm_comunicazione_utenti    ON crm_utenti.utn_id = crm_comunicazione_utenti.utn_id  ';
                  $query_run = mysqli_query($con, $query);
                  if (mysqli_num_rows($query_run) > 0) {
                      foreach ($query_run as $crm) { ?>
                        <ul>

                          <a class="link-3" href="survey.php?utn_id=<?= $crm['utn_id'] ?>&com_utn_id=<?= $crm[ 'com_utn_id'] ?>&com_utn_code=<?= $crm['com_utn_code'] ?>"> <?= $crm['utn_nome'] ?></a>

                        </ul>

                    <?php }
                  }
                  ?>

                  </div>
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
</body>

</html>
<?
require_once('inc/endPage.php');
?>