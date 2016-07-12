<?php

/* WbcThemeBundle:Partials:sidebar.html.twig */
class __TwigTemplate_b39cc05502124b660c9bf1fbe4a59f0a52b3e8b8094c754d02d2028350a1ff4e extends Twig_Template
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
        echo "<nav id=\"sidebar\" class=\"sidebar\" role=\"navigation\">
    <!-- need this .js class to initiate slimscroll -->
    <div class=\"js-sidebar-content\">
        <header class=\"logo hidden-xs\">
            <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("wbc_administrator_homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "name", array()), "html", null, true);
        echo "</a>
        </header>
        <!-- seems like lots of recent admin template have this feature of user info in the sidebar.
             looks good, so adding it and enhancing with notifications -->
        <div class=\"sidebar-status visible-xs\">
            ";
        // line 10
        echo twig_include($this->env, $context, "WbcThemeBundle:Partials:Widgets/sidebar/user.html.twig");
        echo "
            <!-- #notifications-dropdown-menu goes here when screen collapsed to xs or sm -->
        </div>
        <!-- main notification links are placed inside of .sidebar-nav -->
        ";
        // line 14
        echo twig_include($this->env, $context, "WbcThemeBundle:Partials:Widgets/sidebar/menu.html.twig");
        echo "
        ";
        // line 15
        echo twig_include($this->env, $context, "WbcThemeBundle:Partials:Widgets/sidebar/labels.html.twig");
        echo "
        ";
        // line 16
        echo twig_include($this->env, $context, "WbcThemeBundle:Partials:Widgets/sidebar/projects.html.twig");
        echo "
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "WbcThemeBundle:Partials:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 16,  46 => 15,  42 => 14,  35 => 10,  25 => 5,  19 => 1,);
    }
}
/* <nav id="sidebar" class="sidebar" role="navigation">*/
/*     <!-- need this .js class to initiate slimscroll -->*/
/*     <div class="js-sidebar-content">*/
/*         <header class="logo hidden-xs">*/
/*             <a href="{{ path('wbc_administrator_homepage') }}">{{ project.name }}</a>*/
/*         </header>*/
/*         <!-- seems like lots of recent admin template have this feature of user info in the sidebar.*/
/*              looks good, so adding it and enhancing with notifications -->*/
/*         <div class="sidebar-status visible-xs">*/
/*             {{ include('WbcThemeBundle:Partials:Widgets/sidebar/user.html.twig') }}*/
/*             <!-- #notifications-dropdown-menu goes here when screen collapsed to xs or sm -->*/
/*         </div>*/
/*         <!-- main notification links are placed inside of .sidebar-nav -->*/
/*         {{ include('WbcThemeBundle:Partials:Widgets/sidebar/menu.html.twig') }}*/
/*         {{ include('WbcThemeBundle:Partials:Widgets/sidebar/labels.html.twig') }}*/
/*         {{ include('WbcThemeBundle:Partials:Widgets/sidebar/projects.html.twig') }}*/
/*     </div>*/
/* </nav>*/
