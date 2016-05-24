<?php
    session_start();
    $_SESSION['loggedin'] = $_GET['artid'];
    include_once("classes/article.class.php");
    $art = new article();
    $arts = $art->getarticleid();


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- de titel van de post waarop geklikt is -->
    <title>De échte reden waarom DIW geen aprilgrap maakte</title>
    <link rel="stylesheet" href="css/article.css">
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
            <img id="shareBtn" src="images/shareIcon.png" alt="Delen knop">
        </a>
    </header>
</div>

<!-- artikel -->

<section>
    <?php foreach ($arts as $art): ?>
    <div id="top">
        <img id="fotoArtikel" src="images/ArticlePictures/<?php echo $art['photo'] ?>" alt="">

            <h1 id="titelArtikel"><?php echo $art['titel'] ?></h1>

    </div>

    <div>
        <h1 id="categorieKlein"><?php echo $art['categorie'] ?></h1>
    </div>

    <div id="infoCont">
        <img id="avatar" src="images/logo2.png" alt="">
        <!-- moet gebruikersnaam worden -->
        <p id="gebruikersnaam">DIW</p>
        <img id="checkIcon" src="images/checkIcon.png" alt="">
    </div>

    <div>
        <p id="datum">Geschreven op <?php echo $art['pdate'] ?></p>
    </div>

    <div>
        <p id="inleiding"><?php echo $art['inleiding'] ?></p>
        <p id="paragraaf"><?php echo $art['paragraaf'] ?></p>
    </div>
    <?php endforeach; ?>
    <div id="commentEnLikeCont">
        <img id="comment" src="images/commentIcon.png" alt="Commentaar icoon">
        <!-- hier moet het aantal comments komen -->
        <p id="aantalComments">6</p>
            <form action="" method="post">
                <input type="text" id="schrijfComment" name="comment" placeholder="Schrijf een reactie">
            </form>
        <img id="like" src="images/likeIcon.png" alt="Like icoon">
        <p id="aantalLikes">22</p>
        <a href="">
            <img id="report" src="images/reportIcon.png" alt="">
        </a>
    </div>

    <!-- reactieveld gebruiker 1 (Miles) -->
    <div id="commentEnLikeCont2">
            <img id="avatar2" src="images/Miles.jpg" alt="Avatar gebruiker">
            <p id="gebruikersnaam">Miles</p>
            <p id="tijd">1u geleden</p>
    </div>
    <div>
        <p id="commentUser1">Ben ik de enige die na het lezen van dit artikel meteen een Kiekeboe-strip ben gaan lezen?</p>
    </div>
    <div id="commentEnLikeCont3">
        <img id="react" src="images/reactIcon.png" alt="">
        <img id="like2" src="images/likeIcon.png" alt="">
        <p id="aantalLikes2">8</p>
        <a href="">
            <img id="report2" src="images/reportIcon.png" alt="">
        </a>
    </div>

    <!-- hetzelfde als hierboven, enkel verspringing naar rechts -->
    <div id="commentEnLikeCont4">
        <img id="avatar2" src="images/Miles.jpg" alt="Avatar gebruiker">
        <p id="gebruikersnaam">Miles</p>
        <p id="tijd">1u geleden</p>
    </div>
    <div>
        <p id="commentUser2">Ben ik de enige die na het lezen van dit artikel meteen een Kiekeboe-strip ben gaan lezen?</p>
    </div>
    <div id="commentEnLikeCont5">
        <img id="react" src="images/reactIcon.png" alt="">
        <img id="like2" src="images/likeIcon.png" alt="">
        <p id="aantalLikes2">8</p>
        <a href="">
            <img id="report2" src="images/reportIcon.png" alt="">
        </a>
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