<?php 

require_once __DIR__ . '/vendor/autoload.php';
   include 'class/ActiviteDAL.php';
use DAL\ActiviteDAL; 


$loader = new Twig_Loader_Filesystem( __DIR__ . './templates');



$twig = new Twig_Environment($loader);
$db = new PDO('mysql:host=localhost;dbname=projet_tut;port=3307;charset=utf8', 'root',  '');

$act = new ActiviteDAL($db);
?>
<!doctype html>
<html lang="fr">



<body>
    
  <?php 
    
    if(isset($_POST['sports'])&&isset($_POST['ville']) )   
    {
        $result=$act->getActiviteByResearchWithoutDate(($_POST['sports']),($_POST['ville']));
        
        $template = $twig->loadTemplate('activite.html');
        echo $template->render(array(
		   'activites' => $result,
	    ));   
    }
    else 
    {
       echo $twig->render('activite.html');
 
    }
    
    

         ?>
 
</body>
</html>