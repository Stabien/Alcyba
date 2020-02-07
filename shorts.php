<?php
require_once('bdd_connexion.php');

$get_line = $bdd->query('SELECT * FROM produits WHERE product_type = "short"');

if (isset($_POST['filter_radio']) && $_POST['filter_radio'] == 'club_value') {
	if (isset($_POST['club']) && $_POST['club'] == 'all') {
		$get_line = $bdd->query('SELECT * FROM produits WHERE club IS NOT NULL AND product_type = "short"');
	}
	else if (isset($_POST['club']) && $_POST['club'] != NULL) {
		$get_line = $bdd->query('SELECT * FROM produits WHERE club ="' . $_POST['club'] . '" AND product_type = "short"');
	}
}
else if (isset($_POST['filter_radio']) && $_POST['filter_radio'] == 'nation_value') {
	if (isset($_POST['nation']) && $_POST['nation'] == 'all') {
		$get_line = $bdd->query('SELECT * FROM produits WHERE nation IS NOT NULL AND product_type = "short"');
	}
	else if (isset($_POST['nation']) && $_POST['nation'] != NULL) {
		$get_line = $bdd->query('SELECT * FROM produits WHERE nation ="' . $_POST['nation'] . '" AND product_type = "short"');
	}
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="css/articles.css"/>
    <title>Template</title>
</head>
<body>
	<?php require_once('user_session.php'); ?>
	<h1 id="title_page">Nos Shorts</h1>
	<div id="filter">
		<h1>Filtres</h1>
		<form method="post" action="" id="container_filters">
			<input type="radio" name="filter_radio" value="all" checked="checked" class="check_box"><label>Tout</label>
			<input type="radio" value="club_value" name="filter_radio" class="check_box"><label>Club</label>
			<select name="club" value="all" id="select_club" disabled="disabled">
				<option value="all">Tous les clubs</option>
				<option value="psg">PSG</option>
				<option value="real">Real Madrid</option>
				<option value="juventus">Juventus Turin</option>
				<option value="arsenal">Arsenal</option>
				<option value="bayern">Bayern Munich</option>
				<option value="tottenham">Tottenham</option>
				<option value="man_united">Manchester United</option>
				<option value="chelsea">Chelsea</option>
				<option value="dortmund">Borussia Dortmund</option>
				<option value="roma">AS Roma</option>
				<option value="inter">Inter Milan</option>
				<option value="milan">AC Milan</option>
				<option value="city">Manchester City</option>
			</select>
			<input type="radio" value="nation_value" name="filter_radio" class="check_box"><label>Nation</label>
			<select name="nation" value="all" id="select_nation" disabled="disabled">
				<option value="all">Toutes les nations</option>
				<option value="angleterre">Angleterre</option>
				<option value="belgique">Belgique</option>
				<option value="bresil">Brésil</option>
				<option value="france">France</option>
				<option value="italie">Italie</option>
				<option value="portugal">Portugal</option>
			</select>
			<input type="submit" id="submit_filters" value="Appliquer les filtres">
		</form>
	</div>
	<section>
	<?php
		if (isset($get_line)) {
		  	$i = 0;
			while ($data = $get_line->fetch()) {
				if ($i == 0) 
					echo '<div class="line_production">';
				$product_id = $data['ID'];
				echo '<a href="commande.php?id=' . $product_id . '" class="article">
				<img src="' . $data['image'] . '">
				<p>' . $data['product_name'] . '</p>
				<span class="price">'. $data['price'] . '&nbsp;€</span>
				</a>';
				$i++;
				if ($i == 4 || $data == NULL) {
					echo '</div>';
					$i = 0;
				}
			}
		}
	?>
	</section>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="js/menu_deroulant.js"></script>
	<script src="js/check_select.js"></script>
</body>
</html>