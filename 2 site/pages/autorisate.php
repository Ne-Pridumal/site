<?php
require_once '../vender/login.php';
include '../head.php';
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="../style.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src = '../script.js'></script>
	<title>Autorisate</title>
</head>
<body>
	<section class="container d-flex align-items-center justify-content-center" style="height: 100vh">
		<div style="width: 33%">
			<h1 class="list-groupe mb-5 text-center" style="border-bottom: black solid 0.5px; padding-bottom: 5px">Autorisate</h1>
			<form action="../vender/login.php" method="post">
				<div class="input-group input-group-lg mb-1">
					<input type="email" name="email" class="form-control" aria-describedby="inputGroup-sizing-sm" placeholder="email" style="border: black solid 1px" required>
				</div>
				<div class="input-group input-group-lg mb-4">
					<input type="text" name="password" class="form-control" aria-describedby="inputGroup-sizing-sm" placeholder="password" style="border: black solid 1px" required>
				</div>
				<button type="submit" class="container-fluid btn btn-dark mb-1" style="background: black;height: 48px">Autorisate</button>
				<?php write_line(); ?>
				<p class="text-center"><a href="register.php">Don't have an account?</a></p>
			</form>
		</div>
	</section>

</body>
</html>


<?php
include '../bottom/TradeBottom.php';
?>