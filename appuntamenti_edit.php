<?
require_once 'inc/startPage.php';
require_once('inc/db_connetti.inc.php');
?>
<!DOCTYPE html>
<html lang="it">

<head>
	<?php include 'inc/head.inc.php'; ?>
	<?php include_once 'inc/create_utenti_anagrafica.inc.php'; ?>
</head>

<body>
	<?php include_once 'inc/logo.inc.php'; ?>
	<?php include_once 'inc/navbar.inc.php'; ?>
	
	<!-- Page content -->
	<div clas="container shadow-lg bg-light">
		<div class="row mt-4 mb-4 justify-content-end">
		<?php if (isset($_GET['utn_id'])) {
      $utn_id = mysqli_real_escape_string($conn, $_GET['utn_id']);
      $query = "SELECT * FROM crm_utenti WHERE utn_id='$utn_id'";
      $query_run = mysqli_query($conn, $query);
      if (mysqli_num_rows($query_run) > 0) {
          $crm = mysqli_fetch_array($query_run); ?>
			<div class="col-12 col-md-6 col-lg-4 mt-1 align-self-end d-flex">
				<span class="center_element d-flex">
					<button class="btn tasto_aggingi_appuntamento color_white d-flex">
						<i class="fa fa-calendar-o color_red_emc mt_mb_auto" style="margin-right: 10px;">
						</i>
						<span style="text-align: left; font-size: 10px;">OGGI
							<b class="color_red_emc">9.30</b>
							<br>A.M. DOTT:
							<b class="color_red_emc">ROSSI PAOLO</b>
						</span>
						<button class="btn tasto_aggingi_appuntamento_plus" data-bs-toggle="modal" data-bs-target="#modaleNuovoEvento"><i class="fa fa-plus">

							</i>
						</button>
					</button>
				</span>
			</div>
		</div>
		<div class="col-12 mt-1 d_flex_wide_screen px-5 text-center">
			<p class="color_title px-2">ID UTENTE: <b>12345</b></p>
			<p class="color_title px-2">ID SCHEMA: <b>SEMPRE</b></i></p>
		</div>

		<div class="container-fluid shadow-lg ">
			<div class="row  ">
				<div class="col-sm-3 doc container-section  ">
					<p data-target="1"><img src="images/dent3.jpg" class=" img-fluid h-50 w-50 rounded-circle mt-3 mx-auto d-block" alt="">



				</div>
				<div class="col-sm-3 doc container-section  " style="display:none;">
					<p data-target="2">

						ewfefefef

				</div>
				<div class="col-sm-1 col-12  px-0">
					<!-- <button class="" data-section="1">Section one</button>
<button class="" data-section="2">Section two</button>

<div class="container-section">
  <div >
    <p>Section one. Message one.</p>
  </div>

  <div  style="display:none;">
    <p>Section one. Message two.</p>
  </div>
</div> -->
					<div class="btn-group-vertical">
						<button type="button" class="btn btnClick  " id="btn1" data-section="1"><img src="images/person.svg" alt=""></button>
						<button type="button" class="btn btnClick  mt-1" id="btn2" data-section="2"><img src="images/eyeglasses.svg" alt=""></button>
						<button type="button" class="btn btnClick  mt-1" id="btn3" data-section="3"><img src="images/window-dock.svg" alt=""></button>

					</div>
				</div>
				<div id="" class=" container-section col-sm-8 px-0 px-0 text-start">


					<div id="" data-target="1" class="row ">

						<div class="col-sm-3 col-12">

							<p class="color_title" style="margin-right: 1rem; margin-bottom: 0px;"> <b>DOTT.<?= $crm[
           'utn_nome'
       ] ?></b></p>
							<p class="font_size_12" style="margin-bottom: 0px; color: #000000;"><b> <?= $crm[
           'utn_anni'
       ] ?></b></p>
							<br>
							<p class="color_title" style="margin-right: 1rem; margin-bottom: 0px;"> OPSEDALIERO/TERITORIALE</p>
							<br>
							<p class="font_size_12" style="color: grey; margin-bottom: 0px;">INFO</p>
							<p class="font_size_13" style="margin-bottom: 0px; color: #000000;"><?= $crm[
           'utn_indirizzo_nazione_id'
       ] ?> ,<?= $crm['utn_indirizzo_comune_id'] ?> | 38122 </p>
						</div>
						<div class="col-sm-3 col-12 line">

							<p class="color_title" style="margin-right: 1rem; margin-bottom: 0px;"> PROFESSIONE</p>
							<p class="font_size_12" style="margin-bottom: 0px; color: #000000;"><b><?= $crm[
           'utn_professione'
       ] ?></b></p>
							<a class="link-1 font_size_11">modifica</a>
							<br><br>
							<p class="color_title" style="margin-right: 1rem; margin-bottom: 0px;">SPECIALIZZAZIONE </p>
							<p class="font_size_12" style="margin-bottom: 0px; color: #000000;"><b><?= $crm[
           'utn_specializzazione'
       ] ?></b></p>

							<a class="link-1 font_size_11">aggiungi</a>

						</div>
						<div class="col-sm-3 col-12 line">
							<p class="color_title" style="margin-right: 1rem; margin-bottom: 0px;"> RECAPITI</p>
							<br>
							<p class="font_size_12" style="margin-bottom: 0px; color: #000000;"><b>345/6789022</b></p>
							<p class="font_size_12" style="margin-bottom: 0px; color: #000000;"><b> (preferito)</b></p>
							<br>
							<p class="font_size_12" style="margin-bottom: 0px; color: #000000;"><b>Skype: rossipao</b></p>
							<a class="link-1 font_size_11">modifica</a>
						</div>
						<div class="col-sm-3 col-12">
							<div>
								<br>
								<button class="btn button_blue"><i class="fa fa-envelope-o"></i></button><br>
								<button class="btn button_blue mt-1" style="min-width: 42px;"><i class="fa fa-phone"></i></button><br>
								<button class="btn button_blue mt-1" style="min-width: 42px;"><i class="fa fa-map-marker"></i></button>
							</div>
							<BR>
							<a class="font_size_11 link-3" href="">VEDI TUTTO </a>
						</div>
					</div>
					<div class="row" data-target="2" style="display:none;">
						section-2
					</div>
					<div class="row" data-target="3" style="display:none;">
						section-3
					</div>
				</div>
				<?php
      } else {
          echo 'NO ID';
      }
  } ?>

				<div class="col-sm-3 align-self-center">
					<section></section>
				</div>
				<div class="col-sm-3">

				</div>
				<div class="col-sm-3"></div>
				<div class="col-sm-3"></div>
			</div>
		</div>
	</div>

	<div class="container-fluid bg-1">
		<br>
		<div class="row justify-content-md-center text-center">

			<div class="col-sm-3 col-12 ">
				<p class="font_size_15"><b>ULTIME AZIONI</b></p>
			</div>
			<div class="col-sm-8 text-start col-12">
				<p class="font_size_14 "><b class="txt-color-1">Proposta NL'Nome'(6/6/2020)</b> <span>|</span> <b class="txt-color-2"> Partecipazione progetto by Edra 'Nome'(4/3/2020)</b></p>
			</div>
			<br>
		</div>
	</div>
	<div class="page-content">
		<? //include 'inc/menu.inc.php'; 
		?>
		<!-- Main content -->
		<div class="content-wrapper">
			<!-- Content area -->
			<br><br>
			<!-- <div class="input-group mb-3 mt-3">
						<input type="text" class="form-control" placeholder="Cerca per Nome, Cognome, ID Utente o ID Scheda" aria-label="Cerca per Nome, Cognome, ID Utente o ID Scheda" aria-describedby="basic-addon2">
						<span class="input-group-text" id="basic-addon2"><i class="fa fa-search"></i></span>
					</div> -->
			<div class="card w-75 px-5 background_white align-self-center card_listing_medico_border">
				<div class="card-body rounded-3">
					<div class="row">

						<div class="col-lg-12"></div>
						<div class="col-12 col-lg-6 mt-1 d-flex">
							<div class="">
								<span><b class="font_size_16">DOMANDE PER AGGIORNARE</b></span>
								<p><b class="font_size_16">IL PROFILO DEL MEDICO</b></p>
							</div>
						</div>
						<div class="col-12 col-lg-6 mt-1 d_flex_wide_screen">
							<div class="input-group mb-3 mt-3">
								<input type="text" class="form-control" placeholder="| Scrivi qui l'indirizzo" aria-label="Cerca per Nome, Cognome, ID Utente o ID Scheda" aria-describedby="basic-addon2">
								<span class="input-group-text" id="basic-addon2"> <span class="mx-auto">
										<button class="btn tasto_carica_altri"><b>INVIA</b> </button>
									</span></span>
							</div>
						</div>
						<div class="col-12 col-lg-2 mt-1 d-flex">

						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="w-100 div_content background_white">
				<div class="row w-100 justify-content-md-center">
					<div class="col-12 ">
						<h4 class="h4_title px-5 "><b>Anagrafica Utente</b></h4>
					</div>
					<div class="col-12 mt-1 d_flex_wide_screen">

					</div>
				</div>
				<div class="row mb-4">
					<div class="col-12 mt-2 mt-lg-1">

						<div class="card card_listing_medico">
							<div class="card-body">
								<div class="row" style="margin-bottom: 1rem;">

								</div>
								<?php if (isset($_GET['utn_id'])) {
            $utn_id = mysqli_real_escape_string($conn, $_GET['utn_id']);
            $query = "SELECT * FROM crm_utenti WHERE utn_id='$utn_id'";
            $query_run = mysqli_query($conn, $query);
            if (mysqli_num_rows($query_run) > 0) {
                $crm = mysqli_fetch_array($query_run); ?>
			

								<form method="POST">  
								<div class="card card_listing_medico_border_yellow">
									<div class="card-body">
										<div class="row justify-content-md-center">
											<div class="col-12 col-lg-5 px-3  ">
												<div class="align_center_to_left margin_1_to_0_left">
													<p class="color_title text-start px-3">TARGET: <b>TELEFONICO + EMAIL</b></p>
													<div class="card-body">
														<h4 class="font_size_14 text-start "><b>Nome:</b></h4>
														<input type="text" name="utn_nome" class="form-control " value="<?= $crm[
                  'utn_nome'
              ] ?>" placeholder="Inserisci il Nome"></input>
													</div>
													<div class="card-body">
														<h4 class="font_size_14 text-start "><b>Cognome:</b></h4>
														<input type="text" name="utn_cognome" class="form-control " value="<?= $crm[
                  'utn_campagna'
              ] ?>" placeholder="Inserisci il Cognome"></input>
													</div>
													<div class="card-body">
														<h4 class="font_size_14 text-start "><b>Ragione sociale:</b></h4>
														<input type="text" name="utn_rag_soc" class="form-control " value="<?= $crm[
                  'utn_rag_soc'
              ] ?>" placeholder="Inserisci Ragione sociale"></input>
													</div>
													<div class="card-body">
														<h4 class="font_size_14 text-start "><b>Partita iva:</b></h4>
														<input type="text" name="utn_piva" class="form-control " value="<?= $crm[
                  'utn_piva'
              ] ?>" placeholder="Inserisci il Partita iva"></input>
													</div>
													<div class="card-body">
														<h4 class="font_size_14 text-start "><b>Note:</b></h4>
														<input type="text" name="utn_note" class="form-control " placeholder="Inserisci il Note"></input>
													</div>
													<button class="btn rounded-3 tasto_crea_campagna" type="submit" name="update" style="min-width: 170px;"><b>AGGIORNA
														</b></button>
													</form>
																
			<?php
            } else {
                echo 'NO ID';
            }
        } ?>
													<br>
													<br>
													<p class=" font_size_14 text-start px-3">ID UTENTE:12345: </p>
													<p class=" font_size_14 text-start px-3">ID SCHEDA: 1134579</b></p>
													<div class="card-body">
														<h4 class="font_size_14 text-start "><b>CODICE FISCALE:</b></h4>
														<input type="text" name="utn_codice_fiscale"  class="form-control " placeholder="Inserisci il CODICE FISCALE"></input>
													</div>
													<p class=" font_size_14 text-start px-3"> <b>ID ESTERNO: 0</b></p>
													<p class=" font_size_14 text-start px-3"> <b>UTENTE EIS: NO</b></p>
													<p class=" font_size_14 text-start px-3"> <b>UTENTE MEDIKEY: SI</b></p>
													<br>
													<br>
	
													<?php if (isset($_GET['com_utn_id'])) {
                 $com_utn_id = mysqli_real_escape_string(
                     $conn,
                     $_GET['com_utn_id']
                 );
                 $query = "SELECT * FROM crm_comunicazione_utenti WHERE com_utn_id='$com_utn_id'";
                 $query_run = mysqli_query($conn, $query);
                 if (mysqli_num_rows($query_run) > 0) {
                     $crm = mysqli_fetch_array($query_run); ?>
                          <form method="POST">
													<p class=" font_size_15 text-start px-3"> <b>NOTE SCHEDA</b></p>
													<div class="card-body">
														<h4 class="font_size_14 text-start "><b>Note 1:</b></h4>
														<input type="text" name="com_note_1" class="form-control " value="<?= $crm[
                  'com_note_1'
              ] ?>" placeholder="Inserisci il Note 1"></input>
													</div>
													<div class="card-body">
														<h4 class="font_size_14 text-start "><b>Note 2:</b></h4>
														<input type="text" name="com_note_2" class="form-control " value="<?= $crm[
                  'com_note_2'
              ] ?>" placeholder="Inserisci il Note 2"></input>
													</div>
													<div class="card-body">
														<h4 class="font_size_14 text-start "><b>Note 3:</b></h4>
														<input type="text" name="com_note_3" class="form-control " value="<?= $crm[
                  'com_note_3'
              ] ?>" placeholder="Inserisci il Note 3"></input>
													</div>
													<button type="submit" name="update_1" class="btn rounded-3 tasto_crea_campagna"  style="min-width: 170px;"><b>AGGIORNA
														</b></button>
												</div>
												</form>
												<?php
                 } else {
                     echo 'NO ID';
                 }
             } ?>
			
											</div>
											<div class="col-12 col-lg-5 px-5  ">
												<p class=" font_size_15  color_title text-start px-3"> <b>PROFESSIONI:</b></p>
											<?php if (isset($_GET['utn_id'])) {
               $utn_id = mysqli_real_escape_string($conn, $_GET['utn_id']);
               $query = "SELECT * FROM crm_utenti_professione WHERE utn_id='$utn_id'";
               $query_run = mysqli_query($conn, $query);
               if (mysqli_num_rows($query_run) > 0) {
                   $crm = mysqli_fetch_array($query_run);
                   foreach ($query_run as $crm) { ?>
          
												<p class=" font_size_14 text-start px-3"> <?= $crm[
                'utn_pro_description'
            ] ?> </p>
												<br>
												<?php }
               } else {
               }
           } ?>
												<p class=" font_size_15  color_title text-start px-3"> <b>SPECIALIZZAZIONI:

												<?php if (isset($_GET['utn_id'])) {
                $utn_id = mysqli_real_escape_string($conn, $_GET['utn_id']);
                $query = "SELECT * FROM crm_utenti_specializzazione WHERE utn_id='$utn_id'";
                $query_run = mysqli_query($conn, $query);
                if (mysqli_num_rows($query_run) > 0) {
                    $crm = mysqli_fetch_array($query_run);
                    foreach ($query_run as $crm) { ?>
          
					</b></p>
					<p class=" font_size_14 text-start px-3"> <?= $crm[
         'utn_spe_descrizione'
     ] ?> </p>
										
												<?php }
                } else {
                }
            } ?>
												
												
												<hr>
												<br>
											<?php if (isset($_GET['utn_id'])) {
               $utn_id = mysqli_real_escape_string($conn, $_GET['utn_id']);
               $query = "SELECT * FROM crm_utenti_telefono WHERE utn_id='$utn_id'";
               $query_run = mysqli_query($conn, $query);
               if (mysqli_num_rows($query_run) > 0) {
                   $crm = mysqli_fetch_array($query_run); ?>
												<p class=" font_size_15  txt-color-2 text-start px-3"> <b>ALTRI NUMERI TELEFONICI DISPONIBILI:</b></p>

												<p><i class="fa fa-phone  px-3" aria-hidden="true"></i><b> <a class="link-2 font_size_13"><?= $crm[
                'utn_tel_numero'
            ] ?></a></b></p>
												<p><i class="fa fa-phone  px-3" aria-hidden="true"></i><b> <a class="link-2 font_size_13">029791590</a></b></p>
												<p><i class="fa fa-phone  px-3" aria-hidden="true"></i><b> <a class="link-2 font_size_13">029791590</a></b></p>
												<?php
               } else {
                   echo 'NO ID';
               }
           } ?>
												<br>
												<br>
												<p class=" font_size_15  color_title text-start px-3"> <b>VEDI ALTRE CAMPAGNE:</b></p>
												<ul>
													<li>
														<p class=" font_size_14 text-start px-3">
															Amarin ePermission</p>
													</li>
													<li>
														<p class=" font_size_14 text-start px-3">
															Amarin ePermission</p>
													</li>
													<li>
														<p class=" font_size_14 text-start px-3">
															Amarin ePermission</p>
													</li>
													<li>
														<p class=" font_size_14 text-start px-3">
															Amarin ePermission</p>
													</li>
													<li>
														<p class=" font_size_14 text-start px-3">
															Amarin ePermission</p>
													</li>
												</ul>
											</div>
											
											
											

										</div>
									</div>
								</div>

							</div>
						</div>


					</div>
					<div class="col-12 mt-4">
						<div class="card card_listing_medico">
							<div class="card-body">
								<div class="row" style="margin-bottom: 1rem;">
								<div class="col-sm-3 col-12">
								<span class="center_element">
								<button type="button" class="btn tasto_crea_campagna" data-bs-toggle="modal" style="min-width: 170px;" data-bs-target="#exampleModal"><b>CREA
                  Appuntamenti utente</b>
					
