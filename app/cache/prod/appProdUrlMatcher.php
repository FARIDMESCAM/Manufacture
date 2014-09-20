<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // fsm_echangebundle_crontasks_test
        if ($pathinfo === '/crontasks/test') {
            return array (  '_controller' => 'fsm\\EchangeBundle\\Controller\\CronTasksController::testAction',  '_route' => 'fsm_echangebundle_crontasks_test',);
        }

        // fsm_echange_main_accueil
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'fsm_echange_main_accueil');
            }

            return array (  '_controller' => 'fsm\\EchangeBundle\\Controller\\MainController::accueilAction',  '_route' => 'fsm_echange_main_accueil',);
        }

        // fsm_objet_ajout
        if ($pathinfo === '/ajouterObjet') {
            return array (  '_controller' => 'fsm\\EchangeBundle\\Controller\\ObjetController::ajouterObjetAction',  '_route' => 'fsm_objet_ajout',);
        }

        // fsm_objet_update
        if (0 === strpos($pathinfo, '/updateObjet') && preg_match('#^/updateObjet(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fsm_objet_update')), array (  '_controller' => 'fsm\\EchangeBundle\\Controller\\ObjetController::updateObjetAction',));
        }

        // fsm_echange_accueil
        if ($pathinfo === '/accueil') {
            return array (  '_controller' => 'fsm\\EchangeBundle\\Controller\\MainController::accueilAction',  '_route' => 'fsm_echange_accueil',);
        }

        // fsm_objet_supprimer
        if (0 === strpos($pathinfo, '/supprObjet') && preg_match('#^/supprObjet/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fsm_objet_supprimer')), array (  '_controller' => 'fsm\\EchangeBundle\\Controller\\ObjetController::supprObjetAction',));
        }

        // fsm_objets_mes
        if ($pathinfo === '/mesObjets') {
            return array (  '_controller' => 'fsm\\EchangeBundle\\Controller\\ObjetController::ListMesObjetAction',  '_route' => 'fsm_objets_mes',);
        }

        // fsm_categorie_ajout
        if ($pathinfo === '/ajouterCategorie') {
            return array (  '_controller' => 'fsm\\EchangeBundle\\Controller\\CategorieController::ajouterCategorieAction',  '_route' => 'fsm_categorie_ajout',);
        }

        // fsm_categorie_modif
        if (0 === strpos($pathinfo, '/modifCategorie') && preg_match('#^/modifCategorie/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fsm_categorie_modif')), array (  '_controller' => 'fsm\\EchangeBundle\\Controller\\CategorieController::modifCategorieAction',));
        }

        // fsm_categorie_list
        if ($pathinfo === '/ListCategorie') {
            return array (  '_controller' => 'fsm\\EchangeBundle\\Controller\\CategorieController::ListCategorieAction',  '_route' => 'fsm_categorie_list',);
        }

        if (0 === strpos($pathinfo, '/ajouterPhoto')) {
            // fsm_photo_ajout_O
            if (0 === strpos($pathinfo, '/ajouterPhotoO') && preg_match('#^/ajouterPhotoO/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fsm_photo_ajout_O')), array (  '_controller' => 'fsm\\EchangeBundle\\Controller\\PhotoController::ajouterPhotoOAction',));
            }

            // fsm_photo_ajout_U
            if (0 === strpos($pathinfo, '/ajouterPhotoU') && preg_match('#^/ajouterPhotoU/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fsm_photo_ajout_U')), array (  '_controller' => 'fsm\\EchangeBundle\\Controller\\PhotoController::ajouterPhotoUAction',));
            }

        }

        // fsm_objet_list
        if ($pathinfo === '/Objets') {
            return array (  '_controller' => 'fsm\\EchangeBundle\\Controller\\ObjetController::ListObjetsAction',  '_route' => 'fsm_objet_list',);
        }

        // fsm_photo_supprimer
        if (0 === strpos($pathinfo, '/supprPhoto') && preg_match('#^/supprPhoto/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fsm_photo_supprimer')), array (  '_controller' => 'fsm\\EchangeBundle\\Controller\\PhotoController::supprPhotoAction',));
        }

        // fsm_photo_principale
        if (0 === strpos($pathinfo, '/PhotoPr') && preg_match('#^/PhotoPr/(?P<photo>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fsm_photo_principale')), array (  '_controller' => 'fsm\\EchangeBundle\\Controller\\PhotoController::photoPrincipaleAction',));
        }

        if (0 === strpos($pathinfo, '/show')) {
            // fsm_profile_showPerso
            if (0 === strpos($pathinfo, '/showPrP') && preg_match('#^/showPrP/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fsm_profile_showPerso')), array (  '_controller' => 'fsm\\UserBundle\\Controller\\ProfileController::showProfileAction',));
            }

            // fsm_objet_show
            if (0 === strpos($pathinfo, '/showObjet') && preg_match('#^/showObjet/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fsm_objet_show')), array (  '_controller' => 'fsm\\EchangeBundle\\Controller\\ObjetController::showObjetAction',));
            }

        }

        // fsm_user_envoimail
        if (0 === strpos($pathinfo, '/envoimail') && preg_match('#^/envoimail/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fsm_user_envoimail')), array (  '_controller' => 'fsm\\EchangeBundle\\Controller\\ObjetController::envoiMailAction',));
        }

        // fsm_objet_envoimail
        if (0 === strpos($pathinfo, '/objetmail') && preg_match('#^/objetmail/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fsm_objet_envoimail')), array (  '_controller' => 'fsm\\EchangeBundle\\Controller\\ObjetController::objetMailAction',));
        }

        // fsm_taches
        if ($pathinfo === '/test') {
            return array (  '_controller' => 'fsmEchangeBundle:CronTask:test',  '_route' => 'fsm_taches',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'fsm\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'fsm\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'fsm\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'fsm\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'fsm\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'fsm\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'fsm\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/cron-manager')) {
            // BCCCronManagerBundle_index
            if (rtrim($pathinfo, '/') === '/cron-manager') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'BCCCronManagerBundle_index');
                }

                return array (  '_controller' => 'BCC\\CronManagerBundle\\Controller\\DefaultController::indexAction',  '_route' => 'BCCCronManagerBundle_index',);
            }

            // BCCCronManagerBundle_edit
            if (preg_match('#^/cron\\-manager/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'BCCCronManagerBundle_edit')), array (  '_controller' => 'BCC\\CronManagerBundle\\Controller\\DefaultController::editAction',));
            }

            // BCCCronManagerBundle_add
            if ($pathinfo === '/cron-manager/add') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_BCCCronManagerBundle_add;
                }

                return array (  '_controller' => 'BCC\\CronManagerBundle\\Controller\\DefaultController::addAction',  '_route' => 'BCCCronManagerBundle_add',);
            }
            not_BCCCronManagerBundle_add:

            // BCCCronManagerBundle_wakeup
            if (preg_match('#^/cron\\-manager/(?P<id>[^/]++)/wakeup$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'BCCCronManagerBundle_wakeup')), array (  '_controller' => 'BCC\\CronManagerBundle\\Controller\\DefaultController::wakeupAction',));
            }

            // BCCCronManagerBundle_suspend
            if (preg_match('#^/cron\\-manager/(?P<id>[^/]++)/suspend$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'BCCCronManagerBundle_suspend')), array (  '_controller' => 'BCC\\CronManagerBundle\\Controller\\DefaultController::suspendAction',));
            }

            // BCCCronManagerBundle_remove
            if (preg_match('#^/cron\\-manager/(?P<id>[^/]++)/remove$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'BCCCronManagerBundle_remove')), array (  '_controller' => 'BCC\\CronManagerBundle\\Controller\\DefaultController::removeAction',));
            }

            // BCCCronManagerBundle_file
            if (preg_match('#^/cron\\-manager/(?P<id>[^/]++)/file/(?P<type>log|error)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'BCCCronManagerBundle_file')), array (  '_controller' => 'BCC\\CronManagerBundle\\Controller\\DefaultController::fileAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
