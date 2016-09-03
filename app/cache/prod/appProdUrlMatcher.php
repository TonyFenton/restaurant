<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
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

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/profile')) {
                // fos_user_change_password
                if ($pathinfo === '/admin/profile/password-change') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
                }

                // fos_user_profile_show
                if ($pathinfo === '/admin/profile/show') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
                }

                // fos_user_profile_edit
                if ($pathinfo === '/admin/profile/edit') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/user/registration')) {
                // fos_user_registration_register
                if ($pathinfo === '/admin/user/registration') {
                    return array (  '_controller' => 'AppBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/admin/user/registration/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/admin/user/registration/check-email') {
                        return array (  '_controller' => 'AppBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }

                    if (0 === strpos($pathinfo, '/admin/user/registration/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/admin/user/registration/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'AppBundle\\Controller\\RegistrationController::confirmAction',));
                        }

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/admin/user/registration/confirmed') {
                            return array (  '_controller' => 'AppBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }

                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/password-reset')) {
            // fos_user_resetting_request
            if ($pathinfo === '/password-reset') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }

            // fos_user_resetting_send_email
            if ($pathinfo === '/password-reset') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }

            // fos_user_resetting_check_email
            if ($pathinfo === '/password-reset/check-email') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }

            // fos_user_resetting_reset
            if (preg_match('#^/password\\-reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        // admin_dashboard
        if ($pathinfo === '/admin') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_admin_dashboard;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\AdminController::dashboardAction',  '_route' => 'admin_dashboard',);
        }
        not_admin_dashboard:

        // mainPage
        if (preg_match('#^/(?P<slug>[^/]++)?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_mainPage;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mainPage')), array (  'slug' => 'homepage',  '_controller' => 'AppBundle\\Controller\\DefaultController::mainPageAction',));
        }
        not_mainPage:

        // childPage
        if (preg_match('#^/(?P<parent>[^/]++)/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'childPage')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::childPageAction',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/footer')) {
                // footer_index
                if (rtrim($pathinfo, '/') === '/admin/footer') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_footer_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'footer_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\FooterController::indexAction',  '_route' => 'footer_index',);
                }
                not_footer_index:

                // footer_new
                if ($pathinfo === '/admin/footer/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_footer_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\FooterController::newAction',  '_route' => 'footer_new',);
                }
                not_footer_new:

                // footer_edit
                if (preg_match('#^/admin/footer/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_footer_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'footer_edit')), array (  '_controller' => 'AppBundle\\Controller\\FooterController::editAction',));
                }
                not_footer_edit:

                // footer_delete
                if (preg_match('#^/admin/footer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_footer_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'footer_delete')), array (  '_controller' => 'AppBundle\\Controller\\FooterController::deleteAction',));
                }
                not_footer_delete:

            }

            if (0 === strpos($pathinfo, '/admin/page')) {
                // page_index
                if (rtrim($pathinfo, '/') === '/admin/page') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_page_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'page_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\PageController::indexAction',  '_route' => 'page_index',);
                }
                not_page_index:

                // page_new
                if ($pathinfo === '/admin/page/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_page_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\PageController::newAction',  '_route' => 'page_new',);
                }
                not_page_new:

                // page_edit
                if (preg_match('#^/admin/page/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_page_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'page_edit')), array (  '_controller' => 'AppBundle\\Controller\\PageController::editAction',));
                }
                not_page_edit:

                // page_delete
                if (preg_match('#^/admin/page/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_page_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'page_delete')), array (  '_controller' => 'AppBundle\\Controller\\PageController::deleteAction',));
                }
                not_page_delete:

            }

            if (0 === strpos($pathinfo, '/admin/user')) {
                // user_index
                if (rtrim($pathinfo, '/') === '/admin/user') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'user_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::indexAction',  '_route' => 'user_index',);
                }
                not_user_index:

                // user_delete
                if (preg_match('#^/admin/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_user_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'AppBundle\\Controller\\UserController::deleteAction',));
                }
                not_user_delete:

                // user_enabled
                if (preg_match('#^/admin/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_user_enabled;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_enabled')), array (  '_controller' => 'AppBundle\\Controller\\UserController::enabledAction',));
                }
                not_user_enabled:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
