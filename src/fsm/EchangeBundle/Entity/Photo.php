<?php



namespace fsm\EchangeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;


/**
 * Photo
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="fsm\EchangeBundle\Entity\PhotoRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Photo {

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
     * @ORM\Column(name="extension", type="string", length=4)
     */
    private $extension;
    
        
       /**
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=255)
     */
    private $alt;
    
      /**
     * @var boolean
     *
     * @ORM\Column(name="principal", type="boolean")
     */
     private $principal;

    /**
     * @ORM\ManyToOne(targetEntity ="fsm\EchangeBundle\Entity\Objet", inversedBy ="photos"))
     * @ORM\JoinColumn(nullable=true)
     * cascade ={"persist"})
     */
    private $objet;

    /**
     * @ORM\ManyToOne(targetEntity ="fsm\UserBundle\Entity\User", inversedBy ="photos"))
     * @ORM\JoinColumn(nullable=true)
     * cascade ={"persist"})
     */
    private $user;
    
    /**
     * @Assert\File(
     *    mimeTypes = {"image/jpeg","image/png","image/gif"},
     *    mimeTypesMessage= "Merci d'uploader un jpg, png ou gif"
     * )
     * 
     */
    private $file;
// On ajoute cet attribut pour y stocker le nom du fichier temporairement
    private $tempFilename;
    
    
    private $identifiant;
    
 
 // Le n° d'identification de la photo est déterminée par son type de rattachement.
    // Son unicité est assurée par le fait de répertoires différents selon le type de rattachement.
    private function IdentifiantPhoto(){
           if (null === $this->getObjet()){
                     $this->identifiant = $this->getUser()->getId().'_'.$this->getId();
                 }
          else {
               $this->identifiant = $this->getObjet()->getId().'_'.$this->getId();
          }
        
    }
    
     public function __construct() {

    }
    
 
    
    public function getWebPath() {
        
       $this->IdentifiantPhoto();
        
        return $this->getUploadDir() . '/' . $this->identifiant . '.' . $this->
                        getExtension();
    }


    
    
    public function getfile() {
        return $this->file;
    }

    public function setFile(UploadedFile $file) {
        $this->file = $file;
// On vérifie si on avait déjà un fichier pour cette entité
        if (null !== $this->extension) {
// On sauvegarde l'extension du fichier pour le supprimer plus tard
            $this->tempFilename = $this->extension;
// On réinitialise les valeurs des attributs url et alt
            $this->extension = null;
            $this->alt = null;
        }
    }

    /**
     * @ORM\PrePersist ()
     * @ORM\PreUpdate ()
     */
    public function preUpload() {// Si jamais il n'y a pas de fichier ( champ facultatif )
        if (null === $this->file) {
            return;
        }
// Le nom du fichier est son id , on doit juste stocker également son extension
// Pour faire propre , on devrait renommer cet attribut en extension , plutôt que  url 
        $this->extension = $this->file->guessExtension();
    }
    
   

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload() {
        // Si jamais il n'y a pas de fichier (champ facultatif)
        if (null === $this->file) {
            return;
        }

        // Si on avait un ancien fichier, on le supprime
        if (null !== $this->tempFilename) {
            $oldFile = $this->getUploadRootDir() . '/' . $this->id . '.' . $this->tempFilename;
            if (file_exists($oldFile)) {
                unlink($oldFile);
            }
        }

       $this->IdentifiantPhoto();
      
        
        // On déplace le fichier envoyé dans le répertoire de notre choix
        $this->file->move(        
                
                $this->getUploadRootDir(), // Le répertoire de destination
                $this->identifiant. '.' . $this->extension   // Le nom du fichier à créer, ici « id.extension »
        );
    }

    /**
     * @ORM\PreRemove()
     */
    public function preRemoveUpload() {
        // On sauvegarde temporairement le nom du fichier, car il dépend de l'id
        $this->tempFilename = $this->getUploadRootDir() . '/' . $this->id . '.' . $this->extension;
    }
    
    

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload() {
        // En PostRemove, on n'a pas accès à l'id, on utilise notre nom sauvegardé
        if (file_exists($this->tempFilename)) {
            // On supprime le fichier
            unlink($this->tempFilename);
        }
    }

    public function getUploadDir() {
        
         if (null === $this->getObjet()){
            return 'uploads/avatar';
        }
        else {return 'uploads/img';}
        // On retourne le chemin relatif vers l'image pour un navigateur
        
    }

    public function getUploadRootDir() {
        // On retourne le chemin relatif vers l'image pour notre code PHP
        return __DIR__ . '/../../../../web/' . $this->getUploadDir();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    

    /**
     * Set objet
     *
     * @param \fsm\EchangeBundle\Entity\Objet $objet
     * @return Photo
     */
    public function setObjet(\fsm\EchangeBundle\Entity\Objet $objet = null) {
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
     * Set principal
     *
     * @param boolean $principal
     * @return Photo
     */
    public function setPrincipal($principal)
    {
        $this->principal = $principal;

        return $this;
    }

    /**
     * Get principal
     *
     * @return boolean 
     */
    public function getPrincipal()
    {
        return $this->principal;
    }

    /**
     * Set extension
     *
     * @param string $extension
     * @return Photo
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Get extension
     *
     * @return string 
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set user
     *
     * @param \fsm\UserBundle\Entity\User $user
     * @return Photo
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
     * Set alt
     *
     * @param string $alt
     * @return Photo
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string 
     */
    public function getAlt()
    {
        return $this->alt;
    }
}
