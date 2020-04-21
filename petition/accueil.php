<?php
include('session-verif.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Accueil</title>
    <meta charset="UTF-8"/>
    <meta name="author" content="Jules Ndanga ,Mouafo paul">
    <link rel="shortcut icon" href="images/icon.png"/>
    <link rel="stylesheet" href="css/styleMenu.css"/>
    <link rel="stylesheet" href="css/barmen.css">
    <link rel="stylesheet" href="css/bot.css">
    <link href="css/wb11_deejay.css" rel="stylesheet">
</head>
<body>
<div id="box1">
    <div id="creatpeti">
        <a href="Creatpetition.php"><img src="images/lacerpetition.jpg" alt="Lancer une petition" title="Lancer une petition"></a>

    </div>
    <div id="container">
        <div id="wb_Shape10" style="position:absolute;left:0px;top:125px;width:800px;height:50px;z-index:0;">
            <div id="Shape10"></div></div>
        <div id="wb_CssMenu1" style="position:absolute;left:0px;top:124px;width:488px;height:50px;z-index:1;">
            <ul>
                <li class="firstmain"><a class="active" href="./accueil.php" target="_self" title="accueil">Accueil</a>
                </li>
                <li class="menuP"><a href="accueil.php" target="_self" title="Petition">Pétition</a>
                    <ul class="submenu">
                        <li><a href="Creatpetition.php" target="_self" title="Lancer une pétition">Lancer une pétition</a></li>
                        <li><a href="#wb_Carousel1" target="_self" title="Tops pétitions">Tops pétitions</a></li>
                        <li><a href="#articles" target="_self" title="Listes pétition">Listes pétition</a></li>
                    </ul>
                </li>
                <li><a href="profile.php" target="_self" title="Profil">Profil</a>
                </li>
                <li><a href="contact2.php" target="_self" title="Contact">Contact</a>
                </li>
                <li><a href="decon.php"  target="_self" title="Deconnexion">Deconnexion</a>
                </li>
            </ul>
            <p id="username">Bienvenue <?php echo $_SESSION['pseudo']; ?></p>
        </div>
        <form name="SiteSearch1_form" id="SiteSearch1_form" onsubmit="return searchPage(features)">
            <input type="text" id="SiteSearch1" style="position:absolute;left:589px;top:138px;width:144px;height:23px;line-height:23px;z-index:2;" name="SiteSearch1" value="" spellcheck="false" placeholder="Rechercher"></form>
        <input type="button" id="Button1" onclick="searchPage();return false;" name="Go" value="ok" style="position:absolute;left:745px;top:138px;width:43px;height:24px;z-index:3;">
    </div>
</div>
<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="js/searchindex.js"></script>

    <h1>
        <span>N</span>
        <span>J</span>
        <span>&</span>
        <span>M</span>
        <span>P</span>
    </h1>
    <p class="description anim-typewriter">Ensemble,tout devient <span class="petition">possible!</span></p>


<div id="wb_Carousel1" style="position:absolute;left:0px;top:0px;width:970px;height:338px;z-index:14;overflow:hidden;position:relative;">
    <div id="Carousel1" style="position:absolute">
        <div class="frame frame-1">
            <div id="wb_Heading2" style="position:absolute;left:332px;top:144px;width:307px;height:36px;text-align:center;z-index:0;">
                <h1 id="Heading2">Portons tous du Nike</h1></div>
            <div id="wb_home" style="position:absolute;left:0px;top:0px;width:20px;height:20px;z-index:1;">
                <a id="home" style="visibility:hidden">&nbsp;</a>
            </div>
            <input type="submit" id="Button6" name="" value="En savoir plus" style="position:absolute;left:437px;top:235px;width:96px;height:25px;z-index:2;">
        </div>
        <div class="frame frame-2">
            <div id="wb_Heading3" style="position:absolute;left:1302px;top:144px;width:307px;height:36px;text-align:center;z-index:3;">
                <h1 id="Heading3">Roulons tous à vélo</h1></div>
            <input type="submit" id="Button4" name="" value="En savoir plus" style="position:absolute;left:1407px;top:229px;width:96px;height:25px;z-index:4;">
        </div>
        <div class="frame frame-3">
            <div id="wb_Heading1" style="position:absolute;left:2272px;top:144px;width:307px;height:36px;text-align:center;z-index:5;">
                <h1 id="Heading1">L'argent pour tous</h1></div>
            <input type="submit" id="Button5" name="" value="En savoir plus" style="position:absolute;left:2377px;top:206px;width:96px;height:25px;z-index:6;">
        </div>
        <div class="frame frame-4">
            <div id="wb_Heading4" style="position:absolute;left:3155px;top:168px;width:541px;height:36px;text-align:center;z-index:7;">
                <h1 id="Heading4">La coupe du monde au Cameroun</h1></div>
            <input type="submit" id="Button1" name="" value="En savoir plus" style="position:absolute;left:3347px;top:231px;width:96px;height:25px;z-index:8;">
        </div>
        <div class="frame frame-5">
            <div id="wb_Heading5" style="position:absolute;left:4212px;top:179px;width:307px;height:36px;text-align:center;z-index:9;">
                <h1 id="Heading5">Non,aux pesticides</h1></div>
            <input type="submit" id="Button2" name="" value="En savoir plus" style="position:absolute;left:4317px;top:223px;width:96px;height:25px;z-index:10;">
        </div>
        <div class="frame frame-6">
            <div id="wb_Heading6" style="position:absolute;left:5131px;top:168px;width:409px;height:36px;text-align:center;z-index:11;">
                <h1 id="Heading6">Netflix gratuit en Afrique</h1></div>
            <input type="submit" id="Button3" name="" value="En savoir plus" style="position:absolute;left:5287px;top:223px;width:96px;height:25px;z-index:12;">
        </div>
    </div>
    <div id="Carousel1_back" style="position:absolute;left:10px;top:45%;width:20px;height:30px;z-index:999"><a style="cursor:pointer"><img alt="Back" style="border-width:0" src="images/arrow-prev-white.png"></a></div>
    <div id="Carousel1_next" style="position:absolute;right:10px;top:45%;width:20px;height:30px;z-index:999"><a style="cursor:pointer"><img alt="Next" style="border-width:0" src="images/arrow-next-white.png"></a></div>
</div>
<div id="wb_LayoutGrid5">
    <div id="LayoutGrid5">
        <div class="row">
            <div class="col-1">
                <div id="wb_gallery" style="display:inline-block;width:100%;z-index:13;">
                    <a id="gallery" style="visibility:hidden">&nbsp;</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/wb.carousel.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/affix.min.js"></script>
<script>
    $("#wb_PageHeader").affix({offset:{top: $("#wb_PageHeader").offset().top}});
</script><script src="js/wb11_deejay.js"></script>



  <div id="articles">
    <div class="solo">
        <img src="images/imgpetition/minature1.jpeg">
        <h2>L'argent pour tous</h2>
        Je pense que <br>
        <u>tout le monde doit avoir un salaire</u> parce que...<br>
        <br>
        <a href="#" title="" style="color: darkgreen;" class="sa"><span class="sav">En savoir plus</span></a> </div>
    <div class="solo">
        <img src="images/imgpetition/minature2.jpeg">
        <h2>La coupe du monde au Cameroun</h2>
        Je suis d'avis que <u>la coupe du monde 2035</u> soit organisé par le Cameroun <br>
        Car...<br>
        <br>
        <a href="#" title="" style="color: darkgreen;" class="sa"><span class="sav">En savoir plus</span></a> </div>
    <div class="solo">
        <img src="images/imgpetition/minature3.jpeg">
        <h2>Non,aux pesticides</h2>
        <u>Je dit non,à tout ces insecticides</u>  <br>
        Car...<br>
        <br>
        <a href="#" title="" style="color: darkgreen;" class="sa"><span class="sav">En savoir plus</span></a> </div>
    <div class="solo">
        <img src="images/imgpetition/minature4.jpeg">
        <h2>Netflix gratuit en Afrique</h2>
        Les africains ne devraient pas <u>payer netflix</u><br>
        car...<br>
        <br>
        <a href="#" title="" style="color: darkgreen;" class="sa"><span class="sav">En savoir plus</span></a> </div>
      <div class="solo">
          <img src="images/imgpetition/minature5.png">
          <h2>Roulons tous à vélo</h2>
          Du nous devrions tous<u> rouler en vélo</u><br>
          car...<br>
          <br>
          <a href="#" title="" style="color: darkgreen;" class="sa"><span class="sav">En savoir plus</span></a> </div>
      <div class="solo">
          <img src="images/imgpetition/minature6.jpg">
          <h2>Portons tous du Nike</h2>
          Tout le monde devraient chausser du <u>Nike</u><br>
          car...<br>
          <br>
          <a href="#" title="" style="color: darkgreen;" class="sa"><span class="sav">En savoir plus</span></a> </div>
  </div>
<div>
<footer class="main-footer"><span>Copyright &copyNJ&MP - Tous droits réservés : 2018-2019</span><br>
    <span>nous contacter:</span>
    <a href="facebook.com/julesndanga"><img src="images/facebook.png" alt="lien facebook" title="notre page facebook" class="im"></a>
    <a href="twitter.com/julesndanga"><img src="images/twitter.png" alt="lien twitter" title="notre page twitter" class="im"></a>
    <a href="conditionUtilistion.php" class="conA">Conditions d'utilisation</a>
    <a href="Aide.php" class="conA">Aide</a>


    <div class="chat">
        <header class="chat-header">
            Chat Avec  NJ
            <span id="chat-header-msg-alert">0</span>
            <img src="images/croix.jpg" alt="Fermer" class="chat-header-closer">
        </header>

        <div class="chat-content">
            <div class="chat-content-msg"></div>
            <textarea class="chat-content-input" placeholder="Répondre?"></textarea>
        </div>
    </div>

    <script src="js/bot.js"></script>
</footer>

</div>
</body>
</html>