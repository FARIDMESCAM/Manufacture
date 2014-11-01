<?php

namespace fsm\EchangeBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use fsm\EchangeBundle\Entity\Demande;
use fsm\EchangeBundle\Entity\Compte;

class MajStatutDemandeCommand extends ContainerAwareCommand {

    protected function configure() {
        $this
                ->setName('Echange:MajStatutDemande')
                ->setDescription('Mise à jour du statut des demandes')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        $em = $this->getContainer()->get('doctrine')->getManager();

        // Mise au statut En Cours
        $Demandes = $em->getRepository('fsmEchangeBundle:Demande')->DemandesADemarrer();
        foreach ($Demandes as $Demande) {
            $Demande->setStatut(2);
            $em->flush();
        }
         
        
        // Mise au statut sans suite
              $Demandes = $em->getRepository('fsmEchangeBundle:Demande')->DemandesSansSuite();
        foreach ($Demandes as $Demande) {
            $Demande->setStatut(5);
            $em->flush();
        }
        
    }

}
