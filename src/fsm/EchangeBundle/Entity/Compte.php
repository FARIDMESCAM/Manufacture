<?php

namespace fsm\EchangeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Compte
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="fsm\EchangeBundle\Entity\CompteRepository")
 */
class Compte
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
     * @ORM\Column(name="Solde", type="decimal")
     */
    private $solde;


     /**
     * @ORM\ManyToOne(targetEntity ="fsm\EchangeBundle\Entity\Exercice"))
     * @ORM\JoinColumn(nullable=true)
     * cascade ={"persist"})
     */
    private $exercice;
    
         /**
     * @ORM\ManyToOne(targetEntity ="fsm\EchangeBundle\Entity\Periode"))
     * @ORM\JoinColumn(nullable=true)
     * cascade ={"persist"})
     */
    private $periode;
    
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
     * Set solde
     *
     * @param string $solde
     * @return Compte
     */
    public function setSolde($solde)
    {
        $this->solde = $solde;
    
        return $this;
    }

    /**
     * Get solde
     *
     * @return string 
     */
    public function getSolde()
    {
        return $this->solde;
    }
}
