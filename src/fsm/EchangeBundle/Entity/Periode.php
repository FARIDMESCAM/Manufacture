<?php

namespace fsm\EchangeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Periode
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="fsm\EchangeBundle\Entity\PeriodeRepository")
 */
class Periode {

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
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @ORM\Column(name="statut", type="integer", length=1,nullable = true)
     */
    private $statut;

    /**
     * @ORM\ManyToOne(targetEntity ="fsm\EchangeBundle\Entity\Exercice", inversedBy ="periodes"))
     * @ORM\JoinColumn(nullable=false)
     * cascade ={"persist"})
     */
    private $exercice;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Periode
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle() {
        return $this->libelle;
    }

    /**
     * Set exercice
     *
     * @param \fsm\EchangeBundle\Entity\Exercice $exercice
     * @return Periode
     */
    public function setExercice(\fsm\EchangeBundle\Entity\Exercice $exercice) {
        $this->exercice = $exercice;

        return $this;
    }

    /**
     * Get exercice
     *
     * @return \fsm\EchangeBundle\Entity\Exercice 
     */
    public function getExercice() {
        return $this->exercice;
    }
    
    function __construct($exercice) {
        $this->exercice = $exercice;
        $this->statut=0;
    }

    

}
