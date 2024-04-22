<?
require_once('inc/startPage.php');
require_once('inc/db_connetti.inc.php');
?>
<!DOCTYPE html>
<html lang="it">

<head>
	<?php include('inc/head.inc.php');
	?>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>

<body>
	<?php include_once('inc/logo.inc.php'); ?>
	<?php include_once('inc/navbar.inc.php'); ?>
	<?php include_once('inc/create_utenti.inc.php'); ?>
	<!-- Page content -->
	<div class="page-content">
		<? //include 'inc/menu.inc.php'; 
		?>
		<!-- Main content -->
		<div class="content-wrapper" style="overflow-x: hidden;">
			<!-- Content area -->
			<div style="padding: 0.5rem 0.5rem !important; width: -webkit-fill-available;">
			</div>
			<?php
			if (isset($_GET['utn_id'])) {
				$utn_id = mysqli_real_escape_string($conn, $_GET['utn_id']);
				$query = "SELECT * FROM crm_utenti WHERE utn_id='$utn_id'";
				$query_run = mysqli_query($conn, $query);
				if (mysqli_num_rows($query_run) > 0) {
					$crm = mysqli_fetch_array($query_run);
			?>
					<form method="POST" action="utenti_list.php">
						<input type="hidden" name="utn_id" value="<?= $crm['utn_id']; ?>">
						<div class="container">
							<div class="w-100 d-flex">
								<h4 class="h4_title">Crea nuova campagna</h4>
							</div>
							<div class="row mt-4 mb-4">
								<div class="col-12 mt-3">
									<div class="card" style="background-color: #f7f7f7;">
										<div class="card-body">
											<h4 class="h5_title text-start"><b>Campagna :<?= $crm['utn_campagna']; ?>
												</b></h4>
											<select name="utn_campagna" class="form-control form-select mt-4" placeholder="Inserisci il Comune">
												<option value="<?= $crm['utn_campagna']; ?>" selected><?= $crm['utn_campagna']; ?></option>
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
											<input type="text" name="utn_nome" value="<?= $crm['utn_nome']; ?>" class="form-control" placeholder="Inserisci il nome " />
										</div>
									</div>
								</div>
								<!-- Cognome -->
								<div class="col-12 mt-3">
									<div class="card" style="background-color: #f7f7f7;">
										<div class="card-body">
											<p class="text-start"><b>Cognome:</b></p>
											<input type="text" name="utn_cognome" value="<?= $crm['utn_cognome']; ?>" class="form-control" placeholder="Inserisci il Codice fiskale " />
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
											<input type="text" name="unt_cellulare_new" class="form-control" placeholder="Inserisci il Telefona mobile" />
										</div>
									</div>
								</div>
								<!-- Email -->
								<div class="col-12 mt-3">
									<div class="card" style="background-color: #f7f7f7;">
										<div class="card-body">
											<h4 class="h5_title text-start "><b>Email</b></h4>
											<input type="text" name="utn_email" class="form-control mt-4" placeholder="Inserisci il Email"></input>
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
											<select name="utn_indirizzo_comune_id" class="form-control form-select mt-4" placeholder="Inserisci il Comune">
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
											<select name="utn_indirizzo_nazione_id" class="form-control form-select mt-4" placeholder="Inserisci il Nazione">
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
											<select name="utn_indirizzo_tipo_id" class="form-control form-select mt-4" placeholder="Inserisci il Tipologia">
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
										<button type="submit" name="update" class="btn tasto_carica_altri"><b>Aggiornamento nuova utenti</b></button>
									</span>
								</div>
							</div>
					</form>
		</div>


		<!-- /content area -->
<?php
				} else {
					echo "NO ID";
				}
			} ?>

	</div>


	</div>
	<!-- /main content -->

	<!-- /page content -->

	<script type="text/javascript">
		$(document).ready(function() {});
	</script>
	<?php include_once('inc/footer.inc.php'); ?>
</body>

</html>
<?
require_once('inc/endPage.php');
?>