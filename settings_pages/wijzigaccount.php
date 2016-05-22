<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wijzig account</title>
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
    <h1 id="instellingen">Wijzig account</h1>
</div>

<!-- wijzig account formulier -->
<!-- dient om database te UPDATEN! -->
<section>
    <form action="" method="post">
        <div id="avatarCont">
            <!-- grijze BG en BG afbeeldingen moeten na upload vervangen worden door geuploade foto!! -->
            <label id="labelAvatar" for="avatar"></label>
            <input type="file" id="avatar" name="avatar">
        </div>
        <!-- placeholder moet de huidige gebruikersnaam worden vd gebruiker -->
        <input type="text" id="username" name="username" placeholder="Gebruikersnaam">
        <!-- placeholder moet het huidige e-mailadres worden vd gebruiker -->
        <input type="email" id="email" name="email" placeholder="E-mailadres">
    </form>
    <div id="wijzigAlles">
        <a class="wijzigLink" href="../settings_pages/wijzigwachtwoord.php">
            <p class="wijzig">Wijzig wachtwoord</p>
            <img class="next" src="../images/nextIcon.png" alt="">
        </a>
        <a class="wijzigLink" href="../settings_pages/verwijderprofiel.php">
            <p class="wijzig">Verwijder profiel</p>
            <img class="next" src="../images/nextIcon.png" alt="">
        </a>
    </div>
</section>

</body>
</html>