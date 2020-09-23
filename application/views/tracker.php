<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		body {
			color: #000;
			overflow-x: hidden;
			height: 100%;
			/* background-color: #8C9EFF; */
			background-color: #fff;
			background-repeat: no-repeat
		}

		input {
			box-shadow: 0 2px 12px 2px #ddd;
			font-size: 10;
		}

		/* .card {
			z-index: 0;
			background-color: #ECEFF1;
			padding-bottom: 20px;
			margin-top: 90px;
			margin-bottom: 90px;
			border-radius: 10px
		} */

		.top {
			padding-top: 40px;
			padding-left: 13% !important;
			padding-right: 13% !important
		}

		#progressbar {
			margin-bottom: 30px;
			overflow: hidden;
			color: #455A64;
			padding-left: 0px;
			margin-top: 30px
		}

		#progressbar li {
			list-style-type: none;
			font-size: 13px;
			width: 25%;
			float: left;
			position: relative;
			font-weight: 400
		}

		#progressbar .step0:before {
			font-family: FontAwesome;
			content: "\f10c";
			color: #fff
		}

		#progressbar li:before {
			width: 40px;
			height: 40px;
			line-height: 45px;
			display: block;
			font-size: 20px;
			background: #C5CAE9;
			border-radius: 50%;
			margin: auto;
			padding: 0px
		}

		#progressbar li:after {
			content: '';
			width: 100%;
			height: 12px;
			background: #C5CAE9;
			position: absolute;
			left: 0;
			top: 16px;
			z-index: -1
		}

		#progressbar li:last-child:after {
			border-top-right-radius: 10px;
			border-bottom-right-radius: 10px;
			position: absolute;
			left: -50%
		}

		#progressbar li:nth-child(2):after,
		#progressbar li:nth-child(3):after {
			left: -50%
		}

		#progressbar li:first-child:after {
			border-top-left-radius: 10px;
			border-bottom-left-radius: 10px;
			position: absolute;
			left: 50%
		}

		#progressbar li:last-child:after {
			border-top-right-radius: 10px;
			border-bottom-right-radius: 10px
		}

		#progressbar li:first-child:after {
			border-top-left-radius: 10px;
			border-bottom-left-radius: 10px
		}

		#progressbar li.active:before,
		#progressbar li.active:after {
			background: blue;
		}

		#progressbar li.active:before {
			font-family: FontAwesome;
			content: "\f00c"
		}

		.icon {
			width: 40px;
			height: 40px;
			margin-right: 15px
		}

		.icon-content {
			padding-bottom: 20px
		}


		.track_tbl td.track_dot {
			width: 80px;
			position: relative;
			padding: 0;
			text-align: center;
		}

		.track_tbl td.track_dot:after {
			content: "\f111";
			color: #A9A9A9;
			font-family: FontAwesome;
			position: absolute;
			margin-left: -5px;
			top: 11px;
		}

		.track_tbl td.track_dot span.track_line {
			background: #000;
			width: 1px;
			min-height: 50px;
			position: absolute;
			height: 101%;
		}

		.track_tbl tbody tr:first-child td.track_dot span.track_line {
			top: 30px;
			min-height: 25px;
		}

		.track_tbl tbody tr:last-child td.track_dot span.track_line {
			top: 0;
			min-height: 25px;
			height: 10%;
		}

		@media screen and (max-width: 992px) {
			.icon-content {
				width: 20%
			}
		}
	</style>
</head>

<body>
	<div class="container px-md-4 py-5 mx-auto">
		<div class="row justify-content-center">
			<div class="col-md-6 text-center mt-5">
				<form action="#">
					<div class="input-group py-5">
						<input type="text" class="form-control" placeholder="Please enter your tracking number.">
						<div class="input-group-append">
							<a href="#states" class="btn btn-secondary search">
								<i class="fa fa-search"></i>
							</a>
						</div>
				</form>
			</div>
		</div>
	</div>

	<div class="">
		<div class="row d-flex justify-content-between px-3 top">
			<div class="d-flex">
				<h5>ORDER <span class="text-primary font-weight-bold">#Y34XDHR</span></h5>
			</div>
			<div class="d-flex flex-column text-sm-right">
				<p class="mb-0">Expected Arrival <span>09/20/20</span></p>
			</div>
		</div> <!-- Add class 'active' to progress -->
		<div class="row d-flex justify-content-center">
			<div class="col-12">
				<ul id="progressbar" class="text-center">
					<li class="active step0"></li>
					<li class="active step0"></li>
					<li class="active step0"></li>
					<li class="step0"></li>
				</ul>
			</div>
		</div>
		<div class="row justify-content-between top">
			<div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/u1AzR7w.png">
				<div class="d-flex flex-column">
					<p class="font-weight-bold">Order<br>Processed</p>
				</div>
			</div>
			<div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/u1AzR7w.png">
				<div class="d-flex flex-column">
					<p class="font-weight-bold">Order<br>Shipped</p>
				</div>
			</div>
			<div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/TkPm63y.png">
				<div class="d-flex flex-column">
					<p class="font-weight-bold">On<br>Delivery</p>
				</div>
			</div>
			<div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/HdsziHP.png">
				<div class="d-flex flex-column">
					<p class="font-weight-bold">Order<br>Arrived</p>
				</div>
			</div>
		</div>
	</div>
	</div>


	<div class="p-4">
		<table class="table table-borderless track_tbl">
			<thead>
				<tr>
					<th class="text-right">Date/Time</th>
					<th></th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
				<tr class="active">
					<td class="text-right">09/20/2020 22:24:PM</td>
					<td class="track_dot">
						<span class="track_line"></span>
					</td>
					<td>
						<span>Drop Point Camiling-1</span><br>
						<span>City：CAMILING</span><br>
						<span>Delivered to Transfiguration</span><br>
					</td>
				</tr>
				<tr class="active">
					<td class="text-right">09/20/2020 22:24:PM</td>
					<td class="track_dot">
						<span class="track_line"></span>
					</td>
					<td>
						<span>Drop Point Camiling-1</span><br>
						<span>City：CAMILING</span><br>
						<span>Delivered to Transfiguration</span><br>
					</td>
				</tr>
				<tr class="active">
					<td class="text-right">09/20/2020 22:24:PM</td>
					<td class="track_dot">
						<span class="track_line"></span>
					</td>
					<td>
						<span>Drop Point Camiling-1</span><br>
						<span>City：CAMILING</span><br>
						<span>Delivered to Transfiguration</span><br>
					</td>
				</tr>
				<tr class="active">
					<td class="text-right">09/20/2020 22:24:PM</td>
					<td class="track_dot">
						<span class="track_line"></span>
					</td>
					<td>
						<span>Drop Point Camiling-1</span><br>
						<span>City：CAMILING</span><br>
						<span>Delivered to Transfiguration</span><br>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>
