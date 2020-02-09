<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Halaman Login</title>

	<!-- Icons -->
	<link href="<?= base_url('assets/js/plugins/nucleo/css/nucleo.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css')?>" rel="stylesheet">

	<!--  CSS -->
	<link type="text/css" href="<?= base_url('assets/css/argon-dashboard.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/sweetalert.css')?>" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url('assets/css/toaster.min.css') ?>">

	<script>let base_url = "<?= base_url(); ?>";</script>
</head>

<body>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4 col-12 mt-8">
			<div class="card">
				<div class="card-body">
					<h1 class="card-title text-center">Halaman Login</h5>
					<form action="" method="POST" id="loginForm">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<div class="input-group input-group-alternative mb-4">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ni ni-circle-08"></i></span>
										</div>
										<input class="form-control form-control-alternative" placeholder="Username"
											type="text" name="username" id="user">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<div class="input-group input-group-alternative mb-4">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ni ni-key-25"></i></span>
										</div>
										<input class="form-control form-control-alternative" placeholder="Password"
											type="password" name="password" id="pass">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<button class="btn btn-primary w-100" type="submit" id="btnLogin">LOGIN</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
</body>

<!-- Core -->
<script src="<?= base_url('assets/js/plugins/jquery/dist/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>

<!--  JS -->
<script src="<?= base_url('assets/js/argon-dashboard.min.js') ?>"></script>
<script src="<?= base_url('assets/js/sweetalert.js') ?>"></script>
<script src="<?= base_url('assets/js/toastr.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jController/CtrlSystem.js') ?>"></script>
<script>
	<?php
		if(!empty($scJav)){
			echo " </script><script src='".base_url('assets/js/jController/'.$scJav['file'])."'></script> ";
			echo " <script>".$scJav['controller']."</script>";
			echo " <script>".$scJav['init']."";
		}
	?>
</script>

</html>