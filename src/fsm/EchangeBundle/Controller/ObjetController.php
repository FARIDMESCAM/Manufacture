<?php

namespace fsm\EchangeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use fsm\EchangeBundle\Entity\Objet;
use fsm\EchangeBundle\Form\ObjetType;
use fsm\EchangeBundle\Form\RechercheForm;
use fsm\EchangeBundle\Form\FormHandler;
use fsm\EchangeBundle\Entity\Categorie;
use fsm\EchangeBundle\Entity\Photo;
use fsm\userBundle\Entity\user;
use Doctrine\ORM\Query\ResultSetMappingBuilder;
use fsm\EchangeBundle\Form\RechercheType;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

//use fsm\EchangeBundle\Command\EmailCommand;



class ObjetController extends Controller {

    /**
     * @Route("/ajouterObjet", name="fsm_objet_ajout")
     * @Security("has_role('ROLE_USER')") 
     */
    public function ajouterObjetAction() {
        $autorisation = 'KO';
        $autorisation = $this->Habilitation($autorisation);
        if ($autorisation === 'OK') {
            $user = $this->get('security.context')->getToken()->getUser();
            $Objet = new Objet($user);
            $form = $this->createForm(new ObjetType(), $Objet);
            $em = $this->getDoctrine()->getManager();
            $formHandler = new FormHandler($form, $this->get('request'), $em);
            if ($formHandler->process()) {
                return $this->redirect
                                ($this->generateUrl('fsm_photo_ajout_O', array('id' => $Objet->getId())));
            }
            return $this->render('fsmEchangeBundle:Objets:ajouter.html.twig', array('form' => $form->createView(),));
        } else {
            return $this->render('fsmEchangeBundle:Default:habilite.html.twig');
        }
    }

    /**
     * @Route("/updateObjet{id}", name="fsm_objet_update") 
     */
    public function updateObjetAction($id) {
        $autorisation = 'KO';
        $autorisation = $this->Habilitation($autorisation);
        if ($autorisation === 'OK') {
            $em = $this->getDoctrine()->getManager();
            $Objet = $em->getRepository('fsmEchangeBundle:Objet')->find($id);
            $form = $this->createForm(new ObjetType(), $Objet);
            $formHandler = new FormHandler($form, $this->get('request'), $em);
            if ($formHandler->process()) {
                return $this->redirect
                                ($this->generateUrl('fsm_photo_ajout_O', array('id' => $Objet->getId())));
            }
            return $this->render('fsmEchangeBundle:Objets:ajouter.html.twig', array('form' => $form->createView(),));
        } else {
            return $this->render('fsmEchangeBundle:Default:habilite.html.twig');
        }
    }

    public function ListMesObjetAction() {
//Vérification utilisateur connecté et habilité.
        $autorisation = 'KO';
        $autorisation = $this->Habilitation($autorisation);
        if ($autorisation === 'OK') {
            $user = $this->get('security.context')->getToken()->getUser();
            $id = $user->getId();
            $em = $this->getDoctrine()->getManager();

            // $ gestion permet de distinguer la fenêtre ou on gère les objets de celle où on les consulte.
            // ces 2 fenêtres héritent du même template .
            $gestion = 'YES';



            $liste_objet = $em->getRepository('fsmEchangeBundle:Objet')->getObjetsPhotosByUser($user);
            return $this->render('fsmEchangeBundle:Objets:objetsPerso.html.twig', array('objetphotos' => $liste_objet, 'gestion' => $gestion));
        } else {
            return $this->render('fsmEchangeBundle:Default:habilite.html.twig');
        }
    }
    /**
 * @Security("has_role('ROLE_USER')")
       */
         public function ListObjetsAction() {

        $autorisation = 'KO';
        $autorisation = $this->Habilitation($autorisation);
        $em = $this->getDoctrine()->getManager();
        $gestion = 'NO';
        if ($autorisation === 'OK') {
            $liste_objet = $em->getRepository('fsmEchangeBundle:Objet')->test();
            $form = $this->container->get('form.factory')->create(new RechercheForm());
            $request = $this->container->get('request');
            if ($request->isXmlHttpRequest()) {
                $name = $request->request->get('name');
                $catrech = $request->request->get('categorie');
                if ($catrech == null) {
                    $cat = $em->getRepository('fsmEchangeBundle:Categorie')->findAll();
                } else {
                    $cat = $em->getRepository('fsmEchangeBundle:Categorie')->find($catrech);
                    $cat = array($cat);
                }

                $criteres = array(('%' . $name . '%'), $cat);
                $liste_objet = $em->getRepository('fsmEchangeBundle:Objet')->search($criteres);



                $em = $this->getDoctrine()->getManager();
                $formHandler = new FormHandler($form, $this->get('request'), $em);
// Nous sommes en Ajax. On ne renvoie que la partie objets à lister
                return $this->render('fsmEchangeBundle:Objets:Objets.html.twig', array('objetphotos' => $liste_objet, 'gestion' => $gestion));
            } // Fin si XHR
            else {
                return $this->container->get('templating')->renderResponse('fsmEchangeBundle:Objets:objetsList.html.twig', array(
                            'objetphotos' => $liste_objet, 'gestion' => $gestion,
                            'form' => $form->createView()
                ));
            }// Fin si pas XHR
        } // Fin If autorisation = OK 
        else {
            return $this->render('fsmEchangeBundle:Default:habilite.html.twig');
        }
    }

