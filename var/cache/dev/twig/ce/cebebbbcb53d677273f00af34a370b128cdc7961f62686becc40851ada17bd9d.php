<?php

/* WbcThemeBundle:Partials:sidebar.html.twig */
class __TwigTemplate_62fc85c41a41e75b3d3e99044692185433fa121c096032dc23d7ba71f1ddb056 extends Twig_Template
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
        $__internal_e9c59b80e825f575fe2c971e93b1227d9abbc58214ccd4fc51fa2c26995dbdcc = $this->env->getExtension("native_profiler");
        $__internal_e9c59b80e825f575fe2c971e93b1227d9abbc58214ccd4fc51fa2c26995dbdcc->enter($__internal_e9c59b80e825f575fe2c971e93b1227d9abbc58214ccd4fc51fa2c26995dbdcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WbcThemeBundle:Partials:sidebar.html.twig"));

        // line 1
        echo "<nav id=\"sidebar\" class=\"sidebar\" role=\"navigation\">
    <!-- need this .js class to initiate slimscroll -->
    <div class=\"js-sidebar-content\">
        <header class=\"logo hidden-xs\" style=\"height:150px !important;\">
        
             <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/wbctheme/img/logoescenica.png"), "html", null, true);
        echo "\" style=\"display:block; text-align:center;margin:0 auto;     margin-bottom: 50px;\">
        </header>
        <!-- seems like lots of recent admin template have this feature of user info in the sidebar.
             looks good, so adding it and enhancing with notifications -->
        <div class=\"sidebar-status visible-xs\">
            ";
        // line 11
        echo twig_include($this->env, $context, "WbcThemeBundle:Partials:Widgets/sidebar/user.html.twig");
        echo "
            <!-- #notifications-dropdown-menu goes here when screen collapsed to xs or sm -->
        </div>
        <!-- main notification links are placed inside of .sidebar-nav -->
        ";
        // line 15
        echo twig_include($this->env, $context, "WbcThemeBundle:Partials:Widgets/sidebar/menu.html.twig");
        echo "
        ";
        // line 16
        echo twig_include($this->env, $context, "WbcThemeBundle:Partials:Widgets/sidebar/labels.html.twig");
        echo "
        ";
        // line 17
        echo twig_include($this->env, $context, "WbcThemeBundle:Partials:Widgets/sidebar/projects.html.twig");
        echo "
    </div>
</nav
<style>
.logo{
    height:150px !important;
}
</style>";
        
        $__internal_e9c59b80e825f575fe2c971e93b1227d9abbc58214ccd4fc51fa2c26995dbdcc->leave($__internal_e9c59b80e825f575fe2c971e93b1227d9abbc58214ccd4fc51fa2c26995dbdcc_prof);

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
        return array (  52 => 17,  48 => 16,  44 => 15,  37 => 11,  29 => 6,  22 => 1,);
    }
}
/* <nav id="sidebar" class="sidebar" role="navigation">*/
/*     <!-- need this .js class to initiate slimscroll -->*/
/*     <div class="js-sidebar-content">*/
/*         <header class="logo hidden-xs" style="height:150px !important;">*/
/*         */
/*              <img src="{{ asset('bundles/wbctheme/img/logoescenica.png') }}" style="display:block; text-align:center;margin:0 auto;     margin-bottom: 50px;">*/
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
/* </nav*/
/* <style>*/
/* .logo{*/
/*     height:150px !important;*/
/* }*/
/* </style>*/
