
<html>
 <form method="POST" action="">
 Rechercher un mot : <input type="text" name="recherche">
 <input type="SUBMIT" value="Search!">
 </form>
 </html>

 <?php

$db_server = 'localhost'; // Adresse du serveur MySQL
$db_name = 'marketing';            // Nom de la base de données
$db_user_login = 'root';  // Nom de l'utilisateur
$db_user_pass = '';       // Mot de passe de l'utilisateur

// Ouvre une connexion au serveur MySQL
$conn = mysqli_connect($db_server,$db_user_login, $db_user_pass, $db_name);


 // Récupère la recherche
 $recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';

 // la requete mysql
 $q = $conn->query(
 "SELECT num_plat,prix_plat FROM promotion
  WHERE num_plat LIKE '%$recherche%'
      OR prix_plat LIKE '%$recherche%'
  LIMIT 10");
  echo "<tr><td><br>";
       echo 'num_plat ,prix_plat  <br/>';
  echo "</div></td></tr>";
 // affichage du résultat
  while( $r = mysqli_fetch_array($q)){
    echo 'Résultat de la recherche: '.$r['num_plat'].',  '.$r['prix_plat'].'<br />'
   ;
 }
?>