    public function showObjetAction($id) {
        // renvoie un tableau
        $liste_objet = $this->getDoctrine()->getManager()
                        ->getRepository('fsmEchangeBundle:Objet')->getObjetPhotosByObjet($id);

        // renvoie un objet
        $objetU = $this->getDoctrine()->getManager()
                        ->getRepository('fsmEchangeBundle:Objet')->find($id);
        $userObjet = $objetU->getUser();

        $user = $this->get('security.context')->getToken()->getUser();
        // si on ne met que == au lieu de ===, provoque erreur récursive : erreur sympa à trouver.
        if ($user === $userObjet) {
            $is_owner = true;
        } else {
            $is_owner = false;
        }

        return $this->render('fsmEchangeBundle:Objets:objet.html.twig', array('objetphotos' => $liste_objet, 'is_owner' => $is_owner));
    }

    public function envoiMailAction($id) {

        $defaultData = array();
        $form = $this->createFormBuilder($defaultData)
                ->add('objet', 'text', array('required' => false, 'label' => 'Objet du mail', 'attr' => array('class' => 'form-control')))
                ->add('texte', 'textarea', array('required' => false, 'label' => 'Objet du mail', 'attr' => array('class' => 'form-control')))
                ->add('envoyer', 'submit', array('label' => 'Envoyer un mail'))
                ->getForm();
        $form->handleRequest($this->get('request'));
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $Objet = $em->getRepository('fsmEchangeBundle:Objet')->getObjetPhotosByObjet($id);
            $Objet = $Objet['0'];

            $data = $form->getData();

            $texte = $data['texte'];
            $objetmail = $data['objet'];
            $destinataire = $Objet->getUser()->getEmail();

            $message = \Swift_Message::newInstance()
                    ->setSubject($objetmail)
                    ->setFrom('faridsahlimescam@voila.fr')
                    ->setTo($destinataire)
                    ->setBody($this->renderView('fsmEchangeBundle:Objets:formatMail.html.twig', array('textemail' => $texte)));


            $mailer = $this->get('mailer');
            $result = $mailer->send($message);

            $email_expediteur = $this->get('security.context')->getToken()->getUser()->getEmail();
            $email_nom = $this->get('security.context')->getToken()->getUser()-> getUsername();

            $message_texte = 'Bonjour,' . "\n\n" . 'Voici un message au format texte';
            $message_html = '<html> 
     <head> 
     <title>Titre</title> 
     </head> 
     <body>Test de message</body> 
     </html>';

            //----------------------------------------------- 
            //GENERE LA FRONTIERE DU MAIL ENTRE TEXTE ET HTML 
            //----------------------------------------------- 

            $frontiere = '-----=' . md5(uniqid(mt_rand()));

            //----------------------------------------------- 
            //HEADERS DU MAIL 
            //----------------------------------------------- 

            $headers = 'From: "Nom" <' . $email_expediteur . '>' . "\n";
            $headers .= 'Return-Path: <' . $email_expediteur . '>' . "\n";
            $headers .= 'MIME-Version: 1.0' . "\n";
            $headers .= 'Content-Type: multipart/alternative; boundary="' . $frontiere . '"';

            //----------------------------------------------- 
            //MESSAGE TEXTE 
            //----------------------------------------------- 
            $message =$email_nom.' est interesse par l\'objet mentionne ci-dessus. Voici son message.  '.$texte;
//            $message = $texte;
            $sujet = "Votre objet " . $Objet->getNom() . " du site La Manufacture" . "-" . $data['objet'];
            ini_set("SMTP", "smtp.sfr.fr");
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
            $headers .= "From: " . $email_expediteur . "\r\n";




            if (mail($destinataire, $sujet, $message, $headers)) {
                $EnvoiMail = 'OK';
            } else {
                $EnvoiMail = 'KO';
            }


//                             $spool = $mailer->getTransport()->getSpool();
//                              $transport = $this->get('swiftmailer.transport.real');
//                              $spool->flushQueue($transport);


            return $this->redirect
                            ($this->generateUrl('fsm_objet_show', array('id' => $id)));
        }





        return $this->render('fsmEchangeBundle:Objets:Mail.html.twig', array('objet' => $id, 'form' => $form->createView()));
    }

    public function objetMailAction($id) {
        
    }

    public function Habilitation($autorisation) {
        $autorisation = 'KO';
        $user = $this->get('security.context')->getToken()->getUser();
            if (true === $user->getHabilite()) {
                $autorisation = 'OK';
            }
            else
            { throw new AccessDeniedException();}
        return $autorisation;
    }

    public function supprObjetAction(Objet $id) {


        $em = $this->getDoctrine()->getManager();

        $photos = $id->getPhotos();


        foreach ($photos as $photo) {
            $em->remove($photo);
        }
        $em->remove($id);
        $em->flush();

        return $this->redirect
                        ($this->generateUrl('fsm_objets_mes'));
    }

}
