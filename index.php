<?
	require_once 'inc/startPage.php';
?>
<!DOCTYPE html>
<html lang="it">

<head>
  <?php include 'inc/head.inc.php'; ?>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>

<body>
  <?php include_once 'inc/logo.inc.php'; ?>
  <?php include_once 'inc/navbar.inc.php'; ?>
  <!-- Page content -->
  <div class="page-content">
    <? //include 'inc/menu.inc.php'; ?>
    <!-- Main content -->
    <div class="content-wrapper" style="overflow-x: hidden;">
      <!-- Content area -->
      <div style="padding: 0.5rem 0.5rem !important; width: -webkit-fill-available;">
        <div class="row mt-4 mb-4">
          <div class="col-12 col-sm-6 col-md-4 mt-1 d-flex">
            <span class="center_element">
              <a href="crea_campagna.php"><button class="btn tasto_crea_campagna" style="min-width: 170px;"><b>CREA
                    CAMPAGNA</b> <button class="btn tasto_crea_campagna_plus"><i
                      class="fa fa-plus"></i></button></button></a>
            </span>
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
      <hr>
      <div class="w-100 div_content background_white">
        <div class="row w-100">
          <div class="col-12 col-lg-6 mt-1 d-flex">
            <h4 class="h4_title">DASHBOARD</h4>
          </div>
          <div class="col-12 col-lg-6 mt-1 d-flex">
            <p class="left_element color_title">DA FARE PER: <b>OGGI, 31 MARZO 2022</b><i class="fa fa-arrow-down"
                style="margin-left: 0.5rem;" aria-hidden="true"></i></p>
          </div>
        </div>
        <div class="row mt-4 mb-4 d-flex">
          <div class="col-12 col-lg-4 mt-1" style="flex: 1; display: flex; flex-direction: column;">
            <div class="card border_blue" style="flex: 1;">
              <h5 class="card-header background_blue no_border"></h5>
              <div class="card-body">
                <p class="card-text font_size_16" style="text-align: center; margin-bottom: 0px;">Medici con
                  appuntamento in<br><b class="color_blue font_size_18">Agenda</b></p>
                <p style="text-align: center; margin-bottom: 0px;"><b class="color_blue font_size_60">12</b></p>
                <div class="row w-100" style="margin-right: 0px; margin-left: 0px;">
                  <div class="col-12 d-flex content_center mt-1">
                    <a href="#" style="text-decoration: none;">
                      <button class="btn button_grey_color_black font_size_12 d-flex">VEDI TUTTI<i
                          class="fa fa-arrow-right mt_mb_auto" style="margin-left: auto;"
                          aria-hidden="true"></i></button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 mt-1" style="flex: 1; display: flex; flex-direction: column;">
            <div class="card border_yellow" style="flex: 1;">
              <h5 class="card-header background_yellow no_border"></h5>
              <div class="card-body">
                <p class="card-text font_size_16" style="text-align: center; margin-bottom: 0px;">Medici da sentire
                  per<br><b class="color_yellow font_size_18">Campagna</b></p>
                <p style="text-align: center; margin-bottom: 0px;"><b class="color_yellow font_size_60">170</b></p>
                <div class="row w-100" style="margin-right: 0px; margin-left: 0px;">
                  <div class="col-12 col-lg-8 col-xxl-6 d-flex content_right mt-1">
                    <a href="listing_medici.php" style="text-decoration: unset;">
                      <button class="btn button_grey_color_yellow font_size_12 d-flex">110 ASSEGNATI<i
                          class="fa fa-arrow-right mt_mb_auto" style="margin-left: auto;"
                          aria-hidden="true"></i></button>
                    </a>
                  </div>
                  <div class="col-12 col-lg-8 col-xxl-6 d-flex content_left mt-1">
                    <button class="btn button_grey_color_black font_size_12 d-flex">60 NON ASSEGNATI<i
                        class="fa fa-arrow-right mt_mb_auto" style="margin-left: 0.5rem;"
                        aria-hidden="true"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 mt-1" style="flex: 1; display: flex; flex-direction: column;">
            <div class="card border_red" style="flex: 1;">
              <h5 class="card-header background_red no_border"></h5>
              <div class="card-body">
                <p class="card-text font_size_16" style="text-align: center; margin-bottom: 0px;">Medici da sentire
                  per<br><b class="color_red font_size_18">Progetti</b></p>
                <p style="text-align: center; margin-bottom: 0px;"><b class="color_red font_size_60">90</b></p>
                <div class="row w-100" style="margin-right: 0px; margin-left: 0px;">
                  <div class="col-12 col-lg-8 col-xxl-6 d-flex content_right mt-1">
                    <a href="listing_medici.php" style="text-decoration: unset;">
                      <button class="btn button_grey_color_red font_size_12 d-flex">70 ASSEGNATI<i
                          class="fa fa-arrow-right mt_mb_auto" style="margin-left: auto;"
                          aria-hidden="true"></i></button>
                    </a>
                  </div>
                  <div class="col-12 col-lg-8 col-xxl-6 d-flex content_left mt-1">
                    <button class="btn button_grey_color_black font_size_12 d-flex">20 NON ASSEGNATI<i
                        class="fa fa-arrow-right mt_mb_auto" style="margin-left: 0.5rem;"
                        aria-hidden="true"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="w-100 div_content background_white">
        <div class="row w-100">
          <div class="col-12 col-lg-6 mt-1 d-flex">
            <h5 class="h5_title">CHIAMATE FATTE</h5>
          </div>
          <div class="col-12 col-lg-6 mt-1 d-flex">
            <p class="left_element color_title">DATA: <b>ULTIMO ANNO</b><i class="fa fa-arrow-down"
                style="margin-left: 0.5rem;" aria-hidden="true"></i></p>
          </div>
        </div>
        <div id="myChart" style="height: 400px"></div>
      </div>
      <div class="w-100 div_content">
        <div class="row w-100">
          <div class="col-12 col-lg-6 mt-1 d-flex">
            <h5 class="h5_title">CAMPAGNE</h5>
          </div>
          <div class="col-12 col-lg-6 mt-1 d-flex">
            <p class="left_element color_title">DATA: <b>OGGI</b><i class="fa fa-arrow-down"
                style="margin-left: 0.5rem;" aria-hidden="true"></i></p>
          </div>
        </div>
        <div class="row mb-4">
          <div class="col-12 mt-1">
            <div class="card border_card_yellow">
              <div class="card-body">
                <div class="row mt-4 mb-4">
                  <div class="col-12 col-md-4 col-xl-4 col-xxl-2 mt-2 padding_left_50">
                    <span class="d-flex">
                      <i class="fa fa-thumbs-up fa-lg mt_mb_auto mr-2 color_green"></i>
                      <p class="card-text" style="margin-bottom: 0px; margin-left: 1rem;"><b
                          class="color_green font_size_24">55</b><br><b class="color_green font_size_16">INTERESSATO</b>
                      </p>
                    </span>
                    <span class="d-flex mt-2">
                      <i class="fa fa-thumbs-down fa-lg mt_mb_auto mr-2 color_red_emc"></i>
                      <p class="card-text" style="margin-bottom: 0px; margin-left: 1rem;"><b
                          class="color_red_emc font_size_16">NON INTERESSATO</b><br><b
                          class="color_red_emc font_size_24">10</b></p>
                    </span>
                  </div>
                  <div class="col-12 col-md-8 col-xl-8 col-xxl-10 mt-3" style="position: relative;">
                    <div class="progress d-flex"
                      style="height: 4rem; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;">
                      <div class="progress-bar background_green_grafico" role="progressbar" style="width: 65%;"
                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="125"></div>
                    </div>
                    <div class="progress"
                      style="height: 2rem; border-top-left-radius: 0px; border-top-right-radius: 0px;">
                      <div class="progress-bar background_red_grafico" role="progressbar" style="width: 65%;"
                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="125"></div>
                    </div>
                    <span class="color_black_grafico background_grey_grafico span_counter">
                      <b class="font_size_32">65/125</b>
                      <br>
                      <b class="font_size_18">chiamate</b>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row w-100">
          <div class="col-12 col-lg-6 mt-1 d-flex">
            <h5 class="h5_title">PROGETTI</h5>
          </div>
          <div class="col-12 col-lg-6 mt-1 d-flex">
            <p class="left_element color_title">DATA: <b>OGGI</b><i class="fa fa-arrow-down"
                style="margin-left: 0.5rem;" aria-hidden="true"></i></p>
          </div>
        </div>
        <div class="row mb-4">
          <div class="col-12 mt-1">
            <div class="card border_card_red">
              <div class="card-body">
                <div class="row mt-4 mb-4">
                  <div class="col-12 col-md-4 col-xl-4 col-xxl-2 mt-2 padding_left_50">
                    <span class="d-flex">
                      <i class="fa fa-thumbs-up fa-lg mt_mb_auto mr-2 color_green"></i>
                      <p class="card-text" style="margin-bottom: 0px; margin-left: 1rem;"><b
                          class="color_green font_size_24">55</b><br><b class="color_green font_size_16">INTERESSATO</b>
                      </p>
                    </span>
                    <span class="d-flex mt-2">
                      <i class="fa fa-thumbs-down fa-lg mt_mb_auto mr-2 color_red_emc"></i>
                      <p class="card-text" style="margin-bottom: 0px; margin-left: 1rem;"><b
                          class="color_red_emc font_size_16">NON INTERESSATO</b><br><b
                          class="color_red_emc font_size_24">10</b></p>
                    </span>
                  </div>
                  <div class="col-12 col-md-8 col-xl-8 col-xxl-10 mt-3" style="position: relative;">
                    <div class="progress d-flex"
                      style="height: 4rem; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;">
                      <div class="progress-bar background_green_grafico" role="progressbar" style="width: 65%;"
                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="125"></div>
                    </div>
                    <div class="progress"
                      style="height: 2rem; border-top-left-radius: 0px; border-top-right-radius: 0px;">
                      <div class="progress-bar background_red_grafico" role="progressbar" style="width: 65%;"
                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="125"></div>
                    </div>
                    <span class="color_black_grafico background_grey_grafico span_counter">
                      <b class="font_size_32">65/125</b>
                      <br>
                      <b class="font_size_18">chiamate</b>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row w-100">
          <div class="col-12 col-lg-6 mt-1 d-flex">
            <h5 class="h5_title">INFORMATORI SCIENTIFICI: Campagne + Progetti</h5>
          </div>
          <div class="col-12 col-lg-6 mt-1 d_flex_wide_screen content_right">
            <p class="color_title" style="margin-right: 1rem; margin-bottom: 0px;">DATA: <b>OGGI</b><i
                class="fa fa-arrow-down" style="margin-left: 0.5rem;" aria-hidden="true"></i></p>
            <p class="color_title" style="margin-bottom: 0px;">TIPOLOGIA: <b>CHIAMATE</b><i class="fa fa-arrow-down"
                style="margin-left: 0.5rem;" aria-hidden="true"></i></p>
          </div>
        </div>
        <div class="row mb-4 mt-4">
          <div class="col-12 col-lg-3 mt-2 mt-lg-0">
            <div class="card" style="border: 1px solid #b7d0d5;">
              <div class="card-body">
                <div class="row mt-4 mb-4" style="padding-right: 1rem; padding-left: 1rem;">
                  <div class="col-12 mt-1">
                    <p class="card-text font_size_16" style="margin-bottom: 0px; text-align: center;">Adalberto Calassi
                    </p>
                  </div>
                  <div class="col-12 mt-2"
                    style="min-height: 175px; position: relative; background-color: #f7f7f7; padding-right: 0px; padding-left: 0px;">
                    <div class="progress progress_2" style="height: 18%;">
                      <div class="progress-bar background_green_grafico" role="progressbar" style="width: 50%;"
                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="135"></div>
                      <div class="progress-bar background_red_grafico" role="progressbar" style="width: 50%;"
                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="135"></div>
                    </div>
                    <span class="color_black_grafico background_grey_grafico_span span_counter_2">
                      <b class="font_size_32">26/135</b>
                      <br>
                      <b class="font_size_18">chiamate</b>
                    </span>
                  </div>
                  <div class="col-12 mt-1 d-flex">
                    <span class="d-flex">
                      <i class="fa fa-thumbs-up fa-lg mt_mb_auto mr-2" style="color: green;"></i>
                      <p class="card-text mt_mb_auto font_size_24" style="margin-left: 0.5rem;"><b
                          style="color: green;">13</b></p>
                    </span>
                    <span class="d-flex" style="margin-left: auto;">
                      <i class="fa fa-thumbs-down fa-lg mt_mb_auto mr-2" style="color: red;"></i>
                      <p class="card-text mt_mb_auto font_size_24" style="margin-left: 0.5rem;"><b
                          style="color: red;">13</b></p>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-3 mt-2 mt-lg-0">
            <div class="card" style="border: 1px solid #b7d0d5;">
              <div class="card-body">
                <div class="row mt-4 mb-4" style="padding-right: 1rem; padding-left: 1rem;">
                  <div class="col-12 mt-1">
                    <p class="card-text font_size_16" style="margin-bottom: 0px; text-align: center;">Adalberto Calassi
                    </p>
                  </div>
                  <div class="col-12 mt-2"
                    style="min-height: 175px; position: relative; background-color: #f7f7f7; padding-right: 0px; padding-left: 0px;">
                    <div class="progress progress_2" style="height: 18%;">
                      <div class="progress-bar background_green_grafico" role="progressbar" style="width: 65%;"
                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="135"></div>
                      <div class="progress-bar background_red_grafico" role="progressbar" style="width: 65%;"
                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="135"></div>
                    </div>
                    <span class="color_black_grafico background_grey_grafico_span span_counter_2">
                      <b class="font_size_32">65/125</b>
                      <br>
                      <b class="font_size_18">chiamate</b>
                    </span>
                  </div>
                  <div class="col-12 mt-1 d-flex">
                    <span class="d-flex">
                      <i class="fa fa-thumbs-up fa-lg mt_mb_auto mr-2" style="color: green;"></i>
                      <p class="card-text mt_mb_auto font_size_24" style="margin-left: 0.5rem;"><b
                          style="color: green;">18</b></p>
                    </span>
                    <span class="d-flex" style="margin-left: auto;">
                      <i class="fa fa-thumbs-down fa-lg mt_mb_auto mr-2" style="color: red;"></i>
                      <p class="card-text mt_mb_auto font_size_24" style="margin-left: 0.5rem;"><b
                          style="color: red;">07</b></p>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-3 mt-2 mt-lg-0">
            <div class="card" style="border: 1px solid #b7d0d5;">
              <div class="card-body">
                <div class="row mt-4 mb-4" style="padding-right: 1rem; padding-left: 1rem;">
                  <div class="col-12 mt-1">
                    <p class="card-text font_size_16" style="margin-bottom: 0px; text-align: center;">Dalia Genovesi</p>
                  </div>
                  <div class="col-12 mt-2"
                    style="min-height: 175px; position: relative; background-color: #f7f7f7; padding-right: 0px; padding-left: 0px;">
                    <div class="progress progress_2" style="height: 80%;">
                      <div class="progress-bar background_green_grafico" role="progressbar" style="width: 50%;"
                        aria-valuenow="45" aria-valuemin="0" aria-valuemax="135"></div>
                      <div class="progress-bar background_red_grafico" role="progressbar" style="width: 50%;"
                        aria-valuenow="45" aria-valuemin="0" aria-valuemax="135"></div>
                    </div>
                    <span class="color_black_grafico background_grey_grafico_span span_counter_2">
                      <b class="font_size_32">90/125</b>
                      <br>
                      <b class="font_size_18">chiamate</b>
                    </span>
                  </div>
                  <div class="col-12 mt-1 d-flex">
                    <span class="d-flex">
                      <i class="fa fa-thumbs-up fa-lg mt_mb_auto mr-2" style="color: green;"></i>
                      <p class="card-text mt_mb_auto font_size_24" style="margin-left: 0.5rem;"><b
                          style="color: green;">45</b></p>
                    </span>
                    <span class="d-flex" style="margin-left: auto;">
                      <i class="fa fa-thumbs-down fa-lg mt_mb_auto mr-2" style="color: red;"></i>
                      <p class="card-text mt_mb_auto font_size_24" style="margin-left: 0.5rem;"><b
                          style="color: red;">45</b></p>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-3 mt-2 mt-lg-0">
            <div class="card" style="border: 1px solid #b7d0d5;">
              <div class="card-body">
                <div class="row mt-4 mb-4" style="padding-right: 1rem; padding-left: 1rem;">
                  <div class="col-12 mt-1">
                    <p class="card-text font_size_16" style="margin-bottom: 0px; text-align: center;">Adalberto Calassi
                    </p>
                  </div>
                  <div class="col-12 mt-2"
                    style="min-height: 175px; position: relative; background-color: #f7f7f7; padding-right: 0px; padding-left: 0px;">
                    <div class="progress progress_2" style="height: 18%;">
                      <div class="progress-bar background_green_grafico" role="progressbar" style="width: 65%;"
                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="135"></div>
                      <div class="progress-bar background_red_grafico" role="progressbar" style="width: 65%;"
                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="135"></div>
                    </div>
                    <span class="color_black_grafico background_grey_grafico_span span_counter_2">
                      <b class="font_size_32">65/125</b>
                      <br>
                      <b class="font_size_18">chiamate</b>
                    </span>
                  </div>
                  <div class="col-12 mt-1 d-flex">
                    <span class="d-flex">
                      <i class="fa fa-thumbs-up fa-lg mt_mb_auto mr-2" style="color: green;"></i>
                      <p class="card-text mt_mb_auto font_size_24" style="margin-left: 0.5rem;"><b
                          style="color: green;">18</b></p>
                    </span>
                    <span class="d-flex" style="margin-left: auto;">
                      <i class="fa fa-thumbs-down fa-lg mt_mb_auto mr-2" style="color: red;"></i>
                      <p class="card-text mt_mb_auto font_size_24" style="margin-left: 0.5rem;"><b
                          style="color: red;">07</b></p>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-4 mt-4">
          <div class="col-12 col-lg-3 mt-2 mt-lg-0">
            <div class="card" style="border: 1px solid #b7d0d5;">
              <div class="card-body">
                <div class="row mt-4 mb-4" style="padding-right: 1rem; padding-left: 1rem;">
                  <div class="col-12 mt-1">
                    <p class="card-text font_size_16" style="margin-bottom: 0px; text-align: center;">Adalberto Calassi
                    </p>
                  </div>
                  <div class="col-12 mt-2"
                    style="min-height: 175px; position: relative; background-color: #f7f7f7; padding-right: 0px; padding-left: 0px;">
                    <div class="progress progress_2" style="height: 18%;">
                      <div class="progress-bar background_green_grafico" role="progressbar" style="width: 65%;"
                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="135"></div>
                      <div class="progress-bar background_red_grafico" role="progressbar" style="width: 65%;"
                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="135"></div>
                    </div>
                    <span class="color_black_grafico background_grey_grafico_span span_counter_2">
                      <b class="font_size_32">65/125</b>
                      <br>
                      <b class="font_size_18">chiamate</b>
                    </span>
                  </div>
                  <div class="col-12 mt-1 d-flex">
                    <span class="d-flex">
                      <i class="fa fa-thumbs-up fa-lg mt_mb_auto mr-2" style="color: green;"></i>
                      <p class="card-text mt_mb_auto font_size_24" style="margin-left: 0.5rem;"><b
                          style="color: green;">18</b></p>
                    </span>
                    <span class="d-flex" style="margin-left: auto;">
                      <i class="fa fa-thumbs-down fa-lg mt_mb_auto mr-2" style="color: red;"></i>
                      <p class="card-text mt_mb_auto font_size_24" style="margin-left: 0.5rem;"><b
                          style="color: red;">07</b></p>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-3 mt-2 mt-lg-0">
            <div class="card" style="border: 1px solid #b7d0d5;">
              <div class="card-body">
                <div class="row mt-4 mb-4" style="padding-right: 1rem; padding-left: 1rem;">
                  <div class="col-12 mt-1">
                    <p class="card-text font_size_16" style="margin-bottom: 0px; text-align: center;">Adalberto Calassi
                    </p>
                  </div>
                  <div class="col-12 mt-2"
                    style="min-height: 175px; position: relative; background-color: #f7f7f7; padding-right: 0px; padding-left: 0px;">
                    <div class="progress progress_2" style="height: 18%;">
                      <div class="progress-bar background_green_grafico" role="progressbar" style="width: 65%;"
                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="135"></div>
                      <div class="progress-bar background_red_grafico" role="progressbar" style="width: 65%;"
                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="135"></div>
                    </div>
                    <span class="color_black_grafico background_grey_grafico_span span_counter_2">
                      <b class="font_size_32">65/125</b>
                      <br>
                      <b class="font_size_18">chiamate</b>
                    </span>
                  </div>
                  <div class="col-12 mt-1 d-flex">
                    <span class="d-flex">
                      <i class="fa fa-thumbs-up fa-lg mt_mb_auto mr-2" style="color: green;"></i>
                      <p class="card-text mt_mb_auto font_size_24" style="margin-left: 0.5rem;"><b
                          style="color: green;">18</b></p>
                    </span>
                    <span class="d-flex" style="margin-left: auto;">
                      <i class="fa fa-thumbs-down fa-lg mt_mb_auto mr-2" style="color: red;"></i>
                      <p class="card-text mt_mb_auto font_size_24" style="margin-left: 0.5rem;"><b
                          style="color: red;">07</b></p>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-3 mt-2 mt-lg-0">
            <div class="card" style="border: 1px solid #b7d0d5;">
              <div class="card-body">
                <div class="row mt-4 mb-4" style="padding-right: 1rem; padding-left: 1rem;">
                  <div class="col-12 mt-1">
                    <p class="card-text font_size_16" style="margin-bottom: 0px; text-align: center;">Adalberto Calassi
                    </p>
                  </div>
                  <div class="col-12 mt-2"
                    style="min-height: 175px; position: relative; background-color: #f7f7f7; padding-right: 0px; padding-left: 0px;">
                    <div class="progress progress_2" style="height: 18%;">
                      <div class="progress-bar background_green_grafico" role="progressbar" style="width: 65%;"
                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="135"></div>
                      <div class="progress-bar background_red_grafico" role="progressbar" style="width: 65%;"
                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="135"></div>
                    </div>
                    <span class="color_black_grafico background_grey_grafico_span span_counter_2">
                      <b class="font_size_32">65/125</b>
                      <br>
                      <b class="font_size_18">chiamate</b>
                    </span>
                  </div>
                  <div class="col-12 mt-1 d-flex">
                    <span class="d-flex">
                      <i class="fa fa-thumbs-up fa-lg mt_mb_auto mr-2" style="color: green;"></i>
                      <p class="card-text mt_mb_auto font_size_24" style="margin-left: 0.5rem;"><b
                          style="color: green;">18</b></p>
                    </span>
                    <span class="d-flex" style="margin-left: auto;">
                      <i class="fa fa-thumbs-down fa-lg mt_mb_auto mr-2" style="color: red;"></i>
                      <p class="card-text mt_mb_auto font_size_24" style="margin-left: 0.5rem;"><b
                          style="color: red;">07</b></p>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-3 mt-2 mt-lg-0">
            <div class="card" style="border: 1px solid #b7d0d5;">
              <div class="card-body">
                <div class="row mt-4 mb-4" style="padding-right: 1rem; padding-left: 1rem;">
                  <div class="col-12 mt-1">
                    <p class="card-text font_size_16" style="margin-bottom: 0px; text-align: center;">Adalberto Calassi
                    </p>
                  </div>
                  <div class="col-12 mt-2"
                    style="min-height: 175px; position: relative; background-color: #f7f7f7; padding-right: 0px; padding-left: 0px;">
                    <div class="progress progress_2" style="height: 18%;">
                      <div class="progress-bar background_green_grafico" role="progressbar" style="width: 65%;"
                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="135"></div>
                      <div class="progress-bar background_red_grafico" role="progressbar" style="width: 65%;"
                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="135"></div>
                    </div>
                    <span class="color_black_grafico background_grey_grafico_span span_counter_2">
                      <b class="font_size_32">65/125</b>
                      <br>
                      <b class="font_size_18">chiamate</b>
                    </span>
                  </div>
                  <div class="col-12 mt-1 d-flex">
                    <span class="d-flex">
                      <i class="fa fa-thumbs-up fa-lg mt_mb_auto mr-2" style="color: green;"></i>
                      <p class="card-text mt_mb_auto font_size_24" style="margin-left: 0.5rem;"><b
                          style="color: green;">18</b></p>
                    </span>
                    <span class="d-flex" style="margin-left: auto;">
                      <i class="fa fa-thumbs-down fa-lg mt_mb_auto mr-2" style="color: red;"></i>
                      <p class="card-text mt_mb_auto font_size_24" style="margin-left: 0.5rem;"><b
                          style="color: red;">07</b></p>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-4 mt-4">
          <div class="col-12 col-lg-3 mt-2 mt-lg-0">
            <div class="card" style="border: 1px solid #b7d0d5;">
              <div class="card-body">
                <div class="row mt-4 mb-4" style="padding-right: 1rem; padding-left: 1rem;">
                  <div class="col-12 mt-1">
                    <p class="card-text font_size_16" style="margin-bottom: 0px; text-align: center;">Adalberto Calassi
                    </p>
                  </div>
                  <div class="col-12 mt-2"
                    style="min-height: 175px; position: relative; background-color: #f7f7f7; padding-right: 0px; padding-left: 0px;">
                    <div class="progress progress_2" style="height: 18%;">
                      <div class="progress-bar background_green_grafico" role="progressbar" style="width: 65%;"
                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="135"></div>
                      <div class="progress-bar background_red_grafico" role="progressbar" style="width: 65%;"
                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="135"></div>
                    </div>
                    <span class="color_black_grafico background_grey_grafico_span span_counter_2">
                      <b class="font_size_32">65/125</b>
                      <br>
                      <b class="font_size_18">chiamate</b>
                    </span>
                  </div>
                  <div class="col-12 mt-1 d-flex">
                    <span class="d-flex">
                      <i class="fa fa-thumbs-up fa-lg mt_mb_auto mr-2" style="color: green;"></i>
                      <p class="card-text mt_mb_auto font_size_24" style="margin-left: 0.5rem;"><b
                          style="color: green;">18</b></p>
                    </span>
                    <span class="d-flex" style="margin-left: auto;">
                      <i class="fa fa-thumbs-down fa-lg mt_mb_auto mr-2" style="color: red;"></i>
                      <p class="card-text mt_mb_auto font_size_24" style="margin-left: 0.5rem;"><b
                          style="color: red;">07</b></p>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-3 mt-2 mt-lg-0">
            <div class="card" style="border: 1px solid #b7d0d5;">
              <div class="card-body">
                <div class="row mt-4 mb-4" style="padding-right: 1rem; padding-left: 1rem;">
                  <div class="col-12 mt-1">
                    <p class="card-text font_size_16" style="margin-bottom: 0px; text-align: center;">Adalberto Calassi
                    </p>
                  </div>
                  <div class="col-12 mt-2"
                    style="min-height: 175px; position: relative; background-color: #f7f7f7; padding-right: 0px; padding-left: 0px;">
                    <div class="progress progress_2" style="height: 18%;">
                      <div class="progress-bar background_green_grafico" role="progressbar" style="width: 65%;"
                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="135"></div>
                      <div class="progress-bar background_red_grafico" role="progressbar" style="width: 65%;"
                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="135"></div>
                    </div>
                    <span class="color_black_grafico background_grey_grafico_span span_counter_2">
                      <b class="font_size_32">65/125</b>
                      <br>
                      <b class="font_size_18">chiamate</b>
                    </span>
                  </div>
                  <div class="col-12 mt-1 d-flex">
                    <span class="d-flex">
                      <i class="fa fa-thumbs-up fa-lg mt_mb_auto mr-2" style="color: green;"></i>
                      <p class="card-text mt_mb_auto font_size_24" style="margin-left: 0.5rem;"><b
                          style="color: green;">18</b></p>
                    </span>
                    <span class="d-flex" style="margin-left: auto;">
                      <i class="fa fa-thumbs-down fa-lg mt_mb_auto mr-2" style="color: red;"></i>
                      <p class="card-text mt_mb_auto font_size_24" style="margin-left: 0.5rem;"><b
                          style="color: red;">07</b></p>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-3 mt-2 mt-lg-0">
            <div class="card" style="border: 1px solid #b7d0d5;">
              <div class="card-body">
                <div class="row mt-4 mb-4" style="padding-right: 1rem; padding-left: 1rem;">
                  <div class="col-12 mt-1">
                    <p class="card-text font_size_16" style="margin-bottom: 0px; text-align: center;">Adalberto Calassi
                    </p>
                  </div>
                  <div class="col-12 mt-2"
                    style="min-height: 175px; position: relative; background-color: #f7f7f7; padding-right: 0px; padding-left: 0px;">
                    <div class="progress progress_2" style="height: 18%;">
                      <div class="progress-bar background_green_grafico" role="progressbar" style="width: 65%;"
                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="135"></div>
                      <div class="progress-bar background_red_grafico" role="progressbar" style="width: 65%;"
                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="135"></div>
                    </div>
                    <span class="color_black_grafico background_grey_grafico_span span_counter_2">
                      <b class="font_size_32">65/125</b>
                      <br>
                      <b class="font_size_18">chiamate</b>
                    </span>
                  </div>
                  <div class="col-12 mt-1 d-flex">
                    <span class="d-flex">
                      <i class="fa fa-thumbs-up fa-lg mt_mb_auto mr-2" style="color: green;"></i>
                      <p class="card-text mt_mb_auto font_size_24" style="margin-left: 0.5rem;"><b
                          style="color: green;">18</b></p>
                    </span>
                    <span class="d-flex" style="margin-left: auto;">
                      <i class="fa fa-thumbs-down fa-lg mt_mb_auto mr-2" style="color: red;"></i>
                      <p class="card-text mt_mb_auto font_size_24" style="margin-left: 0.5rem;"><b
                          style="color: red;">07</b></p>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-3 mt-2 mt-lg-0">
            <div class="card" style="border: 1px solid #b7d0d5;">
              <div class="card-body">
                <div class="row mt-4 mb-4" style="padding-right: 1rem; padding-left: 1rem;">
                  <div class="col-12 mt-1">
                    <p class="card-text font_size_16" style="margin-bottom: 0px; text-align: center;">Adalberto Calassi
                    </p>
                  </div>
                  <div class="col-12 mt-2"
                    style="min-height: 175px; position: relative; background-color: #f7f7f7; padding-right: 0px; padding-left: 0px;">
                    <div class="progress progress_2" style="height: 18%;">
                      <div class="progress-bar background_green_grafico" role="progressbar" style="width: 65%;"
                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="135"></div>
                      <div class="progress-bar background_red_grafico" role="progressbar" style="width: 65%;"
                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="135"></div>
                    </div>
                    <span class="color_black_grafico background_grey_grafico_span span_counter_2">
                      <b class="font_size_32">65/125</b>
                      <br>
                      <b class="font_size_18">chiamate</b>
                    </span>
                  </div>
                  <div class="col-12 mt-1 d-flex">
                    <span class="d-flex">
                      <i class="fa fa-thumbs-up fa-lg mt_mb_auto mr-2" style="color: green;"></i>
                      <p class="card-text mt_mb_auto font_size_24" style="margin-left: 0.5rem;"><b
                          style="color: green;">18</b></p>
                    </span>
                    <span class="d-flex" style="margin-left: auto;">
                      <i class="fa fa-thumbs-down fa-lg mt_mb_auto mr-2" style="color: red;"></i>
                      <p class="card-text mt_mb_auto font_size_24" style="margin-left: 0.5rem;"><b
                          style="color: red;">07</b></p>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-4 mt-4">
          <div class="col-12 col-lg-3 mt-2 mt-lg-0">
            <div class="card" style="border: 1px solid #b7d0d5;">
              <div class="card-body">
                <div class="row mt-4 mb-4" style="padding-right: 1rem; padding-left: 1rem;">
                  <div class="col-12 mt-1">
                    <p class="card-text font_size_16" style="margin-bottom: 0px; text-align: center;">Adalberto Calassi
                    </p>
                  </div>
                  <div class="col-12 mt-2"
                    style="min-height: 175px; position: relative; background-color: #f7f7f7; padding-right: 0px; padding-left: 0px;">
                    <div class="progress progress_2" style="height: 18%;">
                      <div class="progress-bar background_green_grafico" role="progressbar" style="width: 65%;"
                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="135"></div>
                      <div class="progress-bar background_red_grafico" role="progressbar" style="width: 65%;"
                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="135"></div>
                    </div>
                    <span class="color_black_grafico background_grey_grafico_span span_counter_2">
                      <b class="font_size_32">65/125</b>
                      <br>
                      <b class="font_size_18">chiamate</b>
                    </span>
                  </div>
                  <div class="col-12 mt-1 d-flex">
                    <span class="d-flex">
                      <i class="fa fa-thumbs-up fa-lg mt_mb_auto mr-2" style="color: green;"></i>
                      <p class="card-text mt_mb_auto font_size_24" style="margin-left: 0.5rem;"><b
                          style="color: green;">18</b></p>
                    </span>
                    <span class="d-flex" style="margin-left: auto;">
                      <i class="fa fa-thumbs-down fa-lg mt_mb_auto mr-2" style="color: red;"></i>
                      <p class="card-text mt_mb_auto font_size_24" style="margin-left: 0.5rem;"><b
                          style="color: red;">07</b></p>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-3 mt-2 mt-lg-0">
            <div class="card" style="border: 1px solid #b7d0d5;">
              <div class="card-body">
                <div class="row mt-4 mb-4" style="padding-right: 1rem; padding-left: 1rem;">
                  <div class="col-12 mt-1">
                    <p class="card-text font_size_16" style="margin-bottom: 0px; text-align: center;">Adalberto Calassi
                    </p>
                  </div>
                  <div class="col-12 mt-2"
                    style="min-height: 175px; position: relative; background-color: #f7f7f7; padding-right: 0px; padding-left: 0px;">
                    <div class="progress progress_2" style="height: 18%;">
                      <div class="progress-bar background_green_grafico" role="progressbar" style="width: 65%;"
                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="135"></div>
                      <div class="progress-bar background_red_grafico" role="progressbar" style="width: 65%;"
                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="135"></div>
                    </div>
                    <span class="color_black_grafico background_grey_grafico_span span_counter_2">
                      <b class="font_size_32">65/125</b>
                      <br>
                      <b class="font_size_18">chiamate</b>
                    </span>
                  </div>
                  <div class="col-12 mt-1 d-flex">
                    <span class="d-flex">
                      <i class="fa fa-thumbs-up fa-lg mt_mb_auto mr-2" style="color: green;"></i>
                      <p class="card-text mt_mb_auto font_size_24" style="margin-left: 0.5rem;"><b
                          style="color: green;">18</b></p>
                    </span>
                    <span class="d-flex" style="margin-left: auto;">
                      <i class="fa fa-thumbs-down fa-lg mt_mb_auto mr-2" style="color: red;"></i>
                      <p class="card-text mt_mb_auto font_size_24" style="margin-left: 0.5rem;"><b
                          style="color: red;">07</b></p>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-3 mt-2 mt-lg-0">
            <div class="card" style="border: 1px solid #b7d0d5;">
              <div class="card-body">
                <div class="row mt-4 mb-4" style="padding-right: 1rem; padding-left: 1rem;">
                  <div class="col-12 mt-1">
                    <p class="card-text font_size_16" style="margin-bottom: 0px; text-align: center;">Adalberto Calassi
                    </p>
                  </div>
                  <div class="col-12 mt-2"
                    style="min-height: 175px; position: relative; background-color: #f7f7f7; padding-right: 0px; padding-left: 0px;">
                    <div class="progress progress_2" style="height: 18%;">
                      <div class="progress-bar background_green_grafico" role="progressbar" style="width: 65%;"
                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="135"></div>
                      <div class="progress-bar background_red_grafico" role="progressbar" style="width: 65%;"
                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="135"></div>
                    </div>
                    <span class="color_black_grafico background_grey_grafico_span span_counter_2">
                      <b class="font_size_32">65/125</b>
                      <br>
                      <b class="font_size_18">chiamate</b>
                    </span>
                  </div>
                  <div class="col-12 mt-1 d-flex">
                    <span class="d-flex">
                      <i class="fa fa-thumbs-up fa-lg mt_mb_auto mr-2" style="color: green;"></i>
                      <p class="card-text mt_mb_auto font_size_24" style="margin-left: 0.5rem;"><b
                          style="color: green;">18</b></p>
                    </span>
                    <span class="d-flex" style="margin-left: auto;">
                      <i class="fa fa-thumbs-down fa-lg mt_mb_auto mr-2" style="color: red;"></i>
                      <p class="card-text mt_mb_auto font_size_24" style="margin-left: 0.5rem;"><b
                          style="color: red;">07</b></p>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-3 mt-2 mt-lg-0">
            <div class="card" style="border: 1px solid #b7d0d5;">
              <div class="card-body">
                <div class="row mt-4 mb-4" style="padding-right: 1rem; padding-left: 1rem;">
                  <div class="col-12 mt-1">
                    <p class="card-text font_size_16" style="margin-bottom: 0px; text-align: center;">Adalberto Calassi
                    </p>
                  </div>
                  <div class="col-12 mt-2"
                    style="min-height: 175px; position: relative; background-color: #f7f7f7; padding-right: 0px; padding-left: 0px;">
                    <div class="progress progress_2" style="height: 18%;">
                      <div class="progress-bar background_green_grafico" role="progressbar" style="width: 65%;"
                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="135"></div>
                      <div class="progress-bar background_red_grafico" role="progressbar" style="width: 65%;"
                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="135"></div>
                    </div>
                    <span class="color_black_grafico background_grey_grafico_span span_counter_2">
                      <b class="font_size_32">65/125</b>
                      <br>
                      <b class="font_size_18">chiamate</b>
                    </span>
                  </div>
                  <div class="col-12 mt-1 d-flex">
                    <span class="d-flex">
                      <i class="fa fa-thumbs-up fa-lg mt_mb_auto mr-2" style="color: green;"></i>
                      <p class="card-text mt_mb_auto font_size_24" style="margin-left: 0.5rem;"><b
                          style="color: green;">18</b></p>
                    </span>
                    <span class="d-flex" style="margin-left: auto;">
                      <i class="fa fa-thumbs-down fa-lg mt_mb_auto mr-2" style="color: red;"></i>
                      <p class="card-text mt_mb_auto font_size_24" style="margin-left: 0.5rem;"><b
                          style="color: red;">07</b></p>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-2 mb-4">
          <div class="col-12 d-flex">
            <span class="mx-auto">
              <button class="btn tasto_carica_altri"><b>Carica altri</b> <i class="fa fa-refresh"
                  style="margin-left: 0.5rem;"></i></button>
            </span>
          </div>
        </div>
      </div>
      <?php include_once 'inc/navbar_vuota.inc.php'; ?>
      <!-- /content area -->

      <!--MODALI-->
      <?php include_once 'modali/modale_nuovo_evento.php'; ?>
    </div>
    <!-- /main content -->
  </div>
  <!-- /page content -->

  <script type="text/javascript">
  $(document).ready(function() {});

  window.onload = resize;
  window.onresize = resize;

  function resize() {
    google.charts.load('current', {
      packages: ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);
  }

  function drawChart() {
    // Set Data
    var data = google.visualization.arrayToDataTable([
      ['Month', 'Percantage'],
      ['Gen', 40],
      ['Feb', 45],
      ['Mar', 60],
      ['Apr', 55],
      ['Mag', 52],
      ['Giu', 55],
      ['Lug', 40],
      ['Set', 45],
      ['Ott', 60],
      ['Nov', 55],
      ['Dic', 52]
    ]);

    var options = {
      title: '',
      hAxis: {
        title: 'Months'
      },
      vAxis: {
        title: ''
      },
      legend: 'none'
    };

    var chart = new google.visualization.LineChart(document.getElementById('myChart'));
    chart.draw(data, options);
  }
  </script>
  <?php include_once 'inc/footer.inc.php'; ?>
</body>

</html>
<?
	require_once('inc/endPage.php');
?>