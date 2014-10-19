<?php

namespace fsm\EchangeBundle\Controller;

use fsm\EchangeBundle\Entity\Periode;
use fsm\EchangeBundle\Form\PeriodeType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


class PeriodeController extends Controller {

    /**
     * @Security("has_role('ROLE_ADMIN')")
     * @Route("/ajouterPeriode{id}", name="fsm_periode_add") 
     */
    public function ajouterPeriodeAction($id) {
          $exercice = $this->getDoctrine()->getManager()
                ->getRepository("fsmEchangeBundle:Exercice")
                ->find($id);
        $periode = new Periode($exercice);
        $form = $this->createForm(new PeriodeType, $periode);
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($periode);
                var_dump($periode);
                $em->flush();
                

                return $this->redirect($this->generateUrl('fsm_periode_list',array('id' => $id)));
            }
        }

        return $this->render('fsmEchangeBundle:Periode:ajouter.html.twig', array('form' => $form->createView(),));
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     * @Route("/ListPeriode{id}", name="fsm_periode_list")
     * @Template("fsmEchangeBundle:Periode:List.html.twig")
     */
    public function ListPeriodeAction($id) {
        $request = $this->container->get('request');
        $em = $this->getDoctrine()->getManager();
        $liste_periodes = $em->getRepository('fsmEchangeBundle:Periode')->findByExercice($id);
       

        // Lors de l'affichage des catégories, on ne fait que les visionner.
        //Il n'y aura de formulaire à transmettre qu'en mode modification -- modifCategorieAction
        return array('periodes' => $liste_periodes,'exercice'=>$id, 'form' => null);
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     * @Route("/updatePeriode{id}", name="fsm_periode_update",options={"expose"=true}) 
     */
    public function modifPeriodeAction($id) {
        $request = $this->container->get('request');
        $periode = $this->getDoctrine()->getManager()
                ->getRepository("fsmEchangeBundle:Periode")
                ->find($id);

        $form = $this->createForm(new PeriodeType, $periode);

        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {

//          var_dump($form->getErrors());
            $form->bind($request);
            if ($form->isValid()) {
                // permet de tracer les erreurs. Certaines ne s'affichent pas .
                // pb de jeton CSRF resolu en mettant {{ form_rest(form) }} dans la vue.
//              var_dump($form->getErrors());
                $em = $this->getDoctrine()->getManager();
                $em->persist($periode);
                $em->flush();
                $nom = $periode->getLibelle();
                $this->get('session')->getFlashBag()->add('Information', 'Le libellé de la période comptable  ' . $nom . ' a bien été modifié.');

                return $this->redirect($this->generateUrl('fsm_periode_list'));
            }
        }


        return $this->render('fsmEchangeBundle:Exercice:Modif.html.twig', array('form' => $form->createView(), 'id' => $exercice->getid()));
    }

}
