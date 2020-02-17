<?php

defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>Welcome to My First CodeIgniter Application.</title>
		<style type="text/css">
			::selection { background-color: #E19305; color: white; }
			::-moz-selection { background-color: #E13300; color: white; }
			body {
			background-color: #fff;
			margin: 40px;
			font: 13px/20px normal Helvetica, Arial, sans-serif;
			color: #4F5155;
			}
			a {
			color: #003399;
			background-color: transparent;
			font-weight: normal;
			}
			h1 {
			color: #ffffff;
			background-color: #8b30ea;
			border-bottom: 1px solid #D0D0D0;
			font-size: 19px;
			font-weight: normal;
			margin: 0 0 14px 0;
			padding: 14px 15px 10px 15px;
			}
			code {
			font-family: Consolas, Monaco, Courier New, Courier, monospace;
			font-size: 12px;
			background-color: #f9f9f9;
			border: 1px solid #D0D0D0;
			color: #002166;
			display: block;
			margin: 14px 0 14px 0;
			padding: 12px 10px 12px 10px;
			}
			#body {
			margin: 0 15px 0 15px;
			}
			p.footer {
			text-align: right;
			font-size: 11px;
			border-top: 1px solid #D0D0D0;
			line-height: 32px;
			padding: 0 10px 0 10px;
			margin: 20px 0 0 0;
			}
			#container {
			margin: 10px;
			border: 1px solid #D0D0D0;
			box-shadow: 0 0 8px #D0D0D0;
			float:left;
			}
			.gallery{ width:100%; float:left; }
			.gallery ul{ margin:0; padding:0; list-style-type:none;}
			.gallery ul li{ 
				padding:7px; 
				border:2px solid #ccc; 
				float:left;
				margin:10px 7px; 
				background:none; 
				width:auto; 
				height:auto;
			}
		</style>
	</head>

	<body>
		<div id="container">
			<h1>Welcome to My First CodeIgniter Application!</h1>
			
			<div id="body">
				<div class="gallery">
					<ul>
						<?php foreach($images as $img): ?>
							<li><img src="uploads/<?php echo $img['name']; ?>" /></li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</div>
	</body>
</html>
