<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="css/nos_produits.css"/>
    <title>Template</title>
</head>
<body>
	<?php require_once('user_session.php'); ?>
	<section>
		<h1>Nos Produits</h1>
		<div id="all_production">
			<a href="maillots.php" class="categorie">
				<img src="images/maillots/psg.jpg">
				<p>Nos maillots</p>
			</a>
			<a href="shorts.php" class="categorie">
				<img src="images/short.jpg">
				<p>Nos shorts</p>
			</a>
			<a href="chaussures.php" class="categorie">
				<img src="images/chaussure.jpg">
				<p>Nos chaussures</p>
			</a>
		</div>
	</section>
	<?php include('footer.php'); ?>
    <script src=js/menu_deroulant.js></script>
</body>
</html>