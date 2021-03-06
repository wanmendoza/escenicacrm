<?php

/* WbcThemeBundle::translate.html.twig */
class __TwigTemplate_8dcb384ae4a5a596842249605c506474e576405961148fd0620de348209d5d64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'extrastyles' => array($this, 'block_extrastyles'),
            'flash_message' => array($this, 'block_flash_message'),
            'content' => array($this, 'block_content'),
            'javascript_footer' => array($this, 'block_javascript_footer'),
            'extrascripts' => array($this, 'block_extrascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d1f76f83b2768d8738a4b842fbd5c036ce25f98ddab25d0646301e14cb7a3a8 = $this->env->getExtension("native_profiler");
        $__internal_2d1f76f83b2768d8738a4b842fbd5c036ce25f98ddab25d0646301e14cb7a3a8->enter($__internal_2d1f76f83b2768d8738a4b842fbd5c036ce25f98ddab25d0646301e14cb7a3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WbcThemeBundle::translate.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " | ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Administrator", array(), "messages");
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "
    ";
        // line 11
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fe04128_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe04128_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/style_application.min_1.css");
            // line 12
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "fe04128"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe04128") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/style.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 14
        echo "
    <!-- as of IE9 cannot parse css files with more that 4K classes separating in two files -->
    <!--[if IE 9]>
    ";
        // line 17
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2a5e487_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2a5e487_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/4ie9_application-ie9-part2_1.css");
            // line 18
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "2a5e487"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2a5e487") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/4ie9.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 20
        echo "    <![endif]-->

    ";
        // line 22
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fccee11_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fccee11_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/extras_part_1.css");
            // line 24
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "fccee11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fccee11") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/extras.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 26
        echo "
    ";
        // line 27
        $this->displayBlock('extrastyles', $context, $blocks);
        // line 29
        echo "
    ";
        // line 30
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b72db65_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b72db65_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/icon/favicon_favicon_1.png");
            // line 31
            echo "    <link rel=\"shortcut icon\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
    ";
        } else {
            // asset "b72db65"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b72db65") : $this->env->getExtension('asset')->getAssetUrl("_controller/icon/favicon.png");
            echo "    <link rel=\"shortcut icon\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
    ";
        }
        unset($context["asset_url"]);
        // line 33
        echo "
    <!-- common libraries. required for every page-->
    ";
        // line 35
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4ac8c76_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4ac8c76_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/start_part_1.js");
            // line 37
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
        // line 39
        echo "
    <style>
        .nav-static .page-controls, .nav-static .content-wrap, .nav-static .loader-wrap {
            left: 0;
            margin-left: 0;
            transition: none 0s ease 0s ;
        }

        .page-controls, .content-wrap, .loader-wrap {
            left: 154px;
            margin-left: 0px;
        }
    </style>

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
        // line 73
        echo twig_include($this->env, $context, "WbcThemeBundle:Partials:navigator.html.twig", array("env" => "translation"));
        echo "
";
        // line 74
        echo twig_include($this->env, $context, "WbcThemeBundle:Partials:chat.html.twig");
        echo "

<div class=\"content-wrap\">
    <!-- main page content. the place to put widgets in. usually consists of .row > .col-md-* > .widget.  -->
    <main id=\"content\" class=\"content\" role=\"main\">

        ";
        // line 80
        echo twig_include($this->env, $context, "WbcThemeBundle:Partials/Widgets/security:flash.html.twig");
        echo "

        ";
        // line 82
        $this->displayBlock('flash_message', $context, $blocks);
        // line 98
        echo "
        ";
        // line 99
        $this->displayBlock('content', $context, $blocks);
        // line 100
        echo "    </main>
</div>

<!-- The Loader. Is shown when pjax happens -->
<div class=\"loader-wrap hiding hide\">
    <i class=\"fa fa-circle-o-notch fa-spin-fast\"></i>
</div>

";
        // line 108
        echo twig_include($this->env, $context, "WbcThemeBundle:Partials/Widgets/security:info-modal.html.twig");
        echo "

";
        // line 110
        $this->displayBlock('javascript_footer', $context, $blocks);
        // line 115
        echo "
<!-- common libraries. required for every page-->
";
        // line 117
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "235cc6e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_235cc6e_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/lib_part_1.js");
            // line 119
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "235cc6e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_235cc6e") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/lib.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 121
        echo "
";
        // line 122
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "49c7aac_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_49c7aac_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/pace_pace_1.js");
            // line 123
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" data-pace-options='{ \"target\": \".content-wrap\", \"ghostTime\": 1000 }'></script>
";
        } else {
            // asset "49c7aac"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_49c7aac") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/pace.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" data-pace-options='{ \"target\": \".content-wrap\", \"ghostTime\": 1000 }'></script>
";
        }
        unset($context["asset_url"]);
        // line 125
        echo "

