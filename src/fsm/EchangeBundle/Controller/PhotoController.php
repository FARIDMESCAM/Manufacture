<?php

namespace fsm\EchangeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use fsm\EchangeBundle\Form\FormHandler;
use fsm\EchangeBundle\Entity\Photo;
use fsm\EchangeBundle\Entity\Objet;
use fsm\UserBundle\Entity\User;
use fsm\EchangeBundle\Form\PhotoType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class PhotoController extends Controller {

     /**
     * @Security("has_role('ROLE_USER')") 
     */
    public function ajouterPhotoOAction($id) {


        $objet = $this->getDoctrine()->getManager()
                ->getRepository("fsmEchangeBundle:Objet")
                ->find($id);
        $user = $this->get('security.context')->getToken()->getUser();
        // vérification que l'utilisateur connecté est bien le proprio de l'objet
        if ($user == $objet->getUser()) {
            $is_owner = true;
        } else {
            $is_owner = false;
        }
        if ($is_owner) {
            $liste_objet = $this->getDoctrine()->getManager()
                            ->getRepository('fsmEchangeBundle:Objet')->getObjetPhotosByObjet($id);
            $photo = new Photo($objet);
            $photo->setObjet($objet);
            $test = $this->isPrincipale2($objet);
            $photo->setPrincipal($test);
            $form = $this->createForm(new PhotoType(), $photo);
            $em = $this->getDoctrine()->getManager();

            $formHandler = new FormHandler($form, $this->get('request'), $em);



            if ($formHandler->process()) {
                return $this->redirect
                                //($this->generateUrl('fsm_objets_mes'));
                                ($this->generateUrl('fsm_photo_ajout_O', array('id' => $id)));
            }

            return $this->render('fsmEchangeBundle:Photos:ajouter.html.twig', array('form' => $form->createView(), 'objetphotos' => $liste_objet));
        } else {
            
        }
    }
//     /**
//     * @Security("has_role('ROLE_USER')") 
//     */
    public function ajouterPhotoUAction($id) {

        $user = $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        if ($id != 0) {
            $user = $em->getRepository('fsmUserBundle:user')->find($id);
        }


        $photo = new Photo();
        $photo->setUser($user);

        $liste_photo = $this->getDoctrine()->getManager()
                        ->getRepository('fsmUserBundle:user')->getUserPhotoP($id);

//        var_dump($liste_photo);
        //Attribution automatique de la valeur principale ou non d'une photo


        $test = $this->isPrincipale($user);
        $photo->setPrincipal($test);

        $form = $this->createForm(new PhotoType(), $photo);
        $em = $this->getDoctrine()->getManager();

        $formHandler = new FormHandler($form, $this->get('request'), $em);

        if ($formHandler->process()) {
            if ($user->getHabilite() == FALSE) {
                return $this->render('fsmUserBundle:Default:habilite.html.twig');
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
            }

            return $this->redirect
                            ($this->generateUrl('fos_user_profile_edit'));
        }


        return $this->render('fsmEchangeBundle:Photos:ajouter.html.twig', array('form' => $form->createView(), 'objetphotos' => $liste_photo));
    }
     /**
     * @Security("has_role('ROLE_USER')") 
     */
    public function supprPhotoAction(Photo $id) {
        $update = FALSE;
        if ($id->getUser()) {
            // photo reliée à un user
            $dest = 'User';
            $user = $id->getUser();
            // On teste pour savoir s'il s'agit d'une photo principale
            if ($id->getPrincipal() === TRUE) {
                $update = TRUE;
            }
        } else {
            // photo reliée à un objet
            $dest = 'Obj';
            $objet = $id->getObjet();
            // On stocke l'id de l'objet pour redircetion.
            $ret = $id->getObjet()->getId();
            if ($id->getPrincipal() === TRUE) {
                $update = TRUE;
            }
        }
        $em = $this->getDoctrine()->getManager();
        $em->remove($id);
        $em->flush();
        // si on supprime une photo principale, on en rend une autre principale 
        if ($update === TRUE) {
            if ($dest === 'User') {
                $photo = $em->getRepository("fsmEchangeBundle:Photo")->findOneByUser($user);
                // il se peut qu'il n'y ait plus de photos
                if ($photo)
                    $photo->setPrincipal(TRUE);
            }
            else {
                $photo = $em->getRepository("fsmEchangeBundle:Photo")->findOneByObjet($objet);
                if ($photo) {
                    $photo->setPrincipal(TRUE);
                }
            }
        }
        // On supprime la photo passée en input
        $em->flush();
        $this->get('session')->getFlashBag()
                ->add('info', 'la photo a bien été supprimée');
        if ($dest === 'User') {

            return $this->redirect($this->generateUrl('fos_user_profile_edit'));
        } else {

            return $this->redirect($this->generateUrl('fsm_photo_ajout_O', array('id' => $ret)));
        }
    }
     /**
     * @Security("has_role('ROLE_USER')") 
     */
    public function photoPrincipaleAction($photo) {

        $request = $this->container->get('request');
//            var_dump($request);
        $em = $this->getDoctrine()->getManager();
        $photo = $em->getRepository("fsmEchangeBundle:Photo")->find($photo);
        // On récupère l'utilisateur connecté car c'est le proprio des photos
        $user = $this->get('security.context')->getToken()->getUser();
        if ($photo->getUser()) {
            $Type = 'User';
        } else {
            $Type = 'Objet';
        }

        $em = $this->getDoctrine()->getManager();
        if ($Type === 'User') {
            // On récupère la liste des photos de ce propriétaire
            $photos = $em->getRepository("fsmEchangeBundle:Photo")->findByUser($user);
        } else {

            $Objet = $photo->getObjet()->getId();

            // si var_dump de $Objet = $photo->getObjet(), renvoie objet type proxies ???
            //var_dump($Objet);
            //throw $this -> createNotFoundException ('Page inexistante');

            $photos = $em->getRepository("fsmEchangeBundle:Photo")->findByObjet($Objet);
        }

        // On les définit toutes comme non principale
        foreach ($photos as $photoU) {
            $photoU->setPrincipal(FALSE);
        }
        // On définit la photo passée en input en tant que principale
        $photo->setPrincipal(TRUE);
        // On enregistre l'ensemble de la transaction'
        $em->flush();
        if ($Type === 'User') {

            return $this->redirect($this->generateUrl('fos_user_profile_edit'));
        } // Fin si type user
        else {

            if ($request->isXmlHttpRequest()) {
                $liste_objet = $this->getDoctrine()->getManager()
                                ->getRepository('fsmEchangeBundle:Objet')->getObjetPhotosByObjet($Objet);
//             var_dump($liste_objet);
                return $this->render('fsmEchangeBundle:Photos:listephotos.html.twig', array('objetphotos' => $liste_objet));
            } // fin si XHR
            else {
                return $this->redirect
                                ($this->generateUrl('fsm_photo_ajout_O', array('id' => $photoU->getObjet()->getId())));
            }
        }
    }

    private function isPrincipale(user $user) {
        // On recherche s'il existe déjà une photo principale.
        // Rq : on aurait pu se contenter de recherche une photo.
        $em = $this->getDoctrine()->getManager();
        $photo = $em->getRepository("fsmEchangeBundle:Photo")
                ->findOneBy(array('user' => $user, 'principal' => TRUE));
        if ($photo) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    private function isPrincipale2(objet $objet) {
        $em = $this->getDoctrine()->getManager();
        $photo = $em->getRepository("fsmEchangeBundle:Photo")
                ->findOneBy(array('objet' => $objet, 'principal' => TRUE));
        if ($photo) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

}
