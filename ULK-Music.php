<?php
	session_cache_limiter('none');
	session_start();

	$_SESSION['ProductPurchase'] = true;
?>

<!DOCTYPE html>
<html>
<head>
	<title> Daniel Ramey Designs - Unremarkable Left Knee </title>
    	<!--
		Author: Daniel Ramey
		Date Created: 2019
    	-->

	<meta name="description" content="Daniel Ramey Designs is a web presence reflecting the art and works of Daniel Ramey.
		It is an amalgam of sketches, computer graphics, and projects created over the past couple of years.
		Thank you for looking!" />

	<meta name="keywords" content="Daniel Ramey, art, graphics, web design, photoshop, illustrator, indesign, html, css" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="stylesheet" href="#">
	<link rel="stylesheet" href="icofont/icofont.min.css">
	
	<style>
		* {
			box-sizing: border-box;
			margin: 0;
			padding: 0;
		}
		
		@font-face {
			font-family: Roboto-Thin;
			src: url(./fonts/roboto/Roboto-Thin.ttf);
		}
		@font-face {
			font-family: Roboto-Light;
			src: url(./fonts/roboto/Roboto-Light.ttf);
		}
		@font-face {
			font-family: Roboto-Regular;
			src: url(./fonts/roboto/Roboto-Regular.ttf);
		}
		@font-face {
			font-family: Roboto-Medium;
			src: url(./fonts/roboto/Roboto-Medium.ttf);
		}
		@font-face {
			font-family: Roboto-Bold;
			src: url(./fonts/roboto/Roboto-Bold.ttf);
		}
		@font-face {
			font-family: Roboto-Black;
			src: url(./fonts/roboto/Roboto-Black.ttf);
		}
		
		main {
			overflow: hidden;
			width: 100vw;
		}
		
		header {
			align-items: flex-start;
			display: flex;
			flex-direction: row;
			font-family: Roboto-Bold;
			font-size: calc(0.6em + 0.75vw);
			justify-content: flex-end;
			margin-bottom: calc(5px + 2vw);
			padding: calc(5px + 2vw) calc(10px + 3vw) 0 calc(10px + 3vw);
			position: sticky;
			width: 100vw;
		}
		header img {
			width: calc(20px + 3vw);
		}
		header a {
			color: black;
			margin-left: 35px;
			text-decoration: none;
		}
		header a:first-of-type {
			margin-left: 0;
			margin-right: auto;
			width: 1px;
		}
		.menuIcon {
			font-size: calc(2em + 0.75vw);
			margin-top: -2%;
		}
		
		.pageNameBox {
			color: #29abe2; 
			font-family: Roboto-Regular;
			font-size: calc(.75em + 1vw);
			margin-bottom: calc(5px + 5vw);
			width: 100vw;
		}
		.pageNameBox h2 {
			padding: 0 calc(10px + 3vw) 0 calc(10px + 3vw);
		}
		.pageNameBox div {
			background-color: #d0539e;
			height: calc(5px + .5vw);
		}
		
		.musicPlayerBox {
			display: none;
			flex-direction: column;
			justify-content: center;
			height: 200px;
			margin-bottom: calc(5px + 5vw);			
			padding: 0 calc(5px + 12vw) 0 calc(5px + 12vw);			
			width: 100vw;
		}
		.musicPlayerBox div {
			height: 100%;
			width: 100%;
		}
		.musicPlayerBox div:first-of-type {
			background-color: #d0539e;
		}
		.musicPlayerBox div:last-of-type {
			background-color: #29abe2;			
		}
		
		.albumBox {
			display: grid;
			font-family: Roboto-Bold;
			font-size: calc(0.6em + 0.75vw);			
			grid-template-columns: auto auto;
			margin-bottom: calc(5px + 5vw);			
			width: 100vw;
		}
		.albumBox div {
			position: relative;
		}
		.albumBox .albumCover {
			height: 100%;
			object-fit: cover;
			width: 100%;
		}
		.albumBox .buttonBox {
			align-items: center;
			background-color: #29abe2;
			display: flex;
			flex-direction: column;
			height: 100%;
			justify-content: center;
			opacity: 0;
			position: absolute;
			transition: 300ms;
			width: 100%;
		}
		.albumBox .buttonBox a {
			border: solid white calc(5px + .15vw);
			color: white;
			padding: 10px;
			text-decoration: none;
		}
		.albumBox .buttonBox a:first-of-type {
			margin-bottom: calc(5px + 5vw);			
		}
		.albumBox .buttonBox:hover {
			opacity: .95;			
		}
		.albumBox .buttonBox form {
			text-align: center;
		}
		
		.kneeCommunityBox {
			color: #d0539e; 
			font-family: Roboto-Regular;
			font-size: calc(.75em + 1vw);			
			margin-bottom: calc(5px + 5vw);
			padding: calc(5px + 5vw) 0;
			transform:  translateX(-7vw);
			width: 114vw;
		}
		.kneeCommunityBox div {
			align-items: center;
			display: flex;
			flex-direction: row;
			justify-content: space-between;			
		}
		.kneeCommunityBox a {
			color: #d0539e; 
			text-decoration: none;
		}
		.kneeCommunityBox img {
			width: calc(100px + 15vw);
		}		
		
		.socialMediaBox {
			bottom: 0;
			display: none;
			flex-direction: column;
			font-size: calc(15px + 1.25vw);
			justify-content: flex-start;
			margin-bottom: calc(5px + 2vw);
			padding: 0 calc(10px + 3vw) calc(15px + 1.5vw) calc(10px + 3vw);
			position: fixed;
			right: 0;
		}
		.socialMediaBox a {
			color: #d0539e;
			margin-top: 20px;
			text-decoration: none;
		}
		
		.hideOnMobile {
			display: none;
		}
		
		@media only screen and (min-width: 480px) and (max-width: 767px) {
			.hideOnTablet {
				display: none;
			}
			
			.musicPlayerBox {
				flex-direction: row;
			}
		}
		@media only screen and (min-width: 768px) {
			.hideOnDesktop {
				display: none;
			}
			.showOnDesktop {
				display: block;
			}
			
			.musicPlayerBox {
				flex-direction: row;
			}
			
			.albumBox {
				grid-template-columns: auto auto auto;
			}
		}
	</style>
	
	<script src="#"></script>
	<script></script>
