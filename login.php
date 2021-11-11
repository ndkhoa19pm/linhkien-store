<!doctype html>
<html lang="en">

<head>
	<title>Đăng Nhập</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="public/login/css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(public/login/images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Đăng Nhập</h2>
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						<h3 class="mb-4 text-center">Bạn Đã Có Tài Khoản?</h3>
						<form action="processing/auth.php" method="POST" class="signin-form">
							<?php if (isset($_GET["error"])) { ?>
								<h5 class="mb-4 text-center" style="color:#fff;"><?= htmlspecialchars($_GET['error']); ?></h5>
							<?php	} ?>
							<div class="form-group">
								<input type="email" class="form-control" name="email" placeholder="Email">
							</div>
							<div class="form-group">
								<input id="password-field" type="password" name="password" class="form-control" placeholder="Password">
								<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
							</div>
							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
							</div>
							<div class="form-group d-md-flex">
								<div class="w-50">
									<label class="checkbox-wrap checkbox-primary">Remember Me
										<input type="checkbox" checked>
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div>
							</div>
						</form>
						<a href="index.php">
							<p class="w-100 text-center">&mdash; Quay Về &mdash;</p>
						</a>


					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="public/login/js/jquery.min.js"></script>
	<script src="public/login/js/popper.js"></script>
	<script src="public/login/js/bootstrap.min.js"></script>
	<script src="public/login/js/main.js"></script>

</body>

</html>