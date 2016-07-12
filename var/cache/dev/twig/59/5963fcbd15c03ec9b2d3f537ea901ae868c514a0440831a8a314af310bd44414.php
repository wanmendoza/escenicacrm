<?php

/* WbcFrontendBundle:Default:index.html.twig */
class __TwigTemplate_3d8e407d9f26ba5d564d903a897e0952a6c4bc7805f6183d5135bf89b4b6069b extends Twig_Template
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
        $__internal_9fd3f9ec0cd62c7658cea7c9f96dbcf812b39b8612559c2b2c4bbdba33f8de41 = $this->env->getExtension("native_profiler");
        $__internal_9fd3f9ec0cd62c7658cea7c9f96dbcf812b39b8612559c2b2c4bbdba33f8de41->enter($__internal_9fd3f9ec0cd62c7658cea7c9f96dbcf812b39b8612559c2b2c4bbdba33f8de41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WbcFrontendBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fd3f9ec0cd62c7658cea7c9f96dbcf812b39b8612559c2b2c4bbdba33f8de41->leave($__internal_9fd3f9ec0cd62c7658cea7c9f96dbcf812b39b8612559c2b2c4bbdba33f8de41_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf239023d87c6f23f6d8fd0d8f6cf2380c9b3f5635b2d9e8eda8020b0e31223d = $this->env->getExtension("native_profiler");
        $__internal_bf239023d87c6f23f6d8fd0d8f6cf2380c9b3f5635b2d9e8eda8020b0e31223d->enter($__internal_bf239023d87c6f23f6d8fd0d8f6cf2380c9b3f5635b2d9e8eda8020b0e31223d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bf239023d87c6f23f6d8fd0d8f6cf2380c9b3f5635b2d9e8eda8020b0e31223d->leave($__internal_bf239023d87c6f23f6d8fd0d8f6cf2380c9b3f5635b2d9e8eda8020b0e31223d_prof);

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
        return array (  49 => 8,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
