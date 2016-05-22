<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DIW - De Ideale Wereld</title>
    <link rel="stylesheet" href="css/index.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui">
</head>
<body>


<!-- blauwe menubalk boven -->
<div id="headerCont">
    <header id="header">
        <img id="logo" src="images/logo.png" alt="Logo DIW - De Ideale Wereld">
        <a href="">
            <img id="sortBtn" src="images/sort.png" alt="Sorteren op - knop">
        </a>
    </header>
</div>


<!-- uitgelicht artikel -->
<section id="uitgelicht">
    <!-- link naar juiste artikel -->
        <a id="articleLink" href="article.php">
            <div>
            <!-- moet foto uit database worden -->
            <img id="fotoUitgelicht" src="images/uitgelichtFoto.png" alt="">
        </div>

        <div>
            <h1 id="categorie">Tv & media</h1>
        </div>

        <div id="uitgelichtTitels">
            <!-- moet titel worden dat getypt is in post -->
            <!-- moet categorie worden dat gekozen is in post -->
            <h1 id="titelUitgelicht">De échte reden waarom DIW geen aprilgrap maakte</h1>
        </div>
        </a>

    <div id="uitgelichtInfo">
        <!-- moet avatar worden van gebruiker -->
        <img id="avatar" src="images/logo2.png" alt="">
        <!-- moet gebruikersnaam worden -->
        <p id="gebruikersnaam">DIW</p>
        <img id="checkIcon" src="images/checkIcon.png" alt="">
        <!-- hartje ingekleurd als het geliked is door gebruiker -->
        <img id="like" src="images/likeIcon.png" alt="">
        <!-- aantal likes weergeven -->
        <p id="aantalLikes">55</p>
        <!-- tijdstip tonen van upload in database -->
        <p id="tijdstip">1u geleden</p>
    </div>
</section>



<!-- kleinere artikels -->
<section id="artikels">
        <a id="articleLink" href="article.php">
    <div>
        <h1 id="categorieKlein">Tv & media</h1>
    </div>

    <div id="artikelsHoofd">
        <h2 id="titelArtikel">Captain America kan ons redden van de socialisten</h2>
        <img id="fotoKlein" src="images/artikelFoto.png" alt="">
        <!-- moet categorie worden dat gekozen is in post -->
    </div>
        </a>

    <div id="artikelsInfo">
        <!-- moet avatar worden van gebruiker -->
        <img id="avatarKlein" src="images/logo2.png" alt="">
        <!-- moet gebruikersnaam worden -->
        <p id="gebruikersnaamKlein">DIW</p>
        <!-- hartje ingekleud als het geliked is door gebruiker -->
        <img id="likeKlein" src="images/likeIcon.png" alt="">
        <!-- aantal likes weergeven -->
        <p id="aantalLikesKlein">55</p>
        <!-- tijdstip tonen van upload in database -->
        <p id="tijdstipKlein">1u geleden</p>
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


<script src="js/menu.js"></script>
</body>
</html>