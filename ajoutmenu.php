<?PHP
include "../entites/menu.php";
include "../core/menuC.php";

if (isset($_POST['prix_plat']) and isset($_POST['nom_plat']) and isset($_POST['num_plat']) and isset($_POST['description_plat'])){
$menu1=new menu($_POST['prix_plat'],$_POST['nom_plat'],$_POST['num_plat'],$_POST['description_plat']);

$menu1C=new menuC();
$menu1C->ajoutmenu($menu1);
header('Location: affichermenu.php');

}else{
	echo "vérifier les champs";
}
//*/

?>
