<?php

namespace fsm\EchangeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use fsm\EchangeBundle\Entity\Objet;
use fsm\EchangeBundle\Form\ObjetType;
use fsm\EchangeBundle\Form\FormHandler;
use fsm\EchangeBundle\Entity\Categorie;
use fsm\EchangeBundle\Entity\Photo;
use fsm\userBundle\Entity\user;
use Doctrine\ORM\Query\ResultSetMappingBuilder;
use fsm\EchangeBundle\Form\RechercheType;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
//use fsm\EchangeBundle\Command\EmailCommand;



class ObjetController extends Controller {

    
    /**
     * @Route("/ajouterObjet", name="fsm_objet_ajout") 
     */
    public function ajouterObjetAction() {
        $autorisation = 'KO';
        $autorisation = $this->Habilitation($autorisation);
         if($autorisation=== 'OK')
         {
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
    }
    else
    {}

    }


    
        
    
    public function updateObjetAction($id) {
         $this->Habilitation();
        $em = $this->getDoctrine()->getManager();
        $Objet = $em->getRepository('fsmEchangeBundle:Objet')->find($id);
        $form = $this->createForm(new ObjetType(), $Objet);
           $formHandler = new FormHandler($form, $this->get('request'), $em);
        if ($formHandler->process()) {
            return $this->redirect
                            ($this->generateUrl('fsm_photo_ajout_O', array('id' => $Objet->getId())));
        }
     return $this->render('fsmEchangeBundle:Objets:ajouter.html.twig', array('form' => $form->createView(),));
    
        
    }

    public function ListMesObjetAction() {
//Vérification utilisateur connecté et habilité.
        $this->Habilitation();
        $user = $this->get('security.context')->getToken()->getUser();
        $id = $user->getId();
        $em = $this->getDoctrine()->getManager();
        
        // $ gestion permet de distinguer la fenêtre ou on gère les objets de celle où on les consulte.
        // ces 2 fenêtres héritent du même template .
        $gestion = 'YES';
        $liste_objet = $em->getRepository('fsmEchangeBundle:Objet')->getObjetsPhotosByUser($user);
        return $this->render('fsmEchangeBundle:Objets:objetsPerso.html.twig', array('objetphotos' => $liste_objet,'gestion'=>$gestion));
    }
    
    public function ListObjetsAction() {
         $autorisation = 'KO';
         $autorisation = $this->Habilitation($autorisation);
         if($autorisation=== 'OK')
         {
            $em = $this->getDoctrine()->getManager();
            $gestion = 'NO';

            
            $defaultData = array();
           $form = $this->createFormBuilder($defaultData)
               ->add('name', 'text',array( 'required'  => false,'label'=>'Votre Recherche','attr' => array('class' => 'form-control')))
                ->add('categories', 'entity', array(
                    'required'  => false,
                    //'expanded' => true,
//                    'empty_value' => 'Choisissez une option',
                    'label' => 'Categorie de votre objet',
                    'class' => 'fsm\EchangeBundle\Entity\Categorie',
                    'multiple' => false,
                    'property' => 'getNom',
                    'attr' => array('class' => 'form-control')))                  
//                    ->add('rechercher', 'submit')
               ->getForm();
            $form->handleRequest($this->get('request'));
                        if ($form->isValid()) {
                $data = $form->getData();
               $test = '%'.$data['name'].'%';
               $cat = $data['categories'];
//                 var_dump($cat);
                 // On a permis dans la liste la saisie de valeur null -> si null, on prend toutes les valeurs.
                 
                 if( $cat === null)
                 { $cat =  $em->getRepository('fsmEchangeBundle:Categorie')->findAll(); }
                 // Si pas nul, on transforme l'objet en tableau
 else               {$cat = array($cat);}
               $criteres = array(('%'.$data['name'].'%'),$cat);
//               var_dump($cat);
                               $liste_objet = $em->getRepository('fsmEchangeBundle:Objet')->search($criteres);
      
            

        $em = $this->getDoctrine()->getManager();
        $formHandler = new FormHandler($form, $this->get('request'), $em);

            return $this->render('fsmEchangeBundle:Objets:objetsList.html.twig',
                    array('form' => $form->createView(),'objetphotos' => $liste_objet,'gestion'=>$gestion));
         }
         
           
        $liste_objet = $em->getRepository('fsmEchangeBundle:Objet')->test();
      
      
        $formHandler = new FormHandler($form, $this->get('request'), $em);
         
         return $this->render('fsmEchangeBundle:Objets:objetsList.html.twig',
                    array('form' => $form->createView(),'objetphotos' => $liste_objet,'gestion'=>$gestion)); 
         
         }
         else
         {
             return $this->render('fsmEchangeBundle:Default:habilite.html.twig');} 
         
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
        if($user === $userObjet) {
            $is_owner = true;
        } else {
            $is_owner = false;
        }

        return $this->render('fsmEchangeBundle:Objets:objet.html.twig', array('objetphotos' => $liste_objet,'is_owner'=>$is_owner));
    }
    
