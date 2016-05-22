<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Schrijf een artikel</title>
    <link rel="stylesheet" href="css/post.css">
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
        <!-- POSTEN IN DATABASE!!! -->
        <!-- dan terug op home gesorteerd op meest recent -->
        <form action="index.php" method="post">
            <button type="submit" id="postBtn" name="post">
                <p id="postTekst">POST</p>
            </button>
        </form>
    </header>
</div>

<div>
    <h1 id="schrijfArtikel">Schrijf een artikel</h1>
</div>

<!-- post een artikel: formulier -->
<section>
    <form action="index.php" method="post">
        <!-- titel -->
        <input type="text" name="titel" id="titel" placeholder="Schrijf hier een titel">
        <!-- categorie -->
        <label for="categorie">Categorie</label>
        <select name="categorie" id="categorie">
            <option value="binnenland">
                Binnenland
            </option>
            <option value="buitenland">
                Buitenland
            </option>
            <option value="cultuur">
                Cultuur
            </option>
            <option value="economie">
                Economie
            </option>
            <option value="politiek">
                Politiek
            </option>
            <option value="sport">
                Sport
            </option>
            <option value="technologie">
                Technologie
            </option>
            <option value="tvEnMedia">
                TV en media
            </option>
            <option value="wetenschap">
                Wetenschap
            </option>
        </select>
        <!-- foto -->
        <label for="foto">Foto</label>
        <input type="file" id="foto" name="foto">
        <!-- inleiding -->
        <input type="text" name="inleiding" id="inleiding" placeholder="Schrijf hier een korte inleiding">
        <!-- paragraaf -->
        <input type="text" name="paragraaf" id="paragraaf" placeholder="Schrijf hier de inhoud van uw artikel">
        <input type="submit" name="post" id="post" value="POST">
    </form>
</section>

</body>
</html>