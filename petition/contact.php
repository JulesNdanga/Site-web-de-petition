

<!Doctype html>
<html lang="fr">
    <head>
        <title>formulaire de Contact</title>
        <meta charset="utf-8"/>
        <meta name="author" content="Jules Ndanga,Mouafo Paul" />
        <link rel="shortcut icon" href="images/icon.png"/>
        <link rel="stylesheet" href="css/styleContact.css"/>
    </head>                  
    <body>
        <header>
        <nav>
            <ul class="menu">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="inscription.php">Inscription</a></li>
                    <li><a href="connexion.php">Connexion</a></li>
                    <li><a href="contact.php" class="active">Contact</a></li>
                    <li><a href="connexion.php">Creer une pétition</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <div class="front side">
            <div class="content">
                <h1>Contact</h1>
            </div>
        </div>
        <div class="back side">
                <div class="content">
            <h1>Nous contacter</h1>
            <br>
            <form  action="contact_post.php" method="post">
                <label for="pseudo">Nom :</label>
                <input type="text" placeholder="mettez votre nom" name="pseudo" id="pseudo">
                <label for="mail">E-mail :</label>
                <input type="mail" placeholder="exemple@gmail.com" name="mail" id="mail">
                <label for="message">Message :</label>
                <textarea placeholder="Votre message" name="message" id="message"></textarea>
                <input type="submit" value="Envoyer">
            </form>
           </div>
        </div>
    </div>

    <?php
    //connexion à la bd
    try{
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $bdd = new PDO('mysql:host=localhost;dbname=petition', 'root','',$pdo_options);
        }
        catch(Exception $e)
        {
            die('Erreur : ' .$e->getMessage());
        }
    ?>
    
    </body>
</html>