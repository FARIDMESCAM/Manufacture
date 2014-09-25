<?php

namespace fsm\EchangeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Objet
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="fsm\EchangeBundle\Entity\ObjetRepository")
 */
class Objet {

   

    /**
     * @ORM\OneToMany(targetEntity ="fsm\EchangeBundle\Entity\Photo", mappedBy = "objet")
     */
    private $photos;
    


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
     * @ORM\Column(name="nom", type="string", length=255)
     * @Assert\Length(
     *      min = "3",
     *      max = "50",
     *      minMessage = "Votre nom doit faire au moins 3 caractères",
     *      maxMessage = "Votre nom ne peut pas être plus long que 50 caractères")
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1024)
     */
    private $description;

    

     /**
      * @ORM\Column(name="sens", type="integer", length=1)
      * @Assert\Choice(callback = "getsens2")
      */
     
    private $sens;

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
     * @ORM\ManyToMany(targetEntity="fsm\EchangeBundle\Entity\Categorie",cascade ={"persist"})
     * 
     */
    private $categories;

    
    
    
    
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
     * @return Objet
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

    /**
     * Set description
     *
     * @param string $description
     * @return Objet
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription() {
        return $this->description;
    }
   
    /**
     * Get sens
     *
     * @return integer 
     */
    
    public function RetourType($i){
        if ($i==0){
            $retour = 'Propose';;
        }
        if ($i==1){
            $retour = 'Recherche';;
        }
     return    $retour;
    }
    
    public function getSens() {
        return $this->sens;
    }
    
    public static function getsens2()
    {
        return array('0', '1');
    }
    
    
    /**
     * Set sens
     *
     * @param integer $sens 
     * @return Objet
     */
    public function setSens($sens) {
        $this->sens = $sens;

        return $this;
    }

    
   

    /**
     * Set prix
     *
     * @param string $prix
     * @return Objet
     */
    public function setPrix($prix) {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string 
     */
    public function getPrix() {
        return $this->prix;
    }

    public function __construct($user) {
        $this->user = $user;
    }

    /**
     * Get user
     *
     * @return \fsm\userBundle\Entity\user 
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * Set user
     *
     * @param \fsm\userBundle\Entity\user $user
     * @return Objet
     */
    public function setUser(\fsm\userBundle\Entity\user $user = null) {
        $this->user = $user;

        return $this;
    }

    /**
     * Add categories
     *
     * @param \fsm\EchangeBundle\Entity\Categorie $categories
     * @return Objet
     */
    public function addCategory(\fsm\EchangeBundle\Entity\Categorie $categories) {
        $this->categories[] = $categories;

        return $this;
    }

    /**
     * Remove categories
     *
     * @param \fsm\EchangeBundle\Entity\Categorie $categories
     */
    public function removeCategory(\fsm\EchangeBundle\Entity\Categorie $categories) {
        $this->categories->removeElement($categories);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategories() {
        return $this->categories;
    }

  


    /**
     * Add photos
     *
     * @param \fsm\EchangeBundle\Entity\Photo $photos
     * @return Objet
     */
    public function addPhoto(\fsm\EchangeBundle\Entity\Photo $photos) {
        $this->photos[] = $photos;

        return $this;
    }

    /**
     * Remove photos
     *
     * @param \fsm\EchangeBundle\Entity\Photo $photos
     */
    public function removePhoto(\fsm\EchangeBundle\Entity\Photo $photos) {
        $this->photos->removeElement($photos);
    }

    /**
     * Get photos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPhotos() {
        return $this->photos;
    }

}
