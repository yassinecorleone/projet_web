<?PHP
include "../entites/promotion.php";
include "../core/promotionC.php";

if (isset($_POST['num_plat'])  and isset($_POST['prix_plat']) ){
$promotion1=new promotion($_POST['num_plat'],$_POST['prix_plat'] );
$promotion1C=new promotionC();
$promotion1C->ajouterpromotion($promotion1);
header('Location: afficherpromotion.php');

}else{
	echo "verifier les champs";
}
//*/

?>
