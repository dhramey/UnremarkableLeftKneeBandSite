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
			margin-bottom: 50px;
			padding: calc(5px + 2vw) calc(10px + 3vw) 0 calc(10px + 3vw);
			position: sticky;
			width: 100vw;
		}
		header img {
			width: calc(20px + 4vw);
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
		
		.musicPlayerBox {
			padding: calc(10px + 8vw) calc(10px + 3vw) 0 calc(10px + 3vw);
			position: fixed;
			width: calc(75px + 20vw);
		}
		.musicPlayerBox audio {
			border-radius: 10px;
			width: 100%;
		}
		
		.socialMediaBox {
			bottom: 0;
			display: flex;
			flex-direction: column;
			font-size: calc(15px + 1.25vw);
			justify-content: flex-start;
			padding: 0 calc(10px + 3vw) calc(15px + 1.5vw) calc(10px + 3vw);
			position: fixed;
			right: 0;
		}
		.socialMediaBox a {
			color: #d0539e;
			margin-top: 20px;
			text-decoration: none;
		}
		
		.titleBox {
			bottom: 0;
			left: 0;
			font-family: Roboto-Bold;
			font-size: calc(0.85em + 1.25vw);
			padding: 0 calc(10px + 3vw) calc(15px + 1.5vw) calc(10px + 3vw);
			position: fixed;
		}
		.titleBox h1 {
			color: #29abe2;
		}
		
		.coverImage {
			height: 100vh;
			position: fixed;
			top: 0;
			width: 100vw;
			z-index: -1;
		}
		.coverImage img {
			height: 100%;
			object-fit: cover;
			object-position:  100% 0%;
			width: 100%;
		}
		
		.hideOnMobile {
			display: none;
		}
		
		@media only screen and (min-width: 480px) and (max-width: 767px) {
			.hideOnTablet {
				display: none;
			}
		}
		@media only screen and (min-width: 768px) {
			.hideOnDesktop {
				display: none;
			}
			.showOnDesktop {
				display: block;
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
		
		<div class="musicPlayerBox hideOnMobile">
			<audio controls>
				<source src="06%20Memortum's%20Lullaby%20(online-audio-converter.com).mp3" type="audio/mpeg" />
			</audio>
		</div>
		
		<div class="socialMediaBox">
			<a href="#"><i class="icofont-facebook"></i></a>
			<a href="#"><i class="icofont-instagram"></i></a>
			<a href="#"><i class="icofont-twitter"></i></a>
			<a href="#"><i class="icofont-youtube"></i></a>
			<a href="#"><i class="icofont-spotify"></i></a>			
		</div>
		
		<div class="titleBox">
			<h1 class="hideOnMobile hideOnTablet showOnDesktop">unremarkable &nbsp; left &nbsp; knee</h1>
			<h1 class="hideOnDesktop">unremarkable <br/> left &nbsp; knee</h1>			
		</div>
		
		<div class="coverImage">
			<img src="images/ULK-MountainClimb-Background.jpg" />
		</div>
	</main>
</body>
</html>