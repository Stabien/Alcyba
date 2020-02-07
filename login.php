<?php
require_once('bdd_connexion.php');

if (isset($_SESSION['user_id']) && $_SESSION['user_id'] != -1)
    header('index.php');
if (isset($_POST['username'], $_POST['password'])) {
    $check_login = $bdd->prepare('SELECT COUNT(*) AS nb FROM users WHERE username = ? AND password = ?');
    $check_login->execute(array(htmlspecialchars($_POST['username']),htmlspecialchars($_POST['password'])));
    $row = $check_login->fetch();
    if ($row['nb'] != 0) {
        $get_id = $bdd->prepare('SELECT id FROM users WHERE username = ? AND password = ?');
        $get_id->execute(array(htmlspecialchars($_POST['username']), htmlspecialchars($_POST['password'])));
        session_start();
        $_SESSION['user_id'] = $get_id->fetch()[0];
        echo $_SESSION['user_id'];
        header('Location: index.php');
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/login.css"/>
    <title>Connexion</title>
</head>
<body>
    <?php require_once('user_session.php'); ?>
    <span id='centrer'>
        <p id='Entete'>Connexion</p>
        <?php
        if (isset($_POST['username'], $_POST['password'])) {
            if ($row['nb'] != 1)
                echo '<span id="fail_login">Mauvais nom d\'utilisateur et/ou mot de passe</span>';
        }
        else 
            echo '<br><br>';       
        ?>
        <form method="post" action="" onsubmit="return check_user_infos()">
            <label for="username" id='texte1'>Nom utilisateur</label><br><br>
            <input class="input" name="username" type="text" placeholder="Username" id="encadrer">
            <p class="erreur">Veuillez remplir ce champ</p>
            <label for="password" id='texte2'>Mot de passe</label><br><br>
            <input class="input" name="password" type="password" placeholder="Password" id="encadrer2">
            <br>
            <p class="erreur">Veuillez remplir ce champ</p>
            <input name='submit' value="Se connecter" type='submit' id='submit'>
            <br><br>
            <a href="sign_up.php">S'inscire</a>
        </form>
    </span>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/placeholder.js"></script>
    <script src="js/login_check_fields.js"></script>    
</body>
</html>