</head>

<body>
	<main>
		<header>
			<a id="logo" href="./ULK-Index.php"><img src="Logo-UnremarkableLeftKnee-01.png" /></a>
			<a class="hideOnMobile hideOnTablet showOnDesktop" href="#">Tour</a>
			<a class="hideOnMobile hideOnTablet showOnDesktop" href="./ULK-Music.php">Music</a>
			<a class="hideOnMobile hideOnTablet showOnDesktop" href="#">Video</a>
			<a class="hideOnMobile hideOnTablet showOnDesktop" href="#">Merch</a>
			<a class="hideOnMobile hideOnTablet showOnDesktop" href="#">Knees</a>
			<a class="menuIcon hideOnDesktop" href="#">&#9776;</a>			
		</header>
		
		<div class="pageNameBox">
			<h2>music</h2>
			<div></div>
		</div>
		
		<div class="musicPlayerBox">
			<div>&nbsp;</div>
			<div>&nbsp;</div>
		</div>
		
		<div class="albumBox">
			<div>
				<div class="buttonBox">
					<a href="#">play me</a>
					<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
						<p>word document &mdash; $15</p>
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="WMAZE45CKLHX8">
						<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
				</div>				
				<img class="albumCover" src="images/ULK-AlbumCover-HeftyGirl-01.jpg" />
			</div>
			<div>
				<div class="buttonBox">
					<a href="#">play me</a>
					<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
						<p>PDF &mdash; $16</p>
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="MDWTXNMKHVJBU">
						<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>					
				</div>
				<img class="albumCover" src="images/original/1919379_504813646365319_2240500365761625671_n.jpg" />	
			</div>
			<div>
				<div class="buttonBox">
					<a href="#">play me</a>
					<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
						<p>Image &mdash; $17</p>
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="ZHCPEZFCUY8RC">
						<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>					
				</div>
				<img class="albumCover" src="images/original/20799841_874419506071396_1548684492950382479_n.jpg" />	
			</div>
			<div>
				<div class="buttonBox">
					<a href="#">play me</a>
					<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
						<p>Zip File &mdash; $18</p>
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="HTVN8CFSB9DP8">
						<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>	
				</div>				
				<img class="albumCover" src="images/original/16831959_710238795822802_1322453607101079488_n.jpg" />	
			</div>
			<div>
				<div class="buttonBox">
					<a href="#">play me</a>
					<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
						<p>Audio &mdash; $19</p>
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="U6J3FZF378D2A">
						<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>					
				</div>				
				<img class="albumCover" src="images/original/12341440_497613380418679_404859079206342738_n.jpg" />	
			</div>
			<div>
				<img class="albumCover" src="images/original/17991972_767907600055921_4084042938847924989_n.jpg" />	
			</div>
			<div>
				<img class="albumCover" src="images/original/12295235_493497290830288_4320728739924271969_n.jpg" />	
			</div>
		</div>
		
		<div class="kneeCommunityBox">
			<div>
				<img src="Logo-UnremarkableLeftKnee-01.png" />
				<a href="#"><h2>...join the knees...</h2></a> 
				<img style="transform: rotateY(180deg);" src="Logo-UnremarkableLeftKnee-01.png" />	
			</div>
		</div>
		
		<div class="socialMediaBox">
			<a href="#"><i class="icofont-facebook"></i></a>
			<a href="#"><i class="icofont-instagram"></i></a>
			<a href="#"><i class="icofont-twitter"></i></a>
			<a href="#"><i class="icofont-youtube"></i></a>
			<a href="#"><i class="icofont-spotify"></i></a>			
		</div>
	</main>
</body>
</html>