    public function envoiMailAction($id){
        
         $defaultData = array();
           $form = $this->createFormBuilder($defaultData)
               ->add('objet', 'text',array( 'required'  => false,'label'=>'Objet du mail','attr' => array('class' => 'form-control')))
               ->add('texte', 'textarea',array( 'required'  => false,'label'=>'Objet du mail','attr' => array('class' => 'form-control')))
               ->add('envoyer', 'submit',array( 'label'=>'Envoyer un mail'))
               ->getForm();
            $form->handleRequest($this->get('request'));
                        if ($form->isValid()) {
                            $em = $this->getDoctrine()->getManager();
                            $Objet = $em->getRepository('fsmEchangeBundle:Objet')->getObjetPhotosByObjet($id);
                            $Objet = $Objet['0']; 
                            
                            $data = $form->getData();

                             $texte= $data['texte'];
                             $objetmail= $data['objet'];
                             $destinataire = $Objet->getUser()->getEmail();
                       
                              $message = \Swift_Message::newInstance()
                                 ->setSubject($objetmail)
                                 ->setFrom('faridsahlimescam@voila.fr')
                                 ->setTo($destinataire)
                                 ->setBody($this->renderView('fsmEchangeBundle:Objets:formatMail.html.twig', array('textemail' => $texte)));
                              

                              $mailer = $this->get('mailer');
                              $result = $mailer->send($message);
//                             $spool = $mailer->getTransport()->getSpool();
//                              $transport = $this->get('swiftmailer.transport.real');
//                              $spool->flushQueue($transport);
                              
                              
                             return $this->redirect
                            ($this->generateUrl('fsm_objet_show', array('id' => $id)));
                         
                            
                        }
                            
               
            


            return $this->render('fsmEchangeBundle:Objets:Mail.html.twig',
                    array('objet'=>$id,'form' => $form->createView()));
        
        
        
        
        
        
    }
    
    public function objetMailAction($id){
        
        
        
    }
    
    public function Habilitation($autorisation) {
        
        $user = $this->get('security.context')->getToken()->getUser();
         if(false === $this->get('security.context')->isGranted('ROLE_USER')) 
             {
         throw new AccessDeniedException();
             
         }
         
        else
         {  
         if ( true === $user->getHabilite())  
         {              $autorisation = 'OK';}
         }
         
         
        return  $autorisation;
        
    }




public function supprObjetAction(Objet $id){
    

    $em = $this->getDoctrine()->getManager();
    
   $photos = $id->getPhotos();


    foreach ($photos as $photo){
      $em->remove($photo);    
    }
        $em->remove($id);
        $em->flush();
         
        return $this->redirect
                            ($this->generateUrl('fsm_objets_mes'));
       
}


}
