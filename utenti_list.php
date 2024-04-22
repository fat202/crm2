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
          <?php
          $query = "SELECT * FROM crm_utenti where utn_deleted=0 ";
          $query_run = mysqli_query($conn, $query);
          if (mysqli_num_rows($query_run) > 0) {
            foreach ($query_run as $crm) {

          ?>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal<?= $crm['utn_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">

                  <div class="modal-content">

                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel"><?= $crm['utn_id']; ?></h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Do you want to delete <?= $crm['utn_nome']; ?>?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-light btn-sm" data-bs-dismiss="modal">Close</button>
                      <form action="inc/create_utenti.inc.php" method="POST" class="d-inline">
                        <input type="hidden" name="id" value="<?= $crm['utn_id']; ?>">
                        <button type="submit" name="delete" class="btn btn-danger btn-sm">Delete</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- card -->
              <div class="col-sm-4  ">
                <div class="card" style="border: 1px solid #b7d0d5;">
                  <div class="card-body">
                    <div class="row justify-content-end">
                      <div class="col-6 text-start">
                        <a type="button" href="utenti_edit.php?utn_id=<?= $crm['utn_id']; ?>"><img src="images/pencil-square.svg" alt=""></a>
                      </div>
                      <div class="col-6 text-end">
                        <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $crm['utn_id']; ?>"><img src="images/x (1).svg" alt=""></a>
                      </div>
                    </div>
                    <a class="dropdown-item" href="utenti_view.php?utn_id=<?= $crm['utn_id']; ?>">
                      <div class="row mt-4 mb-4" style="padding-right: 1rem; padding-left: 1rem;">
                        <div class="col-12 mt-1">
                          <p class="card-text font_size_16" style="margin-bottom: 0px; text-align: center;"><?= $crm['utn_nome']; ?>
                          </p>
                        </div>
                        <div class="col-12 mt-2" style="min-height: 175px; position: relative; background-color: #f7f7f7; padding-right: 0px; padding-left: 0px;">
                          <div class="progress progress_2" style="height: 18%;">
                            <div class="progress-bar background_green_grafico" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="135"></div>
                            <div class="progress-bar background_red_grafico" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="135"></div>
                          </div>
                          <span class="color_black_grafico background_grey_grafico_span span_counter_2">
                            <b class="font_size_32">26/135</b>
                            <br>
                            <b class="font_size_18">chiamate</b>
                          </span>
                        </div>
                        <div class="col-12 mt-1 d-flex">
                          <span class="d-flex">
                            <i class="fa fa-thumbs-up fa-lg mt_mb_auto mr-2" style="color: green;"></i>
                            <p class="card-text mt_mb_auto font_size_24" style="margin-left: 0.5rem;"><b style="color: green;">13</b></p>
                          </span>
                          <span class="d-flex" style="margin-left: auto;">
                            <i class="fa fa-thumbs-down fa-lg mt_mb_auto mr-2" style="color: red;"></i>
                            <p class="card-text mt_mb_auto font_size_24" style="margin-left: 0.5rem;"><b style="color: red;">13</b></p>
                          </span>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
          <?php
            }
          } else
          ?>
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