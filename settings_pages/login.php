
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inloggen</title>
    <link rel="stylesheet" href="../css/login.css">
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

<!-- inloggen -->
<div>
    <h1 id="inloggen">Inloggen</h1>
    <a id= "login" href="../settings_pages/register.php">Nieuwe gebruiker? Registreer!</a>
</div>

<!-- !! inlog formulier !! -->
<form id="loginForm" action="" method="post">
    <input type="text" id="gebruikersnaam" name="gebruikersnaam" placeholder="Gebruikersnaam">
    <input type="password" id="wachtwoord" name="wachtwoord" placeholder="Wachtwoord">
    <input type="submit" value="Inloggen" id="submit" name="submit">
</form>

<div id="wwCont">
    <a id="wachtwoordVergeten" href="">Wachtwoord vergeten?</a>
</div>

</body>
</html>