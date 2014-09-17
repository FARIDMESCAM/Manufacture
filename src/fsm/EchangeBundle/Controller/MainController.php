<?php

namespace fsm\EchangeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use fsm\EchangeBundle\Entity\Objet;
use fsm\EchangeBundle\Form\ObjetType;
use fsm\EchangeBundle\Entity\Categorie;
use fsm\EchangeBundle\Form\CategorieType;
use fsm\EchangeBundle\Form\FormHandler;
use fsm\EchangeBundle\Entity\Image;
use fsm\EchangeBundle\Form\ImageType;

class MainController extends Controller {

    public function accueilAction() {
        $objets = $this->getDoctrine()
                ->getManager()
                ->getRepository('fsmEchangeBundle:Objet')
                ->getObjetsPhotos5();
        return $this->render('fsmEchangeBundle:Default:index.html.twig', array('objetphotos' => $objets));
    }
    
   

}
