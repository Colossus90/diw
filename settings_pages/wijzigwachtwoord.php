<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wijzig wachtwoord</title>
    <link rel="stylesheet" href="../css/settings.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui">
</head>
<body>

<!-- blauwe menubalk boven -->
<div id="headerCont">
    <header id="header">
        <!-- voorlopig gaat close naar wijzigaccount.php -->
        <!-- close moet eig naar VORIGE pagina gaan -->
        <a href="../settings_pages/wijzigaccount.php">
            <img id="closeIcon" src="../images/closeIcon.png" alt="Sluit artikel">
        </a>
        <img id="logo" src="../images/logo.png" alt="Logo DIW - De Ideale Wereld">
        <!-- moet ervoor zorgen dat wijzigingen worden geupdated in db -->
        <a href="../settings_pages/wijzigaccount.php">
            <img id="checkIcon" src="../images/checkIcon2.png" alt="Sla wijzigingen op">
        </a>
    </header>
</div>

<div>
    <h1 id="instellingen">Wijzig wachtwoord</h1>
</div>

<section>
    <form action="" method="post">
        <input type="password" class="ww" id="Wachtwoord" name="wachtwoord" placeholder="Huidig wachtwoord">
        <input type="password" class="ww" id="WachtwoordNieuw" name="wachtwoordNieuw" placeholder="Nieuw wachtwoord">
        <input type="password" class="ww" id="WachtwoordHerhaal" name="wachtwoordHerhaal" placeholder="Herhaal nieuw wachtwoord">
        <input id="wijzigen" name="wijzig" type="submit" value="Wijzigen">
    </form>
</section>

</body>
</html>