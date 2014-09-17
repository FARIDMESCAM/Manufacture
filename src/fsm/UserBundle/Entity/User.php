<?php

namespace fsm\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="fsm\UserBundle\Entity\UserRepository")

 */
class User extends BaseUser {

    /**
     * @ORM\OneToMany(targetEntity ="fsm\EchangeBundle\Entity\Photo", mappedBy = "user")
     */
    private $photos;

    /**
     * @ORM\Id
     * @ORM\Column( type ="integer")
     * @ORM\GeneratedValue( strategy ="AUTO")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(name="telephone",type ="string", length=10)
     */
    protected $telephone;
   
    /**
     * @var boolean
     *
     * @ORM\Column(name="habilite", type="boolean",nullable=true)
     */
     protected $habilite
             ;
    
    /**
     * Get id
     *
     * @return string 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return User
     */
    public function setTelephone($telephone) {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return integer 
     */
    public function getTelephone() {
        return $this->telephone;
    }

    /**
     * Constructor
     */
    public function __construct()
    {   $this->salt = base_convert(sha1(uniqid(mt_rand(), true)), 16, 36);
        $this->enabled = false;
        $this->locked = false;
        $this->expired = false;
        $this->roles = array();
        $this->credentialsExpired = false;
        $this->photos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->habilite = false;
    }

    /**
     * Add photos
     *
     * @param \fsm\EchangeBundle\Entity\Photo $photos
     * @return User
     */
    public function addPhoto(\fsm\EchangeBundle\Entity\Photo $photos)
    {
        $this->photos[] = $photos;

        return $this;
    }

    /**
     * Remove photos
     *
     * @param \fsm\EchangeBundle\Entity\Photo $photos
     */
    public function removePhoto(\fsm\EchangeBundle\Entity\Photo $photos)
    {
        $this->photos->removeElement($photos);
    }

    /**
     * Get photos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * Set habilite
     *
     * @param boolean $habilite
     * @return User
     */
    public function setHabilite($habilite)
    {
        $this->habilite = $habilite;

        return $this;
    }

    /**
     * Get habilite
     *
     * @return boolean 
     */
    public function getHabilite()
    {
        return $this->habilite;
    }
}
