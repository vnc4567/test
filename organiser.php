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
    


 
        


 
  <div id="login">  
    
      
  </div>
        
    
    
    <!--Menu-->
    
    <!--Cadre choix activités-->
    <div class="activités">
        <!--Photo-->
        <div class="visuel">
            <div class="cadre_activités">
                
            </div>
        </div>
    
    </div>
    <div id="dialogConnexion" title="Basic dialog">
        <form class="form-container">
            <div class="form-title"><h2>Connexion</h2></div>
            <div class="form-title">Pseudo</div>
            <input class="form-field" type="text" name="firstname" /><br/>
            <div class="form-title">Mot de passe</div>
            <input class="form-field" type="password" name="mdp" /><br/>
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
    <!--Organiser une activité-->
        <div class="cadre12">
            <h2 class="titrepartie">Organiser une activité</h2>
            <h3>Quoi</h3>
            <div id="a">
                <form id="recherche2" method="post" action="">
                
                <p>Sports</p> 
                    <select name="Tous les sports">
                        <option value="Accrobranche">Accrobranche</option>  Sports de combat  jogging
                        <option value="Alpinisme">Alpinisme</option>
                        <option value="Athlétisme">Athlétisme</option>
                        <option value="Aviron">Aviron</option>
                        <option value="Babyfoot">Baby foot</option>
                        <option value="Badminton">Badminton</option>
                        <option value="Baseball">Baseball</option>
                        <option value="Basket ball">Basket ball</option>
                        <option value="Beach volley">Beach volley</option>
                        <option value="Biathlon">Biathlon</option>
                        <option value="Billard">Billard</option>
                        <option value="BMX">BMX</option>
                        <option value="Bowling">Bowling</option>
                        <option value="Boxe">Boxe</option>
                        <option value="Canyoning">Canyoning</option>
                        <option value="Cerf volant">Cerf volant</option>
                        <option value="Danses">Danses</option>
                        <option value="Equitation">Equitation</option>
                        <option value="Escalade">Escalade</option>
                        <option value="Escrime">Escrime</option>
                        <option value="Fitness">Fitness</option>
                        <option value="Fléchettes">Fléchettes</option>
                        <option value="Football">Football</option>
                        <option value="Futsal">Futsal</option>
                        <option value="Golf">Golf</option>  Sports de combat danse
                        <option value="Gymnastique">Gymnastique</option>
                        <option value="Haltérophilie">Haltérophilie</option>
                        <option value="Handbal">Handball</option>
                        <option value="Handisport">Handisport</option>
                        <option value="Hockey">Hockey</option>
                        <option value="Jetski">Jetski</option>
                        <option value="Jetski">Jogging</option>
                        <option value="Kitesurf">Kitesurf</option>                
                        <option value="Musculation">Musculation</option>
                        <option value="Padel">Padel</option>
                        <option value="Paintball">Paintball</option>
                        <option value="Paruchutisme">Paruchutisme</option>
                        <option value="Parapente">Parapente</option>
                        <option value="Patinage">Patinage</option>
                        <option value="Pêche">Pêche</option>
                        <option value="Pétanque">Pétanque</option>
                        <option value="Planche à voile">Planche à voile</option>
                        <option value="Plongée">Plongée</option>
                        <option value="Quad">Quad</option>
                        <option value="Rafting">Rafting</option>
                        <option value="Raid nature">Raid nature</option>
                        <option value="Rallye">Rallye</option>
                        <option value="Randonnées">Randonnées</option>
                        <option value="Roller">Roller</option>
                        <option value="Rugby">Rugby</option>  Sports de combat 
                        <option value="Salsa">Salsa</option>
                        <option value="Samba">Samba</option>
                        <option value="Self défense">Self défense</option>
                        <option value="Skateboard">Skateboard</option>
                        <option value="Ski de fond">Ski de fond</option>
                        <option value="Ski nautique">Ski nautique</option>
                        <option value="Snowboard">Snowboard</option>
                        <option value="Softball">Softball</option>
                        <option value="Squash">Squash</option>
                        <option value="Surf">Surf</option>
                        <option value="Taekwendo">Taekwendo</option>
                        <option value="Taï chi chuan">Taï chi chuan</option>
                        <option value="Tango">Tango</option>
                        <option value="Tennis">Tennis</option>
                        <option value="Tennis de table">Tennis de table</option>
                        <option value="Tir à l'arc">Tir à l'arc</option>
                        <option value="Trampoline">Trampoline</option>
                        <option value="Triathlon">Triathlon</option>
                        <option value="Ultimate fresbee">Ultimate fresbee</option>
                        <option value="Voile">Voile</option>
                        <option value="Volley Ball">Volley Ball</option>
                        <option value="VTT">VTT</option>
                        <option value="Water polo">Water polo</option>
                        <option value="Yoga">Yoga</option>
                        <option value="VTT">VTT</option>
                        <option value="Water polo">Water polo</option>
  </select>
      </div>
<div id="b">
    <p>
    <label>Nombre de joueurs maximum</label> : <input type="text" name="pseudo" placeholder="Nombre de joueurs maximum"/>
    </p>
</div>
        <div id="c">        
            <p>Niveau souhaité</p> 
                <select name="Niveau souhaité">
                    <option value="Loisir">Loisir</option> 
                    <option value="Débutant">Débutant</option>
                    <option value="Moyen">Moyen</option>
                    <option value="Bon niveau">Bon niveau</option>
                    <option value="Compétition">Compétition</option>
                </select>
        </div>
<div id="d">      
    <p>
       <label for="infos">Informations complémentaires sur l'activité</label><br />
       <textarea name="infos" id="infos"></textarea>
   </p>
</div>
        </form>
            
    </div>
    <div class="cadre12">
        <h3>Quand</h3>
        <p>Date de l'activité</p><input type="date" max="2012-06-25" min="2011-08-13" name="the_date">
        <p>Heure de RDV</p> <input type="time" name="wakeup">
    
    </div>
        <div class="cadre12">
        <h3>Où</h3>
        <p>Ville</p>
         <select name="Proche de">                
                <option value="Antibes">Antibes</option>
                <option value="Beausoleil">Beausoleil</option>
                <option value="Biot">Biot</option>
                <option value="Cagnes-sur-mer">Cagnes-sur-mer</option>
                <option value="Cannes">Cannes</option>
                <option value="Grasse">Grasse</option>
                <option value="Le-Cannet">Le-Cannet</option>
                <option value="Cannes">Mougins</option>
                <option value="Nice">Nice</option>
            </select>
        <p>Adresse</p> <input type="text" name="pseudo" placeholder="Adresse exacte"/>
    
    </div>
     <footer>
        <ul>
            <li><a id="office" href="office">Back office</a></li>       
            <li><a id="legales" href="legales">Mentions légales</a></li>
            <li><a id="accessibilite" href="accessibilite">Accessibilité</a></li>
        </ul>
    
    </footer>
    
    <!--Script-->
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
         
</body>
    
</html>
