<?php

/* LexikTranslationBundle:Translation:grid.html.twig */
class __TwigTemplate_cc1f5cd9fadeaedfc8818902ff67eb1fff924cc8614c2ba642371da7686b1a2a extends Twig_Template
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
        return $this->loadTemplate((isset($context["layout"]) ? $context["layout"] : $this->getContext($context, "layout")), "LexikTranslationBundle:Translation:grid.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9fed666107c8d4024e59e0f6761e993e8d1d4a4d2dcbd3030850a5a490928e5f = $this->env->getExtension("native_profiler");
        $__internal_9fed666107c8d4024e59e0f6761e993e8d1d4a4d2dcbd3030850a5a490928e5f->enter($__internal_9fed666107c8d4024e59e0f6761e993e8d1d4a4d2dcbd3030850a5a490928e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LexikTranslationBundle:Translation:grid.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fed666107c8d4024e59e0f6761e993e8d1d4a4d2dcbd3030850a5a490928e5f->leave($__internal_9fed666107c8d4024e59e0f6761e993e8d1d4a4d2dcbd3030850a5a490928e5f_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6a9164d732df4d57feee77c96dcf72cf05908627cdb6800ef1d9a20a29f95949 = $this->env->getExtension("native_profiler");
        $__internal_6a9164d732df4d57feee77c96dcf72cf05908627cdb6800ef1d9a20a29f95949->enter($__internal_6a9164d732df4d57feee77c96dcf72cf05908627cdb6800ef1d9a20a29f95949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lexiktranslation/css/translation.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6a9164d732df4d57feee77c96dcf72cf05908627cdb6800ef1d9a20a29f95949->leave($__internal_6a9164d732df4d57feee77c96dcf72cf05908627cdb6800ef1d9a20a29f95949_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_0bb6d27c2f53312785a864c35251e9798294949f497803d8df087de48851f461 = $this->env->getExtension("native_profiler");
        $__internal_0bb6d27c2f53312785a864c35251e9798294949f497803d8df087de48851f461->enter($__internal_0bb6d27c2f53312785a864c35251e9798294949f497803d8df087de48851f461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translations.page_title", array(), "LexikTranslationBundle"), "html", null, true);
        
        $__internal_0bb6d27c2f53312785a864c35251e9798294949f497803d8df087de48851f461->leave($__internal_0bb6d27c2f53312785a864c35251e9798294949f497803d8df087de48851f461_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_85cb235c8b1de65a55361b0440fc492894efe619cee13727b64241efc93440ca = $this->env->getExtension("native_profiler");
        $__internal_85cb235c8b1de65a55361b0440fc492894efe619cee13727b64241efc93440ca->enter($__internal_85cb235c8b1de65a55361b0440fc492894efe619cee13727b64241efc93440ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_85cb235c8b1de65a55361b0440fc492894efe619cee13727b64241efc93440ca->leave($__internal_85cb235c8b1de65a55361b0440fc492894efe619cee13727b64241efc93440ca_prof);

    }

    // line 14
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2c878b4b1b64588b60e3153f2614742a81a6a50ab22c8af12289d9668525d3fa = $this->env->getExtension("native_profiler");
        $__internal_2c878b4b1b64588b60e3153f2614742a81a6a50ab22c8af12289d9668525d3fa->enter($__internal_2c878b4b1b64588b60e3153f2614742a81a6a50ab22c8af12289d9668525d3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_2c878b4b1b64588b60e3153f2614742a81a6a50ab22c8af12289d9668525d3fa->leave($__internal_2c878b4b1b64588b60e3153f2614742a81a6a50ab22c8af12289d9668525d3fa_prof);

    }

    // line 32
    public function block_data_grid($context, array $blocks = array())
    {
        $__internal_c144f13263035f25913f29c874e0b351aa72468bb78de4b3c270905197ba916b = $this->env->getExtension("native_profiler");
        $__internal_c144f13263035f25913f29c874e0b351aa72468bb78de4b3c270905197ba916b->enter($__internal_c144f13263035f25913f29c874e0b351aa72468bb78de4b3c270905197ba916b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data_grid"));

        // line 33
        echo "            ";
        $this->loadTemplate("LexikTranslationBundle:Translation:_ngGrid.html.twig", "LexikTranslationBundle:Translation:grid.html.twig", 33)->display($context);
        // line 34
        echo "        ";
        
        $__internal_c144f13263035f25913f29c874e0b351aa72468bb78de4b3c270905197ba916b->leave($__internal_c144f13263035f25913f29c874e0b351aa72468bb78de4b3c270905197ba916b_prof);

    }

    // line 38
    public function block_javascript_footer($context, array $blocks = array())
    {
        $__internal_4dda363944faf715fa7d7057a27ae0972e39fb93800b1b0af18ff9ef3fdf1322 = $this->env->getExtension("native_profiler");
        $__internal_4dda363944faf715fa7d7057a27ae0972e39fb93800b1b0af18ff9ef3fdf1322->enter($__internal_4dda363944faf715fa7d7057a27ae0972e39fb93800b1b0af18ff9ef3fdf1322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript_footer"));

        // line 39
        echo "    ";
        $this->displayParentBlock("javascript_footer", $context, $blocks);
        echo "
    <script>
        var translationCfg = {
            locales: ";
        // line 42
        echo twig_jsonencode_filter((isset($context["locales"]) ? $context["locales"] : $this->getContext($context, "locales")));
        echo ",
            inputType: '";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["inputType"]) ? $context["inputType"] : $this->getContext($context, "inputType")), "html", null, true);
        echo "',
            autoCacheClean: ";
        // line 44
        echo (((isset($context["autoCacheClean"]) ? $context["autoCacheClean"] : $this->getContext($context, "autoCacheClean"))) ? ("true") : ("false"));
        echo ",
            profilerTokens: ";
        // line 45
        echo (( !(null === (isset($context["tokens"]) ? $context["tokens"] : $this->getContext($context, "tokens")))) ? (twig_jsonencode_filter((isset($context["tokens"]) ? $context["tokens"] : $this->getContext($context, "tokens")))) : ("null"));
        echo ",
            toggleSimilar: '";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["toggleSimilar"]) ? $context["toggleSimilar"] : $this->getContext($context, "toggleSimilar")), "html", null, true);
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
        
        $__internal_4dda363944faf715fa7d7057a27ae0972e39fb93800b1b0af18ff9ef3fdf1322->leave($__internal_4dda363944faf715fa7d7057a27ae0972e39fb93800b1b0af18ff9ef3fdf1322_prof);

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
        return array (  284 => 76,  277 => 72,  273 => 71,  269 => 70,  265 => 69,  261 => 68,  257 => 67,  253 => 66,  249 => 65,  245 => 64,  241 => 63,  237 => 62,  233 => 61,  229 => 60,  225 => 59,  221 => 58,  217 => 57,  213 => 56,  207 => 53,  203 => 52,  199 => 51,  195 => 50,  191 => 49,  187 => 48,  182 => 46,  178 => 45,  174 => 44,  170 => 43,  166 => 42,  159 => 39,  153 => 38,  146 => 34,  143 => 33,  137 => 32,  124 => 25,  119 => 23,  114 => 21,  109 => 19,  104 => 17,  100 => 15,  94 => 14,  86 => 35,  84 => 32,  81 => 31,  79 => 14,  76 => 13,  70 => 12,  58 => 10,  49 => 7,  44 => 6,  38 => 5,  23 => 1,);
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
