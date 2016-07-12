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

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/api')) {
                // wbc_api_homepage
                if (rtrim($pathinfo, '/') === '/api') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_wbc_api_homepage;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'wbc_api_homepage');
                    }

                    return array (  '_controller' => 'Wbc\\APIBundle\\Controller\\DefaultController::indexAction',  '_route' => 'wbc_api_homepage',);
                }
                not_wbc_api_homepage:

                // nelmio_api_doc_index
                if (0 === strpos($pathinfo, '/api/doc') && preg_match('#^/api/doc(?:/(?P<view>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_nelmio_api_doc_index;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nelmio_api_doc_index')), array (  '_controller' => 'Nelmio\\ApiDocBundle\\Controller\\ApiDocController::indexAction',  'view' => 'default',));
                }
                not_nelmio_api_doc_index:

            }

            if (0 === strpos($pathinfo, '/administrator/translate')) {
                // lexik_translation_overview
                if (rtrim($pathinfo, '/') === '/administrator/translate') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_lexik_translation_overview;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'lexik_translation_overview');
                    }

                    return array (  '_controller' => 'Lexik\\Bundle\\TranslationBundle\\Controller\\TranslationController::overviewAction',  '_route' => 'lexik_translation_overview',);
                }
                not_lexik_translation_overview:

                // lexik_translation_grid
                if ($pathinfo === '/administrator/translate/grid') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_lexik_translation_grid;
                    }

                    return array (  '_controller' => 'Lexik\\Bundle\\TranslationBundle\\Controller\\TranslationController::gridAction',  '_route' => 'lexik_translation_grid',);
                }
                not_lexik_translation_grid:

                // lexik_translation_new
                if ($pathinfo === '/administrator/translate/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_lexik_translation_new;
                    }

                    return array (  '_controller' => 'Lexik\\Bundle\\TranslationBundle\\Controller\\TranslationController::newAction',  '_route' => 'lexik_translation_new',);
                }
                not_lexik_translation_new:

                // lexik_translation_invalidate_cache
                if ($pathinfo === '/administrator/translate/invalidate-cache') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_lexik_translation_invalidate_cache;
                    }

                    return array (  '_controller' => 'Lexik\\Bundle\\TranslationBundle\\Controller\\TranslationController::invalidateCacheAction',  '_route' => 'lexik_translation_invalidate_cache',);
                }
                not_lexik_translation_invalidate_cache:

                if (0 === strpos($pathinfo, '/administrator/translate/api/translations')) {
                    // lexik_translation_list
                    if ($pathinfo === '/administrator/translate/api/translations') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_lexik_translation_list;
                        }

                        return array (  '_controller' => 'Lexik\\Bundle\\TranslationBundle\\Controller\\RestController::listAction',  '_route' => 'lexik_translation_list',);
                    }
                    not_lexik_translation_list:

                    // lexik_translation_profiler
                    if (0 === strpos($pathinfo, '/administrator/translate/api/translations/profiler') && preg_match('#^/administrator/translate/api/translations/profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_lexik_translation_profiler;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'lexik_translation_profiler')), array (  '_controller' => 'Lexik\\Bundle\\TranslationBundle\\Controller\\RestController::listByProfileAction',));
                    }
                    not_lexik_translation_profiler:

                    // lexik_translation_update
                    if (preg_match('#^/administrator/translate/api/translations/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_lexik_translation_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'lexik_translation_update')), array (  '_controller' => 'Lexik\\Bundle\\TranslationBundle\\Controller\\RestController::updateAction',));
                    }
                    not_lexik_translation_update:

                    // lexik_translation_delete_locale
                    if (preg_match('#^/administrator/translate/api/translations/(?P<id>[^/]++)/(?P<locale>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_lexik_translation_delete_locale;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'lexik_translation_delete_locale')), array (  '_controller' => 'Lexik\\Bundle\\TranslationBundle\\Controller\\RestController::deleteTranslationAction',));
                    }
                    not_lexik_translation_delete_locale:

                    // lexik_translation_delete
                    if (preg_match('#^/administrator/translate/api/translations/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_lexik_translation_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'lexik_translation_delete')), array (  '_controller' => 'Lexik\\Bundle\\TranslationBundle\\Controller\\RestController::deleteAction',));
                    }
                    not_lexik_translation_delete:

                }

            }

        }

        // set_locale
        if (0 === strpos($pathinfo, '/locale') && preg_match('#^/locale/(?P<_locale>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'set_locale');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'set_locale')), array (  '_controller' => 'Wbc\\ThemeBundle\\Controller\\DefaultController::localeAction',));
        }

        // refresh_notifications
        if (rtrim($pathinfo, '/') === '/refresh-notifications') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'refresh_notifications');
            }

            return array (  '_controller' => 'Wbc\\ThemeBundle\\Controller\\DefaultController::notificationsAction',  '_route' => 'refresh_notifications',);
        }

        // wbc_frontend_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'wbc_frontend_homepage');
            }

            return array (  '_controller' => 'Wbc\\FrontendBundle\\Controller\\DefaultController::indexAction',  '_route' => 'wbc_frontend_homepage',);
        }

        // grand_central
        if ($pathinfo === '/session/dispatcher') {
            return array (  '_controller' => 'Wbc\\FrontendBundle\\Controller\\DefaultController::grandCentralAction',  '_route' => 'grand_central',);
        }

        if (0 === strpos($pathinfo, '/administrator')) {
            if (0 === strpos($pathinfo, '/administrator/permission')) {
                // permission_index
                if (rtrim($pathinfo, '/') === '/administrator/permission') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_permission_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'permission_index');
                    }

                    return array (  '_controller' => 'Wbc\\AdministratorBundle\\Controller\\PermissionController::indexAction',  '_route' => 'permission_index',);
                }
                not_permission_index:

                // permission_show
                if (preg_match('#^/administrator/permission/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_permission_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'permission_show')), array (  '_controller' => 'Wbc\\AdministratorBundle\\Controller\\PermissionController::showAction',));
                }
                not_permission_show:

                // permission_new
                if ($pathinfo === '/administrator/permission/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_permission_new;
                    }

                    return array (  '_controller' => 'Wbc\\AdministratorBundle\\Controller\\PermissionController::newAction',  '_route' => 'permission_new',);
                }
                not_permission_new:

                // permission_edit
                if (preg_match('#^/administrator/permission/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_permission_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'permission_edit')), array (  '_controller' => 'Wbc\\AdministratorBundle\\Controller\\PermissionController::editAction',));
                }
                not_permission_edit:

                // permission_delete
                if (preg_match('#^/administrator/permission/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'permission_delete')), array (  '_controller' => 'Wbc\\AdministratorBundle\\Controller\\PermissionController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/administrator/role')) {
                // role_index
                if (rtrim($pathinfo, '/') === '/administrator/role') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_role_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'role_index');
                    }

                    return array (  '_controller' => 'Wbc\\AdministratorBundle\\Controller\\RoleController::indexAction',  '_route' => 'role_index',);
                }
                not_role_index:

                // role_show
                if (preg_match('#^/administrator/role/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_role_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'role_show')), array (  '_controller' => 'Wbc\\AdministratorBundle\\Controller\\RoleController::showAction',));
                }
                not_role_show:

                // role_new
                if ($pathinfo === '/administrator/role/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_role_new;
                    }

                    return array (  '_controller' => 'Wbc\\AdministratorBundle\\Controller\\RoleController::newAction',  '_route' => 'role_new',);
                }
                not_role_new:

                // role_edit
                if (preg_match('#^/administrator/role/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_role_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'role_edit')), array (  '_controller' => 'Wbc\\AdministratorBundle\\Controller\\RoleController::editAction',));
                }
                not_role_edit:

                // role_delete
                if (preg_match('#^/administrator/role/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'role_delete')), array (  '_controller' => 'Wbc\\AdministratorBundle\\Controller\\RoleController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/administrator/i18nresource')) {
                // i18nresource_index
                if (rtrim($pathinfo, '/') === '/administrator/i18nresource') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_i18nresource_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'i18nresource_index');
                    }

                    return array (  '_controller' => 'Wbc\\AdministratorBundle\\Controller\\I18NResourceController::indexAction',  '_route' => 'i18nresource_index',);
                }
                not_i18nresource_index:

                // i18nresource_show
                if (preg_match('#^/administrator/i18nresource/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_i18nresource_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'i18nresource_show')), array (  '_controller' => 'Wbc\\AdministratorBundle\\Controller\\I18NResourceController::showAction',));
                }
                not_i18nresource_show:

                // i18nresource_new
                if ($pathinfo === '/administrator/i18nresource/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_i18nresource_new;
                    }

                    return array (  '_controller' => 'Wbc\\AdministratorBundle\\Controller\\I18NResourceController::newAction',  '_route' => 'i18nresource_new',);
                }
                not_i18nresource_new:

                // i18nresource_edit
                if (preg_match('#^/administrator/i18nresource/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_i18nresource_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'i18nresource_edit')), array (  '_controller' => 'Wbc\\AdministratorBundle\\Controller\\I18NResourceController::editAction',));
                }
                not_i18nresource_edit:

                // i18nresource_delete
                if (preg_match('#^/administrator/i18nresource/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'i18nresource_delete')), array (  '_controller' => 'Wbc\\AdministratorBundle\\Controller\\I18NResourceController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/administrator/settings')) {
                // settings_index
                if (rtrim($pathinfo, '/') === '/administrator/settings') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_settings_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'settings_index');
                    }

                    return array (  '_controller' => 'Wbc\\AdministratorBundle\\Controller\\SettingsController::indexAction',  '_route' => 'settings_index',);
                }
                not_settings_index:

                // settings_show
                if (preg_match('#^/administrator/settings/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_settings_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'settings_show')), array (  '_controller' => 'Wbc\\AdministratorBundle\\Controller\\SettingsController::showAction',));
                }
                not_settings_show:

                // settings_new
                if ($pathinfo === '/administrator/settings/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_settings_new;
                    }

                    return array (  '_controller' => 'Wbc\\AdministratorBundle\\Controller\\SettingsController::newAction',  '_route' => 'settings_new',);
                }
                not_settings_new:

                // settings_edit
                if (preg_match('#^/administrator/settings/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_settings_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'settings_edit')), array (  '_controller' => 'Wbc\\AdministratorBundle\\Controller\\SettingsController::editAction',));
                }
                not_settings_edit:

                // settings_delete
                if (preg_match('#^/administrator/settings/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'settings_delete')), array (  '_controller' => 'Wbc\\AdministratorBundle\\Controller\\SettingsController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/administrator/user')) {
                // user_index
                if (rtrim($pathinfo, '/') === '/administrator/user') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'user_index');
                    }

                    return array (  '_controller' => 'Wbc\\AdministratorBundle\\Controller\\UserController::indexAction',  '_route' => 'user_index',);
                }
                not_user_index:

                // user_show
                if (preg_match('#^/administrator/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'Wbc\\AdministratorBundle\\Controller\\UserController::showAction',));
                }
                not_user_show:

                // user_new
                if ($pathinfo === '/administrator/user/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_user_new;
                    }

                    return array (  '_controller' => 'Wbc\\AdministratorBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
                }
                not_user_new:

                // user_edit
                if (preg_match('#^/administrator/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_user_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'Wbc\\AdministratorBundle\\Controller\\UserController::editAction',));
                }
                not_user_edit:

                // user_delete
                if (preg_match('#^/administrator/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'Wbc\\AdministratorBundle\\Controller\\UserController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/administrator/locale')) {
                // locale_index
                if (rtrim($pathinfo, '/') === '/administrator/locale') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_locale_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'locale_index');
                    }

                    return array (  '_controller' => 'Wbc\\AdministratorBundle\\Controller\\LocaleController::indexAction',  '_route' => 'locale_index',);
                }
                not_locale_index:

                // locale_show
                if (preg_match('#^/administrator/locale/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_locale_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'locale_show')), array (  '_controller' => 'Wbc\\AdministratorBundle\\Controller\\LocaleController::showAction',));
                }
                not_locale_show:

                // locale_new
                if ($pathinfo === '/administrator/locale/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_locale_new;
                    }

                    return array (  '_controller' => 'Wbc\\AdministratorBundle\\Controller\\LocaleController::newAction',  '_route' => 'locale_new',);
                }
                not_locale_new:

                // locale_edit
                if (preg_match('#^/administrator/locale/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_locale_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'locale_edit')), array (  '_controller' => 'Wbc\\AdministratorBundle\\Controller\\LocaleController::editAction',));
                }
                not_locale_edit:

                // locale_delete
                if (preg_match('#^/administrator/locale/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'locale_delete')), array (  '_controller' => 'Wbc\\AdministratorBundle\\Controller\\LocaleController::deleteAction',));
                }

            }

            // wbc_administrator_homepage
            if (rtrim($pathinfo, '/') === '/administrator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'wbc_administrator_homepage');
                }

                return array (  '_controller' => 'Wbc\\AdministratorBundle\\Controller\\DefaultController::indexAction',  '_route' => 'wbc_administrator_homepage',);
            }

            // wbc_search_page
            if (rtrim($pathinfo, '/') === '/administrator/search') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'wbc_search_page');
                }

                return array (  '_controller' => 'Wbc\\AdministratorBundle\\Controller\\DefaultController::searchAction',  '_route' => 'wbc_search_page',);
            }

            // cache_clear
            if (rtrim($pathinfo, '/') === '/administrator/cache/clear') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'cache_clear');
                }

                return array (  '_controller' => 'Wbc\\AdministratorBundle\\Controller\\DefaultController::cacheClearAction',  '_route' => 'cache_clear',);
            }

            // go
            if (0 === strpos($pathinfo, '/administrator/go') && preg_match('#^/administrator/go/(?P<code>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'go');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'go')), array (  '_controller' => 'Wbc\\AdministratorBundle\\Controller\\DefaultController::goAction',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

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
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

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

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
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

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/media/cache/resolve')) {
            // liip_imagine_filter_runtime
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/rc/(?P<hash>[^/]++)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter_runtime;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter_runtime')), array (  '_controller' => 'liip_imagine.controller:filterRuntimeAction',));
            }
            not_liip_imagine_filter_runtime:

            // liip_imagine_filter
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter')), array (  '_controller' => 'liip_imagine.controller:filterAction',));
            }
            not_liip_imagine_filter:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
