<?php
require_once('bdd_connexion.php');
session_start();

if (isset($_SESSION['user_id']) == false) 
	$_SESSION['user_id'] = -1;

if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == -1)
    header('Location: index.php');

if (isset($_SESSION['user_id']) && $_SESSION['user_id'] != -1) {
	$get_line = $bdd->query('SELECT first_name, last_name, username, email_address, password FROM users WHERE id="' . $_SESSION['user_id'] . '"');
	$data = $get_line->fetch();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="css/profil.css"/>
    <title>Profil</title>
</head>
<body>
	
<?php require_once('user_session.php'); ?>

<form method="POST" action="">
	<h1 class="title">Mon profil</h1>
<table>
	<tr>
		<td>
			<label for="nom" style="color: #262626;">Nom</label>
		</td>
		<td>
			<input class="op" type="text" name="nom" id="nom" size="40" readonly value="<?php if (isset($data)) {echo $data['last_name'];} ?>">
		</td>
		<td>
			<label class="spacing" for="prenom">Prenom</label>
		</td>
		<td>
			<input class="op" type="text" name="Prenom" id="Prenom" size="30" readonly value="<?php if (isset($data)) {echo $data['first_name'];} ?>">
		</td>
	</tr>
	<tr>
		<td>
			<label for="pseudo">Utilisateur</label>
		</td>

		<td>
			<input class="op" type="text" name="pseudo" id="pseudo" size="40" readonly value="<?php if (isset($data)) {echo $data['username'];} ?>">
		</td>

		<td>
			<label class="spacing" for="mail">Email</label>
		</td>

		<td>
			<input class="op" type="Email" name="mail" id="mail" size="60" readonly value="<?php if (isset($data)) {echo $data['email_address'];} ?>">
		</td>
	</tr>
	<tr>
		<td>
			<label for="pass">Mot de passe </label>
		</td>

		<td>
			<input class="op" type="password" name="pass" id="pass" size="30" readonly value="<?php if (isset($data)) {echo $data['password'];} ?>">
		</td>	
	</tr>
</table>
</form>

</body>
</html>