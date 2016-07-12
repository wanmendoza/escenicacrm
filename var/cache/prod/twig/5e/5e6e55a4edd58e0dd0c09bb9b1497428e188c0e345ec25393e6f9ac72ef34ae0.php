<?php

/* WbcThemeBundle:Partials/Widgets/security:lang.html.twig */
class __TwigTemplate_91e7446a5789f2d23f649de53a19d792566ff4294c9c1a0cd965e6b3b81def5f extends Twig_Template
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
        if ($this->env->getExtension('wbc_extension')->get("use_translations")) {
            // line 2
            echo "<style>
    #lang-selector{ padding-top: 10px; }
</style>

<div id=\"lang-selector\" class=\"btn-group pull-right\">
    <button title=\"\" data-original-title=\"\" data-toggle=\"dropdown\" class=\"btn btn-default dropdown-toggle\">
        &nbsp; <img src=\"/flags/";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "countrycode", array()), "html", null, true);
            echo ".gif\" alt=\"\"> &nbsp;
        <i class=\"fa fa-caret-down\"></i>
    </button>
    <ul class=\"dropdown-menu\">
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["langs"]) ? $context["langs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 13
                echo "        <li><a data-no-pjax title=\"";
                echo twig_escape_filter($this->env, $context["lang"], "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("set_locale", array("_locale" => $this->getAttribute($context["lang"], "code", array()))), "html", null, true);
                echo "\"> <img src=\"/flags/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["lang"], "countrycode", array()), "html", null, true);
                echo ".gif\" /> &nbsp; ";
                echo twig_escape_filter($this->env, $context["lang"], "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    </ul>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "WbcThemeBundle:Partials/Widgets/security:lang.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 15,  40 => 13,  36 => 12,  29 => 8,  21 => 2,  19 => 1,);
    }
}
/* {% if get('use_translations') %}*/
/* <style>*/
/*     #lang-selector{ padding-top: 10px; }*/
/* </style>*/
/* */
/* <div id="lang-selector" class="btn-group pull-right">*/
/*     <button title="" data-original-title="" data-toggle="dropdown" class="btn btn-default dropdown-toggle">*/
/*         &nbsp; <img src="/flags/{{ locale.countrycode }}.gif" alt=""> &nbsp;*/
/*         <i class="fa fa-caret-down"></i>*/
/*     </button>*/
/*     <ul class="dropdown-menu">*/
/*         {% for lang in langs %}*/
/*         <li><a data-no-pjax title="{{ lang }}" href="{{ path('set_locale', { '_locale': lang.code }) }}"> <img src="/flags/{{ lang.countrycode }}.gif" /> &nbsp; {{ lang }}</a></li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* </div>*/
/* {% endif %}*/
