<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Apotek Sederhana | Login</title>

	<!-- Custom fonts for this template-->
	<link href="<?php echo base_url('assets/admin/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
		type="text/css">
	<link
		href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">

	<!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/admin/') ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo base_url('assets/icon.png') ?>" type="image/x-icon">
    <style>
        .bg-login-image {
            background: url("<?php echo base_url('assets/img/as.png') ?>");
            background-repeat: no-repeat;
        }
    </style>

</head>

<body class="bg-gradient-primary">

	<div class="container">

		<!-- Outer Row -->
		<div class="row justify-content-center">
			<div class="col-xl-10 col-lg-12 col-md-9">
				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0">
						<div class="row">
							<div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
							<div class="col-lg-6">
								<div class="p-5">
									<div class="text-center">
										<h1 class="h4 text-gray-900 mb-4">Silahkan Login</h1>
									</div>
									<?php if ($this->session->flashdata('info')) : ?>
									<div class="alert alert-danger">
										<?php echo $this->session->flashdata('info'); ?>
									</div>
									<?php endif; ?>
									<?php echo validation_errors('  <div class="alert alert-danger">', '</div>'); ?>
									<form class="user" method="POST" action="<?php echo site_url('auth/login') ?>">
										<div class="form-group">
											<input name="username" type="text" class="form-control form-control-user"
												id="username" value="<?php  echo set_value('username') ?>"
                                                autocomplete="off" placeholder="Username">
										</div>
										<div class="form-group">
											<input name="password" type="password"
												value="<?php echo set_value('password') ?>"
												class="form-control form-control-user" id="password"
												placeholder="Kata Sandi">
										</div>
										<button type="submit" class="btn btn-primary btn-user btn-block">
											Login
										</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="<?php echo base_url('assets/admin/') ?>vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url('assets/admin/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?php echo base_url('assets/admin/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?php echo base_url('assets/admin/') ?>js/sb-admin-2.min.js"></script>

</body>

</html>
