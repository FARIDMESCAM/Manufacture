<?php

namespace fsm\EchangeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Demande
 * 
 *  @ORM\Table()
 * @ORM\Entity(repositoryClass="fsm\EchangeBundle\Entity\DemandeRepository")
 */

class Demande
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
     * @var datetime $date
     * @Assert\Date()
     * @ORM\Column(name="debut", type="datetime")
     * @Assert\GreaterThan(
     *     value = 18
     * )
     */
    private $debut;

  /**
     * @var datetime $date
     * @Assert\Date()
     * @ORM\Column(name="fin", type="datetime")
     */
    private $fin;

      /**
     * @ORM\ManyToOne(targetEntity="fsm\EchangeBundle\Entity\Objet",cascade ={"persist"})
     * 
     */
  
    private $objet;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="fsm\UserBundle\Entity\User",cascade ={"persist"})
     *
     */
    private $user;
    
    public function __construct($user,$objet) {
        $this->user = $user;
        $this->objet = $objet;
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
     * Set debut
     *
     * @param \DateTime $debut
     * @return Demande
     */
    public function setDebut($debut)
    {
        $this->debut = $debut;
    
        return $this;
    }

    /**
     * Get debut
     *
     * @return \DateTime 
     */
    public function getDebut()
    {
        return $this->debut;
    }

    /**
     * Set fin
     *
     * @param \DateTime $fin
     * @return Demande
     */
    public function setFin($fin)
    {
        $this->fin = $fin;
    
        return $this;
    }

    /**
     * Get fin
     *
     * @return \DateTime 
     */
    public function getFin()
    {
        return $this->fin;
    }

    /**
     * Set objet
     *
     * @param \fsm\EchangeBundle\Entity\Objet $objet
     * @return Demande
     */
    public function setObjet(\fsm\EchangeBundle\Entity\Objet $objet = null)
    {
        $this->objet = $objet;
    
        return $this;
    }

    /**
     * Get objet
     *
     * @return \fsm\EchangeBundle\Entity\Objet 
     */
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * Set user
     *
     * @param \fsm\UserBundle\Entity\User $user
     * @return Demande
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
