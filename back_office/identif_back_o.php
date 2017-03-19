<?php /*
    include_once('../vendor/autoload.php');
    


$loader = new Twig_Loader_Filesystem('../templates');

$twig = new Twig_Environment($loader);

*/?> 

<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Meet'n sport</title>
  <link rel="stylesheet" href="../style.css">
      <link rel="stylesheet" href="/projet_tut/jquery-ui-1.12.1.custom/jquery-ui.css">

  <script src="script.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body>
 <img src="../test.png" id="image_principale" alt="Image sport">
    <p id="titre">Meet'n sport</p>
 <div>

        <form id="login" action=".php" method="post">
    
            <div class="par">Login:</div><input id="inp" type="text" name="login"/><br>
            <div class="par">Mot de passe:</div><input type="password" name="mdp"/><br><br>
            <input id="inp2" type="submit" value="Me connecter"/>
     
         </form>

</div>
    
</body>
</html>