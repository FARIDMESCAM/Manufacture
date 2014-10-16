<?php

namespace fsm\EchangeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use fsm\EchangeBundle\Entity\Adress;
use fsm\EchangeBundle\Form\AdressType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Commun\Form\FormHandler;

class AdressController extends Controller {
    
     /**
     * @Security("has_role('ROLE_ADMIN')")
     * @Route("/ajouterAdress", name="fsm_adress_ajout") 
     */
    public function ajouterAdressAction() {
        $Adr = new Adress();
        $form = $this->createForm(new AdressType, $Adr);
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($Adr);
                $em->flush();
                $nom = $Adr->getAdresse();
                $this->get('session')->getFlashBag()->add('Creationinfo', 'L\'adresse ' . $nom . ' a bien été enregistrée');
                return $this->redirect($this->generateUrl('fsm_echange_accueil'));
            }
        }

        return $this->render('fsmEchangeBundle:Adress:ajouter.html.twig', array('form' => $form->createView(),));
    }
    
     /**
     * @Security("has_role('ROLE_ADMIN')")
     * @Route("/ListAdress", name="fsm_adress_list")
     * @Template("fsmEchangeBundle:Adress:List.html.twig")
     */
    public function ListAdressAction() {
        $request = $this->container->get('request');
        $em = $this->getDoctrine()->getManager();
        $liste_adresses = $em->getRepository('fsmEchangeBundle:Adress')->findAll();
        
        // Lors de l'affichage des catégories, on ne fait que les visionner.
        //Il n'y aura de formulaire à transmettre qu'en mode modification -- modifCategorieAction
        return array('adresses' => $liste_adresses, 'form' => null);
    }
    
    

    public function modifAdressAction($id) {
        $request = $this->container->get('request');
        $Adr = $this->getDoctrine()->getManager()
                ->getRepository("fsmEchangeBundle:Adress")
                ->find($id);
       
        $form = $this->createForm(new AdressType, $Adr);

        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
        
//          var_dump($form->getErrors());
            $form->bind($request);
             if ($form->isValid()) {
                 // permet de tracer les erreurs. Certaines ne s'affichent pas .
                 // pb de jeton CSRF resolu en mettant {{ form_rest(form) }} dans la vue.
//              var_dump($form->getErrors());
            $em = $this->getDoctrine()->getManager();
                $em->persist($Adr);
                $em->flush();
                $nom = $Adr->getAdresse();
                $this->get('session')->getFlashBag()->add('Information', 'L\'adress ' . $nom . ' a bien été modifiée');

        return $this->redirect($this->generateUrl('fsm_adress_list'));}}
        

        return $this->render('fsmEchangeBundle:Adress:Modif.html.twig', array('form' => $form->createView(),'id'=>$Adr->getid()));
    }

    
}

