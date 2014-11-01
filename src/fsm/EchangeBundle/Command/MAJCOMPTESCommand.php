<?php

namespace fsm\EchangeBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use fsm\EchangeBundle\Entity\Demande;
use fsm\EchangeBundle\Entity\Compte;

class MAJCOMPTESCommand extends ContainerAwareCommand {

    protected function configure() {
        $this
                ->setName('Echange:MAJCOMPTES')
                ->setDescription('Mise à jour des comptes apres location')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        $em = $this->getContainer()->get('doctrine')->getManager();


        $Demandes = $em->getRepository('fsmEchangeBundle:Demande')->DemandesEnCoursFinies();
        foreach ($Demandes as $Demande) {
            $user = $Demande->getObjet()->getUser();
            $compteProprio = $em->getRepository('fsmEchangeBundle:Compte')->findOneByUser($user);
            if (!$compteProprio) {
            // Le compte n'existe pas. On le créée.
                $compteProprio = new Compte($user);
                $em->persist($compteProprio);
            }
            // Calcul de la duree de la location 
            $dureeloc = $Demande->getDebut()->diff($Demande->getFin())->days + 1;
            // prix de l'objet par jour
            $prixU = $Demande->getObjet()->getPrix();
//            $output->writeln($prixU); 

            $montantloc = $dureeloc * $prixU;
//            $output->writeln($montantloc); 
            $newsolde = $compteProprio->getSolde() + $montantloc;
            $compteProprio->setSolde($compteProprio->getSolde() + $montantloc);
            $Demande->setStatut(3);
            
            $em->flush();
//            
//           
        }
    }

}