";
        // line 127
        $this->displayBlock('extrascripts', $context, $blocks);
        // line 129
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
        // line 176
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "');

        function showInfo(Text, actions){
            var Text = Text || \"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("There is some important for you to know"), "html", null, true);
        echo "\";
            var actions = actions || false;

            ";
        // line 196
        echo "
            Messenger().post({
                message: Text,
                actions: actions
            });
        }

        function showSuccess(){
            var Text = Text || \"";
        // line 204
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
        // line 214
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
        
        $__internal_2d1f76f83b2768d8738a4b842fbd5c036ce25f98ddab25d0646301e14cb7a3a8->leave($__internal_2d1f76f83b2768d8738a4b842fbd5c036ce25f98ddab25d0646301e14cb7a3a8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_63882317fa359dbd4007a29d5f67e3fabf43dff4fc92858b5c905f676ee8bd43 = $this->env->getExtension("native_profiler");
        $__internal_63882317fa359dbd4007a29d5f67e3fabf43dff4fc92858b5c905f676ee8bd43->enter($__internal_63882317fa359dbd4007a29d5f67e3fabf43dff4fc92858b5c905f676ee8bd43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_63882317fa359dbd4007a29d5f67e3fabf43dff4fc92858b5c905f676ee8bd43->leave($__internal_63882317fa359dbd4007a29d5f67e3fabf43dff4fc92858b5c905f676ee8bd43_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_599464c11354da2a746e2e39e1b89cd44da158aa207951eb16ac90ae54ac3c18 = $this->env->getExtension("native_profiler");
        $__internal_599464c11354da2a746e2e39e1b89cd44da158aa207951eb16ac90ae54ac3c18->enter($__internal_599464c11354da2a746e2e39e1b89cd44da158aa207951eb16ac90ae54ac3c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lexiktranslation/ng-table/ng-table.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_599464c11354da2a746e2e39e1b89cd44da158aa207951eb16ac90ae54ac3c18->leave($__internal_599464c11354da2a746e2e39e1b89cd44da158aa207951eb16ac90ae54ac3c18_prof);

    }

    // line 27
    public function block_extrastyles($context, array $blocks = array())
    {
        $__internal_aa84d4842c334f4cae6ed872b9e883e776ea436c1f24404906c90d88a7bb01b8 = $this->env->getExtension("native_profiler");
        $__internal_aa84d4842c334f4cae6ed872b9e883e776ea436c1f24404906c90d88a7bb01b8->enter($__internal_aa84d4842c334f4cae6ed872b9e883e776ea436c1f24404906c90d88a7bb01b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrastyles"));

        // line 28
        echo "    ";
        
        $__internal_aa84d4842c334f4cae6ed872b9e883e776ea436c1f24404906c90d88a7bb01b8->leave($__internal_aa84d4842c334f4cae6ed872b9e883e776ea436c1f24404906c90d88a7bb01b8_prof);

    }

    // line 82
    public function block_flash_message($context, array $blocks = array())
    {
        $__internal_957921293c598a4c6f14c9289ee41158122d264862d4a806834d9c1167a804c7 = $this->env->getExtension("native_profiler");
        $__internal_957921293c598a4c6f14c9289ee41158122d264862d4a806834d9c1167a804c7->enter($__internal_957921293c598a4c6f14c9289ee41158122d264862d4a806834d9c1167a804c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_message"));

        // line 83
        echo "            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        ";
        // line 86
        $context["flashes"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method");
        // line 87
        echo "                        ";
        if ((twig_length_filter($this->env, (isset($context["flashes"]) ? $context["flashes"] : $this->getContext($context, "flashes"))) > 0)) {
            // line 88
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["flashes"]) ? $context["flashes"] : $this->getContext($context, "flashes")));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 89
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 90
                    echo "                                    <div class=\"alert alert-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "</div>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "                        ";
        }
        // line 94
        echo "                    </div>
                </div>
            </div>
        ";
        
        $__internal_957921293c598a4c6f14c9289ee41158122d264862d4a806834d9c1167a804c7->leave($__internal_957921293c598a4c6f14c9289ee41158122d264862d4a806834d9c1167a804c7_prof);

    }

    // line 99
    public function block_content($context, array $blocks = array())
    {
        $__internal_aec3748d952b9f606f4966a96a11d9dff1824b5990d5be3966b4c06a98fba138 = $this->env->getExtension("native_profiler");
        $__internal_aec3748d952b9f606f4966a96a11d9dff1824b5990d5be3966b4c06a98fba138->enter($__internal_aec3748d952b9f606f4966a96a11d9dff1824b5990d5be3966b4c06a98fba138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "";
        
        $__internal_aec3748d952b9f606f4966a96a11d9dff1824b5990d5be3966b4c06a98fba138->leave($__internal_aec3748d952b9f606f4966a96a11d9dff1824b5990d5be3966b4c06a98fba138_prof);

    }

    // line 110
    public function block_javascript_footer($context, array $blocks = array())
    {
        $__internal_e0164fbf60649e8ca81f9aab823ab43609442b6946ae299f9f5d59471e1b612e = $this->env->getExtension("native_profiler");
        $__internal_e0164fbf60649e8ca81f9aab823ab43609442b6946ae299f9f5d59471e1b612e->enter($__internal_e0164fbf60649e8ca81f9aab823ab43609442b6946ae299f9f5d59471e1b612e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript_footer"));

        // line 111
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/angularjs/1.2.13/angular.min.js\"></script>
    <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lexiktranslation/ng-table/ng-table.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/wbctheme/js/translate.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_e0164fbf60649e8ca81f9aab823ab43609442b6946ae299f9f5d59471e1b612e->leave($__internal_e0164fbf60649e8ca81f9aab823ab43609442b6946ae299f9f5d59471e1b612e_prof);

    }

    // line 127
    public function block_extrascripts($context, array $blocks = array())
    {
        $__internal_215c5857efc1f1a06718da952f3ff9f8bfa7619179281c491f894a8cad1894fc = $this->env->getExtension("native_profiler");
        $__internal_215c5857efc1f1a06718da952f3ff9f8bfa7619179281c491f894a8cad1894fc->enter($__internal_215c5857efc1f1a06718da952f3ff9f8bfa7619179281c491f894a8cad1894fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrascripts"));

        
        $__internal_215c5857efc1f1a06718da952f3ff9f8bfa7619179281c491f894a8cad1894fc->leave($__internal_215c5857efc1f1a06718da952f3ff9f8bfa7619179281c491f894a8cad1894fc_prof);

    }

    public function getTemplateName()
    {
        return "WbcThemeBundle::translate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  555 => 127,  546 => 113,  542 => 112,  539 => 111,  533 => 110,  521 => 99,  511 => 94,  508 => 93,  502 => 92,  491 => 90,  486 => 89,  481 => 88,  478 => 87,  476 => 86,  471 => 83,  465 => 82,  458 => 28,  452 => 27,  443 => 8,  440 => 7,  434 => 6,  423 => 5,  367 => 214,  354 => 204,  344 => 196,  338 => 179,  332 => 176,  283 => 129,  281 => 127,  277 => 125,  263 => 123,  259 => 122,  256 => 121,  242 => 119,  238 => 117,  234 => 115,  232 => 110,  227 => 108,  217 => 100,  215 => 99,  212 => 98,  210 => 82,  205 => 80,  196 => 74,  192 => 73,  157 => 39,  143 => 37,  139 => 35,  135 => 33,  121 => 31,  117 => 30,  114 => 29,  112 => 27,  109 => 26,  95 => 24,  91 => 22,  87 => 20,  73 => 18,  69 => 17,  64 => 14,  50 => 12,  46 => 11,  43 => 10,  41 => 6,  35 => 5,  29 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*     <title>{% block title %}{% endblock %} | {% trans %}Administrator{% endtrans %}</title>*/
/*     {% block stylesheets %}*/
/*         <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">*/
/*         <link rel="stylesheet" href="{{ asset('bundles/lexiktranslation/ng-table/ng-table.min.css') }}">*/
/*     {% endblock %}*/
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
/*     <style>*/
/*         .nav-static .page-controls, .nav-static .content-wrap, .nav-static .loader-wrap {*/
/*             left: 0;*/
/*             margin-left: 0;*/
/*             transition: none 0s ease 0s ;*/
/*         }*/
/* */
/*         .page-controls, .content-wrap, .loader-wrap {*/
/*             left: 154px;*/
/*             margin-left: 0px;*/
/*         }*/
/*     </style>*/
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
/* {#{ include('WbcThemeBundle:Partials:sidebar.html.twig') }#}*/
/* {{ include('WbcThemeBundle:Partials:navigator.html.twig', { 'env': 'translation' }) }}*/
/* {{ include('WbcThemeBundle:Partials:chat.html.twig') }}*/
/* */
/* <div class="content-wrap">*/
/*     <!-- main page content. the place to put widgets in. usually consists of .row > .col-md-* > .widget.  -->*/
/*     <main id="content" class="content" role="main">*/
/* */
/*         {{ include('WbcThemeBundle:Partials/Widgets/security:flash.html.twig') }}*/
/* */
/*         {% block flash_message %}*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-md-12">*/
/*                         {% set flashes = app.session.flashbag.all() %}*/
/*                         {% if flashes | length > 0 %}*/
/*                             {% for type, messages in flashes %}*/
/*                                 {% for message in messages %}*/
/*                                     <div class="alert alert-{{ type }}">{{ message }}</div>*/
/*                                 {% endfor %}*/
/*                             {% endfor %}*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endblock flash_message %}*/
/* */
/*         {% block content '' %}*/
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
/* {% block javascript_footer %}*/
/*     <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.13/angular.min.js"></script>*/
/*     <script src="{{ asset('bundles/lexiktranslation/ng-table/ng-table.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/wbctheme/js/translate.js') }}"></script>*/
/* {% endblock %}*/
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