</button>

            </span>
								
						
<!-- Modal -->

      </div>
    </div>
  </div>
</div>
</div>

<div class="col-sm-9 col-12">
<table class="table table-bordered">
  <thead>
    <tr class="table-active">
    
      <th scope="col">DATA APP.</th>
      <th scope="col">STATO</th>
      <th scope="col">INFORMATORE</th>
			<th scope="col">N°CALL</th>
			<th scope="col">INIZIO CHIAMATA</th>
			<th scope="col">DURATA(m)</th>
			<th class="table-danger" scope="col"></th>
    </tr>
  </thead>
  <tbody>
  
  <?php
			if (isset($_GET['com_app_id'])) {
				$com_app_id = mysqli_real_escape_string($conn, $_GET['com_app_id']);
				$query = "SELECT * FROM crm_comunicazione_appuntamenti WHERE com_app_id='$com_app_id'";
				$query_run = mysqli_query($conn, $query);
				if (mysqli_num_rows($query_run) > 0) {
					$crm = mysqli_fetch_array($query_run);
			?>
      <form method="POST" action="">
  <input type="hidden" name="com_app_id" value="<?= $crm['com_app_id']; ?>">
   <tr>
  
      <th scope="row"><?= $crm['com_app_data'] ?></th>
      <td>    <select name="com_ele_sta_app_descr" class="form-control form-select mt-4" placeholder="Inserisci il Comune">
												
												<option value="<?= $crm['com_ele_sta_app_descr']; ?>" selected><?= $crm['com_ele_sta_app_descr']; ?></option>
																					<?php
																					$query = "SELECT * FROM crm_elenco_stato_appuntamenti";
																					$query_run = mysqli_query($conn, $query);
																					$i = 0;
																					while ($utn = mysqli_fetch_array($query_run)) {
																					?>
																						<option value="<?= $utn['ele_sta_app_descr']; ?>">
																							<?= $utn['ele_sta_app_descr']; ?></option>
																					<?php
																						$i++;
																					}
																					?>
									
																				</select>
				 </td>
      <td>	
      
      <select name="ute_informatori" class="form-control form-select mt-4" placeholder="Inserisci il Comune">
												
      <option value="<?= $crm['ute_informatori']; ?>" selected><?= $crm['ute_informatori']; ?></option>
												<?php
												$query = "SELECT * FROM crm_comunicazione_appuntamenti";
												$query_run = mysqli_query($conn, $query);
												$i = 0;
												while ($utn = mysqli_fetch_array($query_run)) {
												?>
													<option value="<?= $utn['ute_informatori']; ?>">
														<?= $utn['ute_informatori']; ?></option>
												<?php
													$i++;
												}
												?>

											</select> </td>
      <td><?= $crm['ele_call_numero'] ?></td>
			<td></td>
			<td></td>
			<td> 
      <button type="submit" name="update_appuntamenti" class="btn tasto_carica_altri"><b>Aggiornamento Appuntamenti</b></button>    
      </form>      
                     </td>
    </tr>

          <?php }
 }
 ?>   
  </tbody>
