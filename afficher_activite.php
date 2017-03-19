<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Meet'n sport</title>
  <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="/projet_tut/jquery-ui-1.12.1.custom/jquery-ui.css">

  <script src="script.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body>
<div class="menu">
        <nav>
            <ul>
                <li><a class="accueil" id="focus" href="accueil.php">Accueil</a></li>
                <li><a class="activites" href="activites.php">Les activités</a></li>
                <li><a class="messagerie" href="messagerie.php">Messagerie</a></li>
                <li><a class="forum" href="forum.php">Forum</a></li>
                <li><a class="membres" href="membres.php">Les membres</a></li>
                <li class="button"><a id="connexion">Connexion</a></li>    
                <li class="button" id="inscription"><a>Inscription</a></li>
            </ul>
        </nav>
    </div>
    <!--Image-->
    
    <img src="test.png" id="image_principale" alt="Image sport">
    <p id="titre">Meet'n sport</p>
    
 
        
    
    
    
  
    <div id="dialogConnexion" title="Basic dialog">
        <form class="form-container">
            <div class="form-title"><h2>Connexion</h2></div>
            <div class="form-title">Pseudo</div>
            <input class="form-field" type="text" name="firstname" /><br />
            <div class="form-title">Mot de passe</div>
            <input class="form-field" type="password" name="mdp" /><br />
            <div class="submit-container">
                <input class="submit-button" type="submit" value="Me connecter" />
            </div>
        </form>
    </div>
        <div id="dialogInscription" title="Basic dialog">
            <form class="form-container">
                <div class="form-title"><h2>Inscription</h2></div>
                <div class="form-title">Pseudo</div>
                <input class="form-field" type="text" name="firstname" /><br />
                <div class="form-title">Mot de passe</div>
                <input class="form-field" type="password" name="email" /><br />
                <div class="form-title">Conformation du mot de passe</div>
                <div class="form-title">Adresse mail</div>
                <input type="checkbox" id="condbox" class="zoneDeSaisie" />
                <a href="conditions.html" target="_blank">les conditions générales de vente.</a>
                <input class="form-field" type="text" name="mail" /><br />
                <div class="submit-container">

                    <input class="submit-button" type="submit" value="S'inscrire" />
                </div>
            </form>
        </div>
    
        <div id="cadre5">
        <h2 class="titrepartie">Titre de l'activité</h2>
            <div id="partie_1">
                <img src="images/badminton.jpg" id="image_activite" alt="Image inscrit">
                <h2>Liste des participants</h2>
                    <div class="carre2"></div>
                    <div class="carre2"></div>
                    <div class="carre2"></div>
                    <div class="carre2"></div>
                 
                
            
            </div>
            <div id="partie_2">
                <h3>Organisé par .......</h3>
                <p>Catégorie: futsal</p>
                <p>
                    <img src="images/hour.svg" class="picto" alt="Image horloge">
                </p>
                <p>
                    <img src="images/localisation.svg" class="picto" alt="Image localisation">
                </p>
                <p id="descriptif">L'activité aura lieu à tel endroit. Si vous voulez faire du co-voit etc... . Je m'occuppe de la réservation et du matériel.</p>
                
            
            </div>
            
            <input id="co2" type="submit" value="S'inscrire"/>
    </div>
    
       
     <script>

  $( function() {
    $( "#dialogConnexion" ).dialog({
      autoOpen: false,
        modal:true,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "drop",
        duration: 1000
      },
        position: {my: "top", at: "bottom", of: "#connexion"}
    });
      $('body').on('click', '.ui-widget-overlay', function(e){
  $('#dialogConnexion').dialog('close');
});
      
 $(".ui-widget-content").css("background-color", "transparent");
$(".ui-dialog").css("border", "0 none");
      $(".ui-dialog-titlebar").hide();
    $( "#connexion" ).on( "click", function() {
      $( "#dialogConnexion" ).dialog( "open" );
    });

    $( "#dialogInscription" ).dialog({
      autoOpen: false,
        modal:true,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "drop",
        duration: 1000
      },
        position: {my: "top", at: "bottom", of: "#inscription"}
    });
      $('body').on('click', '.ui-widget-overlay', function(e){
  $('#dialogInscription').dialog('close');
});
      
 $(".ui-widget-content").css("background-color", "transparent");
$(".ui-dialog").css("border", "0 none");
      $(".ui-dialog-titlebar").hide();
    $( "#inscription" ).on( "click", function() {
      $( "#dialogInscription" ).dialog( "open" );
    });
  } );
    </script>
    
    <!-- <footer>
        <ul>
            <li><a id="office" href="office">Back office</a></li>       
            <li><a id="legales" href="legales">Mentions légales</a></li>
            <li><a id="accessibilite" href="accessibilite">Accessibilité</a></li>
        </ul>
    
    </footer>-->
    
    </body>
</html>