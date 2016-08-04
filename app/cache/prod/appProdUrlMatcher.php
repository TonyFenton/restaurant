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

        if (0 === strpos($pathinfo, '/admin/page')) {
            // admin_page_index
            if (rtrim($pathinfo, '/') === '/admin/page') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin_page_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_page_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\Admin\\PageController::indexAction',  '_route' => 'admin_page_index',);
            }
            not_admin_page_index:

            // admin_page_new
            if ($pathinfo === '/admin/page/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_admin_page_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\Admin\\PageController::newAction',  '_route' => 'admin_page_new',);
            }
            not_admin_page_new:

            // admin_page_show
            if (preg_match('#^/admin/page/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin_page_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_page_show')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\PageController::showAction',));
            }
            not_admin_page_show:

            // admin_page_edit
            if (preg_match('#^/admin/page/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_admin_page_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_page_edit')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\PageController::editAction',));
            }
            not_admin_page_edit:

            // admin_page_delete
            if (preg_match('#^/admin/page/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_admin_page_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_page_delete')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\PageController::deleteAction',));
            }
            not_admin_page_delete:

        }

        // mainPage
        if (preg_match('#^/(?P<slug>[^/]++)?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_mainPage;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mainPage')), array (  'slug' => '',  '_controller' => 'AppBundle\\Controller\\DefaultController::mainPageAction',));
        }
        not_mainPage:

        // childPage
        if (preg_match('#^/(?P<parent>[^/]++)/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'childPage')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::childPageAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
