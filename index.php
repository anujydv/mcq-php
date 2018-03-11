<?php
session_start();
if(isset($_SESSION['unique_user_id'])){
            if(isset($_SESSION['status'])){
			header("Location:admin.php");
			exit;
            }
            else{
			header("Location:quiz.php");
			exit;
            }
        }
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login | Quiz</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form action="db/checklogin.php" target="_self" method="post" class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-51">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					<?php
					if(isset($_SESSION['flag'])){
					echo "<div class='warning' style='color:red; font-size:14px;'>";
					echo "<p>username or password incorrect</p>";
					echo "</div>";
					session_destroy();
					}
					?>
					<div class="container-login100-form-btn m-t-17">
						<Input type="submit" name="submit" value="Login" class="login100-form-btn">
					</div>

				</form>
			</div>
		</div>
	</div>
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>