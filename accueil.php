<?php 

require_once __DIR__ . '/vendor/autoload.php';

include 'class/ActiviteDAL.php';
use DAL\ActiviteDAL;
include 'class/UtilisateurDAL.php';
use DAL\UtilisateurDAL;

$loader = new Twig_Loader_Filesystem( __DIR__ . './templates');

$db = new PDO('mysql:host=localhost;dbname=projet_tut;port=3307;charset=utf8', 'root',  '');

$twig = new Twig_Environment($loader);

$act = new ActiviteDAL($db);
//$elm = $act->createActivite("nomTest",1,"2017-05-05",7,1,"descrTest",1,1,"adresseTest");
//$elm = $act->registerToActivite(2,1);

$utilisateur = new UtilisateurDAL($db);
//$utilisateur->deleteUtilisateur(2);
//$utilisateur->createUtilisateur("pseudoTest","mdp","mail","2017-07-07");
//$utilisateur->updateUtilisateur(3,"p","mdp2","mail2");
?>
<!doctype html>
<html lang="fr">



<body>
  <?php 
echo $twig->render('accueil.html');
//    var_dump($elm);
         ?>
 
</body>
</html>