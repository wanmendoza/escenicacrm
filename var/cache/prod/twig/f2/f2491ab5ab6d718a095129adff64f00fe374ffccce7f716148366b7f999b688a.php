<?php

/* WbcThemeBundle::layout.html.twig */
class __TwigTemplate_4b32841d685ace5709af5458551e761da05bfe01e5b5995c7fcd68b1909dee54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'extrastyles' => array($this, 'block_extrastyles'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'body' => array($this, 'block_body'),
            'extrascripts' => array($this, 'block_extrascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo " | ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Administrator", array(), "messages");
        echo " </title>

    ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fe04128_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe04128_0") : $this->env->getExtension('asset')->getAssetUrl("css/style_application.min_1.css");
            // line 7
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "fe04128"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe04128") : $this->env->getExtension('asset')->getAssetUrl("css/style.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
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
            // asset "2a5e487_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2a5e487_0") : $this->env->getExtension('asset')->getAssetUrl("css/4ie9_application-ie9-part2_1.css");
            // line 13
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "2a5e487"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2a5e487") : $this->env->getExtension('asset')->getAssetUrl("css/4ie9.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 15
        echo "    <![endif]-->

    ";
        // line 17
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fccee11_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fccee11_0") : $this->env->getExtension('asset')->getAssetUrl("css/extras_part_1.css");
            // line 19
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "fccee11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fccee11") : $this->env->getExtension('asset')->getAssetUrl("css/extras.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 21
        echo "
    ";
        // line 22
        $this->displayBlock('extrastyles', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b72db65_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b72db65_0") : $this->env->getExtension('asset')->getAssetUrl("icon/favicon_favicon_1.png");
            // line 26
            echo "    <link rel=\"shortcut icon\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\">
    ";
        } else {
            // asset "b72db65"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b72db65") : $this->env->getExtension('asset')->getAssetUrl("icon/favicon.png");
            echo "    <link rel=\"shortcut icon\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\">
    ";
        }
        unset($context["asset_url"]);
        // line 28
        echo "
    <!-- common libraries. required for every page-->
    ";
        // line 30
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4ac8c76_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4ac8c76_0") : $this->env->getExtension('asset')->getAssetUrl("js/start_part_1.js");
            // line 32
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "4ac8c76"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4ac8c76") : $this->env->getExtension('asset')->getAssetUrl("js/start.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 34
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
<body class=\"nav-static\">
<!--
  Main sidebar seen on the left. may be static or collapsing depending on selected state.

    * Collapsing - navigation automatically collapse when mouse leaves it and expand when enters.
    * Static - stays always open.
-->
";
        // line 54
        echo twig_include($this->env, $context, "WbcThemeBundle:Partials:sidebar.html.twig");
        echo "
";
        // line 55
        echo twig_include($this->env, $context, "WbcThemeBundle:Partials:navigator.html.twig", array("env" => "administrator"));
        echo "
";
        // line 56
        echo twig_include($this->env, $context, "WbcThemeBundle:Partials:chat.html.twig");
        echo "

<div class=\"content-wrap\">
    <!-- main page content. the place to put widgets in. usually consists of .row > .col-md-* > .widget.  -->
    <main id=\"content\" class=\"content\" role=\"main\">

        ";
        // line 62
        echo twig_include($this->env, $context, "WbcThemeBundle:Partials/Widgets/security:flash.html.twig");
        echo "
        <ol class=\"breadcrumb\">
            ";
        // line 64
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 67
        echo "        </ol>

        ";
        // line 69
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo "    </main>
</div>

<!-- The Loader. Is shown when pjax happens -->
<div class=\"loader-wrap hiding hide\">
    <i class=\"fa fa-circle-o-notch fa-spin-fast\"></i>
</div>

";
        // line 79
        echo twig_include($this->env, $context, "WbcThemeBundle:Partials/Widgets/security:info-modal.html.twig");
        echo "

<!-- common libraries. required for every page-->
";
        // line 82
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "235cc6e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_235cc6e_0") : $this->env->getExtension('asset')->getAssetUrl("js/lib_part_1.js");
            // line 84
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "235cc6e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_235cc6e") : $this->env->getExtension('asset')->getAssetUrl("js/lib.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 86
        echo "
";
        // line 87
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "49c7aac_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_49c7aac_0") : $this->env->getExtension('asset')->getAssetUrl("js/pace_pace_1.js");
            // line 88
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" data-pace-options='{ \"target\": \".content-wrap\", \"ghostTime\": 1000 }'></script>
";
        } else {
            // asset "49c7aac"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_49c7aac") : $this->env->getExtension('asset')->getAssetUrl("js/pace.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" data-pace-options='{ \"target\": \".content-wrap\", \"ghostTime\": 1000 }'></script>
";
        }
        unset($context["asset_url"]);
        // line 90
        echo "

