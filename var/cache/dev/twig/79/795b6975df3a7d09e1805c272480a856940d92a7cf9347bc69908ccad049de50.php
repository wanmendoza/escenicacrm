<?php

/* WbcThemeBundle::error.html.twig */
class __TwigTemplate_ab9cdeb07c7fbe433bbb7ee561ab73f24f72562c1497a6f5373b78040bbea24d extends Twig_Template
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
        $__internal_461c516dd6bb29f8ea2532b8b07c08c50839477b8773344ef8dfbe460fd710ba = $this->env->getExtension("native_profiler");
        $__internal_461c516dd6bb29f8ea2532b8b07c08c50839477b8773344ef8dfbe460fd710ba->enter($__internal_461c516dd6bb29f8ea2532b8b07c08c50839477b8773344ef8dfbe460fd710ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WbcThemeBundle::error.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>";
        // line 4
        echo $this->env->getExtension('translator')->getTranslator()->trans("Error", array(), "messages");
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["e"]) ? $context["e"] : null), "statuscode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["e"]) ? $context["e"] : null), "statuscode", array()), "")) : ("")), "html", null, true);
        echo "</title>

    ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c36d26e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c36d26e_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/c36d26e_application.min_1.css");
            // line 7
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "c36d26e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c36d26e") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/c36d26e.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 9
        echo "
    <!-- as of IE9 cannot parse css files with more that 4K classes separating in two files -->
    <!--[if IE 9]>
    ";
        // line 12
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "01f1f6b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_01f1f6b_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/01f1f6b_application-ie9-part2_1.css");
            // line 13
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "01f1f6b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_01f1f6b") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/01f1f6b.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 15
        echo "    <![endif]-->

    ";
        // line 17
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b5cba6f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b5cba6f_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/b5cba6f_favicon_1.png");
            // line 18
            echo "    <link rel=\"shortcut icon\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
    ";
        } else {
            // asset "b5cba6f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b5cba6f") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/b5cba6f.png");
            echo "    <link rel=\"shortcut icon\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
    ";
        }
        unset($context["asset_url"]);
        // line 20
        echo "
    <!-- common libraries. required for every page-->
    ";
        // line 22
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4ac8c76_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4ac8c76_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/start_part_1.js");
            // line 24
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "4ac8c76"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4ac8c76") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/start.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 26
        echo "
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <script>
        /* yeah we need this empty stylesheet here. It's cool chrome & chromium fix
         chrome fix https://code.google.com/p/chromium/issues/detail?id=167083
         https://code.google.com/p/chromium/issues/detail?id=332189
         */
    </script>
</head>
<body class=\"error-page\">

<div class=\"container\">
    <main id=\"content\" class=\"error-container\" role=\"main\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-sm-6 col-xs-10 col-lg-offset-4 col-sm-offset-3 col-xs-offset-1\">
                <div class=\"error-container\">
                    <h1 class=\"error-code\">";
        // line 46
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["e"]) ? $context["e"] : null), "statuscode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["e"]) ? $context["e"] : null), "statuscode", array()), "")) : ("")), "html", null, true);
        echo "</h1>
                    <p class=\"error-info\">
                        ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "message", array()), "html", null, true);
        echo "
                    </p>
                    <p class=\"error-help mb\">
                        ";
        // line 51
        echo $this->env->getExtension('translator')->getTranslator()->trans("If you are sure it should, search for it.", array(), "messages");
        // line 52
        echo "                    </p>
                    ";
        // line 58
        echo "
                    <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("grand_central");
        echo "\" class=\"btn btn-inverse\">
                        ";
        // line 60
        echo $this->env->getExtension('translator')->getTranslator()->trans("Homepage", array(), "messages");
        echo " <i class=\"fa fa-home text-warning ml-xs\"></i>
                    </a>

                </div>
            </div>
        </div>
    </main>

    <footer class=\"page-footer\">
        ";
        // line 69
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " &copy; ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "tradename", array()), "html", null, true);
        echo "
    </footer>
</div>
<!-- The Loader. Is shown when pjax happens -->
<div class=\"loader-wrap hiding hide\">
    <i class=\"fa fa-circle-o-notch fa-spin-fast\"></i>
</div>

<!-- common libraries. required for every page-->
";
        // line 78
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7510bb1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7510bb1_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/7510bb1_part_1.js");
            // line 80
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "7510bb1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7510bb1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/7510bb1.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 82
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "dcf7375_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dcf7375_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/dcf7375_pace_1.js");
            // line 83
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" data-pace-options='{ \"target\": \".content-wrap\", \"ghostTime\": 1000 }'></script>
";
        } else {
            // asset "dcf7375"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dcf7375") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/dcf7375.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" data-pace-options='{ \"target\": \".content-wrap\", \"ghostTime\": 1000 }'></script>
";
        }
        unset($context["asset_url"]);
        // line 85
        echo "
