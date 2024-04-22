<?
	require_once('inc/startPage.php');
?>
<!DOCTYPE html>
<html lang="it">
	<head>
		<?php include('inc/head.inc.php'); ?>
		<link href="assets/css/timeline.css" rel="stylesheet" type="text/css">
		<link href="assets/css/timeline-horizontal.css" rel="stylesheet" type="text/css">
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
								<button class="btn tasto_aggingi_appuntamento color_white d-flex" style="min-width: 170px;"><i class="fa fa-calendar-o color_red_emc mt_mb_auto" style="margin-right: 10px;"></i><span style="text-align: left; font-size: 10px;">OGGI <b class="color_red_emc">9.30</b><br>A.M. DOTT: <b class="color_red_emc">ROSSI PAOLO</b></span><button class="btn tasto_aggingi_appuntamento_plus" data-bs-toggle="modal" data-bs-target="#modaleNuovoEvento"><i class="fa fa-plus"></i></button></button>
							</span>
						</div>
					</div>
				</div>
				<div class="div_content_singolo_medico">
					<div class="row">
						<div class="col-12 col-lg-3 col-xxl-2 d-flex div_singolo_medico_img" style="padding-right: 0px;">
							<div class="card div_singolo_medico_img" style="border: 0px; width: -webkit-fill-available;">
								<div class="card-body d-flex">
									<? if(@$_SESSION['foto'] != ""){ ?>
										<div style="width: 150px; height: 150px; overflow: auto; background-color: #dee3df; background: url('<?=$_SESSION['foto'];?>') no-repeat; background-size: cover; display:inline-block; margin-top: auto; margin-bottom: auto;" class="img-fluid rounded-circle shadow-1 mx-auto"></div>
									<? }else{ ?>
										<div style="width: 150px; height: 150px; overflow: auto; background-color: #dee3df; background-size: cover; display:inline-block; margin-top: auto; margin-bottom: auto;" class="img-fluid rounded-circle shadow-1 mx-auto d-flex">
											<b class="mt_mb_auto mr_ml_auto" style="font-size: 67px; color: #1e6b7b;">RP</b>
										</div>
									<? } ?>
								</div>
							</div>
							<div style="background-color: #ffffff; min-width: 50px;">
								<div class="d-flex div_singolo_medico_icon_selected"><i class="fa fa-user fa-lg mr_ml_auto mt_mb_auto singolo_medico_icon_selected" aria-hidden="true"></i></div>
								<a style="text-decoration: unset;" href="singolo_medico_stato_utente.php"><div class="d-flex div_singolo_medico_icon_not_selected"><i class="fa fa-eye fa-lg mr_ml_auto mt_mb_auto singolo_medico_icon_not_selected" aria-hidden="true"></i></div></a>
								<div class="d-flex div_singolo_medico_icon_not_selected_last"><i class="fa fa-calendar-check-o fa-lg mr_ml_auto mt_mb_auto_mobile singolo_medico_icon_not_selected" aria-hidden="true"></i></div>
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
									<p style="margin-bottom: 0px;">PROFESSIONE<br><b>Medicina territoriale,<br>medico specialista att. privata</b></p>
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
										<button class="btn button_blue mt-2" style="min-width: 42px;"><i class="fa fa-map-marker"></i></button>
										<p style="text-decoration: underline; margin-top: 1rem; color: #000000;">VEDI TUTTO</p>
									</div>
								</div>
								<div class="col-12 col-lg-3 d-block d-lg-none" style="padding: 0.5rem;">
									<div class="d-flex" style="justify-content: center;">
										<button class="btn button_blue"><i class="fa fa-envelope-o"></i></button>
										<button class="btn button_blue" style="min-width: 42px; margin-left: 0.5rem;"><i class="fa fa-phone"></i></button>
										<button class="btn button_blue" style="min-width: 42px; margin-left: 0.5rem;"><i class="fa fa-map-marker"></i></button>
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
						<p class="margin_left_7_to_0" style="margin-bottom: 0px;">ULTIME AZIONI  >></p>
						<p class="color_yellow margin_left_12_to_0" style="margin-bottom: 0px;"><b>Proposta NL 'Nome' (6/6/2020)</b></p>
						<p class="d-none d-xxl-block" style="margin-bottom: 0px; margin-left: 1rem;">|</p>
						<p class="color_red margin_1_to_0_left" style="margin-bottom: 0px;"><b>Partecipazione progetto by Edra 'Nome' (4/2/2020)</b></p>
					</div>
				</div>
				<div class="w-100 div_content_singolo_medico_2 background_white">
					<div class="w-100 mb-0 mb-lg-3" style="border: 1px solid #000000; border-radius: 6px; padding: 2rem;">
						<div class="row">
							<div class="col-12 col-md-4 d-flex">
								<b class="mt-auto mb-auto font_size_16" style="color: #292929;">DOMANDE PER AGGIORNARE<br>IL PROFILO DEL MEDICO</b>
							</div>
							<div class="col-12 col-md-8">
								<p class="medium mt-2 mt-lg-0 font_size_22" style="color: #1e6b7b; margin-bottom: 0.5rem; line-height: normal;">Qual è l'indirizzo del medico?</p>
								<div class="input-group mb-0 mb-lg-3">
									<input type="text" class="form-control" placeholder="Scrivi qui l'indirizzo" aria-label="Scrivi qui l'indirizzo" aria-describedby="basic-addon2">
									<span class="input-group-text" id="basic-addon2" style="background-color: #1e6b7b; color: #ffffff;"><b class="font_size_12">INVIA</b></span>
								</div>
							</div>
						</div>
					</div>
					<div class="w-100 mb-3" style="margin-top: 2rem;">
						<h4 class="h4_title">ATTIVITÀ</h4>
					</div>
					<div class="w-100 d_flex_wide_screen">
						<button class="btn tasto_campagne_pagina_singolo_medico"><b>Campagne (4)</b></button>
						<button class="btn tasto_progetti_pagina_singolo_medico margin_1_to_0_left margin_0_to_05_top"><b>Progetti (4)</b></button>
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
										<p class="font_size_18" style="margin-bottom: 0px; color: green;"><i class="fa fa-circle" aria-hidden="true"></i> <b>INTERESSATO</b></p>
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
										<i class="fa fa-commenting-o fa-lg" style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;" aria-hidden="true"></i>
										<a href="singolo_medico_campagna_aperta.php">
											<i class="fa fa-pencil-square-o fa-lg" style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;" aria-hidden="true"></i>
										</a>
									</div>
								</div>
								<div class="col-12 col-lg-2 mt-4 color_light_blue d-block d-lg-none mb-4 mb-lg-0" style="text-align: center;">
									<i class="fa fa-commenting-o fa-lg" style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;" aria-hidden="true"></i>
									<i class="fa fa-pencil-square-o fa-lg" style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;" aria-hidden="true"></i>
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
										<p class="font_size_18" style="margin-bottom: 0px; color: green;"><i class="fa fa-circle" aria-hidden="true"></i> <b>INTERESSATO</b></p>
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
										<i class="fa fa-commenting-o fa-lg" style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;" aria-hidden="true"></i>
										<i class="fa fa-pencil-square-o fa-lg" style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;" aria-hidden="true"></i>
									</div>
								</div>
								<div class="col-12 col-lg-2 mt-4 color_light_blue d-block d-lg-none mb-4 mb-lg-0" style="text-align: center;">
									<i class="fa fa-commenting-o fa-lg" style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;" aria-hidden="true"></i>
									<i class="fa fa-pencil-square-o fa-lg" style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;" aria-hidden="true"></i>
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
										<p class="font_size_18" style="margin-bottom: 0px; color: green;"><i class="fa fa-circle" aria-hidden="true"></i> <b>INTERESSATO</b></p>
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
										<i class="fa fa-commenting-o fa-lg" style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;" aria-hidden="true"></i>
										<i class="fa fa-pencil-square-o fa-lg" style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;" aria-hidden="true"></i>
									</div>
								</div>
								<div class="col-12 col-lg-2 mt-4 color_light_blue d-block d-lg-none mb-4 mb-lg-0" style="text-align: center;">
									<i class="fa fa-commenting-o fa-lg" style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;" aria-hidden="true"></i>
									<i class="fa fa-pencil-square-o fa-lg" style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;" aria-hidden="true"></i>
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
										<p class="font_size_18" style="margin-bottom: 0px; color: green;"><i class="fa fa-circle" aria-hidden="true"></i> <b>INTERESSATO</b></p>
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
										<i class="fa fa-commenting-o fa-lg" style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;" aria-hidden="true"></i>
										<i class="fa fa-pencil-square-o fa-lg" style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;" aria-hidden="true"></i>
									</div>
								</div>
								<div class="col-12 col-lg-2 mt-4 color_light_blue d-block d-lg-none mb-4 mb-lg-0" style="text-align: center;">
									<i class="fa fa-commenting-o fa-lg" style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;" aria-hidden="true"></i>
									<i class="fa fa-pencil-square-o fa-lg" style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;" aria-hidden="true"></i>
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
										<p class="font_size_18" style="margin-bottom: 0px; color: green;"><i class="fa fa-circle" aria-hidden="true"></i> <b>INTERESSATO</b></p>
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
										<i class="fa fa-commenting-o fa-lg" style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;" aria-hidden="true"></i>
										<i class="fa fa-pencil-square-o fa-lg" style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;" aria-hidden="true"></i>
									</div>
								</div>
								<div class="col-12 col-lg-2 mt-4 color_light_blue d-block d-lg-none mb-4 mb-lg-0" style="text-align: center;">
									<i class="fa fa-commenting-o fa-lg" style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;" aria-hidden="true"></i>
									<i class="fa fa-pencil-square-o fa-lg" style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;" aria-hidden="true"></i>
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
										<p class="font_size_18" style="margin-bottom: 0px; color: green;"><i class="fa fa-circle" aria-hidden="true"></i> <b>INTERESSATO</b></p>
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
										<i class="fa fa-commenting-o fa-lg" style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;" aria-hidden="true"></i>
										<i class="fa fa-pencil-square-o fa-lg" style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;" aria-hidden="true"></i>
									</div>
								</div>
								<div class="col-12 col-lg-2 mt-4 color_light_blue d-block d-lg-none mb-4 mb-lg-0" style="text-align: center;">
									<i class="fa fa-commenting-o fa-lg" style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;" aria-hidden="true"></i>
									<i class="fa fa-pencil-square-o fa-lg" style="border: 1px solid #1d6c7b ; border-radius: 5px; padding: 0.5rem; color: #1d6c7b ;" aria-hidden="true"></i>
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
				<?php include_once('inc/navbar_vuota.inc.php'); ?>
				<!-- /content area -->

				<!--MODALI-->
				<?php include_once('modali/modale_nuovo_evento.php'); ?>
			</div>
			<!-- /main content -->
		</div>
		<!-- /page content -->
		<script type="text/javascript">
			$(document).ready(function() {
				$('.datepicker').datepicker({
					dateFormat: 'dd/mm/yy',
					firstDay: 1
				});
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