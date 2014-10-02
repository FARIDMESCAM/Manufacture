<?php

namespace fsm\EchangeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use fsm\EchangeBundle\Entity\Categorie;
use fsm\EchangeBundle\Form\CategorieType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class CategorieController extends Controller {
    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function ajouterCategorieAction() {
        $Cat = new Categorie();
        $form = $this->createForm(new CategorieType, $Cat);
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($Cat);
                $em->flush();
                $nom = $Cat->getNom();
                $this->get('session')->getFlashBag()->add('Creationinfo', 'La catégorie ' . $nom . ' a bien été enregistré');
                return $this->redirect($this->generateUrl('fsm_echange_accueil'));
            }
        }

        return $this->render('fsmEchangeBundle:Categorie:ajouter.html.twig', array('form' => $form->createView(),));
    }
    
    public function modifCategorieAction($id){
        $Cat = $this->getDoctrine()->getManager()
                ->getRepository("fsmEchangeBundle:Categorie")
                ->find($id);
        $form = $this->createForm(new CategorieType, $Cat);
         $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
       
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush(); 
            $nom = $Cat->getNom();
                $this->get('session')->getFlashBag()->add('Creationinfo', 'La catégorie ' . $nom . ' a bien été modifie');
                return $this->redirect($this->generateUrl('fsm_categorie_list'));
            
        }
        }
        return $this->render('fsmEchangeBundle:Categorie:ajouter.html.twig', array('form' => $form->createView(),));

    }

    public function ListCategorieAction() {
        $em = $this->getDoctrine()->getManager();
        $liste_categories = $em->getRepository('fsmEchangeBundle:Categorie')->findAll();
        
        return $this->render('fsmEchangeBundle:Categorie:List.html.twig',
                array('categories'=>$liste_categories));
        
    }

}
