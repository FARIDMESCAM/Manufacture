<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/assetic')) {
            if (0 === strpos($pathinfo, '/assetic/jquery_js')) {
                // _assetic_jquery_js
                if ($pathinfo === '/assetic/jquery_js.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery_js',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_jquery_js',);
                }

                // _assetic_jquery_js_0
                if ($pathinfo === '/assetic/jquery_js_jquery.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery_js',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_jquery_js_0',);
                }

            }

            if (0 === strpos($pathinfo, '/assetic/bootstrap_')) {
                if (0 === strpos($pathinfo, '/assetic/bootstrap_js')) {
                    // _assetic_bootstrap_js
                    if ($pathinfo === '/assetic/bootstrap_js.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js',);
                    }

                    if (0 === strpos($pathinfo, '/assetic/bootstrap_js_')) {
                        // _assetic_bootstrap_js_0
                        if ($pathinfo === '/assetic/bootstrap_js_transition_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_0',);
                        }

                        // _assetic_bootstrap_js_1
                        if ($pathinfo === '/assetic/bootstrap_js_alert_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_1',);
                        }

                        // _assetic_bootstrap_js_2
                        if ($pathinfo === '/assetic/bootstrap_js_modal_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_2',);
                        }

                        // _assetic_bootstrap_js_3
                        if ($pathinfo === '/assetic/bootstrap_js_dropdown_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_3',);
                        }

                        // _assetic_bootstrap_js_4
                        if ($pathinfo === '/assetic/bootstrap_js_scrollspy_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_4',);
                        }

                        if (0 === strpos($pathinfo, '/assetic/bootstrap_js_t')) {
                            // _assetic_bootstrap_js_5
                            if ($pathinfo === '/assetic/bootstrap_js_tab_6.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_5',);
                            }

                            // _assetic_bootstrap_js_6
                            if ($pathinfo === '/assetic/bootstrap_js_tooltip_7.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_6',);
                            }

                        }

                        // _assetic_bootstrap_js_7
                        if ($pathinfo === '/assetic/bootstrap_js_popover_8.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_7',);
                        }

                        // _assetic_bootstrap_js_8
                        if ($pathinfo === '/assetic/bootstrap_js_button_9.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_8',);
                        }

                        if (0 === strpos($pathinfo, '/assetic/bootstrap_js_c')) {
                            // _assetic_bootstrap_js_9
                            if ($pathinfo === '/assetic/bootstrap_js_collapse_10.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_9',);
                            }

                            // _assetic_bootstrap_js_10
                            if ($pathinfo === '/assetic/bootstrap_js_carousel_11.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_10',);
                            }

                        }

                        // _assetic_bootstrap_js_11
                        if ($pathinfo === '/assetic/bootstrap_js_affix_12.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_11',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/assetic/bootstrap_less')) {
                    // _assetic_bootstrap_less
                    if ($pathinfo === '/assetic/bootstrap_less.less') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_less',  'pos' => NULL,  '_format' => 'less',  '_route' => '_assetic_bootstrap_less',);
                    }

                    // _assetic_bootstrap_less_0
                    if ($pathinfo === '/assetic/bootstrap_less_bootstrap_1.less') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_less',  'pos' => 0,  '_format' => 'less',  '_route' => '_assetic_bootstrap_less_0',);
                    }

                }

            }

        }

        // _assetic_9baa251
        if ($pathinfo === '/css/9baa251.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '9baa251',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_9baa251',);
        }

        // _assetic_f25b053
        if ($pathinfo === '/js/f25b053.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'f25b053',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_f25b053',);
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // fsm_echange_accueil
        if ($pathinfo === '/accueil') {
            return array (  '_controller' => 'fsm\\EchangeBundle\\Controller\\MainController::accueilAction',  '_route' => 'fsm_echange_accueil',);
        }

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

        // fsm_objet_update
        if (0 === strpos($pathinfo, '/updateObjet') && preg_match('#^/updateObjet/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fsm_objet_update')), array (  '_controller' => 'fsm\\EchangeBundle\\Controller\\ObjetController::updateObjetAction',));
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
