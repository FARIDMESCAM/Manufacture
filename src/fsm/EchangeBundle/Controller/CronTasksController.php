<?php

namespace fsm\EchangeBundle\Controller;


use fsm\EchangeBundle\Entity\CronTask;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/crontasks")
 */
class CronTasksController extends Controller
{
    /**
     * @Route("/test", name="fsm_echangebundle_crontasks_test")
     */
    public function testAction()
    {
        $entity = new CronTask();
        
                $entity
            ->setName('vidange cache')
            ->setInterval(5) // Run once every hour
            ->setCommands(array(
               'cache:clear'
            ));
                $em = $this->getDoctrine()->getManager();
        $em->persist($entity);
//
//        $entity
//            ->setName('Envoi mail')
//            ->setInterval(5) // Run once every hour
//            ->setCommands(array(
//               'swiftmailer:spool:send'
//            ));
//
//        $em = $this->getDoctrine()->getManager();
//        $em->persist($entity);
//        $entity2 = new CronTask();
//           $entity2
//            ->setName('cmd')
//            ->setInterval(5) // Run once every hour
//            ->setCommands(array(
//                'crontasks:run'
//            ));
//        $em->persist($entity2);
        $em->flush();

        return new Response('OK!');
    }
}

