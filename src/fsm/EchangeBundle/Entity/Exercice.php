<?php

namespace fsm\EchangeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Exercice
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="fsm\EchangeBundle\Entity\ExerciceRepository")
 */
class Exercice
{
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
     * @ORM\OneToMany(targetEntity ="fsm\EchangeBundle\Entity\Periode", mappedBy = "exercice")
     */
    
    private $periodes;
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Exercice
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->periodes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add periodes
     *
     * @param \fsm\EchangeBundle\Entity\Periode $periodes
     * @return Exercice
     */
    public function addPeriode(\fsm\EchangeBundle\Entity\Periode $periodes)
    {
        $this->periodes[] = $periodes;
    
        return $this;
    }

    /**
     * Remove periodes
     *
     * @param \fsm\EchangeBundle\Entity\Periode $periodes
     */
    public function removePeriode(\fsm\EchangeBundle\Entity\Periode $periodes)
    {
        $this->periodes->removeElement($periodes);
    }

    /**
     * Get periodes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPeriodes()
    {
        return $this->periodes;
    }

    
    public function __toString() {
  
        return $this->id;
  
        
    }

    
    }


