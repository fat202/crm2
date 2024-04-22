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

					<div class="container">
						<div class="w-100 d-flex">
							<h4 class="h4_title">Crea nuova campagna</h4>
						</div>
						<div class="row mt-4 mb-4">
							<div class="col-12">
								<div class="card" style="background-color: #f7f7f7;">
									<div class="card-body">
										<p class=""><b>Campagna:</b></p>
										<?= $crm['utn_campagna']; ?>
									</div>
								</div>
							</div>
							<!-- Nome -->
							<div class="col-12 mt-3">
								<div class="card" style="background-color: #f7f7f7;">
									<div class="card-body">
										<p class=""><b>Nome:</b></p>
										<?= $crm['utn_nome']; ?>
									</div>
								</div>
							</div>
							<!-- Cognome -->
							<div class="col-12 mt-3">
								<div class="card" style="background-color: #f7f7f7;">
									<div class="card-body">
										<p class=""><b>Cognome:</b></p>
										<?= $crm['utn_cognome']; ?>
									</div>
								</div>
							</div>
							<!-- Codice fiskale -->
							<div class="col-12 mt-3">
								<div class="card" style="background-color: #f7f7f7;">
									<div class="card-body">
										<p class=""><b>Codice fiskale:</b></p>
										<?= $crm['utn_codice_fiscale']; ?>
									</div>
								</div>
							</div>
							<!-- Regione sociale -->

							<div class="col-12 mt-3">
								<div class="card" style="background-color: #f7f7f7;">
									<div class="card-body">
										<p class=""><b>regione sociale:</b></p>
										<?= $crm['utn_rag_soc']; ?>
									</div>
								</div>
							</div>
							<!-- Partiva iva -->
							<div class="col-12 mt-3">
								<div class="card" style="background-color: #f7f7f7;">
									<div class="card-body">
										<p class=""><b>Partiva iva:</b></p>
										<?= $crm['utn_piva']; ?>
									</div>
								</div>
							</div>
							<!-- Telefona fisso (solo caratteri numerici): -->
							<div class="col-12 mt-3">
								<div class="card" style="background-color: #f7f7f7;">
									<div class="card-body">
										<p class=""><b>Telefona fisso (solo caratteri numerici):</b></p>
										<?= $crm['utn_telefono_new']; ?>
									</div>
								</div>
							</div>
							<!-- Telefona mobile (solo caratteri numerici): -->
							<div class="col-12 mt-3">
								<div class="card" style="background-color: #f7f7f7;">
									<div class="card-body">
										<h4 class="h5_title"><b>Telefona mobile (solo caratteri numerici):</b></h4>
										<?= $crm['utn_cellulare_new']; ?>
									</div>
								</div>
							</div>
							<!-- Email -->

							<div class="col-12 mt-3">
								<div class="card" style="background-color: #f7f7f7;">
									<div class="card-body">
										<h4 class="h5_title"><b> Email</b></h4>
										<?= $crm['utn_email']; ?>
									</div>
								</div>
							</div>
							<!-- Cap -->

							<div class="col-12 mt-3">
								<div class="card" style="background-color: #f7f7f7;">
									<div class="card-body">
										<h4 class="h5_title"><b>Cap:</b></h4>
										<?= $crm['utn_indirizzo_cap']; ?>
									</div>
								</div>
							</div>

							<!-- Frazione -->
							<div class="col-12 mt-3">
								<div class="card" style="background-color: #f7f7f7;">
									<div class="card-body">
										<h4 class="h5_title"><b>Frazione:
											</b></h4>
										<?= $crm['utn_indirizzo_frazione']; ?>
									</div>
								</div>
							</div>
							<!-- Comune -->
							<div class="col-12 mt-3">
								<div class="card" style="background-color: #f7f7f7;">
									<div class="card-body">
										<h4 class="h5_title"><b>Comune:
											</b></h4>
										<?= $crm['utn_indirizzo_comune_id']; ?>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="row mt-2 mb-4">
							<div class="col-12 d-flex">
								<span class="mx-auto">
									<button type="submit" name="update" class="btn tasto_carica_altri"><b>Carica nuova campagna</b></button>
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
			}
			?>
		</div>
		<!-- /main content -->
	</div>
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