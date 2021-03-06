<?php

class Users 
{

	/*****************Attributs***************** */

	private $_idUser;
	private $_nomUser;
	private $_prenomUser;
	private $_ageUser;
	private $_pseudoUser;
	private $_motDePasseUser;
	private $_idRole;

	/***************** Accesseurs ***************** */


	public function getIdUser()
	{
		return $this->_idUser;
	}

	public function setIdUser(int $idUser)
	{
		$this->_idUser=$idUser;
	}

	public function getNomUser()
	{
		return $this->_nomUser;
	}

	public function setNomUser($nomUser)
	{
		$this->_nomUser=$nomUser;
	}

	public function getPrenomUser()
	{
		return $this->_prenomUser;
	}

	public function setPrenomUser($prenomUser)
	{
		$this->_prenomUser=$prenomUser;
	}

	public function getAgeUser()
	{
		return $this->_ageUser;
	}

	public function setAgeUser(int $ageUser)
	{
		$this->_ageUser=$ageUser;
	}

	public function getPseudoUser()
	{
		return $this->_pseudoUser;
	}

	public function setPseudoUser($pseudoUser)
	{
		$this->_pseudoUser = $pseudoUser;
	}

	public function getMotDePasseUser()
	{
		return $this->_motDePasseUser;
	}

	public function setMotDePasseUser($motDePasseUser)
	{
		$this->_motDePasseUser = $motDePasseUser;
	}

	public function getIdRole()
	{
		return $this->_idRole;
	}

	public function setIdRole(int $idRole)
	{
		$this->_idRole=$idRole;
	}

	/*****************Constructeur***************** */

	public function __construct(array $options = [])
	{
 		if (!empty($options)) // empty : renvoi vrai si le tableau est vide
		{
			$this->hydrate($options);
		}
	}
	public function hydrate($data)
	{
 		foreach ($data as $key => $value)
		{
 			$methode = "set".ucfirst($key); //ucfirst met la 1ere lettre en majuscule
			if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
			{
				$this->$methode($value);
			}
		}
	}

	/*****************Autres Méthodes***************** */

	/**
	* Transforme l'objet en chaine de caractères
	*
	* @return String
	*/
	public function toString()
	{
		return "IdUser : ".$this->getIdUser()."NomUser : ".$this->getNomUser()."PrenomUser : ".$this->getPrenomUser()."AgeUser : ".$this->getAgeUser()."IdRole : ".$this->getIdRole()."\n";
	}


	
	/* Renvoit Vrai si lobjet en paramètre est égal 
	* à l'objet appelant
	*
	* @param [type] $obj
	* @return bool
	*/
	public function equalsTo($obj)
	{
		return;
	}


	/**
	* Compare l'objet à un autre
	* Renvoi 1 si le 1er est >
	*        0 si ils sont égaux
	*      - 1 si le 1er est <
	*
	* @param [type] $obj1
	* @param [type] $obj2
	* @return Integer
	*/
	public function compareTo($obj)
	{
		return;
	}
}