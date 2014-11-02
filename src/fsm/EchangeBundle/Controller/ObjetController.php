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
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ObjetController extends Controller {

    /**
     * @Route("/ajouterObjet", name="fsm_objet_ajout")
     * @Security("has_role('ROLE_USER')") 
     */
    public function ajouterObjetAction() {

        $autorisation = $this->container->get('fsm_Echange.habilitation')->Autorisation();

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
 $autorisation = $this->container->get('fsm_Echange.habilitation')->Autorisation();
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
$autorisation = $this->container->get('fsm_Echange.habilitation')->Autorisation();
        if ($autorisation === 'OK') {
            $user = $this->get('security.context')->getToken()->getUser();
            $id = $user->getId();
            $em = $this->getDoctrine()->getManager();

            // $gestion permet de distinguer la fenêtre ou on gère les objets de celle où on les consulte.
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

$autorisation = $this->container->get('fsm_Echange.habilitation')->Autorisation();
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

    // La visualisation des 3 derniers objets créés sont visibles sur la page d'accueil.
    //Il ne faut donc pas restreindre l'accès à cette url.

    /**
     * @Route("/showObjet/{id}", name="fsm_objet_show")
     * @Template("fsmEchangeBundle:Objets:objet.html.twig")
     * @param type $id
     * @return type
     */
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
        $demande = FALSE;
        return array('objetphotos' => $liste_objet, 'is_owner' => $is_owner, 'demande' => $demande);
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
            $user = $this->get('security.context')->getToken()->getUser();
            $texte = $data['texte'];
            $objetmail = $data['objet'];
            $destinataire = $Objet->getUser()->getEmail();
            $emetteur = $user->getEmail();
            $message = \Swift_Message::newInstance()
                    ->setSubject($objetmail)
                    ->setFrom($emetteur)
                    ->setTo($destinataire)
                    ->setBody($this->renderView('fsmEchangeBundle:Objets:formatMail.html.twig', array('textemail' => $texte)));
            $mailer = $this->get('mailer');
            $type = $message->getHeaders()->get('Content-Type');
            $type->setValue('text/html');
            $type->setParameter('charset', 'utf-8');
            $result = $mailer->send($message);

            return $this->redirect
                            ($this->generateUrl('fsm_objet_show', array('id' => $id)));
        }





        return $this->render('fsmEchangeBundle:Objets:Mail.html.twig', array('objet' => $id, 'form' => $form->createView()));
    }

    public function objetMailAction($id) {
        
    }

    public function Habilitation($autorisation) {
        // Ancienne version avant creation service
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
//             var_dump($result);
            return $this->render('fsmEchangeBundle:Default:habilite.html.twig');
//            throw new AccessDeniedException();
        }
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
