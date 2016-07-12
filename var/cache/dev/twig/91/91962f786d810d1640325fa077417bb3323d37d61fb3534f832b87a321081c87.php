<?php

/* LexikTranslationBundle:Translation:overview.html.twig */
class __TwigTemplate_63551114fa1cb5a30e17b30bcdf725fac0ca96f52f734c26b070ef2869d7a3b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'toolbar' => array($this, 'block_toolbar'),
            'javascript_footer' => array($this, 'block_javascript_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["layout"]) ? $context["layout"] : $this->getContext($context, "layout")), "LexikTranslationBundle:Translation:overview.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ff739a3a27828087e39fb069a1c886bc32e1276c51bece1febd3544428191d4 = $this->env->getExtension("native_profiler");
        $__internal_7ff739a3a27828087e39fb069a1c886bc32e1276c51bece1febd3544428191d4->enter($__internal_7ff739a3a27828087e39fb069a1c886bc32e1276c51bece1febd3544428191d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LexikTranslationBundle:Translation:overview.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ff739a3a27828087e39fb069a1c886bc32e1276c51bece1febd3544428191d4->leave($__internal_7ff739a3a27828087e39fb069a1c886bc32e1276c51bece1febd3544428191d4_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0057a5003c0ff843e5f6a8c3f852e65497d3e234a28bd83bb484d47f07750659 = $this->env->getExtension("native_profiler");
        $__internal_0057a5003c0ff843e5f6a8c3f852e65497d3e234a28bd83bb484d47f07750659->enter($__internal_0057a5003c0ff843e5f6a8c3f852e65497d3e234a28bd83bb484d47f07750659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lexiktranslation/css/translation.css"), "html", null, true);
        echo "\">
";
        
        $__internal_0057a5003c0ff843e5f6a8c3f852e65497d3e234a28bd83bb484d47f07750659->leave($__internal_0057a5003c0ff843e5f6a8c3f852e65497d3e234a28bd83bb484d47f07750659_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_f67104f06daeb22fd7f22c5fdb772adfc51b051b38e6d38616e6e73c18af8d8f = $this->env->getExtension("native_profiler");
        $__internal_f67104f06daeb22fd7f22c5fdb772adfc51b051b38e6d38616e6e73c18af8d8f->enter($__internal_f67104f06daeb22fd7f22c5fdb772adfc51b051b38e6d38616e6e73c18af8d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("overview.page_title", array(), "LexikTranslationBundle"), "html", null, true);
        
        $__internal_f67104f06daeb22fd7f22c5fdb772adfc51b051b38e6d38616e6e73c18af8d8f->leave($__internal_f67104f06daeb22fd7f22c5fdb772adfc51b051b38e6d38616e6e73c18af8d8f_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_bd88f575b3fb29536621e648a67377049f9ec06233ebee28166a31e2bb79fb2f = $this->env->getExtension("native_profiler");
        $__internal_bd88f575b3fb29536621e648a67377049f9ec06233ebee28166a31e2bb79fb2f->enter($__internal_bd88f575b3fb29536621e648a67377049f9ec06233ebee28166a31e2bb79fb2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    <div class=\"container\">
        ";
        // line 14
        $this->displayBlock('toolbar', $context, $blocks);
        // line 27
        echo "
        <p>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("overview.msg_latest_translation", array("%date%" => twig_date_format_filter($this->env, (isset($context["latestTrans"]) ? $context["latestTrans"] : $this->getContext($context, "latestTrans")), "Y-m-d H:i")), "LexikTranslationBundle"), "html", null, true);
        echo "</p>

        <div id=\"translation-overview\">
            <div class=\"row margin-row\">
                <div class=\"col-md-12\">
                    ";
        // line 33
        if ( !twig_length_filter($this->env, (isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")))) {
            // line 34
            echo "                        <div class=\"alert alert-info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("overview.no_stats", array(), "LexikTranslationBundle"), "html", null, true);
            echo "</div>
                    ";
        } else {
            // line 36
            echo "                        <table class=\"table table-bordered table-striped table-overview\">
                            <thead>
                                <tr>
                                    <th class=\"sortable col-0\">
                                        ";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("overview.domain", array(), "LexikTranslationBundle"), "html", null, true);
            echo "
                                    </th>
                                    ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) ? $context["locales"] : $this->getContext($context, "locales")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 43
                echo "                                        <th class=\"sortable col-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                                            ";
                // line 44
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["locale"]), "html", null, true);
                echo "
                                        </th>
                                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                                </tr>
                            </thead>
                            <tbody>
                            ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["domains"]) ? $context["domains"] : $this->getContext($context, "domains")));
            foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
                // line 51
                echo "                                <tr columns=\"columns\">
                                    <td>";
                // line 52
                echo twig_escape_filter($this->env, $context["domain"], "html", null, true);
                echo "</td>
                                    ";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) ? $context["locales"] : $this->getContext($context, "locales")));
                foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                    // line 54
                    echo "                                        <td class=\"text-center\">
                                            <span class=\"text ";
                    // line 55
                    echo ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), $context["domain"], array(), "array"), $context["locale"], array(), "array"), "completed", array(), "array") == 100)) ? ("text-success") : ("text-danger"));
                    echo "\">
                                                ";
                    // line 56
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), $context["domain"], array(), "array"), $context["locale"], array(), "array"), "translated", array(), "array"), "html", null, true);
                    echo " / ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), $context["domain"], array(), "array", false, true), $context["locale"], array(), "array", false, true), "keys", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), $context["domain"], array(), "array", false, true), $context["locale"], array(), "array", false, true), "keys", array(), "array"), 0)) : (0)), "html", null, true);
                    echo "
                                            </span>
                                            <div class=\"progress\">
                                                <div class=\"progress-bar ";
                    // line 59
                    echo ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), $context["domain"], array(), "array"), $context["locale"], array(), "array"), "completed", array(), "array") == 100)) ? ("progress-bar-success") : ("progress-bar-danger"));
                    echo "\"
                                                     role=\"progressbar\"
                                                     aria-valuenow=\"";
                    // line 61
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), $context["domain"], array(), "array"), $context["locale"], array(), "array"), "completed", array(), "array"), "html", null, true);
                    echo "\"
                                                     aria-valuemin=\"0\"
                                                     aria-valuemax=\"100\"
                                                     style=\"width: ";
                    // line 64
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), $context["domain"], array(), "array"), $context["locale"], array(), "array"), "completed", array(), "array"), "html", null, true);
                    echo "%\">
                                                </div>
                                            </div>
                                        </td>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domain'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                            </tbody>
                        </table>
                    ";
        }
        // line 74
        echo "                </div>
            </div>
        </div>

    </div>
