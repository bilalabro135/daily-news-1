<?php 
	session_start();
	if (isset($_SESSION['user'])) {
		header("location:dashboard.php?msg=dashboard");
	}
	if (isset($_GET['msg']) && $_GET['msg'] == 'login-failed') {
		$message = "Login failed, Please check your email or password";
	}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Login</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="assets/img/newspaper logo.png" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Open+Sans:300,400,600,700"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['assets/css/fonts.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	
	<!-- CSS Files -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/azzara.min.css">
</head>
<body class="login">	
	<div class="wrapper wrapper-login">
		<div class="container container-login animated fadeIn">
			<div class="text-center">
				<h1>Sign in to Admin</h1>
				<img src="assets/img/newspaper logo.png" width="200px" class="mb-5 mt-3">
			</div>
			<?php if (isset($message)): ?>
				<p class="alert alert-danger"><?php echo $message;?></p>
			<?php endif ?>
			<form method="POST" action="functions.php">
				<div class="login-form">
					<div class="form-group form-floating-label">
						<input id="username" name="email" type="text" class="form-control input-border-bottom" required>
						<label for="username" class="placeholder">Email</label>
					</div>
					<div class="form-group form-floating-label">
						<input id="password" name="password" type="password" class="form-control input-border-bottom" required>
						<label for="password" class="placeholder">Password</label>
						<div class="show-password">
							<i class="flaticon-interface"></i>
						</div>
					</div>
					<div class="form-action mb-3">
						<button type="submit" name="submit_btn" value="login_btn" class="btn btn-primary btn-rounded btn-login">Login In</button>
					</div>
					<!-- <div class="login-account">
						<span class="msg">Don't have an account yet ?</span>
						<a href="#" id="show-signup" class="link">Sign Up</a>
					</div> -->
				</div>
			</form>
		</div>
	</div>
	<!-- <script src="assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>
	<script src="assets/js/ready.js"></script> -->
</body>
</html