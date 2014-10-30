<?php

namespace fsm\EchangeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use fsm\EchangeBundle\Entity\Demande;
use fsm\EchangeBundle\Form\DemandeType;
use fsm\EchangeBundle\Form\ChoixForm;
use Commun\Form\FormHandler;
use Symfony\Component\HttpFoundation\Response;

class DemandeController extends Controller {

    /**
     * @Route("/demandecreate/{id}", name="fsm_demande_create")
     * @Template("fsmEchangeBundle:Demande:demande.html.twig")
     */
    public function demandecreationAction($id) {

        $request = $this->container->get('request');
        $autorisation = 'KO';
        $autorisation = $this->Habilitation($autorisation);
        if ($autorisation === 'OK') {
            $user = $this->get('security.context')->getToken()->getUser();
            $em = $this->getDoctrine()->getManager();
            $Objet = $em->getRepository('fsmEchangeBundle:Objet')->find($id);
            $periode = $em->getRepository('fsmEchangeBundle:Periode')->findOneBy(array('statut' => '1'));
            $exercice = $em->getRepository('fsmEchangeBundle:Exercice')->findOneBy(array('statut' => '1'));
            $Demande = new Demande($user, $Objet, $periode, $exercice);
            $form = $this->createForm(new DemandeType(), $Demande);
            $commit = TRUE;
            $formHandler = new FormHandler($form, $this->get('request'), $em, $commit);
            if ($formHandler->process()) {
                $destinataire = $Objet->getUser()->getEmail();
                $emetteur = $Demande->getUser()->getEmail();
                $objet = $Demande->getObjet()->getNom();
                $datedeb = $Demande->getDebut()->format('d-m-Y');
                $datefin = $Demande->getFin()->format('d-m-Y');
                $texte = 'Vous avez une demande de location du '.$datedeb.' au '.$datefin;
                $message = \Swift_Message::newInstance()
                        ->setSubject('location de votre '.$objet)
                        ->setFrom($emetteur)
                        ->setTo($destinataire)
                        ->setBody($this->renderView('fsmEchangeBundle:Objets:formatMail.html.twig', array('textemail' => $texte)));
                $mailer = $this->get('mailer');
                $type = $message->getHeaders()->get('Content-Type');
                $type->setValue('text/html');
                $type->setParameter('charset', 'utf-8');
                $result = $mailer->send($message);

                $this->get('session')->getFlashBag()->add('Information', 'Votre demande de location a bien été enregistrée');
                return $this->redirect
                                ($this->generateUrl('fsm_objet_show', array('id' => $id)));
            }
            return array('form' => $form->createView());
        } else {
            return $this->render('fsmEchangeBundle:Default:habilite.html.twig');
        }
    }

    /**
     * @Route("/dmandesLoc",name="fsm_demande_mes")
     * @Template("fsmEchangeBundle:Demande:listMes.html.twig")
     */
    // Il s'agit ici des locations que d'autres personnes veulent faire sur mes objets.
    public function mesDemandesAction() {
        $user = $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $Demandes = $em->getRepository('fsmEchangeBundle:Demande')->mesDemandes($user);
//            var_dump($Demandes);
        return array('demandes' => $Demandes);
    }

    /**
     * @Route("/Locationsmes",name="fsm_locations_mes")
     * @Template("fsmEchangeBundle:Demande:mesloc.html.twig")
     */
    public function mesLocationsAction() {
        $user = $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $Demandes = $em->getRepository('fsmEchangeBundle:Demande')->mesLocations($user);
//            var_dump($Demandes);
        return array('demandes' => $Demandes);
    }

    /**
     * @Route("/choix/{id}",name="fsm_demande_choix")
     * @Template("fsmEchangeBundle:Demande:choix.html.twig")
     */
    public function choixAction($id) {
        $em = $this->getDoctrine()->getManager();
        $Demande = $em->getRepository('fsmEchangeBundle:Demande')->find($id);
        $form = $this->createForm(new ChoixForm(), $Demande);
        $commit = TRUE;
        $formHandler = new FormHandler($form, $this->get('request'), $em, $commit);
        if ($formHandler->process()) {

            $this->get('session')->getFlashBag()->add('Information', 'La demande de location a bien été modifiée');
            return $this->redirect
                            ($this->generateUrl('fsm_demande_mes'));
        }

        return array('form' => $form->createView(), 'demande' => $id);
    }

    public function Habilitation($autorisation) {
        $autorisation = 'KO';
        $user = $this->get('security.context')->getToken()->getUser();
        if (true === $user->getHabilite()) {
            $autorisation = 'OK';
        } else {


            $objetmail = 'user à habilite';
            $destinataire = 'faridsahlimescam@voila.fr';
            $texte = 'les globs attaquent la plage';
            $message = \Swift_Message::newInstance()
                    ->setSubject($objetmail)
                    ->setFrom('faridsahlimescam@voila.fr')
                    ->setTo($destinataire)
                    ->setBody($this->renderView('fsmUserBundle:Default:mailuser.html.twig', array('textemail' => $texte)));

            $mailer = $this->get('mailer');
            $type = $message->getHeaders()->get('Content-Type');
            $type->setValue('text/html');
            $type->setParameter('charset', 'utf-8');


            $result = $mailer->send($message);
            var_dump($result);
            return $this->render('fsmEchangeBundle:Default:habilite.html.twig');
//            throw new AccessDeniedException();
        }
        return $autorisation;
    }

}
