<?php
include '../head.php';
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="../style.css">
	<title>Document</title>

</head>
<body>

	<section class="first-section d-flex align-items-center justify-content-center">
		<div class="content-main text-center">
			<h1 class="main-header mb-5">Value Proposition</h1>
			<p class="text-justify text-center m-auto" style="color: #fff; width: 440px">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
				eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			<button type="button" class="btn btn-warning mt-5 w-50" style="height: 64px; font: bold 18px/21px Roboto, sans-serif">Start free trial</button>
		</div>
		<div class="filter"></div>
	</section>


	<section class="second-section pt-5 pb-5">
		<div class="second-main">
		<h2 class="align-items-center mb-4">Your Best Value Proposition</h2>
		<p class="second-text text-center m-auto"  style="width: 60%">Lorem ipsum dolor sit amet, consectetur adipiscing elit, s
			ed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
		</div>
		<div class = "cards container mt-5 pt-5">
			<div class="row mt-5">
				<div class="col-lg-4 col-sm-12">
					<div class="card">
						<img class="card-img-top" src="../images/image_5.png" alt="Card image cap">
						<div class="card-body" style="background: #F2F2F2">
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
							<a class = "cards-link" href="#">Learn More</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-12">
					<div class="card">
						<img class="card-img-top" src="../images/image_6.png" alt="Card image cap">
						<div class="card-body" style="background: #F2F2F2">
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
							<a class = "cards-link" href="#">Learn More</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-12">
					<div class="card">
						<img class="card-img-top " src="../images/image_7.png" alt="Card image cap">
						<div class="card-body" style="background: #F2F2F2">
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
							<a class = "cards-link" href="#">Learn More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="third-section align-items-center container mt-5 pt-5 pb-5 mb-5">
		<div class="row mt-5 justify-content-around">
		<div class="third-text col-lg-5 col-sm-12 pt-4">
			<h5 style="font-weight: bold">Feature that is amazing</h5>
			<p class = "third-p pl-1 mt-4">Lorem ipsum dolor sit amet, consectetur
				adipiscing elit, sed do eiusmod tempor incididunt
				ut labore et dolore magna aliqua. Lorem ipsum dolor
				sit amet, consectetur adipiscing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.
				Lorem ipsum dolor sit amet, consectetur adipiscing elit,
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
			</p>
		</div>
			<img src="../images/image_8.png" alt="" class="rounded">
		</div>
	</section>
	
	
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src = '../script.js'></script>
</body>
</html>

<?php
include '../bottom/bottom.php';
include '../bottom/TradeBottom.php';
?>