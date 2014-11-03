<?php

namespace fsm\EchangeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\ExecutionContextInterface;
use fsm\EchangeBundle\Entity\Periode;

/**
 * Demande
 * 
 *  @ORM\Table()
 * @ORM\Entity(repositoryClass="fsm\EchangeBundle\Entity\DemandeRepository")
 */

class Demande
{
    /**
     * @Assert\Callback
     */
    public function validate(ExecutionContextInterface $context)
    {
             

        // Vérifie si le nom est bidon
        if ($this->getDebut() > $this->getFin() )
        {$context->addViolationAt(
                'fin',
                'La date de début ne peut être postérieure à la date de fin');
    }
    $datesysteme = new \Datetime();
    if ($this->getFin() < $datesysteme)
    {$context->addViolationAt(
                'fin',
                'La date de fin ne peut être antérieure à la date du jour');}
    
    }
    
    
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
     * @var decimal
     *
     * @ORM\Column(name="prix",type="decimal",precision=4, scale=2)
     */
    private $prix;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="fsm\UserBundle\Entity\User",cascade ={"persist"})
     *
     */
    private $user;
    
    
      /**
      * @ORM\Column(name="statut", type="integer", length=1,nullable = true)
      */
     
    private $statut;
    
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
    
    
    
    public function __construct($user,$objet,$periode,$exercice,$prix) {
        $this->user = $user;
        $this->objet = $objet;
        $this->periode = $periode;
        $this->exercice = $exercice;
        $this->statut = 0;
        $this->prix = $prix;
//        $this->periode = $em->getRepository('fsmEchangeBundle:Periode')->findOneBy(array ('statut' => '1'));
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

   

    /**
     * Set statut
     *
     * @param integer $statut
     * @return Demande
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
    
        return $this;
    }

    /**
     * Get statut
     *
     * @return integer 
     */
    public function getStatut()
    {   if ($this->statut==0){
            $retour = 'demandée';;
        }
        if ($this->statut==1){
            $retour = 'Approuvée';
        }
        if ($this->statut==2){
            $retour = 'En cours';
        }
              if ($this->statut==3){
            $retour = 'Terminée';
        }
         if ($this->statut==4){
            $retour = 'Refusée';
        }
        if ($this->statut==5){
            $retour = 'Sans suite';
        }
     return    $retour;
      
    }
    


    /**
     * Set prix
     *
     * @param string $prix
     * @return Demande
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    
        return $this;
    }

    /**
     * Get prix
     *
     * @return string 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set exercice
     *
     * @param \fsm\EchangeBundle\Entity\Exercice $exercice
     * @return Demande
     */
    public function setExercice(\fsm\EchangeBundle\Entity\Exercice $exercice = null)
    {
        $this->exercice = $exercice;
    
        return $this;
    }

    /**
     * Get exercice
     *
     * @return \fsm\EchangeBundle\Entity\Exercice 
     */
    public function getExercice()
    {
        return $this->exercice;
    }

    /**
     * Set periode
     *
     * @param \fsm\EchangeBundle\Entity\Periode $periode
     * @return Demande
     */
    public function setPeriode(\fsm\EchangeBundle\Entity\Periode $periode = null)
    {
        $this->periode = $periode;
    
        return $this;
    }

    /**
     * Get periode
     *
     * @return \fsm\EchangeBundle\Entity\Periode 
     */
    public function getPeriode()
    {
        return $this->periode;
    }
}
