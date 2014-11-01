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
     * @ORM\Column(name="Solde", type="decimal", nullable=true)
     */
    private $solde;


    
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="fsm\UserBundle\Entity\User",cascade ={"persist"})
     *
     */
    private $user;

    
    
    public function __construct($user) {
        $this->user = $user;
          }
    
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

    

    /**
     * Set user
     *
     * @param \fsm\UserBundle\Entity\User $user
     * @return Compte
     */
    public function setUser(\fsm\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \fsm\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
