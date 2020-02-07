<?php 
session_start();
require_once('bdd_connexion.php');

if (isset($_SESSION['user_id']) == false || $_SESSION['user_id'] == -1) {
    header('Location: login.php');
}
else {
    if (isset($_GET['id'])) {
        $get_line = $bdd->query('SELECT product_name, price, image FROM produits WHERE id="' . $_GET['id'] . '"');
    }
    $data = $get_line->fetch();
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/commande.css"/>
    <meta charset="utf-8"/>
    <title>Page Produit</title>
</head>

<body>
    <?php require_once('user_session.php'); ?>
    <form method='post' action='cartebancaire.php'>
        <div id="container_image">
            <img src="<?php echo $data['image']; ?>" id ='photo'>
            <h1 id="titre_commande"><?php echo $data['product_name']; ?></h1>
        </div>
        <div id="container_size_price">
            <div id="prix"><?php echo $data['price']; ?>€</div>
            <select id="selection">
                <option>XS</option>
                <option>S</option>
                <option>M</option>
                <option>L</option>
                <option>XL</option>
            </select>
        </div>
        <input type="submit" name="commander" value="Commander" id="commander">
    </form>
</body>


















</html>