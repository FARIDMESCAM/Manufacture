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
      



    protected function configure()
    {
        $this
            ->setName('Echange:MAJCOMPTES')
            ->setDescription('Mise à jour des comptes apres location')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
            
    {   $em = $this->getContainer()->get('doctrine')->getManager();
    
     
        $Demandes = $em->getRepository('fsmEchangeBundle:Demande')->DemandesEnCoursFinies();
       foreach ($Demandes as $Demande) {
           $test = $Demande->getId();
           $output->writeln($test);
           $user = $Demande->getObjet()->getUser();
           $compteProprio = $em->getRepository('fsmEchangeBundle:Compte')->findByUser($user);
           if (!$compteProprio)
           {  $test = 'juy';
           $output->writeln($test);
               $compteProprio = new Compte($user);
              $em->persist($compteProprio);
//              $em->flush();
                $test = $compteProprio->getId();
            $output->writeln($test);
           }
//           $output->writeln($compteProprio);
        }
        
    }
}