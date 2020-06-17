<?PHP
include "../core/promotionC.php";
$promotionC=new promotionC();
if (isset($_POST["num_plat"])){
	$promotionC->supprimerpromotion($_POST["num_plat"]);
	header('Location: afficherpromotion.php');
}

?>
