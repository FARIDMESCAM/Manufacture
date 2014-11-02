<?php

namespace fsm\EchangeBundle\Services;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use fsm\userBundle\Entity\user;
use Symfony\Component\DependencyInjection\ContainerAware;

class habilitation extends Controller {
    
    protected $securite;
    
    // Je passe dans le constructeur de mon service un autre service.
    public function __construct (\Symfony\Component\Security\Core\SecurityContextInterface $securite)
 {
$this->securite = $securite;
}

    public function Autorisation () {
        $autorisation = 'KO';
     if (true === $this->securite->getToken()->getUser()->getHabilite()) {
            $autorisation = 'OK';
        } else { }
    return $autorisation;
    } 
    
}

