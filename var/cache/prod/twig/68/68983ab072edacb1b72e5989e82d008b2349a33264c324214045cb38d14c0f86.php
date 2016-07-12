<?php

/* LexikTranslationBundle::layout.html.twig */
class __TwigTemplate_054a293fbefc7b8a711c94113da196c2e46030f7d54479a69bcb95769fb3d337 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'flash_message' => array($this, 'block_flash_message'),
            'content' => array($this, 'block_content'),
            'javascript_footer' => array($this, 'block_javascript_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('flash_message', $context, $blocks);
        // line 28
        echo "
        ";
        // line 29
        $this->displayBlock('content', $context, $blocks);
        // line 30
        echo "
        ";
        // line 31
        $this->displayBlock('javascript_footer', $context, $blocks);
        // line 36
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lexiktranslation/ng-table/ng-table.min.css"), "html", null, true);
        echo "\">
        ";
    }

    // line 12
    public function block_flash_message($context, array $blocks = array())
    {
        // line 13
        echo "            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        ";
        // line 16
        $context["flashes"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "all", array(), "method");
        // line 17
        echo "                        ";
        if ((twig_length_filter($this->env, (isset($context["flashes"]) ? $context["flashes"] : null)) > 0)) {
            // line 18
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["flashes"]) ? $context["flashes"] : null));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 19
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 20
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
                // line 22
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                        ";
        }
        // line 24
        echo "                    </div>
                </div>
            </div>
        ";
    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
        echo "";
    }

    // line 31
    public function block_javascript_footer($context, array $blocks = array())
    {
        // line 32
        echo "            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
            <script src=\"//ajax.googleapis.com/ajax/libs/angularjs/1.2.13/angular.min.js\"></script>
            <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lexiktranslation/ng-table/ng-table.min.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "LexikTranslationBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  138 => 34,  134 => 32,  131 => 31,  125 => 29,  118 => 24,  115 => 23,  109 => 22,  98 => 20,  93 => 19,  88 => 18,  85 => 17,  83 => 16,  78 => 13,  75 => 12,  69 => 8,  66 => 7,  63 => 6,  58 => 5,  52 => 36,  50 => 31,  47 => 30,  45 => 29,  42 => 28,  40 => 12,  36 => 10,  34 => 6,  30 => 5,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*         <title>{% block title %}{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">*/
/*             <link rel="stylesheet" href="{{ asset('bundles/lexiktranslation/ng-table/ng-table.min.css') }}">*/
/*         {% endblock %}*/
/*     </head>*/
/*     <body>*/
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
/* */
/*         {% block javascript_footer %}*/
/*             <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>*/
/*             <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.13/angular.min.js"></script>*/
/*             <script src="{{ asset('bundles/lexiktranslation/ng-table/ng-table.min.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
