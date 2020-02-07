<?php
require_once('bdd_connexion.php');

$get_line = $bdd->query('SELECT * FROM produits WHERE product_type = "chaussure"');

if (isset($_POST['filter_radio']) && $_POST['filter_radio'] == 'club_value') {
	if (isset($_POST['club']) && $_POST['club'] == 'all') {
		$get_line = $bdd->query('SELECT * FROM produits WHERE club IS NOT NULL AND product_type = "chaussure"');
	}
	else if (isset($_POST['club']) && $_POST['club'] != NULL) {
		$get_line = $bdd->query('SELECT * FROM produits WHERE club ="' . $_POST['club'] . '" AND product_type = "chaussure"');
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
	<h1 id="title_page">Nos Chaussures</h1>
	<div id="filter">
		<h1>Filtres</h1>
		<form method="post" action="" id="container_filters">
			<input type="radio" name="filter_radio" value="all" checked="checked" class="check_box"><label>Tout</label>
			<input type="radio" value="club_value" name="filter_radio" class="check_box"><label>Marque</label>
			<select name="club" value="all" id="select_club" disabled="disabled">
				<option value="all">Toutes les marques</option>
				<option value="nike">Nike</option>
				<option value="puma">Puma</option>
				<option value="adidas">Adidas</option>
				<option value="under_armour">Under Armour</option>
				<option value="new_balance">New Balance</option>
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