</body>
</html>";
        
        $__internal_461c516dd6bb29f8ea2532b8b07c08c50839477b8773344ef8dfbe460fd710ba->leave($__internal_461c516dd6bb29f8ea2532b8b07c08c50839477b8773344ef8dfbe460fd710ba_prof);

    }

    public function getTemplateName()
    {
        return "WbcThemeBundle::error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 85,  212 => 83,  208 => 82,  194 => 80,  190 => 78,  176 => 69,  164 => 60,  160 => 59,  157 => 58,  154 => 52,  152 => 51,  146 => 48,  141 => 46,  119 => 26,  105 => 24,  101 => 22,  97 => 20,  83 => 18,  79 => 17,  75 => 15,  61 => 13,  57 => 12,  52 => 9,  38 => 7,  34 => 6,  27 => 4,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <title>{% trans %}Error{% endtrans %} {{ e.statuscode | default('') }}</title>*/
/* */
/*     {% stylesheets 'bundles/wbctheme/css/application.min.css' filter='cssrewrite' %}*/
/*     <link rel="stylesheet" href="{{ asset_url }}" />*/
/*     {% endstylesheets %}*/
/* */
/*     <!-- as of IE9 cannot parse css files with more that 4K classes separating in two files -->*/
/*     <!--[if IE 9]>*/
/*     {% stylesheets 'bundles/wbctheme/css/application-ie9-part2.css' filter='cssrewrite' %}*/
/*     <link rel="stylesheet" href="{{ asset_url }}" />*/
/*     {% endstylesheets %}*/
/*     <![endif]-->*/
/* */
/*     {% image 'bundles/wbctheme/img/favicon.png' %}*/
/*     <link rel="shortcut icon" href="{{ asset_url }}">*/
/*     {% endimage %}*/
/* */
/*     <!-- common libraries. required for every page-->*/
/*     {% javascripts output='js/start.js' filter="?jsqueeze"*/
/*     '@start_js'%}*/
/*     <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* */
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*     <script>*/
/*         /* yeah we need this empty stylesheet here. It's cool chrome & chromium fix*/
/*          chrome fix https://code.google.com/p/chromium/issues/detail?id=167083*/
/*          https://code.google.com/p/chromium/issues/detail?id=332189*/
/*          *//* */
/*     </script>*/
/* </head>*/
/* <body class="error-page">*/
/* */
/* <div class="container">*/
/*     <main id="content" class="error-container" role="main">*/
/*         <div class="row">*/
/*             <div class="col-lg-4 col-sm-6 col-xs-10 col-lg-offset-4 col-sm-offset-3 col-xs-offset-1">*/
/*                 <div class="error-container">*/
/*                     <h1 class="error-code">{{ e.statuscode | default('') }}</h1>*/
/*                     <p class="error-info">*/
/*                         {{ e.message }}*/
/*                     </p>*/
/*                     <p class="error-help mb">*/
/*                         {% trans %}If you are sure it should, search for it.{% endtrans %}*/
/*                     </p>*/
/*                     {#*/
/*                     <div class="form-group">*/
/*                         <input class="form-control input-no-border" type="text" placeholder="Search Pages">*/
/*                     </div>*/
/*                     #}*/
/* */
/*                     <a href="{{ path('grand_central') }}" class="btn btn-inverse">*/
/*                         {% trans %}Homepage{% endtrans %} <i class="fa fa-home text-warning ml-xs"></i>*/
/*                     </a>*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </main>*/
/* */
/*     <footer class="page-footer">*/
/*         {{ "now" | date('Y') }} &copy; {{ project.tradename }}*/
/*     </footer>*/
/* </div>*/
/* <!-- The Loader. Is shown when pjax happens -->*/
/* <div class="loader-wrap hiding hide">*/
/*     <i class="fa fa-circle-o-notch fa-spin-fast"></i>*/
/* </div>*/
/* */
/* <!-- common libraries. required for every page-->*/
/* {% javascripts*/
/* '@commonlibs'%}*/
/* <script src="{{ asset_url }}"></script>*/
/* {% endjavascripts %}*/
/* {% javascripts 'bundles/wbctheme/vendor/pace.js/pace.js' filter="?jsqueeze" %}*/
/* <script src="{{ asset_url }}" data-pace-options='{ "target": ".content-wrap", "ghostTime": 1000 }'></script>*/
/* {% endjavascripts %}*/
/* */
/* </body>*/
/* </html>*/
