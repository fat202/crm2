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
	<?php include_once('inc/create_campaign.inc.php'); ?>

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
			if (isset($_GET['com_id'])) {
				$com_id = mysqli_real_escape_string($conn, $_GET['com_id']);
				$query = "SELECT * FROM crm_comunicazione WHERE com_id='$com_id'";
				$query_run = mysqli_query($conn, $query);
				if (mysqli_num_rows($query_run) > 0) {
					$crm = mysqli_fetch_array($query_run);
			?>
					<form method="POST" action="campaings_list.php">
						<input type="hidden" name="com_id" value="<?= $crm['com_id']; ?>">
						<div class="container" >
					<div class="w-100 d-flex">
						<h4 class="h4_title">Crea nuova campagna</h4>
					</div>
					<div class="row mt-4 mb-4">
						
					<div class="col-12">
							<div class="card" style="background-color: #f7f7f7;">
								<div class="card-body">
								<p class=""><b>Nome:</b></p>
									<input type="text" name="com_name" value="<?= $crm['com_name']; ?>" class="form-control" placeholder="Inserisci il nome della Campagna" />
								</div>
							</div>
						</div>
						<!-- azienda -->
						<div class="col-12 mt-3">
							<div class="card" style="background-color: #f7f7f7;">
								<div class="card-body">
								<p class=""><b>Azienda:</b></p>
									<input type="text" name="com_azienda"  value="<?= $crm['com_azienda']; ?>" class="form-control" placeholder="Inserisci il azienda della Campagna" />
								</div>
							</div>
						</div>
						<!-- brand -->
						<div class="col-12 mt-3">
							<div class="card" style="background-color: #f7f7f7;">
								<div class="card-body">
								<p class=""><b>Brand:</b></p>
									<input type="text" name="com_brand" value="<?= $crm['com_brand']; ?>" class="form-control" placeholder="Inserisci il brand della Campagna" />
								</div>
							</div>
						</div>
						<!-- target -->
						<div class="col-12 mt-3">
							<div class="card" style="background-color: #f7f7f7;">
								<div class="card-body">
								<p class=""><b>Target:</b></p>
									<input type="text" name="com_target" value="<?= $crm['com_target']; ?>" class="form-control" placeholder="Inserisci il target della Campagna" />
								</div>
							</div>
						</div>
					<!-- campgna precedente -->

					<div class="col-12 mt-3">
							<div class="card" style="background-color: #f7f7f7;">
								<div class="card-body">
								<p class=""><b>Campgna Precedente:</b></p>
									<input type="text" name="com_campgna_precedente" value="<?= $crm['com_campgna_precedente']; ?>" class="form-control" placeholder="Inserisci il Campgna Precedente della Campagna" />
								</div>
							</div>
						</div>
						<!-- data inizio -->
						<div class="col-12 mt-3">
							<div class="card" style="background-color: #f7f7f7;">
								<div class="card-body">
								<p class=""><b>Data Inizio:</b></p>
									<input type="datetime-local" name="com_data_inizio" value="<?= $crm['com_data_inizio']; ?>" class="form-control" placeholder="Inserisci il Data Inizio della Campagna" />
								</div>
							</div>
						</div>
						<!-- data fine -->
						<div class="col-12 mt-3">
							<div class="card" style="background-color: #f7f7f7;">
								<div class="card-body">
								<p class=""><b>Data Fine:</b></p>
									<input type="datetime-local" name="com_data_fine" value="<?= $crm['com_data_fine']; ?>" class="form-control" placeholder="Inserisci il Data Fine della Campagna" />
								</div>
							</div>
						</div>
						<!-- template -->
						<div class="col-12 mt-3">
							<div class="card" style="background-color: #f7f7f7;">
								<div class="card-body">
									<h4 class="h5_title"><b>Template</b></h4>
									<textarea name="com_template" value="<?= $crm['com_template']; ?>" class="form-control mt-4" placeholder="Inserisci il Template della Campagna"></textarea>
								</div>
							</div>
						</div>
						<!-- tabella reclutamento online -->

						<div class="col-12 mt-3">
							<div class="card" style="background-color: #f7f7f7;">
								<div class="card-body">
									<h4 class="h5_title"><b>Tabella reclutamento online:</b></h4>
									<textarea name="com_tabella_online" value="<?= $crm['com_tabella_online']; ?>" class="form-control mt-4" placeholder="Inserisci il Tabella reclutamento online della Campagna"></textarea>
								</div>
							</div>
						</div>
						<!-- tabella raccolta epermission -->

						<div class="col-12 mt-3">
							<div class="card" style="background-color: #f7f7f7;">
								<div class="card-body">
									<h4 class="h5_title"><b>Tabella raccolta epermission:</b></h4>
									<textarea name="com_database_epermission" value="<?= $crm['com_database_epermission']; ?>" class="form-control mt-4" placeholder="Inserisci il Tabella raccolta epermission della Campagna"></textarea>
								</div>
							</div>
						</div>

						<!-- reminder email -->
						<div class="col-12 mt-3">
							<div class="card" style="background-color: #f7f7f7;">
								<div class="card-body">
									<h4 class="h5_title"><b>Reminder email:
									</b></h4>
									<select  name="com_reminder_email" value="<?= $crm['com_reminder_email']; ?>" class="form-control form-select mt-4" placeholder="Inserisci il Reminder email della Campagna" selected>
									
									</select>
								</div>
							</div>
						</div>
						<!-- servizio SMS -->
						<div class="col-12 mt-3">
							<div class="card" style="background-color: #f7f7f7;">
								<div class="card-body">
									<h4 class="h5_title"><b>Servizio SMS:
									</b></h4>
									<select  name="com_servizio_sms" value="<?= $crm['com_servizio_sms']; ?>" class="form-control form-select mt-4" placeholder="Inserisci il Servizio SMS della Campagna">
									<option  value="1" >Si</option>
									<option  value="0">NO</option>
									</select>
								</div>
							</div>
						</div>
							<!-- Servizio SMS -Numero Ricezione -->
							<div class="col-12 mt-3">
							<div class="card" style="background-color: #f7f7f7;">
								<div class="card-body">
									<h4 class="h5_title"><b>Servizio SMS -Numero ricezione:</b></h4>
									<textarea name="com_servizio_sms_numero" value="<?= $crm['com_servizio_sms_numero']; ?>" class="form-control mt-4" placeholder="Inserisci il Servizio SMS Numero ricezione della Campagna"></textarea>
								</div>
							</div>
						</div>
						<!-- Servizio SMS -Codice deposito sms appuntamento saltato -->
						<div class="col-12 mt-3">
							<div class="card" style="background-color: #f7f7f7;">
								<div class="card-body">
									<h4 class="h5_title"><b>Servizio SMS -Codice desposito sms appuntamento saltato:</b></h4>
									<textarea name="com_servizio_sms_deposito_app_saltato" value="<?= $crm['com_servizio_sms_deposito_app_saltato']; ?>" class="form-control mt-4" placeholder="Inserisci il Servizio SMS -Codice desposito sms appuntamento saltato della Campagna"></textarea>
								</div>
							</div>
						</div>
            <!-- Servizio SMS - Codice Deposito sms reminder appuntamento -->
						<div class="col-12 mt-3">
							<div class="card" style="background-color: #f7f7f7;">
								<div class="card-body">
									<h4 class="h5_title"><b>Servizio SMS -Codice desposito sms reminder appuntamento:</b></h4>
									<textarea name="com_servizio_sms_deposito_app_reminder" value="<?= $crm['com_servizio_sms_deposito_app_reminder']; ?>" class="form-control mt-4" placeholder="Inserisci il Servizio SMS -Codice desposito sms reminder appuntamento della Campagna"></textarea>
								</div>
							</div>
						</div>
						<!-- notifiche conferma appuntamento -codice deposito -->
						<div class="col-12 mt-3">
							<div class="card" style="background-color: #f7f7f7;">
								<div class="card-body">
									<h4 class="h5_title"><b>Notifiche conferma appuntamento -codice deposito:</b></h4>
									<textarea name="com_app_deposito" class="form-control mt-4" value="<?= $crm['com_app_deposito']; ?>" placeholder="Inserisci il Servizio SMS -Codice desposito sms reminder appuntamento della Campagna"></textarea>
								</div>
							</div>
						</div>
						<!-- email noreplay -->
						<div class="col-12 mt-3">
							<div class="card" style="background-color: #f7f7f7;">
								<div class="card-body">
									<h4 class="h5_title"><b>Email noreplay:
									</b></h4>
									<select  name="com_noreply" value="<?= $crm['com_noreply']; ?>" class="form-control form-select mt-4" placeholder="Inserisci il Email noreplay della Campagna">
									<option value="1" selected>Si</option>
									<option  value="0">NO</option>
									</select>
								</div>
							</div>
						</div>
						
						
			
						<div class="col-12 mt-3">
							<div class="card" style="background-color: #f7f7f7;">
								<div class="card-body">
									<h4 class="h5_title"><b>Materiale a supporto</b></h4>
								</div>
							</div>
						</div>
						<div class="col-12 mt-3">
							<div class="card" style="background-color: #f7f7f7;">
								<div class="card-body">
									<h4 class="h5_title"><b>Comunicazioni per il medico</b></h4>
								</div>
							</div>
						</div>
					</div>
					<div class="row mt-2 mb-4">
						<div class="col-12 d-flex">
							<span class="mx-auto">
							<button type="submit" name="update" class="btn tasto_carica_altri"><b>Aggiornamento nuova campagna</b></button>
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