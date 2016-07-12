<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_de23523ba7553961f00c55efc7b328d1f44ee1b22efa011b70f3135aeb422b42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9fc696da58aefb828bac66470926378be701f3942cdb3a6988e9ac99e469e31 = $this->env->getExtension("native_profiler");
        $__internal_c9fc696da58aefb828bac66470926378be701f3942cdb3a6988e9ac99e469e31->enter($__internal_c9fc696da58aefb828bac66470926378be701f3942cdb3a6988e9ac99e469e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9fc696da58aefb828bac66470926378be701f3942cdb3a6988e9ac99e469e31->leave($__internal_c9fc696da58aefb828bac66470926378be701f3942cdb3a6988e9ac99e469e31_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d1684760259d8eb0ef56005c1f6744525da30734ba12985ad4ed69f4b60c5419 = $this->env->getExtension("native_profiler");
        $__internal_d1684760259d8eb0ef56005c1f6744525da30734ba12985ad4ed69f4b60c5419->enter($__internal_d1684760259d8eb0ef56005c1f6744525da30734ba12985ad4ed69f4b60c5419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_d1684760259d8eb0ef56005c1f6744525da30734ba12985ad4ed69f4b60c5419->leave($__internal_d1684760259d8eb0ef56005c1f6744525da30734ba12985ad4ed69f4b60c5419_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
