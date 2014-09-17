<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'fsm_echange_accueil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fsm\\EchangeBundle\\Controller\\MainController::accueilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/accueil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fsm_echange_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fsm\\EchangeBundle\\Controller\\MainController::accueilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fsm_objet_ajout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fsm\\EchangeBundle\\Controller\\ObjetController::ajouterObjetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajouterObjet',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fsm_objets_mes' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fsm\\EchangeBundle\\Controller\\ObjetController::ListMesObjetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mesObjets',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fsm_categorie_ajout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fsm\\EchangeBundle\\Controller\\CategorieController::ajouterCategorieAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajouterCategorie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fsm_categorie_modif' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'fsm\\EchangeBundle\\Controller\\CategorieController::modifCategorieAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/modifCategorie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fsm_categorie_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fsm\\EchangeBundle\\Controller\\CategorieController::ListCategorieAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ListCategorie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fsm_photo_ajout_O' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'fsm\\EchangeBundle\\Controller\\PhotoController::ajouterPhotoOAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/ajouterPhotoO',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fsm_photo_ajout_U' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'fsm\\EchangeBundle\\Controller\\PhotoController::ajouterPhotoUAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/ajouterPhotoU',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fsm_objet_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fsm\\EchangeBundle\\Controller\\ObjetController::ListObjetsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Objets',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fsm_photo_supprimer' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'fsm\\EchangeBundle\\Controller\\PhotoController::supprPhotoAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/supprPhoto',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fsm_photo_principale' => array (  0 =>   array (    0 => 'photo',  ),  1 =>   array (    '_controller' => 'fsm\\EchangeBundle\\Controller\\PhotoController::photoPrincipaleAction',  ),  2 =>   array (    'photo' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'photo',    ),    1 =>     array (      0 => 'text',      1 => '/PhotoPr',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fsm_profile_showPerso' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'fsm\\UserBundle\\Controller\\ProfileController::showProfileAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/showPrP',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fsm_objet_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'fsm\\EchangeBundle\\Controller\\ObjetController::showObjetAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/showObjet',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fsm_objet_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'fsm\\EchangeBundle\\Controller\\ObjetController::updateObjetAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/updateObjet',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fsm_user_envoimail' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'fsm\\EchangeBundle\\Controller\\ObjetController::envoiMailAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/envoimail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fsm_objet_envoimail' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'fsm\\EchangeBundle\\Controller\\ObjetController::objetMailAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/objetmail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fsm\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fsm\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fsm\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fsm\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'fsm\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fsm\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fsm\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
