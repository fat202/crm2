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
			if (isset($_GET['com_id'])) {
				$com_id = mysqli_real_escape_string($con, $_GET['com_id']);
				$query = "SELECT * FROM crm_comunicazione WHERE com_id='$com_id'";
				$query_run = mysqli_query($con, $query);
				if (mysqli_num_rows($query_run) > 0) {
					$crm = mysqli_fetch_array($query_run);
			?>

<div class="container" >
					<div class="w-100 d-flex">
						<h4 class="h4_title">Crea nuova campagna</h4>
					</div>
					<div class="row mt-4 mb-4">
					<div class="col-12">
							<div class="card" style="background-color: #f7f7f7;">
								<div class="card-body">
								<p class=""><b>Nome:</b></p>
									<?= $crm['com_name']; ?>
								</div>
							</div>
						</div>
						<!-- azienda -->
						<div class="col-12 mt-3">
							<div class="card" style="background-color: #f7f7f7;">
								<div class="card-body">
								<p class=""><b>Azienda:</b></p>
								<?= $crm['com_azienda']; ?>
							</div>
							</div>
						</div>
						<!-- brand -->
						<div class="col-12 mt-3">
							<div class="card" style="background-color: #f7f7f7;">
								<div class="card-body">
								<p class=""><b>Brand:</b></p>
								<?= $crm['com_brand']; ?>								</div>
							</div>
						</div>
						<!-- target -->
						<div class="col-12 mt-3">
							<div class="card" style="background-color: #f7f7f7;">
								<div class="card-body">
								<p class=""><b>Target:</b></p>
								<?= $crm['com_target']; ?>								</div>
							</div>
						</div>
					<!-- campgna precedente -->

					<div class="col-12 mt-3">
							<div class="card" style="background-color: #f7f7f7;">
								<div class="card-body">
								<p class=""><b>Campgna Precedente:</b></p>
								<?= $crm['com_campgna_precedente']; ?>								</div>
							</div>
						</div>
						<!-- data inizio -->
						<div class="col-12 mt-3">
							<div class="card" style="background-color: #f7f7f7;">
								<div class="card-body">
								<p class=""><b>Data Inizio:</b></p>
								<?= $crm['com_data_inizio']; ?>								</div>
							</div>
						</div>
						<!-- data fine -->
						<div class="col-12 mt-3">
							<div class="card" style="background-color: #f7f7f7;">
								<div class="card-body">
								<p class=""><b>Data Fine:</b></p>
								<?= $crm['com_data_fine']; ?>								</div>
							</div>
						</div>
						<!-- template -->
						<div class="col-12 mt-3">
							<div class="card" style="background-color: #f7f7f7;">
								<div class="card-body">
									<h4 class="h5_title"><b>Template</b></h4>
									<?= $crm['com_template']; ?>								</div>
							</div>
						</div>
						<!-- tabella reclutamento online -->

						<div class="col-12 mt-3">
							<div class="card" style="background-color: #f7f7f7;">
								<div class="card-body">
									<h4 class="h5_title"><b>Tabella reclutamento online:</b></h4>
									<?= $crm['com_tabella_online']; ?>								</div>
							</div>
						</div>
						<!-- tabella raccolta epermission -->

						<div class="col-12 mt-3">
							<div class="card" style="background-color: #f7f7f7;">
								<div class="card-body">
									<h4 class="h5_title"><b>Tabella raccolta epermission:</b></h4>
									<?= $crm['com_database_epermission']; ?>								</div>
							</div>
						</div>

						<!-- reminder email -->
						<div class="col-12 mt-3">
							<div class="card" style="background-color: #f7f7f7;">
								<div class="card-body">
									<h4 class="h5_title"><b>Reminder email:
									</b></h4>
									<?php if(  $crm['com_reminder_email']=1)
									{
										?>
										<div  value="1">Si</div>
										
									<?php } else {?>
										<div  value="0">NO</div> <?} ?> 
																		
									
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
									<?php if(  $crm['com_servizio_sms']=1)
									{
										?>
										<div  value="1">Si</div>
										
									<?php } else {?>
										<div  value="0">NO</div> <?} ?> 
																		
																	
									</select>
								</div>
							</div>
						</div>
							<!-- Servizio SMS -Numero Ricezione -->
							<div class="col-12 mt-3">
							<div class="card" style="background-color: #f7f7f7;">
								<div class="card-body">
									<h4 class="h5_title"><b>Servizio SMS -Numero ricezione:</b></h4>
									<h4 class="h5_title"><b>Servizio SMS:
									</b></h4>
									<?php if(  $crm['com_servizio_sms_numero']=1)
									{
										?>
										<div  value="1">Si</div>
										
									<?php } else {?>
										<div  value="0">NO</div> <?} ?>

									
							</div>
						</div>
						<!-- Servizio SMS -Codice deposito sms appuntamento saltato -->
						<div class="col-12 mt-3">
							<div class="card" style="background-color: #f7f7f7;">
								<div class="card-body">
									<h4 class="h5_title"><b>Servizio SMS -Codice desposito sms appuntamento saltato:</b></h4>
									<?= $crm['com_servizio_sms_deposito_app_saltato']; ?>								</div>
							</div>
						</div>
            <!-- Servizio SMS - Codice Deposito sms reminder appuntamento -->
						<div class="col-12 mt-3">
							<div class="card" style="background-color: #f7f7f7;">
								<div class="card-body">
									<h4 class="h5_title"><b>Servizio SMS -Codice desposito sms reminder appuntamento:</b></h4>
									<?= $crm['com_servizio_sms_deposito_app_reminder']; ?>								</div>
							</div>
						</div>
						<!-- notifiche conferma appuntamento -codice deposito -->
						<div class="col-12 mt-3">
							<div class="card" style="background-color: #f7f7f7;">
								<div class="card-body">
									<h4 class="h5_title"><b>Notifiche conferma appuntamento -codice deposito:</b></h4>
									<?= $crm['com_app_deposito']; ?>								</div>
							</div>
						</div>
						<!-- email noreplay -->
						<div class="col-12 mt-3">
							<div class="card" style="background-color: #f7f7f7;">
								<div class="card-body">
									<h4 class="h5_title"><b>Email noreplay:
									</b></h4>
									<?php if(  $crm['com_noreply']= 1)
									{
										?>
										<div  value="1">Si</div>
										
									<?php } else {?>
										<div  value="0">NO</div> <?} ?>

															
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
								<a type="button" class="btn btn-success " href="campaign_edit.php?com_id=<?= $crm['com_id']; ?>">Edit</a><button type="submit" name="update" class="btn tasto_carica_altri"><b>Carica nuova campagna</b></button>
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