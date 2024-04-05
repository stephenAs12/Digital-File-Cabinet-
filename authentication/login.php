<?php
session_start();

if (!isset($_SESSION['user_id']) && !isset($_SESSION['user_email']) && !isset($_SESSION['user_role'])) {
?>

	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="../vendors/bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../vendors/font-awesome/css/font-awesome.css">
		<link rel="stylesheet" href="../assets/css/sty.css">
	</head>

	<body>
		<div class="container">

			<div class="screen">

				<div class="screen__content">
					<?php if (isset($_GET['error'])) { ?>
						<div class="alert alert-danger" role="alert">
							<?= htmlspecialchars($_GET['error']) ?>
						</div>
					<?php } ?>
					<form class="login" action="auth.php" method="post">

						<div class="login__field">
							<i class="login__icon fa fa-envelope"></i>
							<input type="email" name="email" value="<?php if (isset($_GET['email'])) echo (htmlspecialchars($_GET['email'])) ?>" id="exampleInputEmail1" aria-describedby="emailHelp" class="login__input" placeholder="Email">
						</div>
						<div class="login__field">
							<i class="login__icon fa fa-key"></i>
							<input type="password" class="login__input" name="password" id="exampleInputPassword1" placeholder="Password">
						</div>
						<div class="form-group col-md-12">
							<div class="input-group">
								<input type="text" id="ec_date_id" name="ec_date_name" class="form-control" minlength="8" maxlength="10" value="" required readonly hidden>
							</div>
						</div>
						<button class="button login__submit">
							<span class="button__text">Log In Now</span>
							<i class="button__icon fa fa-sign-in"></i>
						</button>
					</form>
					<div class="social-login">
						<h3 class="fa fa-hand-o-down"></h3>
						<div class="social-icons">
							<a href="request_forgot_password.php" class="social-login__icon"><i><u>forgot password</u></i></a>
						</div>
					</div>
				</div>
				<div class="screen__background">
					<!-- <span class="screen__background__shape screen__background__shape4"></span> -->
					<span class="screen__background__shape screen__background__shape3"></span>
					<span class="screen__background__shape screen__background__shape2"></span>
					<span class="screen__background__shape screen__background__shape1"></span>
				</div>
			</div>
		</div>



		<script src="../vendors/jquery/dist/jquery.min.js"></script>
		<script src="../assets/js/main.js"></script>
		<script src="../assets/table/js/jquery-3.5.1.js"></script>
		<script src="../assets/day/js/jquery.calendars.js"></script>
		<script src="../assets/day/js/jquery.calendars.ethiopian.js"></script>

		<script>
			var todayIn_jd = $.calendars.instance().today().toJD();
			var jd = parseFloat(todayIn_jd, 10);

			var date = $.calendars.instance('ethiopian').fromJD(jd);
			document.getElementById('ec_date_id').value = date;
		</script>
	</body>

	</html>

<?php
} else {

	if ($user_role == "Regional Admin") {
		header("Location: ../pages/Region/Regional admin/admin index.php");
	} elseif ($user_role == "zone Director") {
		header("Location: ../pages/Zone/ZoneTds/Dashboard.php");
	} elseif ($user_role == "Zone Admin") {
		header("Location: ../pages/Zone/zone_admin/zonehome.php");
	} elseif ($user_role == "Zone TDS expert") {
		header("Location: ../pages/Zone/ZoneTds/ZoneTdsDashboard.php");
	} elseif ($user_role == "Woreda Admin") {
		header("Location: ../pages/Woreda/Woreda Admin/woreda admin index.php");
	} elseif ($user_role == "Woreda TDS expert") {
		header("Location: ../pages/Woreda/Woreda Expert/woreda TDS expert index.php");
	} elseif ($user_first_login == "0") {
		header("Location: change password.php");
	} else {
		session_destroy();
		header("Location: login.php");
	}

	//    header("Location: index.php");
}
?>