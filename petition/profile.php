<?php
include('session-verif.php');
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="author" content="NJ"/>
    <link rel="stylesheet" href="css/ProfilStyle.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/menuVertical2.css" media="screen" />
    <meta name="author" content="Jules Ndnaga,Mouafo Paul" />
    <link rel="shortcut icon" href="images/icon.png"/>
    <title>Profile</title>
</head>
<body>
<header>
    <nav>
        <ul class="ul">
            <li class="menuP"><a href="accueil.php" class="a" target="_self" title="Petition">Accueil</a></li>
            <li class="li"><a href="Creatpetition.php" class="a" >Lancer une pétition</a></li>
            <li class="li"><a href="profile.php"  class="ap">Profil</a></li>
            <li class="li"><a href="contact2.php" class="a">Contact</a></li>
            <li class="li"><a href="decon.php" class="a">Deconnexion</a></li>
        </ul>
    </nav>
</header>
<br>
<br>
<br><br> <br><br><br><br><br><br>

<div class="frame">
    <div class="center">

        <div class="profile">
            <div class="image">
                <div class="circle-1"></div>
                <div class="circle-2"></div>
                <img src="images/costar.svg" width="70" height="70" alt="photo de profile" title="photo de profil">
            </div>

            <div class="name" title="nom"><?php echo $_SESSION['pseudo']; ?><a href="#" class="no" title="editer"><img class="edit2" src="images/edit.svg" title="editer"></a></div>
            <div class="job" title="email"><?php echo $_SESSION['email']; ?><a href="#" class="no" title="editer"><img class="edit2" src="images/edit.svg" title="editer"></a></div>

            <div class="actions">
                <button class="btn">Mes pétitions</button>
                <a href="Creatpetition.php" class="no"><button class="btn">Lancer une pétition</button></a>
            </div>
        </div>

        <div class="stats">
            <div class="box">
                <span class="value"><a href="#" class="no" title="editer"><img class="edit" src="images/edit.svg"></a></span>
                <span class="parameter">Changer d'image de profil</span>
            </div>
            <div class="box">
                <span class="value">6</span>
                <span class="parameter">Nombre de pétition lancer</span>
            </div>
            <div class="box">
                <span class="value">146</span>
                <span class="parameter">Follower</span>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br><br> <br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br>

<div>
    <footer class="main-footer"><span>Copyright &copyNJ&MP - Tous droits réservés : 2018-2019</span><br>
        <span>nous contacter:</span>
        <a href="facebook.com/julesndanga"><img src="images/facebook.png" alt="lien facebook" title="notre page facebook" class="im"></a>
        <a href="twitter.com/julesndanga"><img src="images/twitter.png" alt="lien twitter" title="notre page twitter" class="im"></a>
        <a href="conditionUtilistion.php" class="conA">Conditions d'utilisation</a>
        <a href="Aide.php" class="conA">Aide</a>

    </footer>

</div>



</body>
</html>
