<?
require_once('inc/startPage.php');
?>
<!DOCTYPE html>
<html lang="it">

<head>
	<?php include('inc/head.inc.php'); ?>
	<?php include_once('inc/create_utenti.inc.php'); ?>
</head>

<body>

	<?php include_once('inc/logo.inc.php'); ?>
	<?php include_once('inc/navbar.inc.php'); ?>

	<div class="container ">
		<div class="row justify-content-between  mt-4">
		<?php include_once('inc/menu.php'); ?>
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
						<form method="POST" >
							<div class="container">
								<div class="w-100 d-flex">
									<h4 class="h4_title">Crea nuova utenti</h4>
								</div>
								<div class="row mt-4 mb-4">
									<!-- campagna -->
									<div class="col-12 mt-3">
										<div class="card" style="background-color: #f7f7f7;">
											<div class="card-body">
												<h4 class="h5_title text-start"><b>Campagna:
													</b></h4>
												<select id="basic" name="utn_campagna" class="form-control selectpicker form-select mt-4  " data-live-search="true" placeholder="Inserisci il Comune">
													<?php
													$query = "SELECT * FROM crm_comunicazione";
													$query_run = mysqli_query($conn, $query);
													$i = 0;
													while ($utn = mysqli_fetch_array($query_run)) {
													?>
														<option value="<?= $utn['com_name']; ?>">
															<?= $utn['com_name']; ?></option>
													<?php
														$i++;
													}
													?>
												</select>
											</div>
										</div>
									</div>
									<!-- nome -->
									<div class="col-12 mt-3">
										<div class="card" style="background-color: #f7f7f7;">
											<div class="card-body">
												<p class="text-start"><b>Nome:</b></p>
												<input type="text" name="utn_nome" class="form-control" placeholder="Inserisci il nome " />
											</div>
										</div>
									</div>
									<!-- Cognome -->
									<div class="col-12 mt-3">
										<div class="card" style="background-color: #f7f7f7;">
											<div class="card-body">
												<p class="text-start"><b>Cognome:</b></p>
												<input type="text" name="utn_cognome" class="form-control" placeholder="Inserisci il Codice fiskale " />
											</div>
										</div>
									</div>
									<!-- Anni -->
									<div class="col-12 mt-3">
										<div class="card" style="background-color: #f7f7f7;">
											<div class="card-body">
												<p class="text-start"><b>Anni:</b></p>
												<input type="text" name="utn_anni" class="form-control" placeholder="Inserisci il Anni " />
											</div>
										</div>
									</div>
										<!-- Proffesione -->
										<div class="col-12 mt-3">
										<div class="card" style="background-color: #f7f7f7;">
											<div class="card-body">
												<p class="text-start"><b>Proffesione:</b></p>
												<input type="text" name="utn_professione" class="form-control" placeholder="Inserisci il Proffesione " />
											</div>
										</div>
									</div>
									<!-- specializzazione -->
									<div class="col-12 mt-3">
										<div class="card" style="background-color: #f7f7f7;">
											<div class="card-body">
												<p class="text-start"><b>Specializzazione:</b></p>
												<input type="text" name="utn_specializzazione" class="form-control" placeholder="Inserisci il Specializzazione " />
											</div>
										</div>
									</div>
									<!-- Codice fiskale -->
									<div class="col-12 mt-3">
										<div class="card" style="background-color: #f7f7f7;">
											<div class="card-body">
												<p class="text-start"><b>Codice fiskale:</b></p>
												<input type="text" name="utn_codice_fiscale" class="form-control" placeholder="Inserisci il Codice fiskale " />
											</div>
										</div>
									</div>
									<!--Regione sociale-->
									<div class="col-12 mt-3">
										<div class="card" style="background-color: #f7f7f7;">
											<div class="card-body">
												<p class=" text-start "><b>Regione sociale:</b></p>
												<input type="text" name="utn_rag_soc" class="form-control" placeholder="Inserisci il Regione socialet " />
											</div>
										</div>
									</div>
									<!-- Partita iva -->
									<div class="col-12 mt-3">
										<div class="card" style="background-color: #f7f7f7;">
											<div class="card-body">
												<p class="text-start"><b>Partita iva:</b></p>
												<input type="text" name="utn_piva" class="form-control" placeholder="Inserisci il Partita iva " />
											</div>
										</div>
									</div>
									<!-- Telefona fisso -->
									<div class="col-12 mt-3">
										<div class="card" style="background-color: #f7f7f7;">
											<div class="card-body">
												<p class="text-start"><b>Telefona fisso (solo caratteri numerici):</b></p>
												<input type="text" name="utn_telefono_new" class="form-control" placeholder="Inserisci il Telefona fisso " />
											</div>
										</div>
									</div>
									<!-- Telefona mobile -->
									<div class="col-12 mt-3">
										<div class="card" style="background-color: #f7f7f7;">
											<div class="card-body">
												<p class="text-start"><b>Telefona mobile (solo caratteri numerici):</b></p>
												<input type="text" name="utn_cellulare_new" class="form-control" placeholder="Inserisci il Telefona mobile" />
											</div>
										</div>
									</div>
									<!-- Email -->
									<div class="col-12 mt-3">
										<div class="card" style="background-color: #f7f7f7;">
											<div class="card-body">
												<h4 class="h5_title text-start "><b>Email</b></h4>
												<input type="email" name="utn_email" class="form-control mt-4" placeholder="Inserisci il Email"></input>
											</div>
										</div>
									</div>
									<!-- Cap -->
									<div class="col-12 mt-3">
										<div class="card" style="background-color: #f7f7f7;">
											<div class="card-body">
												<h4 class="h5_title text-start"><b>Cap:</b></h4>
												<input type="text" name="utn_indirizzo_cap" class="form-control mt-4" placeholder="Inserisci il Cap"></input>
											</div>
										</div>
									</div>
									<!-- Frazione -->
									<div class="col-12 mt-3">
										<div class="card" style="background-color: #f7f7f7;">
											<div class="card-body">
												<h4 class="h5_title text-start"><b>Frazione:</b></h4>
												<input type="text" name="utn_indirizzo_frazione" class="form-control mt-4" placeholder="Inserisci il Frazione"></input>
											</div>
										</div>
									</div>

									<!-- Comune-->
									<div class="col-12 mt-3">
										<div class="card" style="background-color: #f7f7f7;">
											<div class="card-body">
												<h4 class="h5_title text-start"><b>Comune:
													</b></h4>
												<select id="basic" name="utn_indirizzo_comune_id" class="form-control selectpicker form-select mt-4  " data-live-search="true">
													<option value="" selected>None</option>
													<?php
													$query = "SELECT * FROM crm_cities";
													$query_run = mysqli_query($conn, $query);
													$i = 0;
													while ($utn = mysqli_fetch_array($query_run)) {
													?>
														<option value="<?= $utn['comune']; ?>-<?= $utn['Reg_Desc']; ?>">
															<?= $utn['comune']; ?> - <?= $utn['Reg_Desc']; ?></option>
													<?php
														$i++;
													}
													?>
												</select>
											</div>
										</div>
									</div>
									<!-- Nazione -->
									<div class="col-12 mt-3">
										<div class="card" style="background-color: #f7f7f7;">
											<div class="card-body">
												<h4 class="h5_title text-start "><b>Nazione:
													</b></h4>
												<select id="basic" name="utn_indirizzo_nazione_id" class="form-control selectpicker form-select mt-4  " data-live-search="true">
													<option value="" selected>None</option>
													<?php
													$query = "SELECT * FROM crm_countries";
													$query_run = mysqli_query($conn, $query);
													$i = 0;
													while ($utn = mysqli_fetch_array($query_run)) {
													?>
														<option value="<?= $utn['nome']; ?>-<?= $utn['nazione_sigla']; ?>">
															<?= $utn['nome']; ?> - <?= $utn['nazione_sigla']; ?></option>
													<?php
														$i++;
													}
													?>
												</select>
											</div>
										</div>
									</div>
									<!-- Tipologia -->
									<div class="col-12 mt-3">
										<div class="card" style="background-color: #f7f7f7;">
											<div class="card-body">
												<h4 class="h5_title text-start "><b>Tipologia:
													</b></h4>
												<select id="basic" name="utn_indirizzo_tipo_id" class="form-control selectpicker form-select mt-4  " data-live-search="true">
													<option value="" selected>None</option>
													<?php
													$query = "SELECT * FROM crm_address_type";
													$query_run = mysqli_query($conn, $query);
													$i = 0;
													while ($utn = mysqli_fetch_array($query_run)) {
													?>
														<option value="<?= $utn['descrizione']; ?>">
															<?= $utn['descrizione']; ?></option>
													<?php
														$i++;
													}
													?>
												</select>
											</div>
										</div>
									</div>

								</div>
								<div class="row mt-2 mb-4">
									<div class="col-12 d-flex">
										<span class="mx-auto">
											<button type="submit" name="submit" class="btn tasto_carica_altri"><b>Carica nuova utenti</b></button>
										</span>
									</div>
								</div>
						</form>
					</div>
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
<?
require_once('inc/endPage.php');
?>