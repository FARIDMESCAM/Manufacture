<?php

namespace fsm\EchangeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Categorie
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="fsm\EchangeBundle\Entity\CategorieRepository")
 */
class Categorie {

    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     *
     */
    private $nom;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Categorie
     */
    public function setNom($nom) {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom() {
        return $this->nom;
    }

    public function getDisplayForm() {
        return $this->nom . ' - ' . $this->id;
    }

    /**
     * Set objet
     *
     * @param \fsm\EchangeBundle\Entity\Objet $objet
     * @return Categorie
     */
    public function setObjet(\fsm\EchangeBundle\Entity\Objet $objet) {
        $this->objet = $objet;

        return $this;
    }

    /**
     * Get objet
     *
     * @return \fsm\EchangeBundle\Entity\Objet 
     */
    public function getObjet() {
        return $this->objet;
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->objet = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    public function __toString() {
//        return $this->name.' - '.$this->code;
        return $this->nom;
    }
    /**
     * Add objet
     *
     * @param \fsm\EchangeBundle\Entity\Objet $objet
     * @return Categorie
     */
    public function addObjet(\fsm\EchangeBundle\Entity\Objet $objet) {
        $this->objet[] = $objet;

        return $this;
    }

    /**
     * Remove objet
     *
     * @param \fsm\EchangeBundle\Entity\Objet $objet
     */
    public function removeObjet(\fsm\EchangeBundle\Entity\Objet $objet) {
        $this->objet->removeElement($objet);
    }

}
