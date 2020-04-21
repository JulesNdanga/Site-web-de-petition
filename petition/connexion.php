
<?php
 try
 {
 $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
 $bdd = new PDO('mysql:host=localhost;dbname=petition', 'root', '',
 $pdo_options);

 
 
if(isset($_POST['email'])){
    
    $uname=$_POST['email'];
    $password=$_POST['password'];
    $pseudo=$_POST['pseudo'];

    
    $result=$bdd->query("select * from inscription where email='".$uname."'AND password='".$password."' limit 1");
    $result = $result-> fetch();
    
    if($result){
        session_start();
        $_SESSION['email']=$uname;
        $_SESSION['password']=$password;
        $_SESSION['pseudo']=$pseudo;
        $_SESSION['logged']=true;

      header('Location: accueil.php');
        exit();
    }
    else{
         echo " <span style='font-size: 35px;margin-left: 18%'><span style='background-color: grey'>Mot de passe <span style='color: #840606;font-weight: bold;font-family: Tahoma'>$password</span> ou l'adresse  
 <span style='color: #840606;font-weight: bold;font-family: Tahoma'>$uname</span> est incorrecte</span>
 <span style='margin-left: 35%;background-color: grey'>revenir à la page de <a  href='connexion.php' style='color: #840606;font-weight: bold;font-family: Tahoma;background-color: dimgrey;text-decoration: none;'>connexion</a></span></span>";
        exit();
    }
        
}
}catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
?>

 



<!DOCTYPE html>
<html lang="fr" >

<head>
  <meta charset="UTF-8">
  <title>connexion</title>
      <meta name="author" content="Jules Ndnaga,Mouafo Paul" />
      <link rel="shortcut icon" href="images/icon.png"/>
      <link rel="stylesheet" href="css/styleConexR.css">
      <link rel="stylesheet" href="css/styleConexR2.css">
</head>

<body>
  <form method="post" action="">
  <label>Connexion</label>
  <svg width="200px" height="200px" viewBox="0 0 200 200" aria-labelledby="svg-title svg-desc">
    <title id="svg-title">Animation</title>
    <desc id="svg-desc">Animation interractive.</desc>
    <g id="ghost-body" fill="white" fill="#fff" stroke="#999" stroke-width="3" stroke-linejoin="round">
      <path d="M 54,181 C 44,131 13,11 99,11 185,12 164,110 150,182 146,195 139,185 137,177 134,170 126,169 124,179 120,192 114,190 109,179 105,167 98,166 94,179 92,185 85,193 79,179 74,170 68,168 66,179 62,193 56,191 54,181 Z" />
      <path id="eye-right" class="eye" fill="#ffffee" d="M 69,71 C 69,64 73,54 84,55 96,56 100,62 100,70 100,79 89,83 84,83 78,83 69,80 69,71 Z" />
      <path id="eye-left" class="eye" fill="#ffffee" d="M 105,73 C 104,66 108,57 120,57 130,57 134,65 134,71 134,80 125,85 119,85 114,85 105,82 105,73 Z" />
      <circle id="pupil-right" class="pupil" cx="84" cy="69" r="3" fill="rgba(0,0,0,0.25)" />
      <circle id="pupil-left" class="pupil" cx="120" cy="71" r="3" fill="rgba(0,0,0,0.25)" />
      <path id="mouth" d="M 75,115 C 79,120 91,126 101,125 110,125 126,118 127,114 125,117 117,125 101,125 85,126 79,117 75,115 Z" fill="#aa4040" stroke="#600" />
      <path id="ghost-arm-right" class="ghost-arm" d="M 45,89 C 25,92 9,108 11,124 13,141 27,115 48,119" />
      <path id="ghost-arm-left" class="ghost-arm" d="M 155,88 C 191,90 194,114 192,125 191,137 172,109 155,116" data-hover="M 155,88 C 145,68 105,51 103,62 102,74 123,117 155,116" style="animation-delay:-1s" />
    </g>
  </svg>
      <fieldset id="pseudo-field" class="with-placeholder">
          <legend>Pseudo</legend>
          <div>
              <input type="text" name="pseudo" id="pseudo"  autocomplete="on" autocorrect="off" autocapitalize="off" spellcheck="false" required/>
              <div class="placeholder">pseudo</div>
          </div>
      </fieldset>
  <fieldset id="email-field" class="with-placeholder">
    <legend>Email</legend>
    <div>
      <input type="email" name="email" id="email"  autocomplete="on" autocorrect="off" autocapitalize="off" spellcheck="false" required/>
      <div class="placeholder">example@gmail.com</div>
    </div>
  </fieldset>
  <fieldset id="password-field">
    <legend>Mot de passe</legend>
    <div>
      <input type="password" name="password" id="password"  autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" required />
    </div>
  </fieldset>
  <fieldset id="submit-field">
    <legend></legend>
    <div>
      <input type="submit" name="submit" id="submit" value="Connexion"/>
    </div>
    <br/><span>Pas encore incrit ? <a href="inscription.php"> Inscrivez-vous</a></span>
    <br/><span class="ou">OU</span>
    <br/><span>Mot de passe oublier ?<a href="#"> Restaurer</a></span>
  </fieldset>
</form>
  

    <script  src="js/connex.js"></script>

  


</body>

</html>
