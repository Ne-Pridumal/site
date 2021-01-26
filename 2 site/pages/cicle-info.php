<?php
include '../head.php'
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
	<title>Document</title>
</head>
<body>
<div class = "pb-5" style="background: #F2F2F2">
	<div class="container pt-5 pb-5">
		<div class="row mt-5 pt-5 justify-content-around">
			<div class="third-text col-lg col-sm-12">
				<h1 class="mb-5" style="font-weight: bold">Feature that is amazing</h1>
				<p class="mb-4  pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet,
					consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
					magna aliqua.
				</p>
				<ul class="pl-0 pb-3" style="list-style: inside">
					<li class = "mb-4 list-groupe">Benefit of Feature</li>
					<li class = "mb-4 list-groupe">Benefit of Feature</li>
					<li class = "mb-4 list-groupe">Benefit of Feature</li>
				</ul>
				<button type="button" class="buy-button btn btn-warning mt-5 mb-5" style="min-width: 310px; min-height: 64px">Buy</button>
			</div>
			<div class="col-lg col-sm-12">
				<img class = "rounded" src="../images/image_8.png" alt="">
			</div>
		</div>
	</div>
</div>

<div class="pt-5 d-flex align-items-center">
	
	<div class="container">
		<h1 class="buy-head">Value Propositipon</h1>
		<table class="table table-bordered">
			<thead>
			<tr>
				<th scope="col">Value Name</th>
				<th scope="col">Property</th>
			</tr>
			</thead>
			<tbody>
			<tr class="container-fluid">
				<td class="col-4">Value Name</td>
				<td class="col-8">Property</td>
			</tr>
			<tr>
				<td>Value Name</td>
				<td>Property</td>
			</tr>
			<tr>
				<th colspan="2">Addinational Property</th>
			</tr>
			<tr>
				<td>Value Name</td>
				<td>Property</td>
			</tr>
			<tr>
				<td>Value Name</td>
				<td>Property</td>
			</tr>
			</tbody>
		</table>
	</div>
	
</div>


</body>
</html>