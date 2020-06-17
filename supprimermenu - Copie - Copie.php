<?PHP
include "../core/menuC.php";
$menuC=new menuC();
if (isset($_POST["num_plat"])){
	$menuC->supprimermenu($_POST["num_plat"]);
	header('Location: affichermenu.php');
}

?>
