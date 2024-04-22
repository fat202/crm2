<?
require_once('inc/startPage.php');
?>
<!DOCTYPE html>
<html lang="it">

<head>
	<?php include 'inc/head.inc.php'; ?>
	<link href="assets/css/timeline.css" rel="stylesheet" type="text/css">
	<link href="assets/css/timeline-horizontal.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="assets/js/jquery.bs.calendar.js"></script>
	<?
	//<link href="assets/css/calendario.css" rel="stylesheet" type="text/css">
	?>
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
					</div>
					<div class="col-12 col-md-6 col-lg-4 mt-1">
					</div>
					<div class="col-12 col-md-6 col-lg-4 mt-1 d-flex">
						<span class="center_element d-flex">
							<button class="btn tasto_aggingi_appuntamento color_white d-flex" style="min-width: 170px;"><i
									class="fa fa-calendar-o color_red_emc mt_mb_auto" style="margin-right: 10px;"></i><span
									style="text-align: left; font-size: 10px;">OGGI <b class="color_red_emc">9.30</b><br>A.M. DOTT: <b
										class="color_red_emc">ROSSI PAOLO</b></span><button class="btn tasto_aggingi_appuntamento_plus"
									data-bs-toggle="modal" data-bs-target="#modaleNuovoEvento"><i
										class="fa fa-plus"></i></button></button>
						</span>
					</div>
				</div>
			</div>
			<div class="div_content_singolo_medico">
				<div class="row">
					<div class="col-12 col-lg-3 col-xxl-2 d-flex div_singolo_medico_img" style="padding-right: 0px;">
						<div class="card div_singolo_medico_img" style="border: 0px; width: -webkit-fill-available;">
							<div class="card-body d-flex">
								<? if (@$_SESSION['foto'] != "") { ?>
									<div
										style="width: 150px; height: 150px; overflow: auto; background-color: #dee3df; background: url('<?= $_SESSION['foto']; ?>') no-repeat; background-size: cover; display:inline-block; margin-top: auto; margin-bottom: auto;"
										class="img-fluid rounded-circle shadow-1 mx-auto"></div>
								<? } else { ?>
									<div
										style="width: 150px; height: 150px; overflow: auto; background-color: #dee3df; background-size: cover; display:inline-block; margin-top: auto; margin-bottom: auto;"
										class="img-fluid rounded-circle shadow-1 mx-auto d-flex">
										<b class="mt_mb_auto mr_ml_auto" style="font-size: 67px; color: #1e6b7b;">RP</b>
									</div>
								<? } ?>
							</div>
						</div>
						<div style="background-color: #ffffff; min-width: 50px;">
							<div class="d-flex div_singolo_medico_icon_selected"><i
									class="fa fa-user fa-lg mr_ml_auto mt_mb_auto singolo_medico_icon_selected" aria-hidden="true"></i>
							</div>
							<a style="text-decoration: unset;" href="singolo_medico_stato_utente.php">
								<div class="d-flex div_singolo_medico_icon_not_selected"><i
										class="fa fa-eye fa-lg mr_ml_auto mt_mb_auto singolo_medico_icon_not_selected"
										aria-hidden="true"></i></div>
							</a>
							<div class="d-flex div_singolo_medico_icon_not_selected_last"><i
									class="fa fa-calendar-check-o fa-lg mr_ml_auto mt_mb_auto_mobile singolo_medico_icon_not_selected"
									aria-hidden="true"></i></div>
						</div>
					</div>
					<div class="col-12 col-lg-9 col-xxl-10">
						<div class="row">
							<div class="col-12 col-lg-3" style="padding: 1rem; padding-left: 2rem;">
								<p><b>Dott. Paolo Rossi</b><br>34 anni</p>
								<p>OSPEDALIERO TERRITORIALE</p>
								<p>INFO<br>Via dei Viali 1, Trento | 38122</p>
							</div>
							<div class="col-12 col-lg-3" style="padding: 1rem; padding-left: 2rem;">
								<p style="margin-bottom: 0px;">PROFESSIONE<br><b>Medicina territoriale,<br>medico specialista att.
										privata</b></p>
								<a href="#">modifica</a>
								<br>
								<br>
								<p style="margin-bottom: 0px;">SPECIALIZZAZIONE<br><b>Nessuna specializzazione presente</b></p>
								<a href="#">aggiungi</a>
							</div>
							<div class="col-12 col-lg-3" style="padding: 1rem; padding-left: 2rem;">
								<p>RECAPITI<br><b>345/6789022<br>(preferito)</b></p>
								<p style="margin-bottom: 0px;"><b>Skype: rossipao</b></p>
								<a href="#">modifica</a>
							</div>
							<div class="col-12 col-lg-3 d-none d-lg-flex justify-content-right" style="padding: 1rem;">
								<div style="margin-left: auto;">
									<button class="btn button_blue"><i class="fa fa-envelope-o"></i></button><br>
									<button class="btn button_blue mt-2" style="min-width: 42px;"><i class="fa fa-phone"></i></button><br>
									<button class="btn button_blue mt-2" style="min-width: 42px;"><i
											class="fa fa-map-marker"></i></button>
									<p style="text-decoration: underline; margin-top: 1rem; color: #000000;">VEDI TUTTO</p>
								</div>
							</div>
							<div class="col-12 col-lg-3 d-block d-lg-none" style="padding: 0.5rem;">
								<div class="d-flex" style="justify-content: center;">
									<button class="btn button_blue"><i class="fa fa-envelope-o"></i></button>
									<button class="btn button_blue" style="min-width: 42px; margin-left: 0.5rem;"><i
											class="fa fa-phone"></i></button>
									<button class="btn button_blue" style="min-width: 42px; margin-left: 0.5rem;"><i
											class="fa fa-map-marker"></i></button>
								</div>
								<div style="margin-top: 1.5rem; padding-left: 2rem;">
									<p style="text-decoration: underline; color: #000000;">VEDI TUTTO</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div style="padding: 2rem 0.5rem !important; background-color: #faf0e7;">
				<div class="d_flex_wide_screen">
					<p class="margin_left_7_to_0" style="margin-bottom: 0px;">ULTIME AZIONI >></p>
					<p class="color_yellow margin_left_12_to_0" style="margin-bottom: 0px;"><b>Proposta NL 'Nome' (6/6/2020)</b>
					</p>
					<p class="d-none d-xxl-block" style="margin-bottom: 0px; margin-left: 1rem;">|</p>
					<p class="color_red margin_1_to_0_left" style="margin-bottom: 0px;"><b>Partecipazione progetto by Edra 'Nome'
							(4/2/2020)</b></p>
				</div>
			</div>
			<div class="w-100 div_content_singolo_medico_2 background_white">
				<div class="w-100 mb-0 mb-lg-3" style="border: 1px solid #000000; border-radius: 6px; padding: 2rem;">
					<div class="row">
						<div class="col-12 col-md-4 d-flex">
							<b class="mt-auto mb-auto font_size_16" style="color: #292929;">DOMANDE PER AGGIORNARE<br>IL PROFILO DEL
								MEDICO</b>
						</div>
						<div class="col-12 col-md-8">
							<p class="medium mt-2 mt-lg-0 font_size_22"
								style="color: #1e6b7b; margin-bottom: 0.5rem; line-height: normal;">Qual è l'indirizzo del medico?</p>
							<div class="input-group mb-0 mb-lg-3">
								<input type="text" class="form-control" placeholder="Scrivi qui l'indirizzo"
									aria-label="Scrivi qui l'indirizzo" aria-describedby="basic-addon2">
								<span class="input-group-text" id="basic-addon2" style="background-color: #1e6b7b; color: #ffffff;"><b
										class="font_size_12">INVIA</b></span>
							</div>
						</div>
					</div>
				</div>
				<div class="w-100 mb-3" style="margin-top: 2rem;">
					<h4 class="h4_title">ATTIVITÀ</h4>
				</div>
				<div class="w-100 d_flex_wide_screen">
					<button class="btn tasto_campagne_pagina_singolo_medico_selected"><b>Campagne (4)</b></button>
					<button class="btn tasto_progetti_pagina_singolo_medico margin_1_to_0_left margin_0_to_05_top"><b>Progetti
							(4)</b></button>
				</div>
				<div class="card mt-4 card_listing_medico_border_yellow">
					<div class="card-body" style="background-color: #f7f7f7;">
						<div class="row">
							<div class="col-12 col-lg-2 mt-1 color_light_blue d-block d-lg-none mb-4 mb-lg-0"
								style="text-align: center;">
								<p style="margin-bottom: 0px;">Chiudi</p>
								<i class="fa fa-times" aria-hidden="true"></i>
							</div>
							<div class="col-12 col-lg-5 mt-1 d-flex">
								<div class="align_center_to_left margin_1_to_0_left">
									<b class="font_size_20">Sanofi - Xatral 3 (2020/2021) - MMG</b><br>
									<p class="font_size_20" style="margin-bottom: 0px;">Reclutato, 2 call completata</p>
									<p class="font_size_12" style="color: grey; margin-bottom: 0px;">CLUSTER DIABETOLOGI</p>
								</div>
							</div>
							<div class="col-12 col-lg-5 mt-1 d_flex_wide_screen">
								<div class="min_width_fit_content_to_unset">
									<p class="font_size_12" style="margin-bottom: 0px; margin-top: 0.5rem; color: green;">STATO</p>
									<p class="font_size_18" style="margin-bottom: 0px; color: green;"><i class="fa fa-circle"
											aria-hidden="true"></i> <b>INTERESSATO</b></p>
								</div>
								<div class="card mt-2 mt-lg-0 card_listig_medici_inside_inside_card">
									<div class="card-body">
										<div class="row">
											<div class="col-12 col-md-10">
												<p class="font_size_12" style="margin-bottom: 0px; color: #000000;"><b>21 Gennaio 2020</b></p>
												<p class="font_size_12" style="margin-bottom: 0px; color: #000000;">10.00 A:M:</p>
											</div>
											<div class="col-12 col-md-2 d-flex">
												<i class="fa fa-phone fa-lg modify_icon_inside_listing_medico" aria-hidden="true"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-lg-2 mt-1 color_light_blue d-none d-lg-flex" style="text-align: center;">
								<div class="mt-2" style="margin-left: auto;">
									<p style="margin-bottom: 0px;">Chiudi</p>
									<i class="fa fa-times" aria-hidden="true"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="card-body" style="background-color: #ffffff;">
						<div class="row">
							<div class="col-12 col-lg-7 mt-1 padding_left_2_5_to_0_5 padding_right_2_5_to_0_5">
								<h4 class="h5_title"><b>Descrizione</b></h4>
								<p class="font_size_12">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
									Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
									galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
									but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in
									the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
									desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
								<p class="font_size_12">It is a long established fact that a reader will be distracted by the readable
									content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
									more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making
									it look like readable English. Many desktop publishing packages and web page editors now use Lorem
									Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in
									their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on
									purpose (injected humour and the like).</p>
							</div>
							<div class="col-12 col-lg-5 mt-1 padding_left_2_5_to_0_5 padding_right_2_5_to_0_5">
								<h4 class="font_size_16" style="font-weight: bold; color: #292929;">Materiali a supporto</h4>
								<div class="row">
									<div class="col-12 col-lg-6 d-flex mt-2">
										<i class="fa fa-download mt-auto mb-auto" style="margin-right: 1rem;" aria-hidden="true"></i>
										<p class="mt-auto mb-auto font_size_12" style="margin-bottom: 0px;">STUDIO CLINICO<br><a
												href="#">Nome_documento.pdf</a></p>
									</div>
									<div class="col-12 col-lg-6 d-flex mt-2">
										<i class="fa fa-download mt-auto mb-auto" style="margin-right: 1rem;" aria-hidden="true"></i>
										<p class="mt-auto mb-auto font_size_12" style="margin-bottom: 0px;">STUDIO CLINICO<br><a
												href="#">Nome_documento.pdf</a></p>
									</div>
									<div class="col-12 col-lg-6 d-flex mt-2">
										<i class="fa fa-download mt-auto mb-auto" style="margin-right: 1rem;" aria-hidden="true"></i>
										<p class="mt-auto mb-auto font_size_12" style="margin-bottom: 0px;">STUDIO CLINICO<br><a
												href="#">Nome_documento.pdf</a></p>
									</div>
									<div class="col-12 col-lg-6 d-flex mt-2">
										<i class="fa fa-download mt-auto mb-auto" style="margin-right: 1rem;" aria-hidden="true"></i>
										<p class="mt-auto mb-auto font_size_12" style="margin-bottom: 0px;">STUDIO CLINICO<br><a
												href="#">Nome_documento.pdf</a></p>
									</div>
									<div class="col-12 col-lg-6 d-flex mt-2">
										<i class="fa fa-download mt-auto mb-auto" style="margin-right: 1rem;" aria-hidden="true"></i>
										<p class="mt-auto mb-auto font_size_12" style="margin-bottom: 0px;">STUDIO CLINICO<br><a
												href="#">Nome_documento.pdf</a></p>
									</div>
									<div class="col-12 col-lg-6 d-flex mt-2">
										<i class="fa fa-download mt-auto mb-auto" style="margin-right: 1rem;" aria-hidden="true"></i>
										<p class="mt-auto mb-auto font_size_12" style="margin-bottom: 0px;">STUDIO CLINICO<br><a
												href="#">Nome_documento.pdf</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-body"
						style="background-color: #f7f7f7; padding-right: 0px; padding-bottom: 0px; padding-top: 0px;">
						<div class="row" style="margin-right: 0px;">
							<div class="col-12 col-xxl-7 py-5 pt-4 padding_left_2_5_to_1 padding_right_2_5_to_1">
								<h4 class="h4_title">SONDAGGIO</h4>
								<hr>
								<h5 class="font_size_20">Interesse per i farmaci</h5>
								<div class="row font_size_14" style="margin-top: 1.5rem;">
									<div class="col-12 col-lg-auto">
										<label><b>È interessato a Frisium?</b></label><br>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
												checked>
											<label class="form-check-label" for="flexRadioDefault1">
												<b>Si</b>
											</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
											<label class="form-check-label" for="flexRadioDefault2">
												<b>No</b>
											</label>
										</div>
									</div>
									<div class="col-12 col-lg-auto">
										<label><b>È interessato ad Imovane?</b></label><br>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3"
												checked>
											<label class="form-check-label" for="flexRadioDefault3">
												<b>Si</b>
											</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
											<label class="form-check-label" for="flexRadioDefault4">
												<b>No</b>
											</label>
										</div>
									</div>
									<div class="col-12 col-lg-auto">
										<label><b>Ha gradito info su Stilnox?</b></label><br>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5"
												checked>
											<label class="form-check-label" for="flexRadioDefault5">
												<b>Si</b>
											</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6">
											<label class="form-check-label" for="flexRadioDefault6">
												<b>No</b>
											</label>
										</div>
									</div>
									<div class="col-12 col-lg-auto">
										<label><b>Ha gradito info su Imovane?</b></label><br>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7"
												checked>
											<label class="form-check-label" for="flexRadioDefault7">
												<b>Si</b>
											</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault8">
											<label class="form-check-label" for="flexRadioDefault8">
												<b>No</b>
											</label>
										</div>
									</div>
								</div>
								<div class="row" style="margin-top: 1.5rem;">
									<div class="col-12 col-lg-auto">
										<label for="data"><b>Data</b></label><br>
										<input id="data" class="form-control" type="date" />
									</div>
									<div class="col-12 col-lg-auto">
										<label for="orario"><b>Orario</b></label><br>
										<input type="time" id="orario" name="orario" class="form-control">
									</div>
								</div>
								<div class="row" style="margin-top: 1.5rem;">
									<div class="col-12 col-lg-auto">
										<label><b>Seleziona un livello</b></label><br>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault9"
												checked>
											<label class="form-check-label" for="flexRadioDefault9">
												<b>User</b>
											</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault10">
											<label class="form-check-label" for="flexRadioDefault7">
												<b>Not User</b>
											</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault11">
											<label class="form-check-label" for="flexRadioDefault11">
												<b>Trialist</b>
											</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault12">
											<label class="form-check-label" for="flexRadioDefault12">
												<b>Advocade</b>
											</label>
										</div>
									</div>
								</div>
								<hr>
								<h5 class="font_size_20" style="margin-bottom: 0px;">Esito chiamata</h5>
								<div class="row margin_top_0_5_to_0 font_size_14">
									<div class="col-12 mt-4">
										<label><b>1. Il medico ha risposto al telefono?</b></label><br>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault13"
												checked>
											<label class="form-check-label" for="flexRadioDefault13">
												<b>Si</b>
											</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault14">
											<label class="form-check-label" for="flexRadioDefault14">
												<b>No</b>
											</label>
										</div>
									</div>
									<div class="col-12 mt-4">
										<label><b>2. È interessato?</b></label><br>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault15"
												checked>
											<label class="form-check-label" for="flexRadioDefault15">
												<b>Si</b>
											</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault16">
											<label class="form-check-label" for="flexRadioDefault16">
												<b>No</b>
											</label>
										</div>
									</div>
									<div class="col-12 mt-4">
										<label><b>3. Stato</b></label><br>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault17"
												checked>
											<label class="form-check-label" for="flexRadioDefault17">
												<b>Si</b>
											</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault18">
											<label class="form-check-label" for="flexRadioDefault18">
												<b>No</b>
											</label>
										</div>
									</div>
									<div class="col-12 mt-4">
										<label><b>4. Il 3° step è completo?</b></label><br>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault19"
												checked>
											<label class="form-check-label" for="flexRadioDefault19">
												<b>Si</b>
											</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault20">
											<label class="form-check-label" for="flexRadioDefault20">
												<b>No</b>
											</label>
										</div>
									</div>
									<div class="col-12 mt-4">
										<label><b>NOTE</b></label><br>
										<textarea class="form-control" placeholder="Scrivi qui le tue note:"></textarea>
									</div>
									<div class="col-12 mt-4 text-center">
										<button class="btn tasto_carica_altri"><b class="font_size_12">CONFERMA</b></button>
									</div>
								</div>
							</div>
							<div class="col-12 col-xxl-5 padding_left_2_5_to_1" style="padding-right: 0rem;">
								<div class="row">
									<div class="col-12 d-flex" style="background-color: #e2ecee; padding-left: 0px; padding-right: 0px;">
										<div data-bs-toggle="calendar" id="calendar_id" data-bs-target="events.json" class="mr_ml_auto"
											style="margin: 1rem;"></div>
									</div>
									<div class="col-12" style="padding-left: 0px; padding-right: 0px;">
										<section style="background-color: #faf0e7; height: 100%;">
											<div class="container py-5 pt-4 font_size_12">
												<h4 class="h4_title">TIMELINE CAMPAGNA</h4>
												<label class="font_size_16">Storico</label><br>
												<div class="main-timeline mt-4 font_size_12">
													<div class="timeline left">
														<div class="card">
															<div class="card-body p-4 color_red_scuro">
																<h5 class="h5_title color_red_scuro"><b>Call Giovedì</b></h5>
																<p class="mb-0">DATA <b>15.07.2021</b></p>
																<p class="mb-0">PERIODO <b>09:00 AM - 01:00 PM</b></p>
																<p class="mb-0">DURATA <b>20 min</b></p>
															</div>
														</div>
													</div>
													<div class="timeline right">
														<div class="card">
															<div class="card-body p-4 color_blue">
																<h5 class="h5_title color_blue"><b>Inserimento esito post seconda call</b></h5>
																<p class="mb-0">DATA <b>15.06.2021 - 10.34 AM</b></p>
															</div>
														</div>
													</div>
													<div class="timeline left">
														<div class="card">
															<div class="card-body p-4 color_blue">
																<h5 class="h5_title color_blue"><b>2a call conclusa</b></h5>
																<p class="mb-0">DATA <b>15.06.2021 - 10.34 AM</b></p>
																<p class="mb-0 d-flex">
																	ESITO
																	<span class="d-flex" style="margin-left: 0.5rem;">
																		<i class="fa fa-thumbs-up fa-lg color_green"></i><b class="color_green font_size_12"
																			style="margin-left: 0.5rem;">INTERESSATO</b>
																	</span>
																</p>
															</div>
														</div>
													</div>
													<div class="timeline right">
														<div class="card">
															<div class="card-body p-4 color_blue">
																<h5 class="h5_title color_blue"><b>Inserimento esito post 1a call</b></h5>
																<p class="mb-0">DATA <b>14.07.2021 - 10.21 AM</b></p>
															</div>
														</div>
													</div>
													<div class="timeline left">
														<div class="card">
															<div class="card-body p-4 color_blue">
																<h5 class="h5_title color_blue"><b>1a call conclusa</b></h5>
																<p class="mb-0">DATA <b>14.06.2021 - 10.21 AM</b></p>
																<p class="mb-0 d-flex">
																	ESITO
																	<span class="d-flex" style="margin-left: 0.5rem;">
																		<i class="fa fa-thumbs-up fa-lg color_green"></i><b class="color_green font_size_12"
																			style="margin-left: 0.5rem;">INTERESSATO</b>
																	</span>
																</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</section>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card mt-4 card_listing_medico_border_red">
					<div class="card-body" style="background-color: #f7f7f7;">
						<div class="row">
							<div class="col-12 col-lg-5 mt-1 d-flex">
								<div class="align_center_to_left margin_1_to_0_left">
									<b class="font_size_20">Sanofi - Xatral 3 (2020/2021) - MMG</b><br>
									<p class="font_size_20" style="margin-bottom: 0px;">Reclutato, 2 call completata</p>
									<p class="font_size_12" style="color: grey; margin-bottom: 0px;">CLUSTER DIABETOLOGI</p>
								</div>
							</div>
							<div class="col-12 col-lg-5 mt-1 d_flex_wide_screen">
								<div class="min_width_fit_content_to_unset">
									<p class="font_size_12" style="margin-bottom: 0px; margin-top: 0.5rem; color: green;">STATO</p>
									<p class="font_size_18" style="margin-bottom: 0px; color: green;"><i class="fa fa-circle"
											aria-hidden="true"></i> <b>INTERESSATO</b></p>
								</div>
								<div class="card mt-2 mt-lg-0 card_listig_medici_inside_inside_card">
									<div class="card-body">
										<div class="row">
											<div class="col-12 col-md-10">
												<p class="font_size_12" style="margin-bottom: 0px; color: #000000;"><b>21 Gennaio 2020</b></p>
												<p class="font_size_12" style="margin-bottom: 0px; color: #000000;">10.00 A:M:</p>
											</div>
											<div class="col-12 col-md-2 d-flex">
												<i class="fa fa-phone fa-lg modify_icon_inside_listing_medico" aria-hidden="true"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-lg-2 mt-1 color_light_blue d-none d-lg-flex" style="text-align: center;">
								<div class="mt-2" style="margin-left: auto;">
									<i class="fa fa-commenting-o fa-lg"
										style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;"
										aria-hidden="true"></i>
									<i class="fa fa-pencil-square-o fa-lg"
										style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;"
										aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-12 col-lg-2 mt-4 color_light_blue d-block d-lg-none mb-4 mb-lg-0"
								style="text-align: center;">
								<i class="fa fa-commenting-o fa-lg"
									style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;"
									aria-hidden="true"></i>
								<i class="fa fa-pencil-square-o fa-lg"
									style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;"
									aria-hidden="true"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="card mt-4 card_listing_medico_border_red">
					<div class="card-body" style="background-color: #f7f7f7;">
						<div class="row">
							<div class="col-12 col-lg-5 mt-1 d-flex">
								<div class="align_center_to_left margin_1_to_0_left">
									<b class="font_size_20">Sanofi - Xatral 3 (2020/2021) - MMG</b><br>
									<p class="font_size_20" style="margin-bottom: 0px;">Reclutato, 2 call completata</p>
									<p class="font_size_12" style="color: grey; margin-bottom: 0px;">CLUSTER DIABETOLOGI</p>
								</div>
							</div>
							<div class="col-12 col-lg-5 mt-1 d_flex_wide_screen">
								<div class="min_width_fit_content_to_unset">
									<p class="font_size_12" style="margin-bottom: 0px; margin-top: 0.5rem; color: green;">STATO</p>
									<p class="font_size_18" style="margin-bottom: 0px; color: green;"><i class="fa fa-circle"
											aria-hidden="true"></i> <b>INTERESSATO</b></p>
								</div>
								<div class="card mt-2 mt-lg-0 card_listig_medici_inside_inside_card">
									<div class="card-body">
										<div class="row">
											<div class="col-12 col-md-10">
												<p class="font_size_12" style="margin-bottom: 0px; color: #000000;"><b>21 Gennaio 2020</b></p>
												<p class="font_size_12" style="margin-bottom: 0px; color: #000000;">10.00 A:M:</p>
											</div>
											<div class="col-12 col-md-2 d-flex">
												<i class="fa fa-phone fa-lg modify_icon_inside_listing_medico" aria-hidden="true"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-lg-2 mt-1 color_light_blue d-none d-lg-flex" style="text-align: center;">
								<div class="mt-2" style="margin-left: auto;">
									<i class="fa fa-commenting-o fa-lg"
										style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;"
										aria-hidden="true"></i>
									<i class="fa fa-pencil-square-o fa-lg"
										style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;"
										aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-12 col-lg-2 mt-4 color_light_blue d-block d-lg-none mb-4 mb-lg-0"
								style="text-align: center;">
								<i class="fa fa-commenting-o fa-lg"
									style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;"
									aria-hidden="true"></i>
								<i class="fa fa-pencil-square-o fa-lg"
									style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;"
									aria-hidden="true"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="card mt-4 card_listing_medico_border_yellow">
					<div class="card-body" style="background-color: #f7f7f7;">
						<div class="row">
							<div class="col-12 col-lg-5 mt-1 d-flex">
								<div class="align_center_to_left margin_1_to_0_left">
									<b class="font_size_20">Sanofi - Xatral 3 (2020/2021) - MMG</b><br>
									<p class="font_size_20" style="margin-bottom: 0px;">Reclutato, 2 call completata</p>
									<p class="font_size_12" style="color: grey; margin-bottom: 0px;">CLUSTER DIABETOLOGI</p>
								</div>
							</div>
							<div class="col-12 col-lg-5 mt-1 d_flex_wide_screen">
								<div class="min_width_fit_content_to_unset">
									<p class="font_size_12" style="margin-bottom: 0px; margin-top: 0.5rem; color: green;">STATO</p>
									<p class="font_size_18" style="margin-bottom: 0px; color: green;"><i class="fa fa-circle"
											aria-hidden="true"></i> <b>INTERESSATO</b></p>
								</div>
								<div class="card mt-2 mt-lg-0 card_listig_medici_inside_inside_card">
									<div class="card-body">
										<div class="row">
											<div class="col-12 col-md-10">
												<p class="font_size_12" style="margin-bottom: 0px; color: #000000;"><b>21 Gennaio 2020</b></p>
												<p class="font_size_12" style="margin-bottom: 0px; color: #000000;">10.00 A:M:</p>
											</div>
											<div class="col-12 col-md-2 d-flex">
												<i class="fa fa-phone fa-lg modify_icon_inside_listing_medico" aria-hidden="true"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-lg-2 mt-1 color_light_blue d-none d-lg-flex" style="text-align: center;">
								<div class="mt-2" style="margin-left: auto;">
									<i class="fa fa-commenting-o fa-lg"
										style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;"
										aria-hidden="true"></i>
									<i class="fa fa-pencil-square-o fa-lg"
										style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;"
										aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-12 col-lg-2 mt-4 color_light_blue d-block d-lg-none mb-4 mb-lg-0"
								style="text-align: center;">
								<i class="fa fa-commenting-o fa-lg"
									style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;"
									aria-hidden="true"></i>
								<i class="fa fa-pencil-square-o fa-lg"
									style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;"
									aria-hidden="true"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="card mt-4 card_listing_medico_border_yellow">
					<div class="card-body" style="background-color: #f7f7f7;">
						<div class="row">
							<div class="col-12 col-lg-5 mt-1 d-flex">
								<div class="align_center_to_left margin_1_to_0_left">
									<b class="font_size_20">Sanofi - Xatral 3 (2020/2021) - MMG</b><br>
									<p class="font_size_20" style="margin-bottom: 0px;">Reclutato, 2 call completata</p>
									<p class="font_size_12" style="color: grey; margin-bottom: 0px;">CLUSTER DIABETOLOGI</p>
								</div>
							</div>
							<div class="col-12 col-lg-5 mt-1 d_flex_wide_screen">
								<div class="min_width_fit_content_to_unset">
									<p class="font_size_12" style="margin-bottom: 0px; margin-top: 0.5rem; color: green;">STATO</p>
									<p class="font_size_18" style="margin-bottom: 0px; color: green;"><i class="fa fa-circle"
											aria-hidden="true"></i> <b>INTERESSATO</b></p>
								</div>
								<div class="card mt-2 mt-lg-0 card_listig_medici_inside_inside_card">
									<div class="card-body">
										<div class="row">
											<div class="col-12 col-md-10">
												<p class="font_size_12" style="margin-bottom: 0px; color: #000000;"><b>21 Gennaio 2020</b></p>
												<p class="font_size_12" style="margin-bottom: 0px; color: #000000;">10.00 A:M:</p>
											</div>
											<div class="col-12 col-md-2 d-flex">
												<i class="fa fa-phone fa-lg modify_icon_inside_listing_medico" aria-hidden="true"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-lg-2 mt-1 color_light_blue d-none d-lg-flex" style="text-align: center;">
								<div class="mt-2" style="margin-left: auto;">
									<i class="fa fa-commenting-o fa-lg"
										style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;"
										aria-hidden="true"></i>
									<i class="fa fa-pencil-square-o fa-lg"
										style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;"
										aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-12 col-lg-2 mt-4 color_light_blue d-block d-lg-none mb-4 mb-lg-0"
								style="text-align: center;">
								<i class="fa fa-commenting-o fa-lg"
									style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;"
									aria-hidden="true"></i>
								<i class="fa fa-pencil-square-o fa-lg"
									style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;"
									aria-hidden="true"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="card mt-4 card_listing_medico_border_yellow">
					<div class="card-body" style="background-color: #f7f7f7;">
						<div class="row">
							<div class="col-12 col-lg-5 mt-1 d-flex">
								<div class="align_center_to_left margin_1_to_0_left">
									<b class="font_size_20">Sanofi - Xatral 3 (2020/2021) - MMG</b><br>
									<p class="font_size_20" style="margin-bottom: 0px;">Reclutato, 2 call completata</p>
									<p class="font_size_12" style="color: grey; margin-bottom: 0px;">CLUSTER DIABETOLOGI</p>
								</div>
							</div>
							<div class="col-12 col-lg-5 mt-1 d_flex_wide_screen">
								<div class="min_width_fit_content_to_unset">
									<p class="font_size_12" style="margin-bottom: 0px; margin-top: 0.5rem; color: green;">STATO</p>
									<p class="font_size_18" style="margin-bottom: 0px; color: green;"><i class="fa fa-circle"
											aria-hidden="true"></i> <b>INTERESSATO</b></p>
								</div>
								<div class="card mt-2 mt-lg-0 card_listig_medici_inside_inside_card">
									<div class="card-body">
										<div class="row">
											<div class="col-12 col-md-10">
												<p class="font_size_12" style="margin-bottom: 0px; color: #000000;"><b>21 Gennaio 2020</b></p>
												<p class="font_size_12" style="margin-bottom: 0px; color: #000000;">10.00 A:M:</p>
											</div>
											<div class="col-12 col-md-2 d-flex">
												<i class="fa fa-phone fa-lg modify_icon_inside_listing_medico" aria-hidden="true"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-lg-2 mt-1 color_light_blue d-none d-lg-flex" style="text-align: center;">
								<div class="mt-2" style="margin-left: auto;">
									<i class="fa fa-commenting-o fa-lg"
										style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;"
										aria-hidden="true"></i>
									<i class="fa fa-pencil-square-o fa-lg"
										style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;"
										aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-12 col-lg-2 mt-4 color_light_blue d-block d-lg-none mb-4 mb-lg-0"
								style="text-align: center;">
								<i class="fa fa-commenting-o fa-lg"
									style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;"
									aria-hidden="true"></i>
								<i class="fa fa-pencil-square-o fa-lg"
									style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;"
									aria-hidden="true"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid py-5" style="background-color: #ffd3b6;">
				<h4 class="h4_title">TIMELINE CAMPAGNA</h4><br><br><br>
				<div class="row">
					<div class="col-lg-12">
						<div class="horizontal-timeline font_size_12">
							<ul class="list-inline items">
								<li class="list-inline-item items-list">
									<div class="px-4 color_red_scuro">
										<div class="event-date badge background_red_scuro">6/6/2020</div>
										<h5 class="h5_title color_red_scuro">Proposta NL (dispositivi medici +<br> procedura clinica) - Nome
										</h5>
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
			<? include_once('inc/navbar_vuota.inc.php'); ?>
			<!-- /content area -->

			<!--MODALI-->
			<? include_once('modali/modale_nuovo_evento.php'); ?>
		</div>
		<!-- /main content -->
	</div>
	<!-- /page content -->
	<script type="text/javascript">
		$(document).ready(function () {
			$('.datepicker').datepicker({
				dateFormat: 'dd/mm/yy',
				firstDay: 1
			});

			$('#calendar_id').bsCalendar({
				locale: 'it',
				width: '350',
				icons: {
					prev: 'fa-solid fa-arrow-left fa-fw',
					next: 'fa-solid fa-arrow-right fa-fw',
					eventEdit: 'fa-solid fa-edit fa-fw',
					eventRemove: 'fa-solid fa-trash fa-fw'
				},
				showEventEditButton: false,
				showEventRemoveButton: false
			});

			$('.fa-solid.fa-arrow-left.fa-fw').removeClass('fa-solid').removeClass('fa-arrow-left').removeClass('fa-fw').addClass('fa fa-arrow-left');
			$('.fa-solid.fa-arrow-right.fa-fw').removeClass('fa-solid').removeClass('fa-arrow-right').removeClass('fa-fw').addClass('fa fa-arrow-right');

			$('#example')
				.on('init', function (e) { })
				.on('change-day', function (e, date, events) { })
				.on('events-loaded', function (e, events) { })
				.on('show-event-list', function (e, events) { })
				.on('shown-event-list', function (e, events) { })
				.on('click-current-month', function (e) { })
				.on('click-prev-month', function (e) { })
				.on('click-next-month', function (e) { })
				.on('change-month', function (e) { })
		});
	</script>
	<?
	//<script type="text/javascript" src="assets/js/calendario.js"></script>
	?>
	<?php include_once('inc/footer.inc.php'); ?>
</body>

</html>
<?
require_once('inc/endPage.php');
?>