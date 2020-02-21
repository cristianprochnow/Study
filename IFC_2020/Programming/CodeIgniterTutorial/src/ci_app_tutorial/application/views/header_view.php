<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">

		<title>Create simple website using Codeigniter Trycatch classes</title>

		<!-- Latest compiled and minified CSS -->
		<link
			rel="stylesheet"
			href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"
		/>

		<!-- Latest compiled and minified Jquery library -->
		<script src='https://code.jquery.com/jquery-2.1.1.min.js'></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</head>

	<body>
		<div class="container">
			<div class="row clearfix">
				<div class="col-md-12 column">
					<nav class="navbar navbar-default" role="navigation">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

							<a class="navbar-brand" href="<?php echo base_url() ?>">CodeIgniter</a>
						</div>

						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="active">
									<a href="<?php echo base_url() ?>index.php/home">Home</a>
								</li>

								<li>
									<a href="<?php echo base_url() ?>index.php/home/portfolio">Portfolio</a>
								</li>

								<li>
									<a href="<?php echo base_url() ?>index.php/home/aboutUs">About us</a>
								</li>

								<li>
									<a href="<?php echo base_url() ?>index.php/home/contactUs">Contact us</a>
								</li>
							</ul>

							<ul class="nav navbar-nav pull-right">
								<li>
									<a href="http://facebook.com/webrocom.learn">
										<img style="height:17px;" src="https://cdn0.iconfinder.com/data/icons/small-n-flat/24/678128-social-facebook-32.png"/>
									</a>
								</li>

								<li>
									<a href="http://twitter.com/webrocom">
										<img style="height:17px;" src="https://cdn1.iconfinder.com/data/icons/logotypes/32/square-twitter-32.png"/>
									</a>
								</li>

								<li>
									<a href="https://plus.google.com/+WebrocomNetwebrocom/">
										<img style="height:17px;" src="https://cdn1.iconfinder.com/data/icons/logotypes/32/square-google-plus-32.png"/>
									</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
