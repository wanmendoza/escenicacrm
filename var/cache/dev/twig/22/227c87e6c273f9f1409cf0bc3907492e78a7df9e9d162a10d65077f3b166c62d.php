<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_18b190152c7d5791d4c271e797dbf4317d970bea4ec22c3e9f787477ffbbbe14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7aeee6372604e255b6313822b099b6e61cc597dc55de9003fc421f8b8ea0a0e9 = $this->env->getExtension("native_profiler");
        $__internal_7aeee6372604e255b6313822b099b6e61cc597dc55de9003fc421f8b8ea0a0e9->enter($__internal_7aeee6372604e255b6313822b099b6e61cc597dc55de9003fc421f8b8ea0a0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>";
        // line 4
        echo $this->env->getExtension('translator')->getTranslator()->trans("Login", array(), "messages");
        echo "</title>

    ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "31fcf66_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_31fcf66_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/31fcf66_application_1.css");
            // line 7
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "31fcf66"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_31fcf66") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/31fcf66.css");
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
<body class=\"login-page\">

<div class=\"container\">
    ";
        // line 36
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("WbcThemeBundle:Default:lang"));
        echo "
    <main id=\"content\" class=\"widget-login-container\" role=\"main\">

        <div class=\"row\">
            <div class=\"col-lg-4 col-sm-6 col-xs-10 col-lg-offset-4 col-sm-offset-3 col-xs-offset-1\">
                
                <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/wbctheme/img/logoescenica.png"), "html", null, true);
        echo "\" style=\"display:block; text-align:center;margin:0 auto;     margin-bottom: 50px;\">
                <section class=\"widget widget-login animated fadeInUp loginwidget\">
                    <header>
                        <h3 id=\"form_title\">";
        // line 45
        echo $this->env->getExtension('translator')->getTranslator()->trans("Login", array(), "messages");
        echo "</h3>
                    </header>
                    <div class=\"widget-body\">

                        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 50
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 51
                echo "                                <div class=\"alert alert-danger fade in\">
                                    <button data-dismiss=\"alert\" class=\"close\">
                                        ×
                                    </button>
                                    <i class=\"fa-fw fa fa-times\"></i>
                                    ";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                                </div>
                                <br>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
                        ";
        // line 62
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 64
        echo "
                    </div>
                </section>
            </div>
        </div>

    </main>
    <footer class=\"page-footer\">
        ";
        // line 72
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " &copy; ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "tradename", array()), "html", null, true);
        echo ".
    </footer>
</div>
<!-- The Loader. Is shown when pjax happens -->
<div class=\"loader-wrap hiding hide\">
    <i class=\"fa fa-circle-o-notch fa-spin-fast\"></i>
</div>

<!-- common libraries. required for every page-->
";
        // line 81
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7510bb1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7510bb1_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/7510bb1_part_1.js");
            // line 82
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
        // line 84
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "dcf7375_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dcf7375_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/dcf7375_pace_1.js");
            // line 85
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
        // line 87
        echo "
<!-- page specific libs -->
<!-- page specific js -->
</body>
<style>
.login-page {
    background-color: #fff;
}

.widget-login-container {
    padding-top: 5%;
}

.loginwidget{
    background: rgb(38, 153, 59);
    color:#fff;
}

.loginwidget a{
    color:#fff;
}

.loginwidget label{
    color:#fff;
}

