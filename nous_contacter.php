<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="css/nous_contacter.css"/>
    <title>Template</title>
</head>
<body>
	<?php require_once('user_session.php'); ?>
	<section>
		<h1>Pour nous contacter</h1>
		<div id=container_contact>
			<div id="infos">
				<h2>Infos Contact</h2>
				<ul>
					<li><img src="images/icon_address.png" class="icone"><p>Adresse : 18 avenue de meudon</p></li>
					<li><img src="images/icon_mail.png" class="icone"><p>Email : contact@alcyba.fr</p></li>
					<li><img src="images/icon_phone.png" class="icone"><p>Service client : 01 23 45 67 89</p></li>
					<li id="reseaux">
						<a href="#"><img src="images/icon_facebook.png" class="social"></a>
						<a href="#"><img src="images/icon_twitter.png" class="social"></a>
						<a href="#"><img src="images/icon_instagram.png" class="social"></a>
						<a href="#"><img src="images/icon_youtube.png" class="social"></a>
						<a href="#"><img src="images/icon_pinterest.png" class="social"></a>
					</li>
				</ul>
			</div>
			<div id="section_message">
				<form id="message" action="" method="post">
					<h2>Laissez-nous un message</h2>
					<div id="container_noms">
						<input id="nom" type="text" placeholder="Nom">
						<input id="prenom" type="text" placeholder="Prénom">
					</div>
					<input id="email" type="text" placeholder="Email">
					<textarea id="texte_message" type="text" placeholder="Votre message"></textarea>
					<input id="submit" type="submit" value="Envoyer">
				</form>
			</div>
		</div>
	</section>
	<?php include('footer.php'); ?>
	<script src="js/menu_deroulant.js"></script>
</body>
</html>