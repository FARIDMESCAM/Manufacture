<?php

namespace fsm\EchangeBundle\Controller;

use fsm\EchangeBundle\Entity\Exercice;
use fsm\EchangeBundle\Form\ExerciceType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Commun\Form\FormHandler;

class ExerciceController extends Controller {

    /**
     * @Security("has_role('ROLE_ADMIN')")
     * @Route("/ajoutexxrExercice", name="fsm_exercice_ajout",options={"expose"=true}) 
     */
    public function ajouterExerciceAction() {
        $exercice = new Exercice();
        $form = $this->createForm(new ExerciceType, $exercice);
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($exercice);
                $em->flush();

              return $this->redirect($this->generateUrl('fsm_exercice_list'));
            }
        }

        return $this->render('fsmEchangeBundle:Exercice:ajouter.html.twig', array('form' => $form->createView(),));
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     * @Route("/ListExercice", name="fsm_exercice_list")
     * @Template("fsmEchangeBundle:Exercice:List.html.twig")
     */
    public function ListExerciceAction() {
        $request = $this->container->get('request');
        $em = $this->getDoctrine()->getManager();
        $liste_exercices = $em->getRepository('fsmEchangeBundle:Exercice')->findAll();

        // Lors de l'affichage des catégories, on ne fait que les visionner.
        //Il n'y aura de formulaire à transmettre qu'en mode modification -- modifCategorieAction
        return array('exercices' => $liste_exercices, 'form' => null,'periodes'=>null,'exercice'=>null);
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     * @Route("/updateExercice{id}", name="fsm_exercice_update",
     * requirements={"id" = "\d+"},options={"expose"=true}) 
     */
    public function modifExerciceAction($id) {
        $request = $this->container->get('request');
        $exercice = $this->getDoctrine()->getManager()
                ->getRepository("fsmEchangeBundle:Exercice")
                ->find($id);

        $form = $this->createForm(new ExerciceType, $exercice);

        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {

//          var_dump($form->getErrors());
            $form->bind($request);
            if ($form->isValid()) {
                // permet de tracer les erreurs. Certaines ne s'affichent pas .
                // pb de jeton CSRF resolu en mettant {{ form_rest(form) }} dans la vue.
//              var_dump($form->getErrors());
                $em = $this->getDoctrine()->getManager();
                $em->persist($exercice);
                $em->flush();
                $nom = $exercice->getLibelle();
                $this->get('session')->getFlashBag()->add('Information', 'Le libellé de l\'exercice comptable  ' . $nom . ' a bien été modifié');

                return $this->redirect($this->generateUrl('fsm_exercice_list'));
            }
        }


        return $this->render('fsmEchangeBundle:Exercice:Modif.html.twig', array('form' => $form->createView(), 'id' => $exercice->getid()));
    }

}
