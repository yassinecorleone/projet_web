<?PHP
class promotion{
	private $num_plat;

	private $prix_plat;

	function __construct($num_plat,$prix_plat){
		$this->num_plat=$num_plat;
		$this->prix_plat=$prix_plat;

	}

	function getnum_plat(){
		return $this->num_plat;
	}
	function getprix_plat(){
		return $this->prix_plat;
	}

	function setnum_plat($num_plat){
		$this->num_plat;
	}


	function setprix_plat($prix_plat){
		$this->prix_plat;
	}




}

?>
