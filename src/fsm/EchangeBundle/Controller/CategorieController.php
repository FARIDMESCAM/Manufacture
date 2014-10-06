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
//        $csrfToken = $this->container->get('form.csrf_provider')->generateCsrfToken('authenticate');
//
//        return array('csrf_token' => $csrfToken);
        $request = $this->container->get('request');
         $Cat = $this->getDoctrine()->getManager()
                ->getRepository("fsmEchangeBundle:Categorie")
                ->find($id);
        $form = $this->createForm(new CategorieType, $Cat);
        $em = $this->getDoctrine()->getManager();
        $commit = TRUE;
        $formHandler = new FormHandler($form, $this->get('request'), $em,$commit);
        if ($formHandler->process()) {
                var_dump($request);
              
//                $em = $this->getDoctrine()->getManager();
//                $em->flush();
//                $nom = $Cat->getNom();
//                $this->get('session')->getFlashBag()->add('Creationinfo', 'La catégorie ' . $nom . ' a bien été modifie');
                return $this->redirect($this->generateUrl('fsm_categorie_list'));
           
      
       }
//       var_dump($csrfToken);
        return $this->render('fsmEchangeBundle:Categorie:Modif.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     * @Route("/ListCategorie", name="fsm_categorie_list")
     * @Template("fsmEchangeBundle:Categorie:List.html.twig")
     */
    public function ListCategorieAction() {
        
//         return $this->render('fsmEchangeBundle:Default:habilite.html.twig');
       
          
        $em = $this->getDoctrine()->getManager();
        $liste_categories = $em->getRepository('fsmEchangeBundle:Categorie')->findAll();
        
          
       
        // Lors de l'affichage des catégories, on ne fait que les visionner.
        return array('categories' => $liste_categories,'form'=>null);
    }

}
