<?php
include_once("classes/loggedin.class.php")
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Instellingen</title>
    <link rel="stylesheet" href="css/settings.css">
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
        <a href="index.php">
            <img id="closeIcon" src="images/closeIcon.png" alt="Sluit artikel">
        </a>
        <img id="logo" src="images/logo.png" alt="Logo DIW - De Ideale Wereld">
        <!-- popup om te delen op facebook etc -->
        <a href="">
            <img id="checkIcon" src="images/checkIcon2.png" alt="Sla wijzigingen op">
        </a>
    </header>
</div>

<div>
    <h1 id="instellingen">Instellingen</h1>
</div>

<!-- als je ingelogd/geregistreerd bent, zie je dit! -->
<section>
    <div id="account" <?php echo $hidden ?>>
        <p id="accountSubtitel" class="subtitel">Account</p>
        <!-- username die ingelogd is -->
        <p id="welkom">Welkom, <?php echo $_SESSION['username'] ?></p>
        <a class="link" href="settings_pages/wijzigaccount.php">Wijzig account</a>
        <a class="link" href="settings_pages/logout.php">Log uit</a>
    </div>

    <div <?php echo $hidden2 ?>> <a class="link" href="settings_pages/register.php">Registreren</a></div>
    <div <?php echo $hidden2 ?>> <a class="link" href="settings_pages/login.php">Log In.</a></div>


    <div id="info">
        <p id="infoSubtitel" class="subtitel">Info</p>
        <a class="link" href="settings_pages/overDIW.php">Over DIW</a>
        <a class="link" href="settings_pages/algemenevoorwaarden.php">Algemene voorwaarden</a>
        <a class="link" href="settings_pages/privacypolicy.php">Privacy policy</a>
    </div>
    <div id="meldingen">
        <p id="meldingenSubtitel" class="subtitel">Meldingen</p>
        <a class="link" href="">Beheer berichtgeving</a>
    </div>
</section>


<!-- witte menubalk onder -->
<div id="footerCont">
    <footer id="footer">
        <a class="footerLink" href="index.php">
            <img id="homeIcon" class="footerIcon" src="images/homeIcon.png" alt="Knop: terugkeren naar home">
        </a>
        <a class="footerLink" href="categories.php">
            <img id="catIcon" class="footerIcon" src="images/catIcon.png" alt="Knop: categorieën pagina">
        </a>
        <a class="footerLink" href="post.php">
            <img id="postIcon" class="footerIcon" src="images/postIcon.png" alt="Knop: post een artikel">
        </a>
        <a class="footerLink" href="search.php">
            <img id="zoekIcon" class="footerIcon" src="images/zoekIcon.png" alt="Knop: zoekpagina">
        </a>
        <a class="footerLink" href="liked.php">
            <img id="likedIcon" class="footerIcon" src="images/likedIcon.png" alt="Knop: pagina gelikede artikels">
        </a>
        <a class="footerLink" href="settings.php">
            <img id="instIcon" class="footerIcon" src="images/instIcon.png" alt="Knop: instellingen">
        </a>
    </footer>
</div>

</body>
</html>