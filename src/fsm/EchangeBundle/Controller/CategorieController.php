<?php

namespace fsm\EchangeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use fsm\EchangeBundle\Entity\Categorie;
use fsm\EchangeBundle\Form\CategorieType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Commun\Form\FormHandler;

class CategorieController extends Controller {

    /**
     * @Security("has_role('ROLE_ADMIN')")
     * @Route("/ajouterCategorie", name="fsm_categorie_ajout") 
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

    /**
     * @Security("has_role('ROLE_ADMIN')")
     * @Method({"GET", "POST"})
     */
    public function modifCategorieAction($id) {
        $request = $this->container->get('request');
//        var_dump($request->isXmlHttpRequest());
//         var_dump($request->getMethod());
         if ($request->isXmlHttpRequest())
         {  }
        $Cat = $this->getDoctrine()->getManager()
                ->getRepository("fsmEchangeBundle:Categorie")
                ->find($id);
//        var_dump($Cat);
        
        $form = $this->createForm(new CategorieType, $Cat);

        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
          
            $form->bind($request);
            $em = $this->getDoctrine()->getManager();
                $em->persist($Cat);
                $em->flush();
                $nom = $Cat->getNom();
                $this->get('session')->getFlashBag()->add('Information', 'La catégorie ' . $nom . ' a bien été modifie');

                  return $this->redirect($this->generateUrl('fsm_categorie_list'));
           
            
        }

//        $em = $this->getDoctrine()->getManager();
//        $commit = TRUE;
//        $formHandler = new FormHandler($form, $this->get('request'), $em,$commit);
//        if ($formHandler->process()) {
////                var_dump($request);
////                         return $this->render('fsmEchangeBundle:Default:habilite.html.twig');
//              
////                $em = $this->getDoctrine()->getManager();
////                $em->flush();
//                $nom = $Cat->getNom();
//                $this->get('session')->getFlashBag()->add('Creationinfo', 'La catégorie ' . $nom . ' a bien été modifie');
//                return $this->redirect($this->generateUrl('fsm_categorie_list'));
//           
//      
//       }
//
        return $this->render('fsmEchangeBundle:Categorie:Modif.html.twig', array('form' => $form->createView(),'id'=>$Cat->getid()));
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     * @Route("/ListCategorie", name="fsm_categorie_list")
     * @Template("fsmEchangeBundle:Categorie:List.html.twig")
     */
    public function ListCategorieAction() {
        $request = $this->container->get('request');
        $em = $this->getDoctrine()->getManager();
        $liste_categories = $em->getRepository('fsmEchangeBundle:Categorie')->findAll();



        // Lors de l'affichage des catégories, on ne fait que les visionner.
        return array('categories' => $liste_categories, 'form' => null);
    }

}
