<?
	require_once('inc/startPage.php');
?>
<!DOCTYPE html>
<html lang="it">
	<head>
	<?php include 'inc/head.inc.php'; ?>
	</head>
	<body>
		<!-- Page content -->
		<div class="page-content">
			<!-- Main content -->
			<div class="content-wrapper">
				<!-- Content area -->
				<div class="content d-flex justify-content-center align-items-center">
					<!-- Login card -->
					<form role="form" action="action/global/login.php" method="post" onSubmit="return validate()">
						<div class="card mb-0">
							<div class="card-body">
								<div class="text-center mb-3">
									<img class="mb-3" height="150" src="images/Logo.png" alt="">
									<h5 class="mb-0">Collegamento al gestionale</h5>
									<span class="d-block text-muted">Inserisci le credenziali di accesso</span>
								</div>
								<div class="input-group mb-3">
									<span class="input-group-text" id="basic-addon1"><i class="icon-user text-muted"></i></span>
									<input type="text" class="form-control" placeholder="Username" id="username" name="idu">
								</div>
								<div class="input-group mb-3">
									<span class="input-group-text" id="basic-addon1"><i class="icon-lock2 text-muted"></i></span>
									<input type="password" class="form-control" placeholder="Password" id="psw" name="idp" >
								</div>
								<div class="form-group">
									<label style="color:#C33" id="error" class="d-none"></label>
								</div>
								<div class="form-group d-none align-items-center">
									<div class="form-check mb-0">
										<label class="form-check-label">
											<input type="checkbox" name="remember" class="form-input-styled" checked data-fouc>
											Remember
										</label>
									</div>
									<a href="login_password_recover.html" class="ml-auto">Forgot password?</a>
								</div>
								<div class="form-group">
									<button type="submit" id="btnAccedi" class="btn btn-primary btn-block">Accedi <i class="icon-circle-right2 ml-2"></i></button>
								</div>
							</div>
						</div>
					</form>

					<script type="text/javascript">
						function validate(){
							var idu = $('#username').val();
							var idp = $('#psw').val();
							if (idu != "" && idp != "") {
								$("#btnAccedi").attr("disabled", "disabled");
								return true;
							}else{
								$('#error').html('Compilare entrambi i campi').removeClass('d-none').addClass('d-block');
								return false;
							}
						}
					</script>
					<!-- /login card -->
				</div>
				<!-- /content area -->
			</div>
			<!-- /main content -->
		</div>
		<!-- /page content -->
		<?
		if (isset($_GET['msg'])){?>
			<script type="text/javascript">
				$('#error').html('<?php echo addslashes(base64_decode($_GET['msg']))?>').removeClass('d-none').addClass('d-block');
			</script>
		<? } ?>
	</body>
</html>
<?
	require_once('inc/endPage.php');
?>
