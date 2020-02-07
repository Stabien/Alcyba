<?php 
require_once('bdd_connexion.php'); 

if (isset($_POST['filter_radio']) && $_POST['filter_radio'] == 'all') {
	$get_line = $bdd->query('SELECT (*) INTO produits');
}
else if (isset($_POST['filter_radio']) && $_POST['filter_radio'] == 'club_value') {
	if (isset($_POST['club']) && $_POST['club'] == 'all') {
		$get_line = $bdd->query('SELECT (*) INTO produits WHERE club IS NOT NULL');
	}
	else if (isset($_POST['club']) && $_POST['club'] != NULL) {
		$get_line = $bdd->query('SELECT (*) INTO produits WHERE club = "'$_POST['club']'"');
	}
}
else if (isset($_POST['filter_radio']) && $_POST['filter_radio'] == 'nation_value') {
	if (isset($_POST['nation']) && $_POST['nation'] == 'all') {
		$get_line = $bdd->query('SELECT (*) INTO produits WHERE nation IS NOT NULL');
	}
	else if (isset($_POST['nation']) && $_POST['nation'] != NULL) {
		$get_line = $bdd->query('SELECT (*) INTO produits WHERE nation = "'$_POST['nation']'"');
	}
}

while ($data = $get_line->fetch()) {
	echo '<a href="#" class="article">
		<img src="' . $data['image'] . '">
		<p>' . $data['product_name'] . '</p>
		<span class="price">'. $data['price'] . '&nbsp;€</span>
	</a>';
}


?>