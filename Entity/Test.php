<?php

namespace Fredb\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Fredb\AdminBundle\Entity\Test
 *
 * @ORM\Table(name="TBL_test")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Fredb\AdminBundle\Repository\TestRepository")
 */
class Test {

	
	/**
	 * @var integer $id
	 * @ORM\Id 
	 * @ORM\Column(name="TEST_id",type="integer")
	 * @ORM\GeneratedValue
	 */
	 protected $id;
	

	

    /**
     * @var integer $chaine
     * @ORM\Column(name="TEST_chaine",type="string")
     */
    protected $chaine;    
    
    
	
    public function getId() {
        // comment 1
        return $this->id;
    }

    public function setId($id) {
        // comment 2
        $this->id = $id;
    }

    public function getChaine() {
        // comment 3
        return $this->chaine;
    }

    public function setChaine($chaine) {
        // comment 4
        $this->chaine = $chaine;
    }


	
	
}