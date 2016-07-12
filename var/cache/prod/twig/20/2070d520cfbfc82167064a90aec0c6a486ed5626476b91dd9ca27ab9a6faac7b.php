<?php

/* WbcThemeBundle:Partials:navigator.html.twig */
class __TwigTemplate_e41612111c0ab74c6b0056a94df04ea00ce8619d59fa7af5838121641debcd45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- This is the white navigation bar seen on the top. A bit enhanced BS navbar. See .page-controls in _base.scss. -->
<nav class=\"page-controls navbar navbar-default\">
    <div class=\"container-fluid\">
        <!-- .navbar-header contains links seen on xs & sm screens -->
        <div class=\"navbar-header\">
            <ul class=\"nav navbar-nav\">
                ";
        // line 7
        if (((isset($context["env"]) ? $context["env"] : null) == "administrator")) {
            // line 8
            echo "                <li>
                    <!-- whether to automatically collapse sidebar on mouseleave. If activated acts more like usual admin templates -->
                    <a class=\"hidden-sm hidden-xs\" id=\"nav-state-toggle\" href=\"#\" title=\"";
            // line 10
            echo $this->env->getExtension('translator')->getTranslator()->trans("Turn on/off sidebar collapsing", array(), "messages");
            echo "\">
                        <i class=\"fa fa-bars fa-lg\"></i>
                    </a>
                    <!-- shown on xs & sm screen. collapses and expands navigation -->
                    <a class=\"visible-sm visible-xs\" id=\"nav-collapse-toggle\" href=\"#\" title=\"";
            // line 14
            echo $this->env->getExtension('translator')->getTranslator()->trans("Show/hide sidebar", array(), "messages");
            echo "\">
                        <span class=\"rounded rounded-lg bg-gray text-white visible-xs\"><i class=\"fa fa-bars fa-lg\"></i></span>
                        <i class=\"fa fa-bars fa-lg hidden-xs\"></i>
                    </a>
                </li>
                ";
        }
        // line 20
        echo "
                ";
        // line 25
        echo "            </ul>
            <ul class=\"nav navbar-nav navbar-right visible-xs\">
                ";
        // line 33
        echo "            </ul>
            <!-- xs & sm screen logo -->
            <a class=\"navbar-brand visible-xs\" href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("wbc_administrator_homepage");
        echo "\">
                <i class=\"fa fa-circle text-gray mr-n-sm\"></i>
                <i class=\"fa fa-circle text-warning\"></i>
                &nbsp;
                ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "name", array()), "html", null, true);
        echo "
                &nbsp;
                <i class=\"fa fa-circle text-warning mr-n-sm\"></i>
                <i class=\"fa fa-circle text-gray\"></i>
            </a>
        </div>

        <!-- this part is hidden for xs screens -->
        <div class=\"collapse navbar-collapse\">

            ";
        // line 49
        if (((isset($context["env"]) ? $context["env"] : null) == "administrator")) {
            // line 50
            echo "            <!-- search form! link it to your search server -->
            ";
            // line 51
            echo twig_include($this->env, $context, "WbcThemeBundle:Partials:Widgets/navigator/search.html.twig");
            echo "
            ";
        }
        // line 53
        echo "
            ";
        // line 54
        if (((isset($context["env"]) ? $context["env"] : null) == "translation")) {
            // line 55
            echo "                <div class=\"btn-group pull-left\" style=\"padding-top: 10px\">
                    <button class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" data-original-title=\"\" title=\"\">
                        Go
                        <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
            // line 61
            echo $this->env->getExtension('routing')->getPath("wbc_administrator_homepage");
            echo "\" target=\"_blank\" data-no-pjax=\"\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Administrator"), "html", null, true);
            echo " </a></li>
                        <li><a href=\"";
            // line 62
            echo $this->env->getExtension('routing')->getPath("wbc_frontend_homepage");
            echo "\" target=\"_blank\" data-no-pjax=\"\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Frontend"), "html", null, true);
            echo "</a></li>
                    </ul>
                </div>
            ";
        }
        // line 66
        echo "
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"dropdown\">
                    ";
        // line 69
        echo twig_include($this->env, $context, "WbcThemeBundle:Partials:Widgets/sidebar/user.html.twig", array("class" => "dropdown-toggle-notifications", "id" => "notifications-dropdown-toggle"));
        echo "
                    <!-- ready to use notifications dropdown.  inspired by smartadmin template.
                         consists of three components:
                         notifications, messages, progress. leave or add what's important for you.
                         uses Sing's ajax-load plugin for async content loading. See #load-notifications-btn -->
                    ";
        // line 74
        echo twig_include($this->env, $context, "WbcThemeBundle:Partials:Widgets/navigator/notifications.html.twig");
        echo "
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-cog fa-lg\"></i>
                    </a>
                    ";
        // line 80
        echo twig_include($this->env, $context, "WbcThemeBundle:Partials:Widgets/navigator/user_settings.html.twig");
        echo "
                </li>
                ";
        // line 82
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("WbcThemeBundle:Default:lang"));
        echo "
                <li>
                    ";
        // line 85
        echo "
                    ";
        // line 99
        echo "                </li>
            </ul>
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "WbcThemeBundle:Partials:navigator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 99,  150 => 85,  145 => 82,  140 => 80,  131 => 74,  123 => 69,  118 => 66,  109 => 62,  103 => 61,  95 => 55,  93 => 54,  90 => 53,  85 => 51,  82 => 50,  80 => 49,  67 => 39,  60 => 35,  56 => 33,  52 => 25,  49 => 20,  40 => 14,  33 => 10,  29 => 8,  27 => 7,  19 => 1,);
    }
}
/* <!-- This is the white navigation bar seen on the top. A bit enhanced BS navbar. See .page-controls in _base.scss. -->*/
/* <nav class="page-controls navbar navbar-default">*/
/*     <div class="container-fluid">*/
/*         <!-- .navbar-header contains links seen on xs & sm screens -->*/
/*         <div class="navbar-header">*/
/*             <ul class="nav navbar-nav">*/
/*                 {% if env == 'administrator' %}*/
/*                 <li>*/
/*                     <!-- whether to automatically collapse sidebar on mouseleave. If activated acts more like usual admin templates -->*/
/*                     <a class="hidden-sm hidden-xs" id="nav-state-toggle" href="#" title="{% trans %}Turn on/off sidebar collapsing{% endtrans %}">*/
/*                         <i class="fa fa-bars fa-lg"></i>*/
/*                     </a>*/
/*                     <!-- shown on xs & sm screen. collapses and expands navigation -->*/
/*                     <a class="visible-sm visible-xs" id="nav-collapse-toggle" href="#" title="{% trans %}Show/hide sidebar{% endtrans %}">*/
/*                         <span class="rounded rounded-lg bg-gray text-white visible-xs"><i class="fa fa-bars fa-lg"></i></span>*/
/*                         <i class="fa fa-bars fa-lg hidden-xs"></i>*/
/*                     </a>*/
/*                 </li>*/
/*                 {% endif %}*/
/* */
/*                 {#*/
/*                 <li class="ml-sm mr-n-xs hidden-xs"><a href="#"><i class="fa fa-refresh fa-lg"></i></a></li>*/
/*                 <li class="ml-n-xs hidden-xs"><a href="#"><i class="fa fa-times fa-lg"></i></a></li>*/
/*                 #}*/
/*             </ul>*/
/*             <ul class="nav navbar-nav navbar-right visible-xs">*/
/*                 {#*/
/*                 <li>*/
/*                     <!-- toggles chat -->*/
/*                     {{ include('WbcThemeBundle:Partials:Widgets/navigator/chat_button_mobile.html.twig') }}*/
/*                 </li>*/
/*                 #}*/
/*             </ul>*/
/*             <!-- xs & sm screen logo -->*/
/*             <a class="navbar-brand visible-xs" href="{{ path('wbc_administrator_homepage') }}">*/
/*                 <i class="fa fa-circle text-gray mr-n-sm"></i>*/
/*                 <i class="fa fa-circle text-warning"></i>*/
/*                 &nbsp;*/
/*                 {{ project.name }}*/
/*                 &nbsp;*/
/*                 <i class="fa fa-circle text-warning mr-n-sm"></i>*/
/*                 <i class="fa fa-circle text-gray"></i>*/
/*             </a>*/
/*         </div>*/
/* */
/*         <!-- this part is hidden for xs screens -->*/
/*         <div class="collapse navbar-collapse">*/
/* */
/*             {% if env == 'administrator' %}*/
/*             <!-- search form! link it to your search server -->*/
/*             {{ include('WbcThemeBundle:Partials:Widgets/navigator/search.html.twig') }}*/
/*             {% endif %}*/
/* */
/*             {% if env == 'translation' %}*/
/*                 <div class="btn-group pull-left" style="padding-top: 10px">*/
/*                     <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" data-original-title="" title="">*/
/*                         Go*/
/*                         <i class="fa fa-caret-down"></i>*/
/*                     </button>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li><a href="{{ path('wbc_administrator_homepage') }}" target="_blank" data-no-pjax=""> {{ 'Administrator' | trans }} </a></li>*/
/*                         <li><a href="{{ path('wbc_frontend_homepage') }}" target="_blank" data-no-pjax=""> {{ 'Frontend' | trans }}</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             <ul class="nav navbar-nav navbar-right">*/
/*                 <li class="dropdown">*/
/*                     {{ include('WbcThemeBundle:Partials:Widgets/sidebar/user.html.twig', { 'class': 'dropdown-toggle-notifications', 'id': 'notifications-dropdown-toggle' }) }}*/
/*                     <!-- ready to use notifications dropdown.  inspired by smartadmin template.*/
/*                          consists of three components:*/
/*                          notifications, messages, progress. leave or add what's important for you.*/
/*                          uses Sing's ajax-load plugin for async content loading. See #load-notifications-btn -->*/
/*                     {{ include('WbcThemeBundle:Partials:Widgets/navigator/notifications.html.twig') }}*/
/*                 </li>*/
/*                 <li class="dropdown">*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                         <i class="fa fa-cog fa-lg"></i>*/
/*                     </a>*/
/*                     {{ include('WbcThemeBundle:Partials:Widgets/navigator/user_settings.html.twig') }}*/
/*                 </li>*/
/*                 {{ render(controller('WbcThemeBundle:Default:lang')) }}*/
/*                 <li>*/
/*                     {# {{ include('WbcThemeBundle:Partials:Widgets/navigator/chat_button.html.twig') }} #}*/
/* */
/*                     {#*/
/*                     <div id="chat-notification" class="chat-notification hide">*/
/*                         <div class="chat-notification-inner">*/
/*                             <h6 class="title">*/
/*                                 <span class="thumb-xs">*/
/*                                     <img src="/base/demo/img/people/a6.jpg" class="img-circle mr-xs pull-left">*/
/*                                 </span>*/
/*                                 Jess Smith*/
/*                             </h6>*/
/*                             <p class="text">Hey! What's up?</p>*/
/*                         </div>*/
/*                     </div>*/
/*                     #}*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </nav>*/
