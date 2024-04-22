<?
	require_once('inc/startPage.php');
?>
<!DOCTYPE html>
<html lang="it">
	<head>
		<?php include('inc/head.inc.php'); ?>
		<link href="assets/css/timeline.css" rel="stylesheet" type="text/css">
		<link href="assets/css/timeline-horizontal.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	</head>
	<body>
		<?php include_once('inc/logo.inc.php'); ?>
		<?php include_once('inc/navbar.inc.php'); ?>
		<!-- Page content -->
		<div class="page-content">
			<? //include 'inc/menu.inc.php'; ?>
			<!-- Main content -->
			<div class="content-wrapper">
				<!-- Content area -->
				<div style="padding: 0.5rem 0.5rem !important; width: -webkit-fill-available;">
					<div class="row mt-4 mb-4">
						<div class="col-12 col-sm-6 col-md-4 mt-1 d-flex">
							<span class="center_element">
								<a href="crea_campagna.php"><button class="btn tasto_crea_campagna" style="min-width: 170px;"><b>CREA CAMPAGNA</b> <button class="btn tasto_crea_campagna_plus"><i class="fa fa-plus"></i></button></button></a>
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
				</div>
				<div class="w-100 div_content" style="background-color: #f7f7f7;">
					<div class="row w-100">
						<div class="col-12 col-lg-6 mt-1 d-flex">
						<h4 class="h4_title">Campagne / <b>Sanofi 2020 Xatral</b></h4>
						</div>
						<div class="col-12 col-lg-6 mt-1 d-flex">
							<p class="left_element">Data: <b>ULTIMO MESE</b><i class="fa fa-arrow-down" style="margin-left: 0.5rem;" aria-hidden="true"></i></p>
						</div>
					</div>
					<div class="row mt-4 mb-4">
						<div class="col-12 mt-1">
							<div class="card">
								<div class="card-body" style="padding: 1.5rem;">
									<h4 class="h4_title">SANOFI 2020 XATRAL</h4>
									<p class="mt-4 h5_title"><b>INFO CAMPAGNA GENERALI</b></p>
									<div class="row mt-4 mb-4">
										<div class="col-12 col-md-4 col-xl-4 col-xxl-2 mt-2 padding_left_50">
											<span class="d-flex">
												<i class="fa fa-thumbs-up fa-lg mt_mb_auto mr-2 color_green"></i><p class="card-text" style="margin-bottom: 0px; margin-left: 1rem;"><b class="color_green font_size_24">55</b><br><b class="color_green font_size_16">INTERESSATO</b></p>
											</span>
											<span class="d-flex mt-2">
												<i class="fa fa-thumbs-down fa-lg mt_mb_auto mr-2 color_red_emc"></i><p class="card-text" style="margin-bottom: 0px; margin-left: 1rem;"><b class="color_red_emc font_size_16">NON INTERESSATO</b><br><b class="color_red_emc font_size_24">10</b></p>
											</span>
										</div>
										<div class="col-12 col-md-8 col-xl-8 col-xxl-10 mt-3" style="position: relative;">
											<div class="progress d-flex" style="height: 4rem; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;">
												<div class="progress-bar background_green_grafico" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="125"></div>
											</div>
											<div class="progress" style="height: 2rem; border-top-left-radius: 0px; border-top-right-radius: 0px;">
												<div class="progress-bar background_red_grafico" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="125"></div>
											</div>
											<span class="color_black_grafico background_grey_grafico span_counter">
												<b class="font_size_32">65/125</b>
												<br>
												<b class="font_size_18">chiamate</b>
											</span>
										</div>
									</div>
									<div class="row mt-4 mb-4">
										<div class="col-12 mt-1">
											<div class="container-fluid py-5">
												<h4 class="h4_title">TIMELINE CAMPAGNA</h4><br><br><br>
												<div class="row">
													<div class="col-lg-12">
														<div class="horizontal-timeline font_size_12">
															<ul class="list-inline items">
																<li class="list-inline-item items-list">
																	<div class="px-4 color_red_scuro">
																		<div class="event-date badge background_red_scuro">6/6/2020</div>
																		<h5 class="h5_title color_red_scuro">Proposta NL (dispositivi medici +<br> procedura clinica) - Nome</h5>
																		<p class="text-muted color_red_scuro">Stato: Interessato</p>
																	</div>
																</li>
																<li class="list-inline-item items-list">
																	<div class="px-4 color_yellow">
																		<div class="event-date badge bg-info background_yellow">2/2/2020</div>
																		<h5 class="h5_title color_yellow">Proposta 'Tool interattivo'- Nome</h5>
																		<p class="text-muted color_yellow">Stato: Interessato<br>+ coinvolgere con aggiornamenti</p>
																	</div>
																</li>
																<li class="list-inline-item items-list">
																	<div class="px-4 color_red">
																		<div class="event-date badge bg-info background_red">4/3/2020</div>
																		<h5 class="h5_title color_red">Iscrizione corso ECM<br>'Nome'<br>by Edra</h5>
																	</div>
																</li>
																<li class="list-inline-item items-list">
																	<div class="px-4 color_red_scuro">
																		<div class="event-date badge bg-info background_red_scuro">3/3/2020</div>
																		<h5 class="h5_title color_red_scuro">Acquisto libri Edra33<br>Proporre ulteriore<br>'Nome'</h5>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 mt-4">
							<div class="card">
								<div class="card-header" style="padding: 1.5rem;">
									<h4 class="h4_title">[Survey di campagna] - <b>È interessato a Sanofi?</b></h4>
								</div>
								<div class="card-body" style="padding: 1.5rem;">
									<div id="piechart" style="height: 400px;"></div>
								</div>
							</div>
						</div>
						<div class="col-12 mt-4">
							<div class="card">
								<div class="card-header" style="padding: 1.5rem;">
									<h4 class="h4_title">[Report] - <b>Tipologia di somministrazione della survey</b></h4>
								</div>
								<div class="card-body" style="padding: 1.5rem;">
									<div id="piechart_2" style="height: 400px;"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="row mt-2 mb-4">
						<div class="col-12 d-flex">
							<span class="mx-auto">
								<button class="btn tasto_carica_altri"><b>Scarica tutti i dati</b></button>
							</span>
						</div>
					</div>
				</div>
				<? include_once('inc/navbar_vuota.inc.php'); ?>
				<!-- /content area -->

				<!--MODALI-->
				<? include_once('modali/modale_nuovo_evento.php'); ?>
			</div>
			<!-- /main content -->
		</div>
		<!-- /page content -->
		
		<script type="text/javascript">
			$(document).ready(function() {
			});

			window.onload = resize;
			window.onresize = resize;

			function resize () {
				google.charts.load('current', {'packages':['corechart']});
      			google.charts.setOnLoadCallback(drawChart);
			}

			function drawChart() {
				var data = google.visualization.arrayToDataTable([
					['Task', 'Percantage'],
					['Si, certo',     33],
					['Non so, non lo conosco bene',      22],
					['Non molto',  25],
					['Preferisco non rispondere', 20]
				]);

				var options = {
					title: '12 responses'
				};

				var chart = new google.visualization.PieChart(document.getElementById('piechart'));

				chart.draw(data, options);

				var data_2 = google.visualization.arrayToDataTable([
					['Task', 'Percantage'],
					['Videocall',     33],
					['Call',      22],
					['E-mail',  25],
					['Fisicamente', 20]
				]);

				var options_2 = {
					title: '12 responses'
				};

				var chart_2 = new google.visualization.PieChart(document.getElementById('piechart_2'));

				chart_2.draw(data_2, options_2);
			}
		</script>
		<? include_once('inc/footer.inc.php'); ?>
	</body>
</html>
<?
	require_once('inc/endPage.php');
?>