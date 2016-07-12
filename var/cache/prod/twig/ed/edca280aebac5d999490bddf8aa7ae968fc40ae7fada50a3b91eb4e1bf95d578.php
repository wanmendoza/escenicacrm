<?php

/* LexikTranslationBundle:Translation:overview.html.twig */
class __TwigTemplate_9deba4c5b97d7061ace0a0088c7e0cd2598a2303cdaae7777b222d90e71e62f0 extends Twig_Template
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
        return $this->loadTemplate((isset($context["layout"]) ? $context["layout"] : null), "LexikTranslationBundle:Translation:overview.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lexiktranslation/css/translation.css"), "html", null, true);
        echo "\">
";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("overview.page_title", array(), "LexikTranslationBundle"), "html", null, true);
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"container\">
        ";
        // line 14
        $this->displayBlock('toolbar', $context, $blocks);
        // line 27
        echo "
        <p>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("overview.msg_latest_translation", array("%date%" => twig_date_format_filter($this->env, (isset($context["latestTrans"]) ? $context["latestTrans"] : null), "Y-m-d H:i")), "LexikTranslationBundle"), "html", null, true);
        echo "</p>

        <div id=\"translation-overview\">
            <div class=\"row margin-row\">
                <div class=\"col-md-12\">
                    ";
        // line 33
        if ( !twig_length_filter($this->env, (isset($context["stats"]) ? $context["stats"] : null))) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) ? $context["locales"] : null));
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
            $context['_seq'] = twig_ensure_traversable((isset($context["domains"]) ? $context["domains"] : null));
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
                $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) ? $context["locales"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                    // line 54
                    echo "                                        <td class=\"text-center\">
                                            <span class=\"text ";
                    // line 55
                    echo ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), $context["domain"], array(), "array"), $context["locale"], array(), "array"), "completed", array(), "array") == 100)) ? ("text-success") : ("text-danger"));
                    echo "\">
                                                ";
                    // line 56
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), $context["domain"], array(), "array"), $context["locale"], array(), "array"), "translated", array(), "array"), "html", null, true);
                    echo " / ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), $context["domain"], array(), "array", false, true), $context["locale"], array(), "array", false, true), "keys", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), $context["domain"], array(), "array", false, true), $context["locale"], array(), "array", false, true), "keys", array(), "array"), 0)) : (0)), "html", null, true);
                    echo "
                                            </span>
                                            <div class=\"progress\">
                                                <div class=\"progress-bar ";
                    // line 59
                    echo ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), $context["domain"], array(), "array"), $context["locale"], array(), "array"), "completed", array(), "array") == 100)) ? ("progress-bar-success") : ("progress-bar-danger"));
                    echo "\"
                                                     role=\"progressbar\"
                                                     aria-valuenow=\"";
                    // line 61
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), $context["domain"], array(), "array"), $context["locale"], array(), "array"), "completed", array(), "array"), "html", null, true);
                    echo "\"
                                                     aria-valuemin=\"0\"
                                                     aria-valuemax=\"100\"
                                                     style=\"width: ";
                    // line 64
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), $context["domain"], array(), "array"), $context["locale"], array(), "array"), "completed", array(), "array"), "html", null, true);
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
    }

    // line 14
    public function block_toolbar($context, array $blocks = array())
    {
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
    }

    // line 81
    public function block_javascript_footer($context, array $blocks = array())
    {
        // line 82
        echo "    ";
        $this->displayParentBlock("javascript_footer", $context, $blocks);
        echo "
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lexiktranslation/js/translation.js"), "html", null, true);
        echo "\"></script>
";
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
        return array (  241 => 83,  236 => 82,  233 => 81,  223 => 21,  218 => 19,  213 => 17,  209 => 15,  206 => 14,  197 => 74,  192 => 71,  185 => 69,  174 => 64,  168 => 61,  163 => 59,  155 => 56,  151 => 55,  148 => 54,  144 => 53,  140 => 52,  137 => 51,  133 => 50,  128 => 47,  111 => 44,  106 => 43,  89 => 42,  84 => 40,  78 => 36,  72 => 34,  70 => 33,  62 => 28,  59 => 27,  57 => 14,  54 => 13,  51 => 12,  45 => 10,  39 => 7,  34 => 6,  31 => 5,  22 => 1,);
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