.login-form .form-control{
    background-color:#fff;
}
</style>
</html>";
        
        $__internal_7aeee6372604e255b6313822b099b6e61cc597dc55de9003fc421f8b8ea0a0e9->leave($__internal_7aeee6372604e255b6313822b099b6e61cc597dc55de9003fc421f8b8ea0a0e9_prof);

    }

    // line 62
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6656e61454a011ced6eb89b42267e3ccf2730d01b0fe21e12a8bc3c89b11e341 = $this->env->getExtension("native_profiler");
        $__internal_6656e61454a011ced6eb89b42267e3ccf2730d01b0fe21e12a8bc3c89b11e341->enter($__internal_6656e61454a011ced6eb89b42267e3ccf2730d01b0fe21e12a8bc3c89b11e341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 63
        echo "                        ";
        
        $__internal_6656e61454a011ced6eb89b42267e3ccf2730d01b0fe21e12a8bc3c89b11e341->leave($__internal_6656e61454a011ced6eb89b42267e3ccf2730d01b0fe21e12a8bc3c89b11e341_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 63,  270 => 62,  233 => 87,  219 => 85,  215 => 84,  201 => 82,  197 => 81,  183 => 72,  173 => 64,  171 => 62,  168 => 61,  162 => 60,  152 => 56,  145 => 51,  140 => 50,  136 => 49,  129 => 45,  123 => 42,  114 => 36,  96 => 20,  82 => 18,  78 => 17,  74 => 15,  60 => 13,  56 => 12,  51 => 9,  37 => 7,  33 => 6,  28 => 4,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <title>{% trans %}Login{% endtrans %}</title>*/
/* */
/*     {% stylesheets 'bundles/wbctheme/css/application.css' filter='cssrewrite' %}*/
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
/* <body class="login-page">*/
/* */
/* <div class="container">*/
/*     {{ render(controller('WbcThemeBundle:Default:lang')) }}*/
/*     <main id="content" class="widget-login-container" role="main">*/
/* */
/*         <div class="row">*/
/*             <div class="col-lg-4 col-sm-6 col-xs-10 col-lg-offset-4 col-sm-offset-3 col-xs-offset-1">*/
/*                 */
/*                 <img src="{{ asset('bundles/wbctheme/img/logoescenica.png') }}" style="display:block; text-align:center;margin:0 auto;     margin-bottom: 50px;">*/
/*                 <section class="widget widget-login animated fadeInUp loginwidget">*/
/*                     <header>*/
/*                         <h3 id="form_title">{% trans %}Login{% endtrans %}</h3>*/
/*                     </header>*/
/*                     <div class="widget-body">*/
/* */
/*                         {% for type, messages in app.session.flashBag.all %}*/
/*                             {% for message in messages %}*/
/*                                 <div class="alert alert-danger fade in">*/
/*                                     <button data-dismiss="alert" class="close">*/
/*                                         ×*/
/*                                     </button>*/
/*                                     <i class="fa-fw fa fa-times"></i>*/
/*                                     {{ message|trans({}, 'FOSUserBundle') }}*/
/*                                 </div>*/
/*                                 <br>*/
/*                             {% endfor %}*/
/*                         {% endfor %}*/
/* */
/*                         {% block fos_user_content %}*/
/*                         {% endblock %}*/
/* */
/*                     </div>*/
/*                 </section>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </main>*/
/*     <footer class="page-footer">*/
/*         {{ "now" | date('Y') }} &copy; {{ project.tradename }}.*/
/*     </footer>*/
/* </div>*/
/* <!-- The Loader. Is shown when pjax happens -->*/
/* <div class="loader-wrap hiding hide">*/
/*     <i class="fa fa-circle-o-notch fa-spin-fast"></i>*/
/* </div>*/
/* */
/* <!-- common libraries. required for every page-->*/
/* {% javascripts'@commonlibs'%}*/
/* <script src="{{ asset_url }}"></script>*/
/* {% endjavascripts %}*/
/* {% javascripts 'bundles/wbctheme/vendor/pace.js/pace.js' filter="?jsqueeze" %}*/
/* <script src="{{ asset_url }}" data-pace-options='{ "target": ".content-wrap", "ghostTime": 1000 }'></script>*/
/* {% endjavascripts %}*/
/* */
/* <!-- page specific libs -->*/
/* <!-- page specific js -->*/
/* </body>*/
/* <style>*/
/* .login-page {*/
/*     background-color: #fff;*/
/* }*/
/* */
/* .widget-login-container {*/
/*     padding-top: 5%;*/
/* }*/
/* */
/* .loginwidget{*/
/*     background: rgb(38, 153, 59);*/
/*     color:#fff;*/
/* }*/
/* */
/* .loginwidget a{*/
/*     color:#fff;*/
/* }*/
/* */
/* .loginwidget label{*/
/*     color:#fff;*/
/* }*/
/* */
/* .login-form .form-control{*/
/*     background-color:#fff;*/
/* }*/
/* </style>*/
/* </html>*/
