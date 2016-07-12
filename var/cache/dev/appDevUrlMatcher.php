<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
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

        if (0 === strpos($pathinfo, '/css/extra')) {
            // _assetic_backendcss
            if ($pathinfo === '/css/extra.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'backendcss',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_backendcss',);
            }

            // _assetic_backendcss_0
            if ($pathinfo === '/css/extra_sweetalert_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'backendcss',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_backendcss_0',);
            }

        }

        if (0 === strpos($pathinfo, '/assetic/start_js')) {
            // _assetic_start_js
            if ($pathinfo === '/assetic/start_js.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'start_js',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_start_js',);
            }

            if (0 === strpos($pathinfo, '/assetic/start_js_')) {
                // _assetic_start_js_0
                if ($pathinfo === '/assetic/start_js_jquery.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'start_js',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_start_js_0',);
                }

                // _assetic_start_js_1
                if ($pathinfo === '/assetic/start_js_moment.min_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'start_js',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_start_js_1',);
                }

                // _assetic_start_js_2
                if ($pathinfo === '/assetic/start_js_locales.min_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'start_js',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_start_js_2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/libs')) {
            // _assetic_commonlibs
            if ($pathinfo === '/js/libs.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_commonlibs',);
            }

            if (0 === strpos($pathinfo, '/js/libs_')) {
                // _assetic_commonlibs_0
                if ($pathinfo === '/js/libs_jquery.pjax_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_commonlibs_0',);
                }

                // _assetic_commonlibs_1
                if ($pathinfo === '/js/libs_transition_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_commonlibs_1',);
                }

                // _assetic_commonlibs_2
                if ($pathinfo === '/js/libs_collapse_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_commonlibs_2',);
                }

                // _assetic_commonlibs_3
                if ($pathinfo === '/js/libs_dropdown_4.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_commonlibs_3',);
                }

                // _assetic_commonlibs_4
                if ($pathinfo === '/js/libs_button_5.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_commonlibs_4',);
                }

                // _assetic_commonlibs_5
                if ($pathinfo === '/js/libs_tooltip_6.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_commonlibs_5',);
                }

                // _assetic_commonlibs_6
                if ($pathinfo === '/js/libs_popover_7.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_commonlibs_6',);
                }

                // _assetic_commonlibs_7
                if ($pathinfo === '/js/libs_alert_8.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_commonlibs_7',);
                }

                // _assetic_commonlibs_8
                if ($pathinfo === '/js/libs_jquery.slimscroll.min_9.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_commonlibs_8',);
                }

                // _assetic_commonlibs_9
                if ($pathinfo === '/js/libs_widgster_10.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_commonlibs_9',);
                }

                // _assetic_commonlibs_10
                if ($pathinfo === '/js/libs_jquery.touchSwipe_11.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_commonlibs_10',);
                }

                if (0 === strpos($pathinfo, '/js/libs_messenger')) {
                    // _assetic_commonlibs_11
                    if ($pathinfo === '/js/libs_messenger_12.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_commonlibs_11',);
                    }

                    // _assetic_commonlibs_12
                    if ($pathinfo === '/js/libs_messenger-theme-flat_13.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_commonlibs_12',);
                    }

                }

                // _assetic_commonlibs_13
                if ($pathinfo === '/js/libs_twix.min_14.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_commonlibs_13',);
                }

                // _assetic_commonlibs_14
                if ($pathinfo === '/js/libs_blur.min_15.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 14,  '_format' => 'js',  '_route' => '_assetic_commonlibs_14',);
                }

                // _assetic_commonlibs_15
                if ($pathinfo === '/js/libs_sweetalert.min_16.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 15,  '_format' => 'js',  '_route' => '_assetic_commonlibs_15',);
                }

                // _assetic_commonlibs_16
                if ($pathinfo === '/js/libs_keymaster_17.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 16,  '_format' => 'js',  '_route' => '_assetic_commonlibs_16',);
                }

                if (0 === strpos($pathinfo, '/js/libs_s')) {
                    // _assetic_commonlibs_17
                    if ($pathinfo === '/js/libs_settings_18.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 17,  '_format' => 'js',  '_route' => '_assetic_commonlibs_17',);
                    }

                    // _assetic_commonlibs_18
                    if ($pathinfo === '/js/libs_shortcuts_19.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 18,  '_format' => 'js',  '_route' => '_assetic_commonlibs_18',);
                    }

                }

                // _assetic_commonlibs_19
                if ($pathinfo === '/js/libs_app_20.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 19,  '_format' => 'js',  '_route' => '_assetic_commonlibs_19',);
                }

                // _assetic_commonlibs_20
                if ($pathinfo === '/js/libs_init_21.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 20,  '_format' => 'js',  '_route' => '_assetic_commonlibs_20',);
                }

                // _assetic_commonlibs_21
                if ($pathinfo === '/js/libs_jquery.dataTables_22.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 21,  '_format' => 'js',  '_route' => '_assetic_commonlibs_21',);
                }

                // _assetic_commonlibs_22
                if ($pathinfo === '/js/libs_bootstrap-select.min_23.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 22,  '_format' => 'js',  '_route' => '_assetic_commonlibs_22',);
                }

                // _assetic_commonlibs_23
                if ($pathinfo === '/js/libs_modal_24.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 23,  '_format' => 'js',  '_route' => '_assetic_commonlibs_23',);
                }

                // _assetic_commonlibs_24
                if ($pathinfo === '/js/libs_wysihtml5-0.3.0.min_26.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 24,  '_format' => 'js',  '_route' => '_assetic_commonlibs_24',);
                }

                // _assetic_commonlibs_25
                if ($pathinfo === '/js/libs_bootstrap3-wysihtml5_27.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 25,  '_format' => 'js',  '_route' => '_assetic_commonlibs_25',);
                }

                if (0 === strpos($pathinfo, '/js/libs_s')) {
                    // _assetic_commonlibs_26
                    if ($pathinfo === '/js/libs_select2.min_28.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 26,  '_format' => 'js',  '_route' => '_assetic_commonlibs_26',);
                    }

                    // _assetic_commonlibs_27
                    if ($pathinfo === '/js/libs_switchery.min_29.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 27,  '_format' => 'js',  '_route' => '_assetic_commonlibs_27',);
                    }

                }

                if (0 === strpos($pathinfo, '/js/libs_bootstrap-')) {
                    // _assetic_commonlibs_28
                    if ($pathinfo === '/js/libs_bootstrap-datetimepicker.min_30.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 28,  '_format' => 'js',  '_route' => '_assetic_commonlibs_28',);
                    }

                    // _assetic_commonlibs_29
                    if ($pathinfo === '/js/libs_bootstrap-colorpicker.min_31.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 29,  '_format' => 'js',  '_route' => '_assetic_commonlibs_29',);
                    }

                }

                // _assetic_commonlibs_30
                if ($pathinfo === '/js/libs_inputmask_32.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 30,  '_format' => 'js',  '_route' => '_assetic_commonlibs_30',);
                }

                // _assetic_commonlibs_31
                if ($pathinfo === '/js/libs_fileinput_33.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 31,  '_format' => 'js',  '_route' => '_assetic_commonlibs_31',);
                }

                // _assetic_commonlibs_32
                if ($pathinfo === '/js/libs_holder_34.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 32,  '_format' => 'js',  '_route' => '_assetic_commonlibs_32',);
                }

                // _assetic_commonlibs_33
                if ($pathinfo === '/js/libs_dropzone.min_35.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 33,  '_format' => 'js',  '_route' => '_assetic_commonlibs_33',);
                }

                // _assetic_commonlibs_34
                if ($pathinfo === '/js/libs_markdown_36.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 34,  '_format' => 'js',  '_route' => '_assetic_commonlibs_34',);
                }

                if (0 === strpos($pathinfo, '/js/libs_bootstrap-')) {
                    // _assetic_commonlibs_35
                    if ($pathinfo === '/js/libs_bootstrap-markdown_37.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 35,  '_format' => 'js',  '_route' => '_assetic_commonlibs_35',);
                    }

                    // _assetic_commonlibs_36
                    if ($pathinfo === '/js/libs_bootstrap-slider.min_38.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 36,  '_format' => 'js',  '_route' => '_assetic_commonlibs_36',);
                    }

                }

                // _assetic_commonlibs_37
                if ($pathinfo === '/js/libs_underscore_39.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 37,  '_format' => 'js',  '_route' => '_assetic_commonlibs_37',);
                }

                // _assetic_commonlibs_38
                if ($pathinfo === '/js/libs_index_40.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 38,  '_format' => 'js',  '_route' => '_assetic_commonlibs_38',);
                }

                // _assetic_commonlibs_39
                if ($pathinfo === '/js/libs_d3.min_42.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 39,  '_format' => 'js',  '_route' => '_assetic_commonlibs_39',);
                }

                if (0 === strpos($pathinfo, '/js/libs_r')) {
                    // _assetic_commonlibs_40
                    if ($pathinfo === '/js/libs_rickshaw.min_43.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 40,  '_format' => 'js',  '_route' => '_assetic_commonlibs_40',);
                    }

                    // _assetic_commonlibs_41
                    if ($pathinfo === '/js/libs_raphael-min_44.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 41,  '_format' => 'js',  '_route' => '_assetic_commonlibs_41',);
                    }

                }

                // _assetic_commonlibs_42
                if ($pathinfo === '/js/libs_jquery.mapael_45.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 42,  '_format' => 'js',  '_route' => '_assetic_commonlibs_42',);
                }

                // _assetic_commonlibs_43
                if ($pathinfo === '/js/libs_usa_states_46.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 43,  '_format' => 'js',  '_route' => '_assetic_commonlibs_43',);
                }

                // _assetic_commonlibs_44
                if ($pathinfo === '/js/libs_world_countries_47.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 44,  '_format' => 'js',  '_route' => '_assetic_commonlibs_44',);
                }

                // _assetic_commonlibs_45
                if ($pathinfo === '/js/libs_bootstrap_calendar.min_49.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 45,  '_format' => 'js',  '_route' => '_assetic_commonlibs_45',);
                }

                // _assetic_commonlibs_46
                if ($pathinfo === '/js/libs_jquery.animateNumber.min_50.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 46,  '_format' => 'js',  '_route' => '_assetic_commonlibs_46',);
                }

                // _assetic_commonlibs_47
                if ($pathinfo === '/js/libs_index_51.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'commonlibs',  'pos' => 47,  '_format' => 'js',  '_route' => '_assetic_commonlibs_47',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/img')) {
            if (0 === strpos($pathinfo, '/img/search')) {
                // _assetic_search
                if ($pathinfo === '/img/search.png') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'search',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_search',);
                }

                // _assetic_search_0
                if ($pathinfo === '/img/search_search_1.png') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'search',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_search_0',);
                }

            }

            if (0 === strpos($pathinfo, '/img/avatar')) {
                // _assetic_avatar
                if ($pathinfo === '/img/avatar.png') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'avatar',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_avatar',);
                }

                // _assetic_avatar_0
                if ($pathinfo === '/img/avatar_avatar_1.png') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'avatar',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_avatar_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/fonts/google/open-sans-bold')) {
            // _assetic_open_sans_bold
            if ($pathinfo === '/css/fonts/google/open-sans-bold.woff') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'open_sans_bold',  'pos' => NULL,  '_format' => 'woff',  '_route' => '_assetic_open_sans_bold',);
            }

            // _assetic_open_sans_bold_0
            if ($pathinfo === '/css/fonts/google/open-sans-bold_open-sans-bold_1.woff') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'open_sans_bold',  'pos' => 0,  '_format' => 'woff',  '_route' => '_assetic_open_sans_bold_0',);
            }

        }

        if (0 === strpos($pathinfo, '/vendor/font-awesome/fonts/fontawesome-webfont')) {
            // _assetic_fontawesome_webfont
            if ($pathinfo === '/vendor/font-awesome/fonts/fontawesome-webfont.woff2') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fontawesome_webfont',  'pos' => NULL,  '_format' => 'woff2',  '_route' => '_assetic_fontawesome_webfont',);
            }

            // _assetic_fontawesome_webfont_0
            if ($pathinfo === '/vendor/font-awesome/fonts/fontawesome-webfont_fontawesome-webfont_1.woff2') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fontawesome_webfont',  'pos' => 0,  '_format' => 'woff2',  '_route' => '_assetic_fontawesome_webfont_0',);
            }

        }

        if (0 === strpos($pathinfo, '/css/fonts/google/open-sans')) {
            if (0 === strpos($pathinfo, '/css/fonts/google/open-sans-light')) {
                // _assetic_open_sans_light
                if ($pathinfo === '/css/fonts/google/open-sans-light.woff') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'open_sans_light',  'pos' => NULL,  '_format' => 'woff',  '_route' => '_assetic_open_sans_light',);
                }

                // _assetic_open_sans_light_0
                if ($pathinfo === '/css/fonts/google/open-sans-light_open-sans-light_1.woff') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'open_sans_light',  'pos' => 0,  '_format' => 'woff',  '_route' => '_assetic_open_sans_light_0',);
                }

            }

            // _assetic_open_sans
            if ($pathinfo === '/css/fonts/google/open-sans.woff') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'open_sans',  'pos' => NULL,  '_format' => 'woff',  '_route' => '_assetic_open_sans',);
            }

            // _assetic_open_sans_0
            if ($pathinfo === '/css/fonts/google/open-sans_open-sans_1.woff') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'open_sans',  'pos' => 0,  '_format' => 'woff',  '_route' => '_assetic_open_sans_0',);
            }

            if (0 === strpos($pathinfo, '/css/fonts/google/open-sans-semibold')) {
                // _assetic_open_sans_semibold
                if ($pathinfo === '/css/fonts/google/open-sans-semibold.woff') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'open_sans_semibold',  'pos' => NULL,  '_format' => 'woff',  '_route' => '_assetic_open_sans_semibold',);
                }

                // _assetic_open_sans_semibold_0
                if ($pathinfo === '/css/fonts/google/open-sans-semibold_open-sans-semibold_1.woff') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'open_sans_semibold',  'pos' => 0,  '_format' => 'woff',  '_route' => '_assetic_open_sans_semibold_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/vendor')) {
            if (0 === strpos($pathinfo, '/vendor/bootstrap-sass/assets/fonts/bootstrap/glyphicons-halflings-regular')) {
                // _assetic_glyphicons_halflings_regularwoff2
                if ($pathinfo === '/vendor/bootstrap-sass/assets/fonts/bootstrap/glyphicons-halflings-regular.woff2') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'glyphicons_halflings_regularwoff2',  'pos' => NULL,  '_format' => 'woff2',  '_route' => '_assetic_glyphicons_halflings_regularwoff2',);
                }

                // _assetic_glyphicons_halflings_regularwoff2_0
                if ($pathinfo === '/vendor/bootstrap-sass/assets/fonts/bootstrap/glyphicons-halflings-regular_glyphicons-halflings-regular_1.woff2') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'glyphicons_halflings_regularwoff2',  'pos' => 0,  '_format' => 'woff2',  '_route' => '_assetic_glyphicons_halflings_regularwoff2_0',);
                }

                // _assetic_glyphicons_halflings_regularwoff
                if ($pathinfo === '/vendor/bootstrap-sass/assets/fonts/bootstrap/glyphicons-halflings-regular.woff') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'glyphicons_halflings_regularwoff',  'pos' => NULL,  '_format' => 'woff',  '_route' => '_assetic_glyphicons_halflings_regularwoff',);
                }

                // _assetic_glyphicons_halflings_regularwoff_0
                if ($pathinfo === '/vendor/bootstrap-sass/assets/fonts/bootstrap/glyphicons-halflings-regular_glyphicons-halflings-regular_1.woff') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'glyphicons_halflings_regularwoff',  'pos' => 0,  '_format' => 'woff',  '_route' => '_assetic_glyphicons_halflings_regularwoff_0',);
                }

                // _assetic_glyphicons_halflings_regularttf
                if ($pathinfo === '/vendor/bootstrap-sass/assets/fonts/bootstrap/glyphicons-halflings-regular.ttf') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'glyphicons_halflings_regularttf',  'pos' => NULL,  '_format' => 'ttf',  '_route' => '_assetic_glyphicons_halflings_regularttf',);
                }

                // _assetic_glyphicons_halflings_regularttf_0
                if ($pathinfo === '/vendor/bootstrap-sass/assets/fonts/bootstrap/glyphicons-halflings-regular_glyphicons-halflings-regular_1.ttf') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'glyphicons_halflings_regularttf',  'pos' => 0,  '_format' => 'ttf',  '_route' => '_assetic_glyphicons_halflings_regularttf_0',);
                }

            }

            if (0 === strpos($pathinfo, '/vendor/font-awesome/fonts/fontawesome-webfont')) {
                // _assetic_fontawesome_webfontwoff
                if ($pathinfo === '/vendor/font-awesome/fonts/fontawesome-webfont.woff') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fontawesome_webfontwoff',  'pos' => NULL,  '_format' => 'woff',  '_route' => '_assetic_fontawesome_webfontwoff',);
                }

                // _assetic_fontawesome_webfontwoff_0
                if ($pathinfo === '/vendor/font-awesome/fonts/fontawesome-webfont_fontawesome-webfont_1.woff') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fontawesome_webfontwoff',  'pos' => 0,  '_format' => 'woff',  '_route' => '_assetic_fontawesome_webfontwoff_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/31fcf66')) {
                // _assetic_31fcf66
                if ($pathinfo === '/css/31fcf66.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '31fcf66',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_31fcf66',);
                }

                // _assetic_31fcf66_0
                if ($pathinfo === '/css/31fcf66_application_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '31fcf66',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_31fcf66_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/01f1f6b')) {
                // _assetic_01f1f6b
                if ($pathinfo === '/css/01f1f6b.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '01f1f6b',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_01f1f6b',);
                }

                // _assetic_01f1f6b_0
                if ($pathinfo === '/css/01f1f6b_application-ie9-part2_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '01f1f6b',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_01f1f6b_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/images/b5cba6f')) {
            // _assetic_b5cba6f
            if ($pathinfo === '/images/b5cba6f.png') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b5cba6f',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_b5cba6f',);
            }

            // _assetic_b5cba6f_0
            if ($pathinfo === '/images/b5cba6f_favicon_1.png') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b5cba6f',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_b5cba6f_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/7510bb1')) {
                // _assetic_7510bb1
                if ($pathinfo === '/js/7510bb1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7510bb1',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_7510bb1',);
                }

                // _assetic_7510bb1_0
                if ($pathinfo === '/js/7510bb1_part_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7510bb1',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_7510bb1_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/dcf7375')) {
                // _assetic_dcf7375
                if ($pathinfo === '/js/dcf7375.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'dcf7375',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_dcf7375',);
                }

                // _assetic_dcf7375_0
                if ($pathinfo === '/js/dcf7375_pace_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'dcf7375',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_dcf7375_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/forms')) {
                // _assetic_bee2c9f
                if ($pathinfo === '/js/forms.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bee2c9f',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_bee2c9f',);
                }

                // _assetic_bee2c9f_0
                if ($pathinfo === '/js/forms_form-elements_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bee2c9f',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_bee2c9f_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/c36d26e')) {
            // _assetic_c36d26e
            if ($pathinfo === '/css/c36d26e.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'c36d26e',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_c36d26e',);
            }

            // _assetic_c36d26e_0
            if ($pathinfo === '/css/c36d26e_application.min_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'c36d26e',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_c36d26e_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js/start')) {
            // _assetic_4ac8c76
            if ($pathinfo === '/js/start.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '4ac8c76',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_4ac8c76',);
            }

            // _assetic_4ac8c76_0
            if ($pathinfo === '/js/start_part_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '4ac8c76',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_4ac8c76_0',);
            }

        }

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/style')) {
                // _assetic_fe04128
                if ($pathinfo === '/css/style.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fe04128',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_fe04128',);
                }

                // _assetic_fe04128_0
                if ($pathinfo === '/css/style_application.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fe04128',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_fe04128_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/4ie9')) {
                // _assetic_2a5e487
                if ($pathinfo === '/css/4ie9.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '2a5e487',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_2a5e487',);
                }

                // _assetic_2a5e487_0
                if ($pathinfo === '/css/4ie9_application-ie9-part2_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '2a5e487',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_2a5e487_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/extras')) {
                // _assetic_fccee11
                if ($pathinfo === '/css/extras.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fccee11',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_fccee11',);
                }

                // _assetic_fccee11_0
                if ($pathinfo === '/css/extras_part_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fccee11',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_fccee11_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/icon/favicon')) {
            // _assetic_b72db65
            if ($pathinfo === '/icon/favicon.png') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b72db65',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_b72db65',);
            }

            // _assetic_b72db65_0
            if ($pathinfo === '/icon/favicon_favicon_1.png') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b72db65',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_b72db65_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/lib')) {
                // _assetic_235cc6e
                if ($pathinfo === '/js/lib.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '235cc6e',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_235cc6e',);
                }

                // _assetic_235cc6e_0
                if ($pathinfo === '/js/lib_part_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '235cc6e',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_235cc6e_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/pace')) {
                // _assetic_49c7aac
                if ($pathinfo === '/js/pace.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '49c7aac',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_49c7aac',);
                }

                // _assetic_49c7aac_0
                if ($pathinfo === '/js/pace_pace_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '49c7aac',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_49c7aac_0',);
                }

            }

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
