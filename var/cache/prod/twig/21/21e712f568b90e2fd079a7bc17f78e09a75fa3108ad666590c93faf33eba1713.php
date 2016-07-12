<?php

/* WbcThemeBundle:Partials/Widgets/navigator:search.html.twig */
class __TwigTemplate_f4b356cc043e693ef7f58e72f94466d6854aa05296d717acb499d1ce02d5b000 extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "WbcThemeBundle:Partials/Widgets/navigator:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 7,  19 => 1,);
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
