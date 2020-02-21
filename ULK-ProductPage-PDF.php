<?php
	session_cache_limiter('none');
	session_start();

	if (!$_SESSION['ProductPurchase'] === true) {
		header("Location: ./ULK-Index.php");
		exit();
	}
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
		
		.productBox {
			align-items: center;
			display: flex;
			flex-direction: column;
			font-family: Roboto-Bold;
			font-size: calc(0.6em + 0.75vw);			
			justify-content: space-around;
			padding: calc(5px + 2vw) calc(10px + 3vw) 0 calc(10px + 3vw);			
		}
		.productBox div {
			display: flex;
			flex-direction: column;
		}
		.productBox a {
			border: solid #d0539e calc(5px + .15vw);
			color: #d0539e;
			margin-bottom: calc(5px + 10vw);			
			padding: 10px;
			text-decoration: none;
		}
		.productBox a:last-of-type {
			border: none;
			color: black;
			margin-bottom: 0;
			padding: 0;
			text-decoration: none;
		}
		.thankYouBox {
			color: #29abe2;
			font-family: Roboto-Black;
			font-size: calc(1em + 5vw);
			margin-bottom: calc(5px + 5vw);			
		}
		
		.hideOnMobile {
			display: none;
		}
		
		@media only screen and (min-width: 480px) and (max-width: 767px) {
			.hideOnTablet {
				display: none;
			}
			
			.productBox {
				flex-direction: row;			
			}
			.thankYouBox {
				margin-bottom: 0;			
			}			
		}
		@media only screen and (min-width: 768px) {
			.hideOnDesktop {
				display: none;
			}
			.showOnDesktop {
				display: block;
			}
			
			.productBox {
				flex-direction: row;			
			}
			.thankYouBox {
				margin-bottom: 0;			
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
			<h2>product page - pdf</h2>
			<div></div>
		</div>
		
		<div class="productBox">
			<div class="thankYouBox">Thank you <br/> for your <br/> purchase!</div>
			<div>
				<a href="ULK-DigitalProduct-PDF.pdf" download>download <br/> PDF</a>
				<a href="ULK-Music.php">...go back to the music!</a>				
			</div>
		</div>
	</main>
</body>
</html>