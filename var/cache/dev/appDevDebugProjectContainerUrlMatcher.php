<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // app_auth_tokenauthentication
        if ($pathinfo === '/login') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_app_auth_tokenauthentication;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\AuthController::tokenAuthentication',  '_route' => 'app_auth_tokenauthentication',);
        }
        not_app_auth_tokenauthentication:

        if (0 === strpos($pathinfo, '/api')) {
            // app_auth_secureresource
            if ($pathinfo === '/api/resource') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_app_auth_secureresource;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AuthController::secureResource',  '_route' => 'app_auth_secureresource',);
            }
            not_app_auth_secureresource:

            if (0 === strpos($pathinfo, '/api/branches')) {
                // app_branches_get
                if ($pathinfo === '/api/branches') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_app_branches_get;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\BranchesController::getAction',  '_route' => 'app_branches_get',);
                }
                not_app_branches_get:

                // app_branches_getbranch
                if (preg_match('#^/api/branches/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_app_branches_getbranch;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_branches_getbranch')), array (  '_controller' => 'AppBundle\\Controller\\BranchesController::getBranchAction',));
                }
                not_app_branches_getbranch:

                // app_branches_post
                if ($pathinfo === '/api/branches') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_app_branches_post;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\BranchesController::postAction',  '_route' => 'app_branches_post',);
                }
                not_app_branches_post:

                // app_branches_update
                if (preg_match('#^/api/branches/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_app_branches_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_branches_update')), array (  '_controller' => 'AppBundle\\Controller\\BranchesController::updateAction',));
                }
                not_app_branches_update:

                // app_branches_delete
                if (preg_match('#^/api/branches/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_app_branches_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_branches_delete')), array (  '_controller' => 'AppBundle\\Controller\\BranchesController::deleteAction',));
                }
                not_app_branches_delete:

            }

        }

        // app_default_index
        if ($pathinfo === '/home') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_app_default_index;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'app_default_index',);
        }
        not_app_default_index:

        if (0 === strpos($pathinfo, '/api')) {
            if (0 === strpos($pathinfo, '/api/r')) {
                if (0 === strpos($pathinfo, '/api/requests')) {
                    // app_requests_get
                    if ($pathinfo === '/api/requests') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_app_requests_get;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\RequestsController::getAction',  '_route' => 'app_requests_get',);
                    }
                    not_app_requests_get:

                    // app_requests_getrequest
                    if (preg_match('#^/api/requests/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_app_requests_getrequest;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_requests_getrequest')), array (  '_controller' => 'AppBundle\\Controller\\RequestsController::getRequestAction',));
                    }
                    not_app_requests_getrequest:

                    // app_requests_post
                    if ($pathinfo === '/api/requests') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_app_requests_post;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\RequestsController::postAction',  '_route' => 'app_requests_post',);
                    }
                    not_app_requests_post:

                    // app_requests_update
                    if (preg_match('#^/api/requests/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_app_requests_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_requests_update')), array (  '_controller' => 'AppBundle\\Controller\\RequestsController::updateAction',));
                    }
                    not_app_requests_update:

                    // app_requests_delete
                    if (preg_match('#^/api/requests/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_app_requests_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_requests_delete')), array (  '_controller' => 'AppBundle\\Controller\\RequestsController::deleteAction',));
                    }
                    not_app_requests_delete:

                }

                if (0 === strpos($pathinfo, '/api/rules')) {
                    // app_rules_get
                    if ($pathinfo === '/api/rules') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_app_rules_get;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\RulesController::getAction',  '_route' => 'app_rules_get',);
                    }
                    not_app_rules_get:

                    // app_rules_getrule
                    if (preg_match('#^/api/rules/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_app_rules_getrule;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_rules_getrule')), array (  '_controller' => 'AppBundle\\Controller\\RulesController::getRuleAction',));
                    }
                    not_app_rules_getrule:

                    // app_rules_post
                    if ($pathinfo === '/api/rules') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_app_rules_post;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\RulesController::postAction',  '_route' => 'app_rules_post',);
                    }
                    not_app_rules_post:

                    // app_rules_update
                    if (preg_match('#^/api/rules/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_app_rules_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_rules_update')), array (  '_controller' => 'AppBundle\\Controller\\RulesController::updateAction',));
                    }
                    not_app_rules_update:

                    // app_rules_delete
                    if (preg_match('#^/api/rules/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_app_rules_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_rules_delete')), array (  '_controller' => 'AppBundle\\Controller\\RulesController::deleteAction',));
                    }
                    not_app_rules_delete:

                }

            }

            if (0 === strpos($pathinfo, '/api/studentsAttendance')) {
                // app_studentsattendance_get
                if ($pathinfo === '/api/studentsAttendance') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_app_studentsattendance_get;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\StudentsAttendanceController::getAction',  '_route' => 'app_studentsattendance_get',);
                }
                not_app_studentsattendance_get:

                // app_studentsattendance_getstudentdetails
                if (preg_match('#^/api/studentsAttendance/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_app_studentsattendance_getstudentdetails;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_studentsattendance_getstudentdetails')), array (  '_controller' => 'AppBundle\\Controller\\StudentsAttendanceController::getStudentDetailsAction',));
                }
                not_app_studentsattendance_getstudentdetails:

                // app_studentsattendance_post
                if ($pathinfo === '/api/studentsAttendance') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_app_studentsattendance_post;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\StudentsAttendanceController::postAction',  '_route' => 'app_studentsattendance_post',);
                }
                not_app_studentsattendance_post:

            }

            if (0 === strpos($pathinfo, '/api/tracks')) {
                // app_tracks_get
                if ($pathinfo === '/api/tracks') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_app_tracks_get;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\TracksController::getAction',  '_route' => 'app_tracks_get',);
                }
                not_app_tracks_get:

                // app_tracks_gettrack
                if (preg_match('#^/api/tracks/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_app_tracks_gettrack;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_tracks_gettrack')), array (  '_controller' => 'AppBundle\\Controller\\TracksController::getTrackAction',));
                }
                not_app_tracks_gettrack:

                // app_tracks_post
                if ($pathinfo === '/api/tracks') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_app_tracks_post;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\TracksController::postAction',  '_route' => 'app_tracks_post',);
                }
                not_app_tracks_post:

                // app_tracks_update
                if (preg_match('#^/api/tracks/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_app_tracks_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_tracks_update')), array (  '_controller' => 'AppBundle\\Controller\\TracksController::updateAction',));
                }
                not_app_tracks_update:

                // app_tracks_delete
                if (preg_match('#^/api/tracks/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_app_tracks_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_tracks_delete')), array (  '_controller' => 'AppBundle\\Controller\\TracksController::deleteAction',));
                }
                not_app_tracks_delete:

            }

            if (0 === strpos($pathinfo, '/api/users')) {
                // app_users_get
                if ($pathinfo === '/api/users') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_app_users_get;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\UsersController::getAction',  '_route' => 'app_users_get',);
                }
                not_app_users_get:

                // app_users_getuser
                if (preg_match('#^/api/users/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_app_users_getuser;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_users_getuser')), array (  '_controller' => 'AppBundle\\Controller\\UsersController::getUserAction',));
                }
                not_app_users_getuser:

                // app_users_post
                if ($pathinfo === '/api/users') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_app_users_post;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\UsersController::postAction',  '_route' => 'app_users_post',);
                }
                not_app_users_post:

                // app_users_update
                if (preg_match('#^/api/users/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_app_users_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_users_update')), array (  '_controller' => 'AppBundle\\Controller\\UsersController::updateAction',));
                }
                not_app_users_update:

                // app_users_delete
                if (preg_match('#^/api/users/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_app_users_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_users_delete')), array (  '_controller' => 'AppBundle\\Controller\\UsersController::deleteAction',));
                }
                not_app_users_delete:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
