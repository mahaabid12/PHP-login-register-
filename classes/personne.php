<?php 
class personne{


    private $name; 
    
    private $firstname; 
    private $age;
    //creer un constructeur
    public function __construct($name='', $firstname='',$age=0){
        $this->name=$name; 
        $this->firstname=$firstname; 
        $this->age=$age;
    } 
	/**
	 * 
	 * @return mixed
	 */
	function getName() {
		return $this->name;
	}
	
	/**
	 * 
	 * @param mixed $name 
	 * @return personne
	 */
	function setName($name): self {
		$this->name = $name;
		return $this;
	}
}


?>
