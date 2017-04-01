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
 
    <h1 id="titre">Meet'n sport</h1>
     <div class="menu">
        <nav>
            <ul>
                <li><a class="accueil" id="focus" href="identif_back_o.php">Accueil</a></li>
                <li><a class="activites" href="activites.php">Gestion des comptes</a></li>
                <li><a class="messagerie" href="messagerie.php">Gestion des activités</a></li>
             </ul>
        </nav>
    </div>
 <div>
     <h3 id="comptes">Gestion des activites</h3>
     
     <table class="of">
       <tr>
           <td>Nom de l'activité</td>
           <td class="tab">Date</td>
           <td>Catégorie:</td>
            <td>Heure</td>
             <td class="tab">Adresse</td>
              <td>Niveau</td>
            <td>Description</td>

           
           
       </tr>
       <tr>
           <td class="tab">Beach volley</td>
           <td>Vendredi 12 janvier</td>
            <td class="tab">18h00</td>
           <td class="tab">Adresse: 25avenue des ......</td>
           <td>Catégorie: Beach volley</td>
                  <td>Niveau: loisir</td>
            <td>Je m'occupe du ballon, pensez à prendre une bouteille d'eau. On peut se covoit, contactez moi via mp!!</td>
            <td><input type="button" value="Modifier l'activité"></td>
           <td><input type="button" value="Supprimer l'activité"></td>
         </tr>
         
          <tr>
           <td class="tab">Urban foot</td>
           <td>Samedi 26 janvier</td>
            <td class="tab">13h30</td>
           <td class="tab">Adresse: 25avenue des ......</td>
           <td>Catégorie: Football</td>
                  <td>Niveau: confirmé</td>
            <td>C'est 10€ par personne</td>
            <td><input type="button" value="Modifier l'activité"></td>
           <td><input type="button" value="Supprimer l'activité"></td>
         </tr>
</table>

       

</div>
    
</body>
</html>