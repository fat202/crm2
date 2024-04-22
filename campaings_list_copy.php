<?
require_once('inc/startPage.php');
?>
<!DOCTYPE html>
<html lang="it">

<head>
  <?php include('inc/head.inc.php'); ?>
  <?php include('inc/create_campaign.inc.php'); ?>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

</head>

<body>
  <?php include_once('inc/logo.inc.php'); ?>
  <?php include_once('inc/navbar.inc.php'); ?>


  <div class="container ">
    <div class="row  mt-4">
    <div class="col-3  collapse navbar-collapse" id="navbarRightAlignExample">
        <ul class="dorpdown d-block d-sm-none navbar-nav" >
          <a class="dropdown-item  nav-item" href="">Appuntamenti</a>
          <a class="dropdown-item" href="">Appuntamenti Sposta</a>
          <a class="dropdown-item" href="">Da Richiamare</a>
          <a class="dropdown-item" href="">Disponibilit� Informatori</a>
          <a class="dropdown-item" href="">Utenti</a>
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
        <ul class="dorpdown navbar-nav" >
          <a class="dropdown-item  nav-item" href="">Appuntamenti</a>
          <a class="dropdown-item" href="">Appuntamenti Sposta</a>
          <a class="dropdown-item" href="">Da Richiamare</a>
          <a class="dropdown-item" href="">Disponibilit� Informatori</a>
          <a class="dropdown-item" href="">Utenti</a>
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

      <div class="col-sm-9">
        <?php
        $query = "SELECT * FROM crm_comunicazione ";
        $query_run = mysqli_query($con, $query);
        if (mysqli_num_rows($query_run) > 0) {
          foreach ($query_run as $crm) {
          
        ?>
            <br>
            <ol class="list-group ">
              <li class=" d-flex  ">
                <a class="dropdown-item" href="campaign_view.php?com_id=<?= $crm['com_id']; ?>"><?= $crm['com_brand']; ?></a>
                <span class="badge  "><a href="campaign_edit.php?com_id=<?= $crm['com_id']; ?>" class="btn btn-success btn-sm">edit</a>

                  <button type="submit" name="delete" value="<?= $crm['com_id']; ?>" class="btn btn-danger btn-sm">Delete</button>
                </span>
              </li>


            </ol>
        <?php
          }
        } else

        ?>
      </div>


    </div>
  </div>

  <script type="text/javascript">
    $(document).ready(function() {});
  </script>
  <?php include_once('inc/footer.inc.php'); ?>
</body>

</html>
<?
require_once('inc/endPage.php');
?>