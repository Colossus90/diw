<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verwijder account</title>
    <link rel="stylesheet" href="../css/settings.css">
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
        <a href="">
            <img id="checkIcon" src="../images/checkIcon2.png" alt="Sla wijzigingen op">
        </a>
    </header>
</div>

<div>
    <h1 id="instellingen">Verwijder profiel</h1>
</div>

<div>
    <p id="vaarwel">We hebben samen mooie momenten beleefd. In een ideale wereld, bleef je bij ons. Ben je zeker? </p>
</div>

<section>
    <form action="../settings_pages/wijzigaccount.php" method="post">
        <input type="text" class="ww" id="username" name="username" placeholder="Gebruikersnaam">
        <input type="password" class="ww" id="Wachtwoord" name="wachtwoord" placeholder="Wachtwoord">
        <input id="verwijder" name="verwijder" type="submit" value="Verwijderen">
    </form>
</section>




</body>
</html>