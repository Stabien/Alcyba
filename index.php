<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="css/style.css"/>
    <title>Template</title>
</head>
<body>
	<?php require_once('user_session.php'); ?>
	<div id="container_banner">
		<div id="banner">
			<figure>
				<img src="images/stade_1.jpg">
				<img src="images/tifo_real.jpg">
				<img src="images/slide_3.jpg">
				<img src="images/stade_1.jpg">
			</figure>
		</div>
		<div id="overlay">
			<h1>Bienvenue sur ALCYBA ! </h1>
			<h2>Découvrez tous nos produits dès maintenant !</h2>
		</div>
	</div>
	<section>
		<a href="nos_produits.php" class="section">
			<img src="images/maillot_real.jpg">
			<h2>Nos Produits</h2>
		</a>
		<a href="about.php" class="section">
			<img src="images/qui.png">
			<h2>Qui sommes nous ?</h2>
		</a>
		<a href="partenaires.php" class="section">
			<img src="images/real.png">
			<h2>Nos partenaires</h2>
		</a>
		<a href="nous_contacter.php" class="section">
			<img src="images/icon_phone.png">
			<h2>Nous contacter</h2>
		</a>
	</section>
	<?php include('footer.php'); ?>
	<script src=js/menu_deroulant.js></script>
</body>
</html>