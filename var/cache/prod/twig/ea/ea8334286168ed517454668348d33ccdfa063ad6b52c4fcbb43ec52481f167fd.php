<?php

/* LexikTranslationBundle:Translation:grid.html.twig */
class __TwigTemplate_cab119e170d81724bd15f08c331cda8c78458e87ae95e16c59288ceb2c81e768 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'toolbar' => array($this, 'block_toolbar'),
            'data_grid' => array($this, 'block_data_grid'),
            'javascript_footer' => array($this, 'block_javascript_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["layout"]) ? $context["layout"] : null), "LexikTranslationBundle:Translation:grid.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translations.page_title", array(), "LexikTranslationBundle"), "html", null, true);
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"container\">
        ";
        // line 14
        $this->displayBlock('toolbar', $context, $blocks);
        // line 31
        echo "
        ";
        // line 32
        $this->displayBlock('data_grid', $context, $blocks);
        // line 35
        echo "    </div>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translations.page_title", array(), "LexikTranslationBundle"), "html", null, true);
        echo "
                    <div class=\"pull-right\">
                        <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("lexik_translation_new");
        echo "\" role=\"button\" class=\"btn btn-success\">
                            <span class=\"glyphicon glyphicon-plus\"></span>
                            ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translations.new_translation", array(), "LexikTranslationBundle"), "html", null, true);
        echo "
                        </a>
                        <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("lexik_translation_overview");
        echo "\" role=\"button\" class=\"btn btn-primary\">
                            <span class=\"glyphicon glyphicon-tasks\"></span>
                            ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("overview.page_title", array(), "LexikTranslationBundle"), "html", null, true);
        echo "
                        </a>
                    </div>
                </h1>
            </div>
        ";
    }

    // line 32
    public function block_data_grid($context, array $blocks = array())
    {
        // line 33
        echo "            ";
        $this->loadTemplate("LexikTranslationBundle:Translation:_ngGrid.html.twig", "LexikTranslationBundle:Translation:grid.html.twig", 33)->display($context);
        // line 34
        echo "        ";
    }

    // line 38
    public function block_javascript_footer($context, array $blocks = array())
    {
        // line 39
        echo "    ";
        $this->displayParentBlock("javascript_footer", $context, $blocks);
        echo "
    <script>
        var translationCfg = {
            locales: ";
        // line 42
        echo twig_jsonencode_filter((isset($context["locales"]) ? $context["locales"] : null));
        echo ",
            inputType: '";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["inputType"]) ? $context["inputType"] : null), "html", null, true);
        echo "',
            autoCacheClean: ";
        // line 44
        echo (((isset($context["autoCacheClean"]) ? $context["autoCacheClean"] : null)) ? ("true") : ("false"));
        echo ",
            profilerTokens: ";
        // line 45
        echo (( !(null === (isset($context["tokens"]) ? $context["tokens"] : null))) ? (twig_jsonencode_filter((isset($context["tokens"]) ? $context["tokens"] : null))) : ("null"));
        echo ",
            toggleSimilar: '";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["toggleSimilar"]) ? $context["toggleSimilar"] : null), "html", null, true);
        echo "',
            url: {
                list: '";
        // line 48
        echo $this->env->getExtension('routing')->getPath("lexik_translation_list");
        echo "',
                listByToken: '";
        // line 49
        echo $this->env->getExtension('routing')->getPath("lexik_translation_profiler", array("token" => "-token-"));
        echo "',
                update: '";
        // line 50
        echo $this->env->getExtension('routing')->getPath("lexik_translation_update", array("id" => "-id-"));
        echo "',
                delete: '";
        // line 51
        echo $this->env->getExtension('routing')->getPath("lexik_translation_delete", array("id" => "-id-"));
        echo "',
                deleteLocale: '";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lexik_translation_delete_locale", array("id" => "-id-", "locale" => "-locale-")), "html", null, true);
        echo "',
                invalidateCache: '";
        // line 53
        echo $this->env->getExtension('routing')->getPath("lexik_translation_invalidate_cache");
        echo "'
            },
            label: {
                hideCol: '";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translations.show_hide_columns", array(), "LexikTranslationBundle"), "html", null, true);
        echo "',
                toggleAllCol: '";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translations.toggle_all_columns", array(), "LexikTranslationBundle"), "html", null, true);
        echo "',
                invalidateCache: '";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translations.invalidate_cache", array(), "LexikTranslationBundle"), "html", null, true);
        echo "',
                allTranslations: '";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translations.all_translations", array(), "LexikTranslationBundle"), "html", null, true);
        echo "',
                profiler: '";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translations.profiler", array(), "LexikTranslationBundle"), "html", null, true);
        echo "',
                dataSource: '";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translations.data_source", array(), "LexikTranslationBundle"), "html", null, true);
        echo "',
                latestProfiles: '";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translations.latest_profiles", array(), "LexikTranslationBundle"), "html", null, true);
        echo "',
                profile: '";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translations.profile", array(), "LexikTranslationBundle"), "html", null, true);
        echo "',
                saveRow: '";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translations.save_row", array(), "LexikTranslationBundle"), "html", null, true);
        echo "',
                domain: '";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translations.domain", array(), "LexikTranslationBundle"), "html", null, true);
        echo "',
                key: '";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translations.key", array(), "LexikTranslationBundle"), "html", null, true);
        echo "',
                save: '";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translations.save", array(), "LexikTranslationBundle"), "html", null, true);
        echo "',
                updateSuccess: '";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translations.successfully_updated", array(), "LexikTranslationBundle"), "html", null, true);
        echo "',
                updateFail: '";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translations.update_failed", array(), "LexikTranslationBundle"), "html", null, true);
        echo "',
                deleteSuccess: '";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translations.successfully_deleted", array(), "LexikTranslationBundle"), "html", null, true);
        echo "',
                deleteFail: '";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translations.delete_failed", array(), "LexikTranslationBundle"), "html", null, true);
        echo "',
                noTranslations: '";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translations.no_translations", array(), "LexikTranslationBundle"), "html", null, true);
        echo "'
            }
        };
    </script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lexiktranslation/js/translation.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "LexikTranslationBundle:Translation:grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 76,  238 => 72,  234 => 71,  230 => 70,  226 => 69,  222 => 68,  218 => 67,  214 => 66,  210 => 65,  206 => 64,  202 => 63,  198 => 62,  194 => 61,  190 => 60,  186 => 59,  182 => 58,  178 => 57,  174 => 56,  168 => 53,  164 => 52,  160 => 51,  156 => 50,  152 => 49,  148 => 48,  143 => 46,  139 => 45,  135 => 44,  131 => 43,  127 => 42,  120 => 39,  117 => 38,  113 => 34,  110 => 33,  107 => 32,  97 => 25,  92 => 23,  87 => 21,  82 => 19,  77 => 17,  73 => 15,  70 => 14,  65 => 35,  63 => 32,  60 => 31,  58 => 14,  55 => 13,  52 => 12,  46 => 10,  40 => 7,  35 => 6,  32 => 5,  23 => 1,);
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
/* {% block title %}{{ 'translations.page_title'|trans({}, 'LexikTranslationBundle') }}{% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="container">*/
/*         {% block toolbar %}*/
/*             <div class="page-header">*/
/*                 <h1>*/
/*                     {{ 'translations.page_title'|trans({}, 'LexikTranslationBundle') }}*/
/*                     <div class="pull-right">*/
/*                         <a href="{{ path('lexik_translation_new') }}" role="button" class="btn btn-success">*/
/*                             <span class="glyphicon glyphicon-plus"></span>*/
/*                             {{ 'translations.new_translation'|trans({}, 'LexikTranslationBundle') }}*/
/*                         </a>*/
/*                         <a href="{{ path('lexik_translation_overview') }}" role="button" class="btn btn-primary">*/
/*                             <span class="glyphicon glyphicon-tasks"></span>*/
/*                             {{ 'overview.page_title'|trans({}, 'LexikTranslationBundle') }}*/
/*                         </a>*/
/*                     </div>*/
/*                 </h1>*/
/*             </div>*/
/*         {% endblock toolbar %}*/
/* */
/*         {% block data_grid %}*/
/*             {% include 'LexikTranslationBundle:Translation:_ngGrid.html.twig' %}*/
/*         {% endblock data_grid %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block javascript_footer %}*/
/*     {{ parent() }}*/
/*     <script>*/
/*         var translationCfg = {*/
/*             locales: {{ locales | json_encode | raw }},*/
/*             inputType: '{{ inputType }}',*/
/*             autoCacheClean: {{ autoCacheClean ? 'true' : 'false' }},*/
/*             profilerTokens: {{ tokens is not null ? (tokens | json_encode | raw) : 'null' }},*/
/*             toggleSimilar: '{{ toggleSimilar }}',*/
/*             url: {*/
/*                 list: '{{ path('lexik_translation_list') }}',*/
/*                 listByToken: '{{ path('lexik_translation_profiler', {'token': '-token-'}) }}',*/
/*                 update: '{{ path('lexik_translation_update', {'id': '-id-'}) }}',*/
/*                 delete: '{{ path('lexik_translation_delete', {'id': '-id-'}) }}',*/
/*                 deleteLocale: '{{ path('lexik_translation_delete_locale', {'id': '-id-', 'locale': '-locale-'}) }}',*/
/*                 invalidateCache: '{{ path('lexik_translation_invalidate_cache') }}'*/
/*             },*/
/*             label: {*/
/*                 hideCol: '{{ 'translations.show_hide_columns'|trans }}',*/
/*                 toggleAllCol: '{{ 'translations.toggle_all_columns'|trans }}',*/
/*                 invalidateCache: '{{ 'translations.invalidate_cache'|trans }}',*/
/*                 allTranslations: '{{ 'translations.all_translations'|trans }}',*/
/*                 profiler: '{{ 'translations.profiler'|trans }}',*/
/*                 dataSource: '{{ 'translations.data_source'|trans }}',*/
/*                 latestProfiles: '{{ 'translations.latest_profiles'|trans }}',*/
/*                 profile: '{{ 'translations.profile'|trans }}',*/
/*                 saveRow: '{{ 'translations.save_row'|trans }}',*/
/*                 domain: '{{ 'translations.domain'|trans }}',*/
/*                 key: '{{ 'translations.key'|trans }}',*/
/*                 save: '{{ 'translations.save'|trans }}',*/
/*                 updateSuccess: '{{ 'translations.successfully_updated'|trans }}',*/
/*                 updateFail: '{{ 'translations.update_failed'|trans }}',*/
/*                 deleteSuccess: '{{ 'translations.successfully_deleted'|trans }}',*/
/*                 deleteFail: '{{ 'translations.delete_failed'|trans }}',*/
/*                 noTranslations: '{{ 'translations.no_translations'|trans }}'*/
/*             }*/
/*         };*/
/*     </script>*/
/*     <script src="{{ asset('bundles/lexiktranslation/js/translation.js') }}"></script>*/
/* {% endblock %}*/
/* */
