<?php

/* WbcThemeBundle:Partials:Widgets/navigator/search.html.twig */
class __TwigTemplate_c6400cacb7473123f9bd71ac593cf012e18a0fddfbbf496eec3c866c7a1b8162 extends Twig_Template
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
        $__internal_fb3e5311620bd61a5bc2c5b5256afc716e276aabb6940f7ee262d2b8578f66d8 = $this->env->getExtension("native_profiler");
        $__internal_fb3e5311620bd61a5bc2c5b5256afc716e276aabb6940f7ee262d2b8578f66d8->enter($__internal_fb3e5311620bd61a5bc2c5b5256afc716e276aabb6940f7ee262d2b8578f66d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WbcThemeBundle:Partials:Widgets/navigator/search.html.twig"));

        // line 1
        echo "<form class=\"navbar-form navbar-left\" role=\"search\" method=\"GET\" action=\"";
        echo $this->env->getExtension('routing')->getPath("wbc_search_page");
        echo "\">
    <div class=\"form-group\">
        <div class=\"input-group input-group-no-border\">
                    <span class=\"input-group-addon\">
                        <i class=\"fa fa-search\"></i>
                    </span>
            <input id=\"search-box\" name=\"query\" class=\"form-control\" type=\"text\" placeholder=\"";
        // line 7
        echo $this->env->getExtension('translator')->getTranslator()->trans("Search Dashboard", array(), "messages");
        echo "\">
        </div>
    </div>
</form>";
        
        $__internal_fb3e5311620bd61a5bc2c5b5256afc716e276aabb6940f7ee262d2b8578f66d8->leave($__internal_fb3e5311620bd61a5bc2c5b5256afc716e276aabb6940f7ee262d2b8578f66d8_prof);

    }

    public function getTemplateName()
    {
        return "WbcThemeBundle:Partials:Widgets/navigator/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 7,  22 => 1,);
    }
}
/* <form class="navbar-form navbar-left" role="search" method="GET" action="{{ path('wbc_search_page') }}">*/
/*     <div class="form-group">*/
/*         <div class="input-group input-group-no-border">*/
/*                     <span class="input-group-addon">*/
/*                         <i class="fa fa-search"></i>*/
/*                     </span>*/
/*             <input id="search-box" name="query" class="form-control" type="text" placeholder="{% trans %}Search Dashboard{% endtrans %}">*/
/*         </div>*/
/*     </div>*/
/* </form>*/
