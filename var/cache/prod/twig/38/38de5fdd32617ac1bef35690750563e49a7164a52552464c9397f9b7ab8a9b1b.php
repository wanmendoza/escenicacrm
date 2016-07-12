<?php

/* WbcFrontendBundle:Default:index.html.twig */
class __TwigTemplate_3b39cae318c0fbf716674506af9318aede1316c5fbf4021b9ac7cb4803f506f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "WbcFrontendBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    Hello World!
    <br>
    Today: ";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d H:i:s"), "html", null, true);
        echo "
    <br>
    ";
        // line 8
        echo $this->env->getExtension('wbc_extension')->i18nResource("bienvenidos");
        echo "
";
    }

    public function getTemplateName()
    {
        return "WbcFrontendBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     Hello World!*/
/*     <br>*/
/*     Today: {{ 'now' | date('Y-m-d H:i:s') }}*/
/*     <br>*/
/*     {{ i18nResource('bienvenidos') | raw }}*/
/* {% endblock %}*/
