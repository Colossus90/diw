<?php
include_once("../classes/user.class.php");
if(!empty($_POST)) {

    if(!empty($_POST['email']) && !empty($_POST['gebruikersnaam']) && !empty($_POST['wachtwoord']))
    {
        $user = new User();
        $user->Email = $_POST['email'];
        $user->Username = $_POST['gebruikersnaam'];
        $user->Password = $_POST['wachtwoord'];
        $user->register();

        header('location: login.php');
        $feedback = "Thank you for signing up!";
        echo $feedback;
    }
}
?>
dfdfdf

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registreren</title>
    <link rel="stylesheet" href="../css/register.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui">
</head>
<body>

<!-- blauwe menubalk boven -->
<div id="headerCont">
    <header id="header">
        <!-- voorlopig gaat close naar index.php -->
        <!-- close moet eig naar VORIGE pagina gaan -->
        <a href="../index.php">
            <img id="closeIcon" src="../images/closeIcon.png" alt="Sluit artikel">
        </a>
        <img id="logo" src="../images/logo.png" alt="Logo DIW - De Ideale Wereld">
        <!-- popup om te delen op facebook etc -->
    </header>
</div>

<!-- registeren -->
<div>
    <h1 id="registreren">Registreren</h1>
    <a id= "login" href="../settings_pages/login.php">Heb je al een account? Log in!</a>
</div>

<!-- facebook -->
<div id="fbCont">
    <a href="">
        <img id="fb" src="../images/fb.png" alt="">
    </a>
</div>

<p id="of">OF</p>

<!-- !! registratie formulier !! -->
<form id="registerForm" action="" method="post">
    <input class="register" type="text" id="gebruikersnaam" name="gebruikersnaam" placeholder="Gebruikersnaam">
    <input class="register" type="email" id="email" name="email" placeholder="E-mailadres">
    <input class="register" type="password" id="wachtwoord" name="wachtwoord" placeholder="Wachtwoord">
    <input class="register" type="password" id="herhaalWachtwoord" name="herhaalWachtwoord" placeholder="Herhaal wachtwoord">
    <input type="submit" value="Registreren" id="submit" name="submit">
</form>

<p id="accept">Door te registeren, ben ik het eens met de ellelange <a id="av" href="../settings_pages/algemenevoorwaarden.php">algemene voorwaarden</a> en
    <a id="pp" href="../settings_pages/privacypolicy.php">privacy policy </a>die ik niet ga lezen.</p>

</body>
</html>
















