<?PHP
class menu{
	private $prix_plat;
	private $nom_plat;
	private $num_plat;
	private $description_plat;
	function __construct($prix_plat,$nom_plat,$num_plat,$description_plat){
		$this->prix_plat=$prix_plat;
		$this->nom_plat=$nom_plat;
		$this->num_plat=$num_plat;
		$this->description_plat=$description_plat;
	}

	function getprix_plat(){
		return $this->prix_plat;
	}
	function getnom_plat(){
		return $this->nom_plat;
	}
	function getnum_plat(){
		return $this->num_plat;
	}
	function getdescription_plat(){
		return $this->description_plat;
	}

	function setnom_plat($nom_plat){
		$this->nom_plat=$nom_plat;
	}
	function setnum_plat($num_plat){
		$this->num_plat;
	}
	function setdescription_plat($description_plat){
		$this->description_plat=$description_plat;
	}

}

?>
