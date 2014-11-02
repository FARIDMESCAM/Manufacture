<?php

namespace fsm\EchangeBundle\Services;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use fsm\userBundle\Entity\user;
use Symfony\Component\DependencyInjection\ContainerAware;

class habilitation extends Controller {
    
    protected $securite;
    
    // Je passe dans le constructeur de mon service un autre service.
    // le nom a été dur à trouver.
    public function __construct (\Symfony\Component\Security\Core\SecurityContextInterface $securite)
 {
$this->securite = $securite;
}

    public function Autorisation () {
        $autorisation = 'KO';
     if (true === $this->securite->getToken()->getUser()->getHabilite()) {
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
            return $this->render('fsmEchangeBundle:Default:habilite.html.twig');}
    return $autorisation;
    } 
    
}