";
        
        $__internal_bd88f575b3fb29536621e648a67377049f9ec06233ebee28166a31e2bb79fb2f->leave($__internal_bd88f575b3fb29536621e648a67377049f9ec06233ebee28166a31e2bb79fb2f_prof);

    }

    // line 14
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_548f7047664ef1f447894772139cbaad4f2c113f6c6e6a133f98dddc710f1877 = $this->env->getExtension("native_profiler");
        $__internal_548f7047664ef1f447894772139cbaad4f2c113f6c6e6a133f98dddc710f1877->enter($__internal_548f7047664ef1f447894772139cbaad4f2c113f6c6e6a133f98dddc710f1877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 15
        echo "            <div class=\"page-header\">
                <h1>
                    ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("overview.page_title", array(), "LexikTranslationBundle"), "html", null, true);
        echo "
                    <div class=\"pull-right\">
                        <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("lexik_translation_grid");
        echo "\" role=\"button\" class=\"btn btn-primary\">
                            <span class=\"glyphicon glyphicon-th\"></span>
                            ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("overview.show_grid", array(), "LexikTranslationBundle"), "html", null, true);
        echo "
                        </a>
                    </div>
                </h1>
            </div>
        ";
        
        $__internal_548f7047664ef1f447894772139cbaad4f2c113f6c6e6a133f98dddc710f1877->leave($__internal_548f7047664ef1f447894772139cbaad4f2c113f6c6e6a133f98dddc710f1877_prof);

    }

    // line 81
    public function block_javascript_footer($context, array $blocks = array())
    {
        $__internal_39d1d3e3a6c9c9d622bc8cce2e27d6c15df49fac9149d568b3c9a8fcd538b60f = $this->env->getExtension("native_profiler");
        $__internal_39d1d3e3a6c9c9d622bc8cce2e27d6c15df49fac9149d568b3c9a8fcd538b60f->enter($__internal_39d1d3e3a6c9c9d622bc8cce2e27d6c15df49fac9149d568b3c9a8fcd538b60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript_footer"));

        // line 82
        echo "    ";
        $this->displayParentBlock("javascript_footer", $context, $blocks);
        echo "
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lexiktranslation/js/translation.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_39d1d3e3a6c9c9d622bc8cce2e27d6c15df49fac9149d568b3c9a8fcd538b60f->leave($__internal_39d1d3e3a6c9c9d622bc8cce2e27d6c15df49fac9149d568b3c9a8fcd538b60f_prof);

    }

    public function getTemplateName()
    {
        return "LexikTranslationBundle:Translation:overview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 83,  269 => 82,  263 => 81,  250 => 21,  245 => 19,  240 => 17,  236 => 15,  230 => 14,  218 => 74,  213 => 71,  206 => 69,  195 => 64,  189 => 61,  184 => 59,  176 => 56,  172 => 55,  169 => 54,  165 => 53,  161 => 52,  158 => 51,  154 => 50,  149 => 47,  132 => 44,  127 => 43,  110 => 42,  105 => 40,  99 => 36,  93 => 34,  91 => 33,  83 => 28,  80 => 27,  78 => 14,  75 => 13,  69 => 12,  57 => 10,  48 => 7,  43 => 6,  37 => 5,  22 => 1,);
    }
}
/* {% extends layout %}*/
/* */
/* {% trans_default_domain 'LexikTranslationBundle' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/lexiktranslation/css/translation.css') }}">*/
/* {% endblock %}*/
/* */
/* {% block title %}{{ 'overview.page_title'|trans }}{% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="container">*/
/*         {% block toolbar %}*/
/*             <div class="page-header">*/
/*                 <h1>*/
/*                     {{ 'overview.page_title'|trans }}*/
/*                     <div class="pull-right">*/
/*                         <a href="{{ path('lexik_translation_grid') }}" role="button" class="btn btn-primary">*/
/*                             <span class="glyphicon glyphicon-th"></span>*/
/*                             {{ 'overview.show_grid'|trans }}*/
/*                         </a>*/
/*                     </div>*/
/*                 </h1>*/
/*             </div>*/
/*         {% endblock toolbar %}*/
/* */
/*         <p>{{ 'overview.msg_latest_translation'|trans({'%date%': latestTrans|date('Y-m-d H:i')}) }}</p>*/
/* */
/*         <div id="translation-overview">*/
/*             <div class="row margin-row">*/
/*                 <div class="col-md-12">*/
/*                     {% if  not stats|length %}*/
/*                         <div class="alert alert-info">{{ 'overview.no_stats'|trans }}</div>*/
/*                     {% else %}*/
/*                         <table class="table table-bordered table-striped table-overview">*/
/*                             <thead>*/
/*                                 <tr>*/
/*                                     <th class="sortable col-0">*/
/*                                         {{ 'overview.domain'|trans }}*/
/*                                     </th>*/
/*                                     {% for locale in locales %}*/
/*                                         <th class="sortable col-{{ loop.index }}">*/
/*                                             {{ locale|upper }}*/
/*                                         </th>*/
/*                                     {% endfor %}*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                             {% for domain in domains %}*/
/*                                 <tr columns="columns">*/
/*                                     <td>{{ domain }}</td>*/
/*                                     {% for locale in locales %}*/
/*                                         <td class="text-center">*/
/*                                             <span class="text {{ stats[domain][locale]['completed'] == 100 ? 'text-success' : 'text-danger' }}">*/
/*                                                 {{ stats[domain][locale]['translated'] }} / {{ stats[domain][locale]['keys']|default(0) }}*/
/*                                             </span>*/
/*                                             <div class="progress">*/
/*                                                 <div class="progress-bar {{ stats[domain][locale]['completed'] == 100 ? 'progress-bar-success' : 'progress-bar-danger' }}"*/
/*                                                      role="progressbar"*/
/*                                                      aria-valuenow="{{ stats[domain][locale]['completed'] }}"*/
/*                                                      aria-valuemin="0"*/
/*                                                      aria-valuemax="100"*/
/*                                                      style="width: {{ stats[domain][locale]['completed'] }}%">*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </td>*/
/*                                     {% endfor %}*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block javascript_footer %}*/
/*     {{ parent() }}*/
/*     <script src="{{ asset('bundles/lexiktranslation/js/translation.js') }}"></script>*/
/* {% endblock %}*/
/* */
