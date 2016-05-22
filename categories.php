<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Categorieën</title>
    <link rel="stylesheet" href="css/categories.css">
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
    </header>
</div>

<!-- categorieën: formulier -->
<!-- moet niet gewoon naar index pagina gaan -->
<!-- moet naar aangepaste index gaan o.b.v. gekozen cat -->
<div id="formCont">
    <form id="formCategories" action="index.php">
        <button class="buttons" id="afleveringen" name="afleveringen" type="submit">
            <img class="images" id="afleveringenImg" src="images/catAfleveringen.png" alt="Afleveringen">
        </button>
        <button class="buttons" id="binnenland" name="binnenland" type="submit">
            <img class="images" id="binnenlandImg" src="images/catBinnenland.png" alt="Binnenland">
        </button>
        <button class="buttons" id="buitenland" name="buitenland" type="submit">
            <img class="images" id="buitenlandImg" src="images/catBuitenland.png" alt="Buitenland">
        </button>
        <button class="buttons" id="cultuur" name="cultuur" type="submit">
            <img class="images" id="cultuurImg" src="images/catCultuur.png" alt="Cultuur">
        </button>
        <button class="buttons" id="economie" name="economie" type="submit">
            <img class="images" id="economieImg" src="images/catEconomie.png" alt="Economie">
        </button>
        <button class="buttons" id="politiek" name="politiek" type="submit">
            <img class="images" id="politiekImg" src="images/catPolitiek.png" alt="Politiek">
        </button>
        <button class="buttons" id="sport" name="sport" type="submit">
            <img class="images" id="sportImg" src="images/catSport.png" alt="Sport">
        </button>
        <button class="buttons" id="technologie" name="technologie" type="submit">
            <img class="images" id="technologieImg" src="images/catTechnologie.png" alt="Technologie">
        </button>
        <button class="buttons" id="tvEnMedia" name="tvEnMedia" type="submit">
            <img class="images" id="tvEnMediaImg" src="images/catTvEnMedia.png" alt="TV en media">
        </button>
        <button class="buttons" id="wetenschap" name="wetenschap" type="submit">
            <img class="images" id="wetenschapImg" src="images/catWetenschap.png" alt="Wetenschap">
        </button>
    </form>
</div>


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