</table>



</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 mt-4">
						<div class="card card_listing_medico">
							<div class="card-body">
								<div class="row" style="margin-bottom: 1rem;">
									<div class="col-12 col-lg-2 mt-1 color_light_blue d-block d-lg-none mb-4 mb-lg-0" style="text-align: center;">
										<p style="margin-bottom: 0px;">Attività</p>
										<i class="fa fa-arrow-down" aria-hidden="true"></i>
									</div>
									<div class="col-12 col-lg-5 mt-1 d-flex">
										<div>
											<button class="btn button_blue"><i class="fa fa-envelope-o"></i></button><br>
											<button class="btn button_blue mt-1" style="min-width: 42px;"><i class="fa fa-phone"></i></button><br>
											<button class="btn button_blue mt-1" style="min-width: 42px;"><i class="fa fa-map-marker"></i></button>
										</div>
										<div style="text-align: center; margin-left: 1rem;">
											<b class="font_size_16">Dott. Franco Simonetti</b><br>
											<p class="font_size_12">OSPEDALIERO / TERRITORIALE</p>
											<p class="font_size_12 d-flex" style="color: green;">
												<img class="mt_mb_auto" height="30" src="img/leader.png" alt="">
												<span>
													<b class="font_size_14">Modello Leader</b><br>ULTIMA NOTA: 10.09.2021
												</span>
											</p>
										</div>
									</div>
									<div class="col-12 col-lg-5 mt-1 d_flex_wide_screen">
										<div class="card card_listing_medico_inside_card">
											<div class="card-body color_yellow">
												<p class="margin_05_top margin_05_bottom font_size_14" style="text-align: center;"><b>Campagne</b></p>
												<p class="font_size_40" style="margin-bottom: 0px; text-align: center;">4</p>
											</div>
										</div>
										<div class="card card_listing_medico_inside_card">
											<div class="card-body color_red">
												<p class="margin_05_top margin_05_bottom font_size_14" style="text-align: center;"><b>Progetti</b></p>
												<p class="font_size_40" style="margin-bottom: 0px; text-align: center;">4</p>
											</div>
										</div>
										<div class="card card_listing_medico_inside_card_inherit">
											<div class="card-body color_red_scuro">
												<p class="margin_05_top margin_05_bottom align_left_to_center font_size_14"><b>Eventi</b></p>
												<div class="d-flex content_left_to_center mt-2 mt-lg-0 font_size_12">
													<i class="fa fa-calendar-o fa-lg mt-auto mb-auto" aria-hidden="true"></i>
													<p class="mt-auto mb-auto margin_1_left"> OGGI <b>9.30</b> A.M.<br><b>3A CALL SANOFI</b></p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-lg-2 mt-1 color_light_blue d-none d-lg-flex" style="text-align: center;">
										<div class="mt-2 mr_ml_auto font_size_16">
											<p style="margin-bottom: 0px;">Attività</p>
											<i class="fa fa-arrow-down" aria-hidden="true"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 mt-4">
						<div class="card card_listing_medico">
							<div class="card-body">
								<div class="row" style="margin-bottom: 1rem;">
									<div class="col-12 col-lg-2 mt-1 color_light_blue d-block d-lg-none mb-4 mb-lg-0" style="text-align: center;">
										<p style="margin-bottom: 0px;">Attività</p>
										<i class="fa fa-arrow-down" aria-hidden="true"></i>
									</div>
									<div class="col-12 col-lg-5 mt-1 d-flex">
										<div>
											<button class="btn button_blue"><i class="fa fa-envelope-o"></i></button><br>
											<button class="btn button_blue mt-1" style="min-width: 42px;"><i class="fa fa-phone"></i></button><br>
											<button class="btn button_blue mt-1" style="min-width: 42px;"><i class="fa fa-map-marker"></i></button>
										</div>
										<div style="text-align: center; margin-left: 1rem;">
											<b class="font_size_16">Dott. Franco Simonetti</b><br>
											<p class="font_size_12">OSPEDALIERO / TERRITORIALE</p>
											<p class="font_size_12 d-flex" style="color: green;">
												<img class="mt_mb_auto" height="30" src="img/leader.png" alt="">
												<span>
													<b class="font_size_14">Modello Leader</b><br>ULTIMA NOTA: 10.09.2021
												</span>
											</p>
										</div>
									</div>
									<div class="col-12 col-lg-5 mt-1 d_flex_wide_screen">
										<div class="card card_listing_medico_inside_card">
											<div class="card-body color_yellow">
												<p class="margin_05_top margin_05_bottom font_size_14" style="text-align: center;"><b>Campagne</b></p>
												<p class="font_size_40" style="margin-bottom: 0px; text-align: center;">1</p>
											</div>
										</div>
										<div class="card card_listing_medico_inside_card">
											<div class="card-body color_red">
												<p class="margin_05_top margin_05_bottom font_size_14" style="text-align: center;"><b>Progetti</b></p>
												<p class="font_size_40" style="margin-bottom: 0px; text-align: center;">5</p>
											</div>
										</div>
										<div class="card card_listing_medico_inside_card_inherit">
											<div class="card-body color_red_scuro">
												<p class="margin_05_top margin_05_bottom align_left_to_center font_size_14"><b>Eventi</b></p>
												<div class="d-flex content_left_to_center mt-2 mt-lg-0 font_size_12">
													<i class="fa fa-calendar-o fa-lg mt-auto mb-auto" aria-hidden="true"></i>
													<p class="mt-auto mb-auto margin_1_left"> OGGI <b>9.30</b> A.M.<br><b>3A CALL SANOFI</b></p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-lg-2 mt-1 color_light_blue d-none d-lg-flex" style="text-align: center;">
										<div class="mt-2 mr_ml_auto font_size_16">
											<p style="margin-bottom: 0px;">Attività</p>
											<i class="fa fa-arrow-down" aria-hidden="true"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 mt-4">
						<div class="card card_listing_medico">
							<div class="card-body">
								<div class="row" style="margin-bottom: 1rem;">
									<div class="col-12 col-lg-2 mt-1 color_light_blue d-block d-lg-none mb-4 mb-lg-0" style="text-align: center;">
										<p style="margin-bottom: 0px;">Attività</p>
										<i class="fa fa-arrow-down" aria-hidden="true"></i>
									</div>
									<div class="col-12 col-lg-5 mt-1 d-flex">
										<div>
											<button class="btn button_blue"><i class="fa fa-envelope-o"></i></button><br>
											<button class="btn button_blue mt-1" style="min-width: 42px;"><i class="fa fa-phone"></i></button><br>
											<button class="btn button_blue mt-1" style="min-width: 42px;"><i class="fa fa-map-marker"></i></button>
										</div>
										<div style="text-align: center; margin-left: 1rem;">
											<b class="font_size_16">Dott. Franco Simonetti</b><br>
											<p class="font_size_12">OSPEDALIERO / TERRITORIALE</p>
											<p class="font_size_12 d-flex" style="color: green;">
												<img class="mt_mb_auto" height="30" src="img/leader.png" alt="">
												<span>
													<b class="font_size_14">Modello Leader</b><br>ULTIMA NOTA: 10.09.2021
												</span>
											</p>
										</div>
									</div>
									<div class="col-12 col-lg-5 mt-1 d_flex_wide_screen">
										<div class="card card_listing_medico_inside_card">
											<div class="card-body color_yellow">
												<p class="margin_05_top margin_05_bottom font_size_14" style="text-align: center;"><b>Campagne</b></p>
												<p class="font_size_40" style="margin-bottom: 0px; text-align: center;">3</p>
											</div>
										</div>
										<div class="card card_listing_medico_inside_card">
											<div class="card-body color_red">
												<p class="margin_05_top margin_05_bottom font_size_14" style="text-align: center;"><b>Progetti</b></p>
												<p class="font_size_40" style="margin-bottom: 0px; text-align: center;">2</p>
											</div>
										</div>
										<div class="card card_listing_medico_inside_card_inherit">
											<div class="card-body color_red_scuro">
												<p class="margin_05_top margin_05_bottom align_left_to_center font_size_14"><b>Eventi</b></p>
												<div class="d-flex content_left_to_center mt-2 mt-lg-0 font_size_12">
													<i class="fa fa-calendar-o fa-lg mt-auto mb-auto" aria-hidden="true"></i>
													<p class="mt-auto mb-auto margin_1_left"> OGGI <b>9.30</b> A.M.<br><b>3A CALL SANOFI</b></p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-lg-2 mt-1 color_light_blue d-none d-lg-flex" style="text-align: center;">
										<div class="mt-2 mr_ml_auto font_size_16">
											<p style="margin-bottom: 0px;">Attività</p>
											<i class="fa fa-arrow-down" aria-hidden="true"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 mt-4">
						<div class="card card_listing_medico">
							<div class="card-body">
								<div class="row" style="margin-bottom: 1rem;">
									<div class="col-12 col-lg-2 mt-1 color_light_blue d-block d-lg-none mb-4 mb-lg-0" style="text-align: center;">
										<p style="margin-bottom: 0px;">Attività</p>
										<i class="fa fa-arrow-down" aria-hidden="true"></i>
									</div>
									<div class="col-12 col-lg-5 mt-1 d-flex">
										<div>
											<button class="btn button_blue"><i class="fa fa-envelope-o"></i></button><br>
											<button class="btn button_blue mt-1" style="min-width: 42px;"><i class="fa fa-phone"></i></button><br>
											<button class="btn button_blue mt-1" style="min-width: 42px;"><i class="fa fa-map-marker"></i></button>
										</div>
										<div style="text-align: center; margin-left: 1rem;">
											<b class="font_size_16">Dott. Franco Simonetti</b><br>
											<p class="font_size_12">OSPEDALIERO / TERRITORIALE</p>
											<p class="font_size_12 d-flex" style="color: green;">
												<img class="mt_mb_auto" height="30" src="img/leader.png" alt="">
												<span>
													<b class="font_size_14">Modello Leader</b><br>ULTIMA NOTA: 10.09.2021
												</span>
											</p>
										</div>
									</div>
									<div class="col-12 col-lg-5 mt-1 d_flex_wide_screen">
										<div class="card card_listing_medico_inside_card">
											<div class="card-body color_yellow">
												<p class="margin_05_top margin_05_bottom font_size_14" style="text-align: center;"><b>Campagne</b></p>
												<p class="font_size_40" style="margin-bottom: 0px; text-align: center;">3</p>
											</div>
										</div>
										<div class="card card_listing_medico_inside_card">
											<div class="card-body color_red">
												<p class="margin_05_top margin_05_bottom font_size_14" style="text-align: center;"><b>Progetti</b></p>
												<p class="font_size_40" style="margin-bottom: 0px; text-align: center;">3</p>
											</div>
										</div>
										<div class="card card_listing_medico_inside_card_inherit">
											<div class="card-body color_red_scuro">
												<p class="margin_05_top margin_05_bottom align_left_to_center font_size_14"><b>Eventi</b></p>
												<div class="d-flex content_left_to_center mt-2 mt-lg-0 font_size_12">
													<i class="fa fa-calendar-o fa-lg mt-auto mb-auto" aria-hidden="true"></i>
													<p class="mt-auto mb-auto margin_1_left"> OGGI <b>9.30</b> A.M.<br><b>3A CALL SANOFI</b></p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-lg-2 mt-1 color_light_blue d-none d-lg-flex" style="text-align: center;">
										<div class="mt-2 mr_ml_auto font_size_16">
											<p style="margin-bottom: 0px;">Attività</p>
											<i class="fa fa-arrow-down" aria-hidden="true"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 mt-4">
						<div class="card card_listing_medico">
							<div class="card-body">
								<div class="row" style="margin-bottom: 1rem;">
									<div class="col-12 col-lg-2 mt-1 color_light_blue d-block d-lg-none mb-4 mb-lg-0" style="text-align: center;">
										<p style="margin-bottom: 0px;">Attività</p>
										<i class="fa fa-arrow-down" aria-hidden="true"></i>
									</div>
									<div class="col-12 col-lg-5 mt-1 d-flex">
										<div>
											<button class="btn button_blue"><i class="fa fa-envelope-o"></i></button><br>
											<button class="btn button_blue mt-1" style="min-width: 42px;"><i class="fa fa-phone"></i></button><br>
											<button class="btn button_blue mt-1" style="min-width: 42px;"><i class="fa fa-map-marker"></i></button>
										</div>
										<div style="text-align: center; margin-left: 1rem;">
											<b class="font_size_16">Dott. Franco Simonetti</b><br>
											<p class="font_size_12">OSPEDALIERO / TERRITORIALE</p>
											<p class="font_size_12 d-flex" style="color: green;">
												<img class="mt_mb_auto" height="30" src="img/leader.png" alt="">
												<span>
													<b class="font_size_14">Modello Leader</b><br>ULTIMA NOTA: 10.09.2021
												</span>
											</p>
										</div>
									</div>
									<div class="col-12 col-lg-5 mt-1 d_flex_wide_screen">
										<div class="card card_listing_medico_inside_card">
											<div class="card-body color_yellow">
												<p class="margin_05_top margin_05_bottom font_size_14" style="text-align: center;"><b>Campagne</b></p>
												<p class="font_size_40" style="margin-bottom: 0px; text-align: center;">5</p>
											</div>
										</div>
										<div class="card card_listing_medico_inside_card">
											<div class="card-body color_red">
												<p class="margin_05_top margin_05_bottom font_size_14" style="text-align: center;"><b>Progetti</b></p>
												<p class="font_size_40" style="margin-bottom: 0px; text-align: center;">1</p>
											</div>
										</div>
										<div class="card card_listing_medico_inside_card_inherit">
											<div class="card-body color_red_scuro">
												<p class="margin_05_top margin_05_bottom align_left_to_center font_size_14"><b>Eventi</b></p>
												<div class="d-flex content_left_to_center mt-2 mt-lg-0 font_size_12">
													<i class="fa fa-calendar-o fa-lg mt-auto mb-auto" aria-hidden="true"></i>
													<p class="mt-auto mb-auto margin_1_left"> OGGI <b>9.30</b> A.M.<br><b>3A CALL SANOFI</b></p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-lg-2 mt-1 color_light_blue d-none d-lg-flex" style="text-align: center;">
										<div class="mt-2 mr_ml_auto font_size_16">
											<p style="margin-bottom: 0px;">Attività</p>
											<i class="fa fa-arrow-down" aria-hidden="true"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /content area -->
		</div>
		<!-- /main content -->
	</div>
	<!-- /page content -->
	<script type="text/javascript">
		$(document).ready(function() {});

		// $('.btn').click(function() {
		// 	$('#content p').hide();
		// 	var target = '#' + $(this).data('target');
		// 	$(target).show();
		// })

		const sections = $('.container-section');
		$('.btnClick').on('click', function() {
			$(sections).find('[data-target]').hide();
			$(sections).find('[data-target="' + $(this).data('section') + '"]').show();
		});
	</script>
	<?php include_once 'inc/footer.inc.php'; ?>
</body>

</html>
<?
require_once('inc/endPage.php');
?>