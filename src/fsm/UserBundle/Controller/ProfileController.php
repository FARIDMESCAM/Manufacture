<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace fsm\UserBundle\Controller;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Model\UserInterface;
//use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use fsm\EchangeBundle\Form\PhotoType;
//use fsm\EchangeBundle\Entity\Photo;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ProfileController extends Controller {

    /**
     * Show the user
     */
    public function showAction() {
        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        $em = $this->getDoctrine()->getManager();
        $utilisateur = $em->getRepository('fsmUserBundle:User')->find($user);

        $em = $this->getDoctrine()->getManager();
        $liste_user_photos = $em->getRepository('fsmUserBundle:User')->getUserPhotoP($user);


        return $this->render('fsmUserBundle:Profile:showP.html.twig', array('userphotos' => $liste_user_photos));
//               
        //return $this->container->get('templating')->renderResponse('fsmUserBundle:Profile:show.html.'.$this->container->getParameter('fos_user.template.engine'), array('user' => $user));
    }

    /**
     * Edit the user
     */
    public function editAction(Request $request) {
        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->container->get('event_dispatcher');

        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->container->get('fos_user.profile.form.factory');

        $form = $formFactory->createForm();
        $form->setData($user);

        $em = $this->getDoctrine()->getManager();
        $liste_user_photos = $em->getRepository('fsmUserBundle:User')->getUserPhotoP($user);


        if ('POST' === $request->getMethod()) {
            $form->bind($request);

            if ($form->isValid()) {
                /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
                $userManager = $this->container->get('fos_user.user_manager');

                $event = new FormEvent($form, $request);
                $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_SUCCESS, $event);

                $userManager->updateUser($user);

                if (null === $response = $event->getResponse()) {
                    $url = $this->container->get('router')->generate('fos_user_profile_show');
                    $response = new RedirectResponse($url);
                }

                $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

                return $response;
            }
        }

        return $this->container->get('templating')->renderResponse(
                        'FOSUserBundle:Profile:edit.html.' . $this->container->getParameter('fos_user.template.engine'), array('form' => $form->createView(), 'userphotos' => $liste_user_photos));
    }

    public function showProfileAction($id) {
        $em = $this->getDoctrine()->getManager();
        $utilisateur = $em->getRepository('fsmUserBundle:User')->find($id);

        $em = $this->getDoctrine()->getManager();
        $liste_user_photos = $em->getRepository('fsmUserBundle:User')->getUserPhotoP($id);


        return $this->render('fsmUserBundle:Profile:showP.html.twig', array('userphotos' => $liste_user_photos));
    }

    /**
     * @Route("/listUser", name="fsm_user_Profile_list") 
     * @Template("fsmUserBundle:Default:list.html.twig")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function listUserAction() {
        $em = $this->getDoctrine()->getManager();
        $utilisateurs = $em->getRepository('fsmUserBundle:User')->getlistUserPhoto();

//        var_dump($utilisateurs);
        return array('users' => $utilisateurs);
    }

    /**
     * @Route("/user_admin/{id}", name="fsm_user_admin") 
     * @Template("fsmUserBundle:Default:list.html.twig")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function rendreAdminAction($id) {
         $em = $this->getDoctrine()->getManager();
        $utilisateur = $em->getRepository('fsmUserBundle:User')->find($id);
        $utilisateur->addRole('ROLE_ADMIN');
//        $em = $this->getDoctrine()->getManager();
        $utilisateurs = $em->getRepository('fsmUserBundle:User')->getlistUserPhoto();

        return array('users' => $utilisateurs);
        
    }
/**
     * @Route("/user_suppr_admin/{id}", name="fsm_user_suppr_admin") 
     * @Template("fsmUserBundle:Default:list.html.twig")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function enleverAdminAction($id) {
         $em = $this->getDoctrine()->getManager();
        $utilisateur = $em->getRepository('fsmUserBundle:User')->find($id);
        $utilisateur->removeRole('ROLE_ADMIN');
//        $em = $this->getDoctrine()->getManager();
        $utilisateurs = $em->getRepository('fsmUserBundle:User')->getlistUserPhoto();

        return array('users' => $utilisateurs);
        
    }
    
    
}