";
        // line 92
        $this->displayBlock('extrascripts', $context, $blocks);
        // line 94
        echo "
<script>
    function playTTS(read,lang) {
        var tts=\"/speech\";
        var sec=\"/audio/recs/point1sec.mp3\";
        var a = new XMLHttpRequest();
        var b = document.getElementById(\"tts\");
        var read = read.replace(/&/g,\"and\");
        var url = tts+\".class.php\";

        b.src=sec;
        b.play();
        a.open(\"POST\", url, true);
        a.setRequestHeader(\"Content-type\", \"application/x-www-form-urlencoded\");
        a.setRequestHeader(\"Connection\", \"close\");
        a.onreadystatechange = function() {
        if(a.readyState == 4 && a.status == 200) {
            b.src=a.responseText;
            }
        }
        a.send(\"read=\"+ read +\"&lang=\"+lang);
    }
    function stopTTS() {
         var a = document.getElementById(\"tts\");
         a.pause();
         a.currentTime = 0;
    }

    function pauseTTS() {
         var a = document.getElementById(\"tts\");
         a.pause();
    }
    function resumeTTS() {
         var a = document.getElementById(\"tts\");
         a.play();
    }

    document.write('<audio id=\"tts\" autoplay><source src=\"/audio/recs/point1sec.mp3\" type=\"audio/mp3\" /></audio>');

    \$(document).ready(function(){
        //configuring messenger
        \$('.widget').widgster();
        var theme = 'air';
        \$.globalMessenger({ theme: theme });
        Messenger.options = { theme: theme  };

        //customize dates
        moment.locale('";
        // line 141
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array()), "html", null, true);
        echo "');

        function showInfo(Text, actions){
            var Text = Text || \"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("There is some important for you to know"), "html", null, true);
        echo "\";
            var actions = actions || false;

            ";
        // line 161
        echo "
            Messenger().post({
                message: Text,
                actions: actions
            });
        }

        function showSuccess(){
            var Text = Text || \"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Congratulations! you are so smart!"), "html", null, true);
        echo "\";

            Messenger().post({
                message: Text,
                type: 'success',
                showCloseButton: true
            });
        }

        function showError(Text){
            var Text = Text || \"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Error, please try it later!"), "html", null, true);
        echo "\";
            Messenger().post(Text);
        }

        function showErrorAndRetry(Text, functionToRetry){
            Messenger().run({
                errorMessage: 'Error destroying alien planet',
                successMessage: 'Alien planet destroyed!',
                action: function(opts) {
                    if(functionToRetry){
                        return opts.success();
                    }else{
                        return opts.error({
                            status: 500,
                            readyState: 0,
                            responseText: 0
                        });
                    }
                }
            });

            return false;
        }

        function refreshNotifications(){
            \$('#load-notifications-btn').click();
        }

        //actions
        refreshNotifications();
        var notificationsInterval;
        notificationsInterval = setInterval(refreshNotifications, 5 * 1000);

        \$.winFocus(function(event, isVisible) {
            if(isVisible){
                //restart interval
                notificationsInterval = setInterval(refreshNotifications, 5 * 1000);
                console.log('Restart Interval');
            }else{
                //stop interval
                clearInterval(notificationsInterval);
                console.log('Stop Interval');
            }
        });
    });
</script>

</body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("Dashboard", array(), "messages");
    }

    // line 22
    public function block_extrastyles($context, array $blocks = array())
    {
        // line 23
        echo "    ";
    }

    // line 64
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 65
        echo "                <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("wbc_administrator_homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Dashboard"), "html", null, true);
        echo "</a></li>
            ";
    }

    // line 69
    public function block_body($context, array $blocks = array())
    {
        // line 70
        echo "        ";
    }

    // line 92
    public function block_extrascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "WbcThemeBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  429 => 92,  425 => 70,  422 => 69,  413 => 65,  410 => 64,  406 => 23,  403 => 22,  397 => 4,  344 => 179,  331 => 169,  321 => 161,  315 => 144,  309 => 141,  260 => 94,  258 => 92,  254 => 90,  240 => 88,  236 => 87,  233 => 86,  219 => 84,  215 => 82,  209 => 79,  199 => 71,  197 => 69,  193 => 67,  191 => 64,  186 => 62,  177 => 56,  173 => 55,  169 => 54,  147 => 34,  133 => 32,  129 => 30,  125 => 28,  111 => 26,  107 => 25,  104 => 24,  102 => 22,  99 => 21,  85 => 19,  81 => 17,  77 => 15,  63 => 13,  59 => 12,  54 => 9,  40 => 7,  36 => 6,  29 => 4,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <title>{% block title %}{% trans %}Dashboard{% endtrans %}{% endblock %} | {% trans %}Administrator{% endtrans %} </title>*/
/* */
/*     {% stylesheets 'bundles/wbctheme/css/application.min.css' filter='cssrewrite' output='css/style.css' %}*/
/*     <link rel="stylesheet" href="{{ asset_url }}" />*/
/*     {% endstylesheets %}*/
/* */
/*     <!-- as of IE9 cannot parse css files with more that 4K classes separating in two files -->*/
/*     <!--[if IE 9]>*/
/*     {% stylesheets 'bundles/wbctheme/css/application-ie9-part2.css' filter='cssrewrite' output='css/4ie9.css' %}*/
/*     <link rel="stylesheet" href="{{ asset_url }}" />*/
/*     {% endstylesheets %}*/
/*     <![endif]-->*/
/* */
/*     {% stylesheets filter='cssrewrite' output='css/extras.css'*/
/*     '@backendcss'%}*/
/*     <link rel="stylesheet" href="{{ asset_url }}" />*/
/*     {% endstylesheets %}*/
/* */
/*     {% block extrastyles %}*/
/*     {% endblock %}*/
/* */
/*     {% image 'bundles/wbctheme/img/favicon.png' output='icon/favicon.png' %}*/
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
/* <body class="nav-static">*/
/* <!--*/
/*   Main sidebar seen on the left. may be static or collapsing depending on selected state.*/
/* */
/*     * Collapsing - navigation automatically collapse when mouse leaves it and expand when enters.*/
/*     * Static - stays always open.*/
/* -->*/
/* {{ include('WbcThemeBundle:Partials:sidebar.html.twig') }}*/
/* {{ include('WbcThemeBundle:Partials:navigator.html.twig', { 'env': 'administrator' }) }}*/
/* {{ include('WbcThemeBundle:Partials:chat.html.twig') }}*/
/* */
/* <div class="content-wrap">*/
/*     <!-- main page content. the place to put widgets in. usually consists of .row > .col-md-* > .widget.  -->*/
/*     <main id="content" class="content" role="main">*/
/* */
/*         {{ include('WbcThemeBundle:Partials/Widgets/security:flash.html.twig') }}*/
/*         <ol class="breadcrumb">*/
/*             {% block breadcrumb %}*/
/*                 <li><a href="{{ path('wbc_administrator_homepage') }}">{{ 'Dashboard' | trans }}</a></li>*/
/*             {% endblock %}*/
/*         </ol>*/
/* */
/*         {% block body %}*/
/*         {% endblock %}*/
/*     </main>*/
/* </div>*/
/* */
/* <!-- The Loader. Is shown when pjax happens -->*/
/* <div class="loader-wrap hiding hide">*/
/*     <i class="fa fa-circle-o-notch fa-spin-fast"></i>*/
/* </div>*/
/* */
/* {{ include('WbcThemeBundle:Partials/Widgets/security:info-modal.html.twig') }}*/
/* */
/* <!-- common libraries. required for every page-->*/
/* {% javascripts output='js/lib.js' filter="?jsqueeze"*/
/* '@commonlibs'%}*/
/* <script src="{{ asset_url }}"></script>*/
/* {% endjavascripts %}*/
/* */
/* {% javascripts 'bundles/wbctheme/vendor/pace.js/pace.js' filter="?jsqueeze" output='js/pace.js' %}*/
/* <script src="{{ asset_url }}" data-pace-options='{ "target": ".content-wrap", "ghostTime": 1000 }'></script>*/
/* {% endjavascripts %}*/
/* */
/* */
/* {% block extrascripts %}*/
/* {% endblock %}*/
/* */
/* <script>*/
/*     function playTTS(read,lang) {*/
/*         var tts="/speech";*/
/*         var sec="/audio/recs/point1sec.mp3";*/
/*         var a = new XMLHttpRequest();*/
/*         var b = document.getElementById("tts");*/
/*         var read = read.replace(/&/g,"and");*/
/*         var url = tts+".class.php";*/
/* */
/*         b.src=sec;*/
/*         b.play();*/
/*         a.open("POST", url, true);*/
/*         a.setRequestHeader("Content-type", "application/x-www-form-urlencoded");*/
/*         a.setRequestHeader("Connection", "close");*/
/*         a.onreadystatechange = function() {*/
/*         if(a.readyState == 4 && a.status == 200) {*/
/*             b.src=a.responseText;*/
/*             }*/
/*         }*/
/*         a.send("read="+ read +"&lang="+lang);*/
/*     }*/
/*     function stopTTS() {*/
/*          var a = document.getElementById("tts");*/
/*          a.pause();*/
/*          a.currentTime = 0;*/
/*     }*/
/* */
/*     function pauseTTS() {*/
/*          var a = document.getElementById("tts");*/
/*          a.pause();*/
/*     }*/
/*     function resumeTTS() {*/
/*          var a = document.getElementById("tts");*/
/*          a.play();*/
/*     }*/
/* */
/*     document.write('<audio id="tts" autoplay><source src="/audio/recs/point1sec.mp3" type="audio/mp3" /></audio>');*/
/* */
/*     $(document).ready(function(){*/
/*         //configuring messenger*/
/*         $('.widget').widgster();*/
/*         var theme = 'air';*/
/*         $.globalMessenger({ theme: theme });*/
/*         Messenger.options = { theme: theme  };*/
/* */
/*         //customize dates*/
/*         moment.locale('{{ app.request.locale }}');*/
/* */
/*         function showInfo(Text, actions){*/
/*             var Text = Text || "{{ "There is some important for you to know" | trans }}";*/
/*             var actions = actions || false;*/
/* */
/*             {#*/
/*                 var actions = {*/
/*                     cancel: {*/
/*                         label: 'cancel launch',*/
/*                         action: function() {*/
/*                             return msg.update({*/
/*                                 message: 'Thermonuclear war averted',*/
/*                                 type: 'success',*/
/*                                 actions: false*/
/*                             });*/
/*                         }*/
/*                     }*/
/*                 };*/
/*             #}*/
/* */
/*             Messenger().post({*/
/*                 message: Text,*/
/*                 actions: actions*/
/*             });*/
/*         }*/
/* */
/*         function showSuccess(){*/
/*             var Text = Text || "{{ "Congratulations! you are so smart!" | trans }}";*/
/* */
/*             Messenger().post({*/
/*                 message: Text,*/
/*                 type: 'success',*/
/*                 showCloseButton: true*/
/*             });*/
/*         }*/
/* */
/*         function showError(Text){*/
/*             var Text = Text || "{{ "Error, please try it later!" | trans }}";*/
/*             Messenger().post(Text);*/
/*         }*/
/* */
/*         function showErrorAndRetry(Text, functionToRetry){*/
/*             Messenger().run({*/
/*                 errorMessage: 'Error destroying alien planet',*/
/*                 successMessage: 'Alien planet destroyed!',*/
/*                 action: function(opts) {*/
/*                     if(functionToRetry){*/
/*                         return opts.success();*/
/*                     }else{*/
/*                         return opts.error({*/
/*                             status: 500,*/
/*                             readyState: 0,*/
/*                             responseText: 0*/
/*                         });*/
/*                     }*/
/*                 }*/
/*             });*/
/* */
/*             return false;*/
/*         }*/
/* */
/*         function refreshNotifications(){*/
/*             $('#load-notifications-btn').click();*/
/*         }*/
/* */
/*         //actions*/
/*         refreshNotifications();*/
/*         var notificationsInterval;*/
/*         notificationsInterval = setInterval(refreshNotifications, 5 * 1000);*/
/* */
/*         $.winFocus(function(event, isVisible) {*/
/*             if(isVisible){*/
/*                 //restart interval*/
/*                 notificationsInterval = setInterval(refreshNotifications, 5 * 1000);*/
/*                 console.log('Restart Interval');*/
/*             }else{*/
/*                 //stop interval*/
/*                 clearInterval(notificationsInterval);*/
/*                 console.log('Stop Interval');*/
/*             }*/
/*         });*/
/*     });*/
/* </script>*/
/* */
/* </body>*/
/* </html>*/
