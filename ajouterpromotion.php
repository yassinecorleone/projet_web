<?PHP
include "../entites/promotion.php";
include "../core/promotionC.php";

if (isset($_POST['id_promo']) and isset($_POST['nom_promotion']) and isset($_POST['promotion_date_debut']) and isset($_POST['promotion_date_fin']) and isset($_POST['pourcantage_promotion'])){
$promotion1=new promotion($_POST['id_promo'],$_POST['nom_promotion'],$_POST['promotion_date_debut'],$_POST['promotion_date_fin'] ,$_POST['pourcantage_promotion']);

var_dump($promotion1);

$promotion1C=new promotionC();
$promotion1C->ajouterpromotion($promotion1);
header('Location: afficherpromotion.php');
	
}else{
	echo "verifier les champs";
}

?>