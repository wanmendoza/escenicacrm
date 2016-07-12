<?php

/* WbcThemeBundle:Partials:Widgets/navigator/user_settings.html.twig */
class __TwigTemplate_871d4b5c8df6ac0fbabbd6dfa995c102402fa92f120b68315366358988dc3596 extends Twig_Template
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
        $__internal_dcee3878b51b60615c88e29d1e546e01e2a4fd9a522f9af5c348eeea0be36f23 = $this->env->getExtension("native_profiler");
        $__internal_dcee3878b51b60615c88e29d1e546e01e2a4fd9a522f9af5c348eeea0be36f23->enter($__internal_dcee3878b51b60615c88e29d1e546e01e2a4fd9a522f9af5c348eeea0be36f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WbcThemeBundle:Partials:Widgets/navigator/user_settings.html.twig"));

        // line 1
        echo "<ul class=\"dropdown-menu\">
    <li><a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\"><i class=\"glyphicon glyphicon-user\"></i> &nbsp; ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("My Account", array(), "messages");
        echo "</a></li>
    <li class=\"divider\"></li>
    <li><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("lexik_translation_grid");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Configure translations", array(), "messages");
        echo "</a></li>
    <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("settings_index");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Settings", array(), "messages");
        echo "</a></li>
    <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("cache_clear");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Clear cache", array(), "messages");
        echo "</a></li>
    <li class=\"divider\"></li>
    <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-sign-out\"></i> &nbsp; ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Log Out", array(), "messages");
        echo "</a></li>
</ul>";
        
        $__internal_dcee3878b51b60615c88e29d1e546e01e2a4fd9a522f9af5c348eeea0be36f23->leave($__internal_dcee3878b51b60615c88e29d1e546e01e2a4fd9a522f9af5c348eeea0be36f23_prof);

    }

    public function getTemplateName()
    {
        return "WbcThemeBundle:Partials:Widgets/navigator/user_settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 8,  44 => 6,  38 => 5,  32 => 4,  25 => 2,  22 => 1,);
    }
}
/* <ul class="dropdown-menu">*/
/*     <li><a href="{{ path('fos_user_profile_edit') }}"><i class="glyphicon glyphicon-user"></i> &nbsp; {% trans %}My Account{% endtrans %}</a></li>*/
/*     <li class="divider"></li>*/
/*     <li><a href="{{ path('lexik_translation_grid') }}">{% trans %}Configure translations{% endtrans %}</a></li>*/
/*     <li><a href="{{ path('settings_index') }}">{% trans %}Settings{% endtrans %}</a></li>*/
/*     <li><a href="{{ path('cache_clear') }}">{% trans %}Clear cache{% endtrans %}</a></li>*/
/*     <li class="divider"></li>*/
/*     <li><a href="{{  path('fos_user_security_logout') }}"><i class="fa fa-sign-out"></i> &nbsp; {% trans %}Log Out{% endtrans %}</a></li>*/
/* </ul>*/
