<?php

namespace fsm\EchangeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use fsm\EchangeBundle\Entity\Demande;
use fsm\EchangeBundle\Form\DemandeType;
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
            $Demande = new Demande($user, $Objet);
            $form = $this->createForm(new DemandeType(), $Demande);
            $commit = TRUE; 
//           var_dump($Objet);
//            return new Response('Hello world!');
            $formHandler = new FormHandler($form, $this->get('request'), $em,$commit);
            if ($formHandler->process()) {
                $this->get('session')->getFlashBag()->add('Information', 'Votre demande de location a bien été enregistrée');
                return $this->redirect
                                ($this->generateUrl('fsm_objet_show', array('id' => $id)));
        }
            return array('form' => $form->createView());
            
             }
        else {
            return $this->render('fsmEchangeBundle:Default:habilite.html.twig');
    
        
}
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