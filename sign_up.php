<?php
require_once('bdd_connexion.php');

if (isset($_POST['L_name'], $_POST['F_name'], $_POST['username'], $_POST['email'], $_POST['password'])) {
	$check_username = $bdd->query('SELECT username FROM users WHERE username="' . htmlspecialchars(strtolower($_POST['username'])) . '"');
	$check_email_address = $bdd->query('SELECT email_address FROM users WHERE email_address="' . htmlspecialchars(strtolower($_POST['email'])) . '"');
	if (!$check_username->fetch() && !$check_email_address->fetch()) {
		$req = $bdd->prepare('INSERT INTO users (last_name, first_name, username, email_address, password) VALUES(?, ?, ?, ?, ?)');
		$req->execute(array(htmlspecialchars($_POST['L_name']), htmlspecialchars($_POST['F_name']), htmlspecialchars($_POST['username']), strtolower(htmlspecialchars($_POST['email'])), htmlspecialchars($_POST['password'])));
		header('Location: index.php');
	}
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="css/sign_up.css"/>
    <title>Inscription</title>
</head>

<body>
    <?php require_once('user_session.php'); ?>
    <div id='armoire'>
        <form id="login" onsubmit="return check_user_infos()" action="" method="post">
            <h1>Inscription</h1>
            <div id='partie1'>
            <label for="name">Nom</label>
                <input class="input" name="L_name" type="text" placeholder="Nom">
                <p>Please enter a valid name</p>
                <label for="username">Prenom</label>
                <input class="input" name="F_name" type="text" placeholder="Prénom">
                <p>Please enter a valid name</p>
                <label for="username">Nom d'utilisateur</label>
                <input class="input" name="username" type="text" placeholder="Nom d'utilisateur">
                <p>Please enter a valid username</p>
				<?php
				if (isset($_POST['L_name'], $_POST['F_name'], $_POST['username'], $_POST['email'], $_POST['password'])) {
					if ($check_username->fetch())
						echo '<span>This username is already taken</span>';
				}
				?>
                <label for="email">Adresse mail</label>
                <input class="input" name="email" type="text" placeholder="Email">
                <p>Please enter a valid email address</p>           
				<?php		
				if (isset($_POST['L_name'], $_POST['F_name'], $_POST['username'], $_POST['email'], $_POST['password'])) {
					if ($check_email_address->fetch())
						echo '<span>This email address is already taken</span>';
					}
				?>
                <label for="password">Mot de passe</label>
                <input class="input" name="password" type="password" placeholder="Mot de passe">
                <p>Please enter a valid password</p>
                <label for="password_confirmation">Confirmation du mot de passe</label>
                <input class="input" name="password_confirmation" type="password"
                    placeholder="comfirmer le mot de passe">
                <p>Please enter a valid password</p>
            </div>
            <input id="submit" type="submit" value="S'inscrire">
            <div id='bas'>
                <a href="login.php">Se connecter</a>
            </div>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/placeholder.js"></script>
    <script src="js/registration_check_fields.js"></script>
</body>

</html>