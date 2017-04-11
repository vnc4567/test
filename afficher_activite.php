<?php 
session_start();
require_once __DIR__ . '/vendor/autoload.php';

include 'class/ActiviteDAL.php';
use DAL\ActiviteDAL;
include 'class/UtilisateurDAL.php';
use DAL\UtilisateurDAL;

$loader = new Twig_Loader_Filesystem( __DIR__ . './templates');

$db = new PDO('mysql:host=localhost;dbname=projet_tut;port=3307;charset=utf8', 'root',  '');

$twig = new Twig_Environment($loader);

$act = new ActiviteDAL($db);

if(isset($_POST["idActivite"]))
{
    $act->getActiviteById($_POST["idActivite"]);
    //var_dump($act);
    $_SESSION['idActivite']=$_POST["idActivite"];
    var_dump($_SESSION['idActivite']);
    //$res->id_sport = $act->getSportById($res->id_sport);
}
//$elm = $act->registerToActivite(2,1);


if(isset($_POST["inscrire"]))
{
    $act->registerToActivite($_SESSION['idActivite'],$_SESSION['id']);
    
}
?>
<!doctype html>
<html lang="fr">



<body>
  <?php 
$template = $twig->loadTemplate('afficher_activite.html');
        echo $template->render(array('activite' => $act));   
   // var_dump($act);
         ?>
 
</body>
</html>
